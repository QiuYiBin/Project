<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
    	//查看商品详情
        $data = DB::table('bro_goods')->where('id','=',$id)->first();
        //查看商品多图片
        $imgs = explode(',',$data->imgs);
        //获取数据
        $comment = \DB::table("bro_comment")
                    ->select("bro_comment.*","bro_user.username")
                    ->join("bro_user","bro_user.id",'=','bro_comment.uid')
                    ->where('bro_comment.gid','=',$id)
                    ->get();
         //分配数据
        $array = array(	
        	'data' => $data,
        	'imgs' => $imgs,
        	'comment'=> $comment
        ); 
        return view('Home.ceshi.cesi')->with($array);
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
        //执行添加晒单操作 
        $data=DB::table("bro_comment")->get();
        dd($data);
        return view("'Home.Single.Single'",['data'=>$data]);

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
        //
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
}
