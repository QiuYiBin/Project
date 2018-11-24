<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
//导入校验类
use App\Models\Comment;
class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //获取所有评论
        $comment = \DB::table("bro_comment")
                    ->select("bro_comment.*","bro_goods.name","bro_goods.pic","bro_user.username")
                    ->join("bro_user","bro_user.id",'=','bro_comment.uid')
                    ->join("bro_goods","bro_goods.id",'=',"bro_comment.gid")
                    ->orderBy('id','asc')->paginate(10);
        //加载模板
        return view("Admin.Comment.index",['comment'=>$comment]);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //加载模板
        return view("Admin.Comment.add");
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
        //获取需要修改的数据
        $user=DB::table("bro_comment")->where("id","=",$id)->first();
        if($user == null){
            return redirect('/comment')->with('error','不要瞎改');
        }
        //加载模板 分配数据
        return view("Admin.Comment.comment",['user'=>$user]);
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
         //获取参数
        $data = $request->except(['_token','_method']);

        $data['replytime'] = date('Y-m-d H:i:s',time());
        
        $data['status'] = 1;

        if(DB::table("bro_comment")->where("id","=",$id)->update($data)){

            return redirect("/comment")->with('success',"回复成功");

        }else{

            return  back()->with('error',"回复失败",'id',$id);
            
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
