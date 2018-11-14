<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
	//指定数据表
	protected $table="bro_link";
	//指定主键
    protected $primaryKey="id";
    //该模型是否需要时间戳维护 false =》不需要  true -》需要
    public $timestamps = false;
    //在模型类里指定下模型可以给数据表赋值的字段
    protected $fillable = ['name','title','status'];
    //修改器
    public function getStatusAttribute($value)
    {
       $status=[0=>'通过',1=>'不通过'];
        return $status[$value];

    }
}


