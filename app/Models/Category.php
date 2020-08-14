<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//分类模型
class Category extends Model
{
    //
    public $timestamps =false;
    //允许编辑
    protected $fillable = [
        'name', 'description',
    ];
}
