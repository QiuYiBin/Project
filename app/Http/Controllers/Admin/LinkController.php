<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
//导入要调用的模型类
use App\Models\Link;
class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //友情链接
    public function index(Request $request)
    {
        $k = $request->input('keywords');
        // dd($k);
        $data = Link::where('name','like','%'.$k.'%')->paginate(3);
        return view("Admin.Link.index",['data'=>$data])->with('request',$request->all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    //处理修改页面
    public function edit($id)
    {
        $id = $id;
        $link = DB::table("bro_link")->where("id",'=',$id)->first();
        // dd($link);
        return view("Admin.Link.edit",['link'=>$link]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // _method
    // 处理修改数据
    public function update(Request $request, $id)
    {
        // echo "<pre>";
        // var_dump($request->all());
        $data=$request->except(['_token','_method']);
        // echo "<pre>";
        // var_dump($data);
        if($data['status'] == ''){
            return back()->with('error','修改失败,请至少修改一个');
        };
       if(DB::table("bro_link")->where("id","=",$id)->update($data)){
            return redirect("/link")->with('success',"修改成功");
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
        // echo "this is shanchu";
        // $id=$id;
        // // echo $id;
        // if(DB::table("bro_link")->where("id",'=',$id)->delete()){
        //     //删除成功
        //     return redirect("/link")->with('success','删除成功');
        // }else{
        //     //删除失败
        //     return redirect("/link")->with('error','删除失败');
        // }
    }
    //ajax删除
    public function del(Request $request)
    {
        //获取参数id
        $id=$request->input('id');
        // echo json_decode($id);
        //删除操作
        if(DB::table("bro_link")->where("id",'=',$id)->delete()){
            return response()->json(['msg'=>1]);
        }else{
            return response()->json(['msg'=>0]);
        }
    }
}
