<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImportBillDetail extends Model
{
    use HasFactory;

    protected $table = 'tbl_import_bill_detail';
    protected $fillable = [
        'id',
        'import_bill_id',
        'product_size_id',
        'price',
        'qty'
    ];

    public function import_bill(){
        return $this->belongsTo(ImportBill::class,'import_bill_id','id');
    }

    public function product_size(){
        return $this->belongsTo(ProductSize::class,'product_size_id','id');
    }
}
