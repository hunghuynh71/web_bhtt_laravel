<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;

    protected $table = 'tbl_color';
    protected $fillable = [
        'id',
        'name',
        'status'
    ];

    public function product_details(){
        return $this->hasMany(ProductDetail::class,'color_id','id');
    }
}
