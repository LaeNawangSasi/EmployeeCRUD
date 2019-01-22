<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //kasih tau nama model
    protected $table = 'customer';
    //laravel defaultnya id
    protected $primaryKey = 'customer_id';
    public $timestamps = false;
    //ke-2 attributnya
    protected $fillable = [
        'customer_id',
        'name',
        'address'
    ];
    
}
