<?php

namespace App\Http\Controllers;

use App\Models\Beranda;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function __construct() {
        $this->middleware(["auth"]);
    }

    public function index(){
        $posts = Beranda::latest()->with(["user","likes"])->paginate(20);
        return view("beranda",[
            "posts" => $posts,
        ]);
    }
    public function store(Request $request){
        $this->validate($request,[
            "body" => "required",
        ]);

        $request->user()->posts()->create($request->only("body"));

        return back();
    }

    public function destroy(Beranda $id){
        $this->authorize("delete",$id);
        $id->delete();

        return back();
    }
}