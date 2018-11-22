<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
// 导入表单验证
use App\Http\Requests\Slider;
use App\Http\Requests\SliderUpdate;
// 导入模型类
use App\Models\SliderModel;
class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 获取轮播图列表
        $data = SliderModel::get();
        // 获取总条数
        $count = DB::table('bro_carousel')->count();
        return view('Admin.Slider.index',['data'=>$data,'count'=>$count]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Slider.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // 添加轮播图信息
    public function store(Slider $request)
    {
        // 设置闪存
        $request->flashOnly('name','url');

        $data = $request->except('_token');

        if($request->hasFile('pic')){
            // 初始化名字
            $name = date('Ymd',time()).mt_rand(1,10000);

            // 获取上传文件后缀
            $ext=$request->file("pic")->getClientOriginalExtension();

            // 拼接文件名和后缀
            $names = $name.'.'.$ext;

            // 
            $request->file("pic")->move("./Uploads/Slider/",$names);

            $data['pic'] = $names;

        }

        if(DB::table('bro_carousel')->insert($data)){
            return redirect('/slider')->with('success','添加成功');
        }else{
            return back()->with('error','添加失败，请检查字段是否填写完整');
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
        $data = DB::table('bro_carousel')->where('id','=',$id)->first();
        if($data == null){
            return redirect('/slider')->with('error','不要瞎改');
        }
        return view('Admin.Slider.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SliderUpdate $request, $id)
    {
        
        $data = $request->except('_token','_method');

        // 获取之前的老图片
        $oldpic = $data['oldpic'];

        // var_dump($oldpic);

        // 删除没用的字段
        unset($data['oldpic']);

        // 拼接删除路径
        $path = 'Uploads/Slider/'.$oldpic;

        if($request->hasFile('pic')){

            // 初始化名字
            $name = date('Ymd',time()).mt_rand(1,10000);

            // 获取上传文件后缀
            $ext=$request->file("pic")->getClientOriginalExtension();

            // 拼接文件名和后缀
            $names = $name.'.'.$ext;
 
            $request->file("pic")->move("./Uploads/Slider/",$names);

            $data['pic'] = $names;

        }else{
            $data['pic'] = $oldpic;
        }

        // dd($data);
        if(DB::table('bro_carousel')->where('id','=',$id)->update($data)){

            if($data['pic'] != $oldpic){

                if (file_exists('./Uploads/Slider/'.$oldpic)) {
                    unlink($path);
                }

            }
            
            return redirect('/slider')->with('success','修改成功');
        }else{
            return back()->with('error','修改失败，请至少修改一个！','id',$id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // 删除轮播图
    public function destroy($id)
    {  
        $data = DB::table('bro_carousel')->where('id','=',$id)->first();
        if(DB::table('bro_carousel')->where('id','=',$id)->delete()){
            $path = 'Uploads/Slider/'.$data->pic;
            unlink($path);
            return redirect('/slider')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
        

    }

    // Ajax删除
    public function ajaxdel(Request $request)
    {
        // var_dump($request);
        $id = $request->input('id');
        // echo $id;
        if(DB::table('bro_carousel')->where('id','=',$id)->delete()){
            return response()->json(['msg'=>1]);
        }else{
            return response()->json(['msg'=>0]);
        }
    }
}
