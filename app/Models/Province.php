<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    protected $table = 'tbl_province';
    protected $fillable = [
        'id',
        'name',
        'type'
    ];

    public function districts()
    {
        return $this->hasMany(District::class, 'province_id', 'id');
    }

    public function feeships()
    {
        return $this->hasMany(Feeship::class, 'province_id', 'id');
    }
}
