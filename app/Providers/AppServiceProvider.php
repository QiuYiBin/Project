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
    	$url= "http://v.juhe.cn/offset/index?key=e45f2aca8949224e0460861ff3fcddb2&lat=39.908700982285396&lng=116.3974965092&type=6";
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
