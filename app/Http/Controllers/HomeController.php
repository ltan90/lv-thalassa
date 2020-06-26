<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductCategory;
use App\SubCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getCategories(){
        $categories = ProductCategory::where('status','PUBLISHED')->orderBy('updated_at','DESC')->get();
        return view('categories', compact('categories'));
    }

    public function getSubCategories($slugParent){
        $category = ProductCategory::where('slug', $slugParent)->first();
        $subCategories = SubCategory::where('product_category_id', $category->id)->orderBy('updated_at', 'DESC')->get();
        return view('sub-categories', compact('category', 'subCategories'));
    }

    public function getProducts($slugParent, $slugChild){
        $category = ProductCategory::where('slug', $slugParent)->first();
        $subCategory = SubCategory::where('slug', $slugChild)->first();
        $products = Product::where('sub_category_id', $subCategory->id)->orderBy('updated_at', 'DESC')->get();
        return view('item-list', compact('category', 'subCategory', 'products'));
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
