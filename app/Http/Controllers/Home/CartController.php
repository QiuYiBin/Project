<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //获取session数组数据
        $res = session('cart');
        //session()->forget('cart');
        //var_dump($res);exit;
        //dd($res);exit;
        //$id = $request->input('id');
        $data=[];
        if ($res) {
        	//DB::connection()->enableQueryLog();
	        $data = DB::table('bro_goods')->whereIn('id', array_column($res, 'id'))->get();
	    }
	    //dd($data);
	    //var_dump($data);exit;
        //加载购物车模板 分配数据 
        return view("Home.Cart.cart",['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //加载模板 
        //return view('Home.Cart.cart');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //获取数据
        $data = $request->except('_token', 'name');
    	//var_dump($data);
        $shops = session('cart');
        //dd($shops);
        if (!empty($shops[$data['id']])){ 
        	//已存在，数量加1
        	$shops[ $data['id'] ]['num']++;
        	session(array(
        		'cart.'.$data['id'] => $shops[ $data['id'] ]
        	));
        	//dd(session());
        } else { 
	        $data['num'] = 1;
        	session(['cart.'.$data['id'] => $data]);
        }
        //var_dump($data);exit;
        //dd(session('cart'));
        return redirect('/homecart');
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
        //
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

    
    public function updates($id){	
    	//echo $id;
    	$goods=session("cart");
    	//遍历
    	foreach($goods as $key=>$value){	
    		//对比
    		if($value['id']==$id){	
    			//数量加一
    			$s=$value['num']+1;
    			$goods[$key]['num']=$s;
    		}
    	}
    	//跳转到购物车页面
    	return redirect("/homecart");
    }

    public function del(Request $request){

    	$id = $request->input('id');
    	$cart = session('cart');
    	//遍历数据
    	foreach ($cart as $key => $value) {
    		//判断需要删除的数据
    		if($value['id'] == $id){
    			unset($cart[$key]);	
    		}
    	}
    	session(['cart'=>$cart]);
    	//返回
    	return json_encode(['msg'=>'1']);
    }

    public function CarAdd(Request $request){	
    	$id=$request->input('id');
    	//获取session中的所有数据
    	$shops = session('cart');
    	//遍历数据
    	foreach ($shops as $key => $value ){
    		if ($value['id']==$id) {
    			
    			$shops[$key]['num']=++$shops[$key]['num'];
    		}
    	
    	}
    	session(['cart'=>$shops]);
    	echo 1;

    }
	
    public function Carjian(Request $request){	
    	$id=$request->input('id');
    	//获取session中的所有数据
    	$shops = session('cart');
    	//遍历数据
    	foreach ($shops as $key => $value ){
    		if ($value['id']==$id) {
    			
    			$shops[$key]['num']=--$shops[$key]['num'];
    		}
    	
    	}
    	session(['cart'=>$shops]);
    	echo 1;
    }

    public function Carinput(Request $request){	
    	$id=$request->input('id');
    	//获取session中的所有数据
    	$shops = session('cart');
    	//遍历数据
    	foreach ($shops as $key => $value ){
    		if ($value['id']==$id) {
    			
    			$shops[$key]['num']=$shops[$key]['num'];
    		}
    			
    	}
    	session(['cart'=>$shops]);
    	echo 1;
    }

   public function Carqingkong(Request $request)
   {	
   		$num = $request->input('num');

   		$res = session('cart');

        session()->forget('cart');
        
        return $num;
   }
}
