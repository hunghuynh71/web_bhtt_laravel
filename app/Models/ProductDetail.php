<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    use HasFactory;

    protected $table = 'tbl_product_detail';
    protected $fillable = [
        'id',
        'product_id',
        'size_id',
        'color_id',
        'stock'
    ];

    public function product(){
        return $this->belongsTo(Product::class,'product_id','id');
    }

    public function size(){
        return $this->belongsTo(Size::class,'size_id','id');
    }

    public function color(){
        return $this->belongsTo(Color::class,'color_id','id');
    }

    public function import_bill_details(){
        return $this->hasMany(ImportBillDetail::class,'product_detail_id','id');
    }

    public function order_details(){
        return $this->hasMany(OrderDetail::class,'product_detail_id','id');
    }
}
