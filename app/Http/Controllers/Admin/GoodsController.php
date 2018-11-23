<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
// 表单验证
use App\Http\Requests\Goods;
use App\Http\Requests\GoodsEdit;
class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $name = $request->input('name');
        $data = DB::table('bro_goods')->select('bro_goods.*','bro_cates.name as catesname')->where('bro_goods.name','like','%'.$name.'%')->join('bro_cates','bro_goods.cates_id','=','bro_cates.id')->paginate(10);
        $count = DB::table('bro_goods')->count();
        
        return view('Admin.AdminGoods.index')->with('data',$data)->with('request',$request->all())->with('count',$count);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cate = DB::table('bro_cates')->get();
        foreach ($cate as $key => $value) {
            // 转换为数组
            $arr = explode(',',$value->path);
            // 获取逗号结构
            $len = count($arr) - 1;
            // 重复字符串函数
            $cate[$key]->name = str_repeat('--|',$len).$value->name;
        }
        return view('Admin.AdminGoods.add',['cate'=>$cate]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Goods $request)
    {        
       // dd($request->all());
       $data = $request->except('_token');

       // 获取多文件上传
       $files = $request->file('imgs');
       
       // 处理封面上传
       if($request->hasFile('pic')){
            // 初始化名字
            $name = date('Ymd',time()).mt_rand(1,10000);

            // 获取上传文件后缀
            $ext=$request->file("pic")->getClientOriginalExtension();

            // 拼接文件名和后缀
            $names = $name.'.'.$ext;

            // 
            $request->file("pic")->move("./Uploads/Goods/",$names);

            $data['pic'] = $names;

        }

        // 定义空数组来存储多图片文件名
        $imgpath = array();

        foreach($files as $key=>$value){
            // 判断图片上传中是否出错
            if (!$value->isValid()) {
                exit("上传图片出错，请重试！");
            }
            // 此处防止没有多文件上传的情况
            if(!empty($value)){
                // 文件上传类型
                $allowed_extensions = ["png", "jpg", "gif"];

                if ($value->getClientOriginalExtension() && !in_array($value->getClientOriginalExtension(), $allowed_extensions)) {
                    return back()->with('error','您只能上传PNG、JPG或GIF格式的图片！');
                }
                // 文件上传路径
                $destinationPath = '/Uploads/Goods/';
                // 上传文件后缀
                $extension = $value->getClientOriginalExtension();
                // 重命名   
                $fileName = date('YmdHis').mt_rand(100,999).'.'.$extension;
                // 保存图片 
                $value->move(public_path().$destinationPath, $fileName); 

                $imgpath[] = $fileName; 
            }
        }
        $comma_separated = implode(',', $imgpath);
        
        $data['imgs'] = $comma_separated;

        // 处理多图片上传
        if(DB::table('bro_goods')->insert($data)){
            return redirect('/admingoods')->with('success','添加成功');
        }else{
            return redirect('/admingoods')->with('success','添加失败');
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
        $res = \DB::table('bro_goods')->where('id','=',$id)->first();
        if($res == null){
            return redirect('/admingoods')->with('error','不要瞎改');
        }
        // 获取商品小图片
        $imgs = explode(',',$res->imgs);

        return view('Admin.AdminGoods.show')->with('res',$res)->with('imgs',$imgs);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // 查询出所有值
        $data = DB::table('bro_goods')->where('id','=',$id)->first();
        if($data == null){
            return redirect('/admingoods')->with('error','不要瞎改');
        }
        // 查询分类
        $cate = DB::table('bro_cates')->get();
        foreach ($cate as $key => $value) {
            // 转换为数组
            $arr = explode(',',$value->path);
            // 获取逗号结构
            $len = count($arr) - 1;
            // 重复字符串函数
            $cate[$key]->name = str_repeat('--|',$len).$value->name;
        }
        return view('Admin.AdminGoods.edit')->with('cate',$cate)->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GoodsEdit $request, $id)
    {
        $data = $request->except('_token','_method');

        // 获取多文件上传
        $files = $request->file('imgs');

        // 处理封面上传
        if($request->hasFile('pic')){
            // 初始化名字
            $name = date('Ymd',time()).mt_rand(1,10000);

            // 获取上传文件后缀
            $ext=$request->file("pic")->getClientOriginalExtension();

            // 拼接文件名和后缀
            $names = $name.'.'.$ext;

            // 
            $request->file("pic")->move("./Uploads/Goods/",$names);

            $data['pic'] = $names;

            $pic = DB::table('bro_goods')->select('bro_goods.pic')->where('id','=',$id)->first();

            // 先判断文件是否存在，存在则删除
            if (file_exists('./Uploads/Goods/'.$pic->pic)) {
                unlink('./Uploads/Goods/'.$pic->pic);
            }

        }

        // 定义空数组来存储多图片文件名
        $imgpath = array();

        if($request->hasFile('imgs')){
            foreach($files as $key=>$value){
                // 判断图片上传中是否出错
                if (!$value->isValid()) {
                    exit("上传图片出错，请重试！");
                }
                // 此处防止没有多文件上传的情况
                if(!empty($value)){
                    // 文件上传类型
                    $allowed_extensions = ["png", "jpg", "gif"];

                    if ($value->getClientOriginalExtension() && !in_array($value->getClientOriginalExtension(), $allowed_extensions)) {
                        return back()->with('error','您只能上传PNG、JPG或GIF格式的图片！');
                    }
                    // 文件上传路径
                    $destinationPath = '/Uploads/Goods/';
                    // 上传文件后缀
                    $extension = $value->getClientOriginalExtension();
                    // 重命名   
                    $fileName = date('YmdHis').mt_rand(100,999).'.'.$extension;
                    // 保存图片 
                    $value->move(public_path().$destinationPath, $fileName); 

                    $imgpath[] = $fileName; 
                }
            }
            $comma_separated = implode(',', $imgpath);
        
            $data['imgs'] = $comma_separated;

            // 先获取之前的小图片
            $imgs = DB::table('bro_goods')->where('id','=',$id)->first();

            $del = explode(',',$imgs->imgs);

            foreach($del as $value){

                if (file_exists('./Uploads/Goods/'.$value)) {
                    unlink('./Uploads/Goods/'.$value);
                }
                
            }
        }
        
        if(DB::table('bro_goods')->where('id','=',$id)->update($data)) {
            return redirect('/admingoods')->with('success','修改成功');
        }else{
            return back()->with('error','修改失败','id',$id);
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
        // 获取要删除的图片名
        $pic = DB::table('bro_goods')->select('bro_goods.pic','bro_goods.imgs')->where('id','=',$id)->first();
        // 获取要删除的小图片
        $imgs = explode(',',$pic->imgs);
        if(DB::table('bro_goods')->where('id','=',$id)->delete()){
            if (file_exists('./Uploads/Goods/'.$pic->pic)) {
                unlink('./Uploads/Goods/'.$pic->pic);
            }
            foreach ($imgs as $value) {
                if (file_exists('./Uploads/Goods/'.$value)) {
                    unlink('./Uploads/Goods/'.$value);
                }    
            }
            return redirect('/admingoods')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }

    // 图片上传方法
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
            $request->file('Filedata')->move('./Uploads/Goods/',$newFile);
            echo $newFile;
        }
    }

}
