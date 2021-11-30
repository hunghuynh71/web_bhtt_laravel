<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;

    protected $table = 'tbl_size';
    protected $fillable = [
        'id',
        'name',
        'status'
    ];

    public function product_details(){
        return $this->hasMany(ProductDetail::class,'size_id','id');
    }
}
