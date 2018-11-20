<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wish extends Model
{
	//指定数据表
	protected $table="bro_wish";
	//指定主键
    protected $primaryKey="id";
    //该模型是否需要时间戳维护 false =》不需要  true -》需要
    public $timestamps = true;
    //在模型类里指定下模型可以给数据表赋值的字段
    protected $fillable = ['name','price','status','time'];
    //修改器
    public function getStatusAttribute($value)
    {
       $status=[0=>'有现货',1=>'缺货'];
        return $status[$value];

    }
}


