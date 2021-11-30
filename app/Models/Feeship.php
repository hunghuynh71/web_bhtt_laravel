<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feeship extends Model
{
    use HasFactory;

    protected $table = 'tbl_feeship';
    protected $fillable = [
        'id',
        'province_id',
        'district_id',
        'ward_id',
        'fee'
    ];

    public function province(){
        return $this->belongsTo(Province::class,'province_id','id');
    }

    public function district(){
        return $this->belongsTo(District::class,'district_id','id');
    }

    public function ward(){
        return $this->belongsTo(Ward::class,'ward_id','id');
    }
}
