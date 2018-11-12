<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SliderModel extends Model
{
    // 定义模型关联的数据表
    protected $table = 'bro_carousel';

    // 主键
    protected $primaryKey = 'id';

    protected $fillable = ['status'];

    public function getStatusAttribute($value)
    {
		$status = [0=>'显示',1=>'隐藏'];
		return $status[$value];
	}
}
