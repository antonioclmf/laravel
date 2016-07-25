<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProductsController extends Controller
{
    public function index(){
        $users = \DB::table('products')->get();
        return view('products.index',['data'=> $users]);
    }
}
