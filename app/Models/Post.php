<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'tbl_post';
    protected $fillable = [
        'id',
        'name',
        'slug',
        'short_desc',
        'content',
        'thumb',
        'view',
        'post_category_id',
        'user_id',
        'status'
    ];

    public function post_category(){
        return $this->belongsTo(PostCategory::class,'post_category_id','id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
