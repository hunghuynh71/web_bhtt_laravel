<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;

    protected $table = 'tbl_promotion';
    protected $fillable = [
        'id',
        'name',
        'code',
        'condition',
        'value',
        'min_total_order',
        'qty',
        'start_day',
        'end_day',
        'user_id',
        'status'
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
