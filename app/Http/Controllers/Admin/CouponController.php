<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Carbon\Carbon;
use App\Http\Requests\Coupon;
class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   //获取关键字
        $k=$request->input("keywords");
        $k1=$request->input("keywordss");
        //准备sql语句
        $coupon=DB::table("bro_coupon")->where("should","like","%".$k."%")->where("end_time","like","%".$k1."%")->orderBy('id','asc')->paginate(10);
        $count = DB::table('bro_coupon')->count();
        return view("Admin.Coupon.index",['coupon'=>$coupon,'request'=>$request->all()])->with('count',$count);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //添加处理
    public function create()
    {
        return view("Admin.Coupon.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //处理添加数据
    public function store(Coupon $request)
    {

        $data = $request->except(['_token']);
        
        if(DB::table("bro_coupon")->insert($data)){
            return redirect('/coupon')->with('success','添加成功');
        }else{
            return back()->with('error','添加失败');
        }

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
        $id=$id;
        // echo $id;
        //通过id进行单条查询
        $link=DB::table("bro_coupon")->where("id",'=',$id)->first();
        // dd($link);
        //分配页面
        return view("Admin.Coupon.edit",['link'=>$link]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //处理修改数据
    public function update(Request $request, $id)
    {
        // echo "this is update";
         $data=$request->except(['_token','_method']);
        // echo "<pre>";
        // var_dump($data);
        if($data['num'] == ''){
            return back()->with('error','修改失败,请至少修改一个');
        };
       if(DB::table("bro_coupon")->where("id","=",$id)->update($data)){
            return redirect("/coupon")->with('success',"修改成功");
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
    public function destroy($id)
    {
        //
    }

    //ajax删除
    public function del(Request $request)
    {
        //获取参数id
        $id=$request->input('id');
         // echo '<pre>';
         // var_dump($id);exit;
        //删除操作
        if(DB::table("bro_coupon")->where("id",'=',$id)->delete()){
            return response()->json(['msg'=>1]);
        }else{
            return response()->json(['msg'=>0]);
        }
    }
}
