<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class CateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // 获取搜索的信息
        $name = $request->input('name');
        // 获取列表数据
        $cate = DB::table('bro_cates')->select(DB::raw('*,concat(path,",",id) as paths'))->where('name','like','%'.$name.'%')->orderBy('paths')->paginate(5);
        $count = DB::table('bro_cates')->count();
        
        foreach ($cate as $key => $value) {
            // 转换为数组
            $arr = explode(',',$value->path);
            // 获取逗号结构
            $len = count($arr) - 1;
            // 重复字符串函数
            $cate[$key]->name = str_repeat('--',$len).$value->name;
        }
        return view('Admin.AdminCate.index',['cate'=>$cate,'request'=>$request->all()])->with('count',$count);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 获取所有分类信息
        $cate = DB::table('bro_cates')->get();
        foreach ($cate as $key => $value) {
            // 转换为数组
            $arr = explode(',',$value->path);
            // 获取逗号结构
            $len = count($arr) - 1;
            // 重复字符串函数
            $cate[$key]->name = str_repeat('--|',$len).$value->name;
        }
        // 加载添加模板
        return view('Admin.AdminCate.add',['cate'=>$cate]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 获取需要添加的数据
        $data = $request->except('_token');
        // 获取pid
        $pid = $request->input('pid');

        if($pid == '0'){
            $data['path'] = '0';
        }else{
            // 获取子类信息
            $info = DB::table('bro_cates')->where('id','=',$pid)->first();
            $data['path'] = $info->path.','.$info->id;
        }

        // 执行数据库插入
        if(DB::table('bro_cates')->insert($data)){
            return redirect('/admincates')->with('success','添加成功');
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
        echo 'this is show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // 分类修改
        $data = DB::table('bro_cates')->where('id','=',$id)->first();
        // dd($data);
        $result = DB::table('bro_cates')->get();
        foreach ($result as $key => $value) {
            // 转换为数组
            $arr = explode(',',$value->path);
            // 获取逗号结构
            $len = count($arr) - 1;
            // 重复字符串函数
            $result[$key]->name = str_repeat('--|',$len).$value->name;
        }
        // dd($result);
        return view('Admin.AdminCate.edit',['data'=>$data,'result'=>$result]);
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
        // 执行修改
        $data = $request->except('_token','_method');
        $pid = $request->input('pid');

        if($pid == '0'){
            $data['path'] = '0';
        }else{
            $result = DB::table('bro_cates')->where('id','=',$data['pid'])->first();
            $data['pid'] = $result->id;
            $data['path'] = $result->path.','.$result->id;
        }

        if(DB::table('bro_cates')->where('id','=',$id)->update($data)){
            return redirect('/admincates')->with('success','修改成功');
        }else{
            return redirect('/admincates')->with('error','修改失败');
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
        // 分类删除
        $res = DB::table('bro_cates')->where('pid','=',$id)->count();
        // 判断是否有子类
        if($res > 0){
            return back()->with('error','请先删除掉子分类');
        }else{
            if(DB::table('bro_cates')->where('id','=',$id)->delete()){
                return redirect('/admincates')->with('success','删除成功');
            }else{
                return redirect('/admincates')->with('error','删除失败');
            }
        }
        
    }
}
