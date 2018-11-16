<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
//导入公告模型
use App\Models\Articles;
class AdminarticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //加载模块 分配数据
        $article=DB::table("bro_article")->orderBY('id','asc')->paginate(3);
        return view("Admin.Article.index",['article'=>$article]);
    }

   	public function del(Request $request)
   	{	
   		//echo "111";
   		//获取参数 
   		$a=$request->input('a');
   		//判断删除按钮是否有参数
   		if($a=="") {
   			echo "请选择一条数据";exit;
   		}
   		//遍历数据
   		foreach($a as $key=>$value){	
   			DB::table("bro_article")->where("id","=",$value)->delete();
   		}
   		echo 1;
   	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //加载添加模板
        return view("Admin.Article.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //获取需要添加的数据
        $data=$request->only(['title','descr']);
        $res= Articles::create($data);
        if($res){
        	return redirect("/adminarticle")->with('success','添加时间');
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
        //获取需要修改的数据
        $articles=Articles::find($id);
        //dd($articles);
        return view("Admin.Article.edit",['articles'=>$articles]);
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
        //执行修改
        //dd($request->all());
        $data=$request->except(['_token','_method']);
        //判断修改的数据不能为空
        $data['descr']=(($data['descr']));
        if(Articles::where("id","=",$id)->update($data)){
        	return redirect("/adminarticle")->with('success',"修改成功");
        }else{	
        	return redirect("/adminarticle/$id",'修改数据失败');
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
        //
    }
}
