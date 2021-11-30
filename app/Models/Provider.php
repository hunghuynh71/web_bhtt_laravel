<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;

    protected $table = 'tbl_provider';
    protected $fillable = [
        'id',
        'name',
        'phone',
        'email',
        'province_id',
        'district_id',
        'ward_id',
        'address',
        'status'
    ];

    public function products(){
        return $this->belongsToMany(Product::class,'tbl_product_provider','product_id','provider_id');
    }

    public function import_bills(){
        return $this->hasMany(Product::class,'provider_id','id');
    }
}
