<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Products;
use DB;

class ProductController extends Controller
{
    public function all(){


    	$products = DB::table('products')
    	->join('categories', 'products.category_id', 'categories.id')
    	->select('products.id', 'products.name as pname', 'products.price', 'categories.name as cname')

    	->get();



    	return view('products', ['products' =>$products]);

    }
}
