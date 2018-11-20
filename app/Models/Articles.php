<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    //定义与模型关联的数据表
    protected $table="bro_article";
    //设置主键
    protected $primaryKey="id";
    //设置是否需要自动维护时间戳
    public $timestamps=true;
    //设置可以批量赋值的属性
    protected $fillable=['title','descr'];
}
