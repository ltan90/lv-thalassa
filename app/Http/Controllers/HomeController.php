<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getCategories(){
        return view('categories');
    }

    public function getSubCategories(){
        return view('sub-categories');
    }

    public function getCart(){
        return view('cart');
    }

    public function getItem(){
        return view('item');
    }

    public function getItemList(){
        return view('item-list');
    }
}
