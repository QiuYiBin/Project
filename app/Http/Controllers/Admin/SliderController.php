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
        // 删除没用的字段
        unset($data['oldpic']);
        // 拼接删除路径
        $path = 'Uploads/Slider/'.$oldpic;

        if($data['pic'] == null){
            $res = DB::table('bro_carousel')->where('id','=',$id)->first();
            $data['pic'] = $res->pic;  
        }
        if(DB::table('bro_carousel')->where('id','=',$id)->update($data)){
            if($data['pic'] != $oldpic){
                unlink($path);
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

    // 文件上传方法
    public function upload(Request $request)
    {
        $file = $request->file('Filedata');
        // 判断目录是否存在
        $dir = $request->input('file');
        if (!file_exists('./Uploads/'.$dir.'')) {
            mkdir('./Uploads/'.$dir.'');
        }
        // 判断上传的文件是否有效
        if ($file->isValid()) {
            // 获取后缀
            $ext = $file->getClientOriginalExtension();
            // 生成新的文件名
            $newFile = time().rand().'.'.$ext;
            // 移动到指定目录
            $request->file('Filedata')->move('./Uploads/Slider/',$newFile);
            echo $newFile;
        }
    }


    // Ajax删除
    public function ajaxdel(Request $request)
    {
        
        $id = $request->input('id');
        // echo $id;
        if(DB::table('bro_carousel')->where('id','=',$id)->delete()){
            return response()->json(['msg'=>1]);
        }else{
            return response()->json(['msg'=>0]);
        }
    }
}
