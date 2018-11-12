<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class IndexController extends Controller
{
    // 获取分类方法
    public function getCatesBypid($pid)
    {
        $res = DB::table('bro_cates')->where('pid','=',$pid)->get();
        // 遍历
        $data = [];
        foreach ($res as $value) {
            $value->dev = $this->getCatesBypid($value->id);
            $data[] = $value;
        }
        return $data;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // 首页方法
    public function index()
    {
        $cate = $this->getCatesBypid(0);
        // 获取轮播图
        $Slider = DB::table('bro_carousel')->orderBY('sort','desc')->where('status','=','0')->get();
        $array = array(
            'cate' => $cate,
            'Slider' => $Slider,
        );
        // dd($array);
        return view('Home.Index.index')->with($array);
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
