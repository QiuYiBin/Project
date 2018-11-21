<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
//导入模型类
use App\Models\Wish;
class WishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = session('id');
        $data = Wish::where('uid','=',$id)->get();
        // dd($data);
        //加载模版
        return view('Home.Cart.index')->with('data',$data);

   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
    // 添加我的收藏
    public function show($id)
    {
        $uid = session('id');
        //查出当前用户的所有收藏过的商品信息
        $wish = DB::table('bro_wish')->where('uid','=',$uid)->get();
        // dd($wish);
        if($wish->isEmpty()){
            // 查看商品详情
            $data = DB::table('bro_goods')->select('name','id','status','pic','price')->where('id','=',$id)->first();
            $data->uid = session('id');
            $data->gid = $data->id;
            $res = (array)($data);
            unset($res['id']);
                // 开始添加操作
                if(DB::table('bro_wish')->insert($res)){
                    return redirect('/homewish')->with('success','收藏');
                }
        }else{

            foreach ($wish as $value) {
                // 遍历当前用户的所有商品id
                $gid[] = $value->gid;             
            }
            //判断当前用户商品id和传递过来的商品id 如果数组里有则已收藏 若没添加收藏
            if (in_array($id,$gid)){
                return redirect('/homewish')->with('error','已收藏');
             
            }else{
                // 查看商品详情
                $data = DB::table('bro_goods')->select('name','id','status','pic','price')->where('id','=',$id)->first();
                $data->uid = session('id');
                $data->gid = $data->id;
                $res = (array)($data);
                unset($res['id']);
                // 开始添加操作
                if(DB::table('bro_wish')->insert($res)){
                    return redirect('/homewish')->with('success','收藏');
                    }
            }       
       }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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

    //ajax删除
    public function del(Request $request)
    {
        // 获取参数id
        $id = $request->input('id');
        // dd($id);
        // 删除操作
        if(DB::table("bro_wish")->where("id","=",$id)->delete()){
            //json 格式
            return response()->json(['msg'=>1]);
        }else{  
            return response()->json(['msg'=>0]);
        }
    }

  
    
}
