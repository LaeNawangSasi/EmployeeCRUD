<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrialController extends Controller
{
    //
     function index() {
        echo "ini dari Controller";
     }
     function pujangga() {
         return "bebek goreng by pujangga";
     }
     function siti() {
        return view ('mamalia/kucing');
    }
}
