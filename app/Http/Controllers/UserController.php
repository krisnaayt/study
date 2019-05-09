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
        $data_user=[
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password
        ];
        $insert=users::insert($data_user);
        return redirect('/user');

    }

    public function delete_user($id){
        $delete=users::where('id', $id)->delete();
        return redirect('/user');
    }

    public function show_edit_user(Request $request){
       
            $user=users::all()->where('id', $request->id);
            return view('show_edit_user', compact('user'));
    }

    public function edit_user(Request $request, $id){
        $data_user=[
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password
        ];
        $update = users::where('id', $id)->update($data_user);                            
            return redirect('/user');
    }
}
