<?php

namespace App\Http\Controllers;

use App\Models\Beranda;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function destroy(Beranda $id,Request $request){
        $request->user()->likes()->where("beranda_id",$id->id)->delete();
        return back();
    }


    public function store(Beranda $id,Request $request){
        if($id->likedBy($request->user())){
            return response(null,409);
        }

        $id->likes()->create([
            "user_id" => $request->user()->id,
        ]);

        return back();
    }
}