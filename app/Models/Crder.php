<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Crder extends Model
{
    //指定数据表
	protected $table="bro_crder";
	//指定主键
    protected $primaryKey="id";
    //该模型是否需要时间戳维护 false =》不需要  true -》需要
    public $timestamps = false;
    //在模型类里指定下模型可以给数据表赋值的字段
    protected $fillable = ['uid','linkname','address','tel','code','total','status','orderid'];
    //修改器
    public function getStatusAttribute($value)
    {
       $status=[0=>'未付款',1=>'待发货',2=>'待收货',3=>'待评论',4=>'订单完成'];
        return $status[$value];

    }
}
