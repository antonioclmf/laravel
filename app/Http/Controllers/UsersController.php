<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controllers;

class UsersController extends Controller{
  public function allUsers(){
      $users = \DB::select('SELECT * FROM users');
      return view('dump', ['data'=>$users]);
  }
}