<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;
use Session;
class AppServiceProvider extends ServiceProvider
{
    // 获取分类方法
    public function getCatesBypid($pid)
    {
        $res = DB::table('bro_cates')->where('pid','=',$pid)->get();
        // 遍历
        $data = [];
        foreach ($res as $value) {
            $value->dev = $this->getCatesBypid($value->id);
            $data[] = $value;
        }
        return $data;
    }

 	//curl 方法 
    public function curl(){	
    	$url = "http://v.juhe.cn/weather/index?format=2&cityname=%E8%8B%8F%E5%B7%9E&key=fe022ea332f4c7d3b6301ae534f49097";
        $method = "get";
        $post = 0;
        $res = curlGet($url,$method,$post);
        $data1 = json_decode($res,true);
        //echo "<pre>";
        //print_r($data);
        return $data1;
    }

    
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $cate = $this->getCatesBypid(0);
        $data1 = $this->curl();
        view()->share('cate',$cate);
        view()->share('data1',$data1);
        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
