<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSize extends Model
{
    use HasFactory;

    protected $table = 'tbl_product_size';
    protected $fillable = [
        'id',
        'product_id',
        'size_id',
        'stock'
    ];

    public function import_bill_details(){
        return $this->hasMany(ImportBillDetail::class,'product_size_id','id');
    }

    public function order_details(){
        return $this->hasMany(OrderDetail::class,'product_size_id','id');
    }
}
