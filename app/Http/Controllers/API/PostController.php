<?php
namespace App\Http\Controllers\API;
use Illuminate\Http\Request; 
use App\Http\Controllers\Controller; 
use App\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller 
{
public $successStatus = 200;
/** 
     * posts api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function index(){ 
        // if (Auth::check()) {
        //     return response()->json(Post::all(), $this-> successStatus); 
        // }
        // else{ 
        //     return response()->json(['error'=>'Unauthorised'], 401); 
        // } 
        return response()->json(Post::all(), $this-> successStatus); 
    }
}