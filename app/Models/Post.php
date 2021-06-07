<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Mass Assignment 的驗證


    protected $fillable = ['title', 'content', 'status'];

    //Accessor
    public function getStatusAttribute($value)
    {//當從表格取出文章的狀態時轉為中文
        if ($value == 'draft') {
            return '草稿';
        } else if ($value == 'published') {
            return '上架';
        } else {
            return '未知狀態';
        }
    }
}
