<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function index(){
        return view("akun.edit");
    }

    public function edit(User $id,Request $request){
        $id->update([
            "name" => $request->name,
            "username" => $request->name,
            "email" => $request->email,
        ]);

        return redirect()->route("akun");
    }

}