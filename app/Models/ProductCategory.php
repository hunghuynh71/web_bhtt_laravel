<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class ProductCategory extends Model
{
    use HasFactory;

    protected $table = 'tbl_product_category';
    protected $fillable = [
        'id',
        'name',
        'slug',
        'status'
    ];

    public function products(){
        return $this->hasMany(Product::class,'product_category_id','id');
    }
}
