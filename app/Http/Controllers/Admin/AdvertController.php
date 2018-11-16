<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Http\Requests\AdminUserinsert;
class AdvertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $total=DB::table('bro_advertisement')->count();
        $rev=3;
        $num=ceil($total/$rev);
        $page=$request->input('page');
        if(empty($page)){
            $page=1;
        }

        for($i=1;$i<=$num;$i++){
            $pp[$i]=$i;
        }
        $offset=($page-1)*$rev;
        $sql="select * from bro_advertisement limit {$offset},{$rev}";
        $data=DB::select($sql);
        if($request->ajax()){
            return view('Admin.AdminAdvert.page',['data'=>$data]);
        }
        return view('Admin.AdminAdvert.index',['pp'=>$pp,'data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.AdminAdvert.add');
    }

    /**
     * Store a newly created resource in storage.   
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminUserinsert $request)
    {
        $data = $request->except('_token');
        if($request->hasFile('pic')){
            // 获取目录
            $name = time()+rand(1,10000);
            $ext=$request->file('pic')->getClientOriginalExtension();
            // var_dump($ext);
            $nameext = $name.'.'.$ext;
            // dd($nameext);
            $request->file('pic')->move("./Uploads/Advert_img/",$nameext);
            $data['pic'] = $nameext;
        }
       
        // dd($data);
        if(DB::table('bro_advertisement')->insert($data)){
            return redirect('/advert')->with('success','添加成功');
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
    public function edit($id)
    {
        // echo $id;
        $data=DB::table('bro_advertisement')->where('id','=',$id)->first();
        return view('Admin.AdminAdvert.edit',['data'=>$data]);
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
        // echo $id;
        $all=$request->except("_token","_method");
        $id=$all['id'];
        if($request->hasFile('pic')){
            // 获取目录
            $name = time()+rand(1,10000);
            $ext=$request->file('pic')->getClientOriginalExtension();
            // var_dump($ext);
            $nameext = $name.'.'.$ext;
            // dd($nameext);
            $request->file('pic')->move("./Uploads/Advert_img/",$nameext);
            $all['pic'] = $nameext;
        }
        if(DB::table('bro_advertisement')->where('id','=',$id)->update($all)){
            return redirect('/advert')->with('success','修改成功');
        }else{
            return back()->with('error','修改成功');
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
        // echo $id;
        $data=DB::table('bro_advertisement')->where('id','=',$id)->get();
        // dd($data['pic']);
        foreach($data as $row){
            $nameext=$row->pic;
        }
        if(DB::table('bro_advertisement')->where('id','=',$id)->delete()){
            $url="./Uploads/Advert_img/".$nameext;
            unlink($url);
            return redirect('/advert')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }

    public function del(Request $request)
    {
        $id=$request->input('id');
        $data=DB::table('bro_advertisement')->where("id",'=',$id)->delete();
        if($data){
            echo 1;
        }else{
            echo 0;
        }
    }
}
