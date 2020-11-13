<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductGallery extends Model
{
    use SoftDeletes;


    protected $fillable = [
        'products_id', 'photo', 'is_default'
    ];
    
    protected $hiden = [
        
    ];

    public function product()
    {
        return $this->belongsTo(Product::class,'products_id','id');
    }   

    public function getPhotoAttribute($value)
    {
        return url('storage/'.$value);
    }
}
