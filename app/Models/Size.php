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

    public function products(){
        return $this->belongsToMany(Product::class,'tbl_product_size','product_id','size_id');
    }
}
