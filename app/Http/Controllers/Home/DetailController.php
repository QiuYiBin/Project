<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class DetailController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // 订单方法
    public function index()
    {   
        // 获取id
        $id=session('id');

        // 每个用户的订单
        $data = DB::table('bro_crder')->where('bro_crder.uid','=',$id)->orderBy('id','asc')->get();

        // 显示每个订单下面的商品
        $res = DB::table('bro_crder')->join('bro_crderinfo','bro_crder.id','=','bro_crderinfo.oid')->where('bro_crder.uid','=',$id)->get();
      
        return view('Home.Detail.index')->with('data',$data)->with('res',$res);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
    	
       	$article=DB::table("bro_crderinfo")->where('oid','=',$id)->get();
        return view('Home.ceshi.cesi',['article'=>$article]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    	$id = session('id');

    	$oid = $request->input('oid');

        $data = $request->except('_token','oid');

        // 如果没有图片上传
        if($data['img'] == null){	
        	unset($data['img']);
        }

        // 获取当前时间
        $time = date('Y-m-d H:i:s',time());
  		
  		$array = array();

        foreach($data as $key=>$value)
        {	
     		foreach ($value as $k => $v) {
     			$array[$k][$key] = $v;
     			$array[$k]['time'] = $time;
     			$array[$k]['uid'] = $id;
     		}
        }
       	foreach($array as $arr){
       		\DB::table('bro_comment')->insert($arr);
       	}
       	// 修改订单状态
       	$res['status'] = 4;
       	
       	if(\DB::table('bro_crder')->where('id','=',$oid)->update($res)){
       		return redirect('/homedetail');
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
