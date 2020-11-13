<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes;


    protected $fillable = [
        'uuid','name','email','number','address','note',
        'transaction_total','transaction_status'
    ];
    
    protected $hiden = [
        
    ];

    public function details()
    {
        return $this->hasMany(TransactionDetail::class, 'transactions_id');
        
    }
}
