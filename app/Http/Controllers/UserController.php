<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){

        $data['users'] = User::orderBy('id', 'desc')->get();
        return view('users.index',["user"=>"John Doe", "age"=>30, "users"=>$data]);
    }

    public function show(string $id){
        return view('users.show',["user"=>User::findOrFail($id)]);
    }
}
