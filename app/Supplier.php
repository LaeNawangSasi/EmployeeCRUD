<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //
    protected $table = 'supplier';

    public $timestamps = false;
    
        //ke-2 attributnya
        protected $fillable = [
            'Supplier_id',
            'Supplier_name',
            'Supplier_addres'
        ];
}
