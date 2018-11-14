<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
//导入要调用的模型类
use App\Models\Crder;
class CrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //获取搜索的关键字
        $k=$request->input("keywords");
        $k1=$request->input("keywordss");

        $data= Crder::where("linkname",'like',"%".$k."%")->where('orderid','like',"%".$k1."%")->paginate(10);
        $count = DB::table('bro_crder')->count();
        return view("Admin.Crder.index",['data'=>$data,'request'=>$request->all()])->with('count',$count);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //执行修改
    public function edit($id)
    {
        $id = $id;
        $link = DB::table("bro_crder")->where("id",'=',$id)->first();
        // dd($link);
        return view("Admin.Crder.edit",['link'=>$link]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //处理修改
    public function update(Request $request, $id)
    {
        // echo "this is update";
        // echo "<pre>";
        // var_dump($request->all());
        $crder=$request->except('_token','_method');
        // dd($crder);
        if($crder['address']== ''){
            return back()->with('error','修改失败,不能为空');
        };
        if($crder['tel']== ''){
            return back()->with('error','修改失败,不能为空');
        };
       if(DB::table("bro_crder")->where("id","=",$id)->update($crder)){
            return redirect("/crder")->with('success',"修改成功");
       }else{
            return back()->with('error',"修改失败,请至少修改一个");
       }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //删除操作
    public function destroy($id)
    {
        // // echo "this is edit";
        // $id=$id;
        // if(DB::table("bro_crder")->where("id","=",$id)->delete()){
        //     return redirect("/crder")->with('success','删除成功');
        // }else{
        //     return redirect("/crder")->with('error','删除成功');
        // }

    }
    //ajax删除
    public function del(Request $request)
    {
        //获取参数id
        $id=$request->input('id');
         
        // echo (json_decode($id));
        //删除操作
        if(DB::table("bro_crder")->where("id",'=',$id)->delete()){
            return response()->json(['msg'=>1]);
        }else{
            return response()->json(['msg'=>0]);
        }
    }
    //订单管中的订单详情
    public function details($id)
    {
        $data = DB::table('bro_crder')->select('bro_crderinfo.*')->join('bro_crderinfo','bro_crder.id','=','bro_crderinfo.oid')->where('bro_crder.id','=',$id)->get();
        // dd($data);
        return view("Admin.Crder.details",['data'=>$data]);



    }
}
