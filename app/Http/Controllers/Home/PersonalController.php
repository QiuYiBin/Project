<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //获取到sessre里面id
        $id = 5;
        //查出用户详情
        $data = \DB::table('bro_username')->where("user_id",'=',$id)->first();
        // dd($data);
        return view('Home.Personal.index')->with('data',$data)->with('id',$id);
    }

   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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
        //获取所有数据
        $data = $request->except(['_token']);
        if(DB::table("bro_username")->insert($data)){
            return redirect('/homepersonal')->with('success','成功,你的个人资料已更新');
        }else{
            return redirect('/homepersonal')->with('error',"你的个人资料更新失败");
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
        //获取参数
        $data=$request->except(['_token','_method']);
        // dd($data);
        if(DB::table("bro_username")->where("id","=",$id)->update($data)){
            return back()->with('success',"成功,你的个人资料已更新");
        }else{
            return back()->with('error',"你的个人资料更新失败");
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
    
}
