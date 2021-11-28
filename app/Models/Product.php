<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'tbl_product';
    protected $fillable = [
        'id',
        'slug',
        'name',
        'short_desc',
        'detail_desc',
        'price',
        'price_cost',
        'product_category_id',
        'brand_id',
        'warranty',
        'view',
        'thumb',
        'user_id',
        'status'
    ];

    public function product_category(){
        return $this->belongsTo(ProductCategory::class,'product_category_id','id');
    }

    public function brand(){
        return $this->belongsTo(Brand::class,'brand_id','id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function product_images(){
        return $this->hasMany(ProductImage::class,'product_id','id');
    }

    public function providers(){
        return $this->belongsToMany(Provider::class,'tbl_product_provider','product_id','provider_id');
    }

    public function product_details(){
        return $this->hasMany(ProductDetail::class,'product_id','id');
    }
}
