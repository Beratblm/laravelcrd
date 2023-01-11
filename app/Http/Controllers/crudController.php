<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\Events\Validated;

class crudController extends Controller
{
    public function readtable(Request $request){
       
      $blog_tablosu = DB::table("blog")
      ->orderBy("blog_must", "desc")
      ->get();
      return view("tablo", compact("blog_tablosu"));

      

    }

    public function insert(){
      
      return view("insert");    
    }

    public function insertpost(Request $request){
       
        $request->validate([
            "blog_title" => "required|min:5",
            "blog_content" => "required",
            "blog_must" => "required"
        ]);
        $insert = DB::table("blog")->insert([
            "blog_title" => $request->blog_title,
            "blog_content" => $request->blog_content,
            "blog_must" => $request->blog_must
        ]);

        if($insert){
            return back()->with("status", "Kayit ekleme islemi basarili oldu");
        }

    }

    public function deleteitem($id){
       $del = DB::table("blog")->delete($id);

       if($del){
        return back();
       }

       
    }

    public function updateitem($id){
        $blog = DB::table("blog")->where("id", $id)->first();
        return view("update", compact("blog"));
    }

    public function updatepost(Request $request, $id){

        $request->validate([
            "blog_title" => "required|min:5",
            "blog_content" => "required",
            "blog_must" => "required"
        ]);
        $insert = DB::table("blog")->where("id", $id)->update([
            "blog_title" => $request->blog_title,
            "blog_content" => $request->blog_content,
            "blog_must" => $request->blog_must
        ]);

        if($insert){
            return back()->with("status", "Güncelleme islemi basarili oldu");
        }
        
    }
}
