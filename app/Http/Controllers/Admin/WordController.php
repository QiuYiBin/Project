<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Http\Requests\Word;
use App\Http\Requests\Word_edit;
class WordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data=DB::table('bro_word')->orderBy('id')->paginate(5);
        if(!$data->count()){
            return redirect('/word')->with('error','别乱来');
        }
        return view('Admin.AdminWord.index',['data'=>$data,'request'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.AdminWord.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Word $request)
    {
        $data=$request->except('_token');
        $data['time']=time();
        
        if(DB::table('bro_word')->insert($data)){
            return redirect('/word')->with('success','添加成功');
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
        $content=DB::table('bro_word')->where('id','=',$id)->first();
        if($content == null){
            return redirect('/word')->with('error','没有这个内容啊');
        }
        return view('Admin.AdminWord.content',['content'=>$content]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $data=DB::table('bro_word')->where('id','=',$id)->first();
        if($data == null){
            return redirect('/word')->with('error','别乱来');
        }
        return view('Admin.AdminWord.edit',['data1'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Word_edit $request, $id)
    {
        $data2=$request->except("_method","_token");
        if(DB::table('bro_word')->where('id','=',$id)->update($data2))
        {
            return redirect('/word')->with('success','修改成功');
        }else{
            return back()->with('error',' 修改失败');
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
        
        if(DB::table('bro_word')->where('id','=',$id)->delete()){

            return  redirect('/word')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
        
}
