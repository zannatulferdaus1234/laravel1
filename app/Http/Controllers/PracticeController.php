<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Practice;
class PracticeController extends Controller
{
    public function show($slug)
    {
        
        /*1. 
        $post = [
            'my-first-post' =>'Hello, this is my first post!',
            'my-second-post' =>'Hello, this is my second post'
        ];
        if(!array_key_exists($id,$post)){
            abort(403, 'Sorry That post wasnot found!');
        }
        if(!$post){
            abort(404, 'Sorry That post wasnot found!');
        }
        return view('practice.manage',['id' => $post[$id]]);
        */

        //$post=DB::table('practices')->where('slug',$slug)->first();


        return view('practice.manage',[
            'post'=>Practice::where('slug',$slug)->firstOrFail()
            ]);

    }
}
