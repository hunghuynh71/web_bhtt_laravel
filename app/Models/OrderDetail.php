<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $table = 'tbl_order_detail';
    protected $fillable = [
        'id',
        'order_id',
        'product_size_id',
        'qty',
        'price',
        'price_cost'
    ];

    public function order(){
        return $this->belongsTo(Order::class,'order_id','id');
    }

    public function product_size(){
        return $this->belongsTo(ProductSize::class,'product_size_id','id');
    }
}
