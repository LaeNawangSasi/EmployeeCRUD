<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //kasih tau nama model
    protected $table = 'employee';
    //laravel defaultnya id
    protected $primaryKey = 'employee_id';
    public $timestamps = false;
    //ke-2 attributnya
    protected $fillable = [
        'employee_id',
        'employee_name',
        'employee_address',
        'employee_phone_number'
    ];}
