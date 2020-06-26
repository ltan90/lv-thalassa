<?php

namespace App\Http\Controllers;

use App\ProductCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getCategories(){
        $categories = ProductCategory::where('status','PUBLISHED')->orderBy('updated_at','DESC')->get();
        return view('categories', compact('categories'));
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
