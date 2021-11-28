<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImportBill extends Model
{
    use HasFactory;

    protected $table = 'tbl_import_bill';
    protected $fillable = [
        'id',
        'code',
        'vat',
        'user_id',
        'status',
        'admin_id',
        'total',
        'note',
        'provider_id',
        'import_date'
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function provider(){
        return $this->belongsTo(Provider::class,'provider_id','id');
    }

    public function import_bill_details(){
        return $this->hasMany(ImportBillDetail::class,'import_bill_id','id');
    }
}
