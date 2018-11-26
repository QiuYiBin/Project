<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(empty($request->input('search'))){ return back();}

        $a=$request->input('search');
        $data=DB::table('bro_goods')->where('text','like',"%".$a."%")->where('status','=',0)->paginate(4);

        if(count($data)>0){
            return view('Home.Goods.goods',['request'=>$request->all(),'data'=>$data]); 
        }else{

            $srt="暂无数据";
            return view('Home.Goods.null',['srt'=>$srt]);
        }

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
    public function show(Request $request, $id)
    {  

        // if($id==0){
        //      $tal=DB::table('bro_goods')->count();
        //      $ret=4;
        //      $num=ceil($tal/$ret);
        //      for($i=1;$i<=$num;$i++){
        //           $arr[]=$i;
        //      }
        //     $page=$request->input('page');

        //      if(empty($page)){ $page=1;}

        //      $offset=($page-1)*$ret;

        //      $sql="select * from bro_goods limit {$offset},{$ret}";
        //      $data=DB::select($sql);

        //     if($request->ajax()){
        //         return view('Home.Goods.page',['data'=>$data]);
        //      }

        // }else{

        //     $tal=DB::table('bro_goods')->count();
        //      $ret=4;
        //      $num=ceil($tal/$ret);
        //      for($i=1;$i<=$num;$i++){
        //           $arr[]=$i;
        //      }
        //     $page=$request->input('page');

        //      if(empty($page)){ $page=1;}

        //      $offset=($page-1)*$ret;

        //     $res = DB::table('bro_cates')->where('path','like','0,'.$id)->get();
        //     // dd($res);
        //      $cates = array();
        //      foreach ($res as $key => $value) {
        //          $cates[] = $value->id;

        //      }
        //      $cates[] = $id;
        //     // dd($cates);
        //      $data = DB::table('bro_goods')->whereIn('cates_id',$cates)->offset($offset)->limit($ret)->get();
        //      if($request->ajax()){
        //         return view('Home.Goods.page',['data'=>$data]);
        //      }
        // }
        //     return view('Home.Goods.goods',['arr'=>$arr,'data'=>$data]);

        
        
            $res = DB::table('bro_cates')->where('path','like','0,'.$id)->get();
             $cates = array();
             foreach ($res as $key => $value) {
                 $cates[] = $value->id;
             }
             $cates[] = $id;
             $data = DB::table('bro_goods')->where('status','0')->whereIn('cates_id',$cates)->paginate(4);  
            return view('Home.Goods.goods',['request'=>$request->all(),'data'=>$data]); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        

        if($id=='0'){
           
             $data = DB::table('bro_goods')->where('status','0')->orderBy('sales','desc')->paginate(4);  
        }elseif($id=='1'){

             $data = DB::table('bro_goods')->where('status','0')->orderBy('price','asc')->paginate(4);  
        }elseif($id=='2'){

             $data = DB::table('bro_goods')->where('status','0')->orderBy('price','desc')->paginate(4);  
        }

            return view('Home.Goods.goods',['request'=>$request->all(),'data'=>$data]);
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

    public function all(Request $request)
    {

        $data=DB::table('bro_goods')->where('status','0')->paginate(4);
        return view('Home.Goods.goods',['request'=>$request->all(),'data'=>$data]);
    }

    
}
