<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cart extends Controller
{
    public function index(){

        return view("billings.cart");
        
            }
}
