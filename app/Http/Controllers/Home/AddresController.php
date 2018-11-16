<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class AddresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //获取到sessre里面id
        $id = 6;
        //获取所有用户收货地址
        $data = \DB::table('bro_useraddres')->where("user_id",'=',$id)->get();
        // dd($data);
        //加载模版
        return view('Home.Addres.index')->with('data',$data)->with('id',$id);
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
        //获取所有数据
        $data=$request->except(['_token']);
        // dd($data);
        if(DB::table("bro_useraddres")->insert($data)){
            return redirect('/homeaddres')->with('success','添加成功');
        }else{
            return redirect('/homeaddres')->with('error','添加失败');
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
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

    public function ajax(Request $request)
    {
        $upid =$request->get('upid');
        $sql = "SELECT * FROM bro_district WHERE upid = {$upid}";
        //查出地址表
        $data = DB::select($sql);
        return $data;
        // return json_decode($data);
    }
}
