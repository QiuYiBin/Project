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

        // dd($id);

        // 每个用户的订单
        $data = DB::table('bro_crder')->where('bro_crder.uid','=',$id)->orderBy('id','asc')->get();
        // dd($data);
        // 显示每个订单下面的商品
        $res = DB::table('bro_crder')->join('bro_crderinfo','bro_crder.id','=','bro_crderinfo.oid')->where('bro_crder.uid','=',$id)->get();
        $url = "http://www.kuaidi100.com/query?type=yuantong&postid=802935726368749732";
        $method = "get";
        $post = 0;
        $res1 = curlGet($url,$method,$post);
        $data1 = json_decode($res1,true);
        $result = $data1['data'];
        return view('Home.Detail.index')->with('data',$data)->with('result',$result)->with('res',$res);
       
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

        // 获取多文件上传
        $files = $request->file('imgs');

    	$oid = $request->input('oid');

        $data = $request->except('_token','oid');
        
        // 获取当前时间
        $time = date('Y-m-d H:i:s',time());
  		
  		$array = array();

        // 定义空数组来存储多图片文件名
        $imgpath = array();
        if($request->hasFile('imgs')){
            foreach($files as $keys=>$values){
                foreach ($values as $keyss => $valuess) {
                    // 判断图片上传中是否出错
                    if (!$valuess->isValid()) {
                        exit("上传图片出错，请重试！");
                    }
                    // 此处防止没有多文件上传的情况
                    if(!empty($valuess)){
                        // 文件上传类型
                        $allowed_extensions = ["png", "jpg", "gif"];

                        if ($valuess->getClientOriginalExtension() && !in_array($valuess->getClientOriginalExtension(), $allowed_extensions)) {
                            return back()->with('error','您只能上传PNG、JPG或GIF格式的图片！');
                        }
                        // 文件上传路径
                        $destinationPath = '/Uploads/Goods/';
                        // 上传文件后缀
                        $extension = $valuess->getClientOriginalExtension();
                        // 重命名   
                        $fileName = date('YmdHis').mt_rand(100,999).'.'.$extension;
                        // 保存图片 
                        $valuess->move(public_path().$destinationPath, $fileName); 

                        $imgpath[$keys][$keyss] = $fileName; 
                    }
                }
                
            }
            
            foreach ($imgpath as $key => $value) {
                $comma_separated[$key] = implode(',', $value);
            }
            
            $data['imgs'] = $comma_separated;
        }
        
        foreach($data as $key=>$value)
        {	
     		foreach ($value as $k => $v) {
     			$array[$k][$key] = $v;
     			$array[$k]['time'] = $time;
     			$array[$k]['uid'] = $id;
     		}
        }

        // dd($array);
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
