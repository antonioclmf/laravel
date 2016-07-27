<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $users = \DB::table('products')->get();
        return view('products.index',['data'=> $users]);
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
          //dd($request->input('title'));
        $data= $request->all();
        unset($data['_token']);
        \DB::table('products')->insert($data);
        return redirect()->route('products.index');
    }
}
