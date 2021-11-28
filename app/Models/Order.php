<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'tbl_order';
    protected $fillable = [
        'id',
        'code',
        'user_id',
        'admin_id',
        'name',
        'phone',
        'province_id',
        'district_id',
        'ward_id',
        'address',
        'note',
        'promo_code',
        'promo_money',
        'feeship',
        'vat',
        'total',
        'payment',
        'order_date',
        'status'
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function order_details(){
        return $this->hasMany(OrderDetail::class,'order_id','id');
    }
}
