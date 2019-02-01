<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;
class UserController extends Controller
{
    public function show_user(){
        $user=users::all();
        return view('user', compact('user'));
    }

    public function add_user(Request $request){
        
    }
}
