<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class ClearingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // 
    public function index()
    {
        // 获取当前用户id
        $id = session('id');

        // 先查询出当前用户拥有的收货地址
        $addres = \DB::table('bro_useraddres')->where('user_id','=',$id)->OrderBy('id','asc')->get();

        if ($addres->isEmpty()){
            $addres = '';
        }

        $goods = session('cart');
        
        if($goods == null){
            return back();
        }

        $num = count($goods);

        $array = array();

        foreach ($goods as $key => $value) {
            $array[$key] = \DB::table('bro_goods')->where('id','=',$value['id'])->first();
            $array[$key]->num = $value['num'];
        }
        // dd($array);
        return view('Home.Clearing.index')->with('addres',$addres)->with('goods',$goods)->with('array',$array)->with('num',$num);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 获取session下面的用户id
        $id = session('id');
        
        $data = $request->except('_token');

        $data['user_id'] = $id;

        if($data['postcode'] == null){

            unset($data['postcode']);

        }

        // 去掉没用的逗号
        $data['huo'] = str_replace(',','',$data['huo']);
        
        // 执行添加
        DB::table('bro_useraddres')->insert($data);

        return back();

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
    // 确认收货
    public function update(Request $request, $id)
    {
        
        $data['status'] = 3;

        // 根据id获取订单详情
        $res = DB::table('bro_crder')->select('gid','gnum')->join('bro_crderinfo','bro_crder.id','=','bro_crderinfo.oid')->where('bro_crder.id','=',$id)->get();
        
        foreach($res as $value){
            var_dump($value);
            // 对指定的商品进行累加
            DB::table('bro_goods')->where('id','=',$value->gid)->increment('sales',$value->gnum);
            DB::table('bro_goods')->where('id','=',$value->gid)->decrement('store',$value->gnum);
        }
        
        if(\DB::table('bro_crder')->where('id','=',$id)->update($data)){
            return back();
        };
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // 取消删除订单方法
    public function destroy($id)
    {
    
        if(\DB::table('bro_crder')->where('id','=',$id)->delete()){
            
            // 删除订单详情
            \DB::table('bro_crderinfo')->where('oid','=',$id)->delete();
            return back();
        }
    }

    // 提交订单接收方法
    public function order(Request $request)
    {

        if ($request->input('id')) {

            $id = $request->input('id');

            // 查出商品的订单号
            $data = DB::table('bro_crder')->where('id','=',$id)->first();

            // 把查出的商品订单号赋值给变量
            $orderid = $data->orderid;

        } else {

            // 获取用户id
            $userid = session('id');

            // 获取总金额
            $total = $request->input('total');

            // 随机生成订单号
            $orderid = time().'666666';

            // 获取收货地址id
            $addresid = $request->input('address');

            // 查出订单选中的地址信息
            $addres = \DB::table('bro_useraddres')->where('id','=',$addresid)->first();

            // 拼接收货地址
            $address = str_replace(',','',$addres->huo);

            // 定义一个空数组存储订单信息
            $crder = array();
            $crder['uid'] = $userid;
            $crder['linkname'] = $addres->name;
            $crder['address'] = $address.$addres->adds;
            $crder['tel'] = $addres->phone;
            $crder['code'] = $addres->postcode;
            $crder['total'] = $total;
            $crder['status'] = 0;
            $crder['orderid'] = $orderid;
            $crder['ordertime'] = time();
            $crder['paytime'] = time();

            // 开始处理订单详情
            $goods = session('cart');

            $array = array();

            // 查询出购物车的商品
            foreach ($goods as $key => $value) {

                $array[$key] = \DB::table('bro_goods')->where('id','=',$value['id'])->first();

                $array[$key]->num = $value['num'];

            }

            $crderinfo = array();
            
            if ($id = DB::table('bro_crder')->insertGetId($crder)) {

                // 处理要插入的商品详情
                foreach ($array as $value) {

                    $crderinfo['oid'] = $id;

                    $crderinfo['gid'] = $value->id;

                    $crderinfo['gname'] = $value->name;

                    $crderinfo['price'] = $value->price;

                    $crderinfo['gnum'] = $value->num;

                    $crderinfo['pic'] = $value->pic;

                    // 把商品详情的信息插入到表
                    \DB::table('bro_crderinfo')->insert($crderinfo);
                }

                // 清空购物车
                session()->forget('cart');

            }else{
                return redirect('/')->with('error','提交失败');
            }

        }
        

        //商户订单号，商户网站订单系统中唯一订单号，必填
        $out_trade_no = $orderid;

        //订单名称，必填
        $subject = '商城订单';

        //付款金额，必填
        $total_fee = '0.01';

        pay($out_trade_no,$subject,$total_fee);
    }


    // 支付宝支付成功返回处理方法 
    public function returnurl(Request $request)
    {
        // 获取订单号
        $orderid = $request->input('out_trade_no');

        // 把状态赋值给数组
        $res['status'] = 1;
        $res['paytime'] = time();

        // 写入到数据库
        if(DB::table('bro_crder')->where('orderid','=',$orderid)->update($res)){
            return redirect('/homedetail');
        }else{
            echo '支付失败';
        }
    }
}
