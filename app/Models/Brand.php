<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $table = 'tbl_brand';
    protected $fillable = [
        'id',
        'name',
        'slug',
        'desc',
        'country',
        'logo',
        'status'
    ];

    public function products(){
        return $this->hasMany(Product::class,'brand_id','id');
    }
}
