<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class PostController extends Controller
{
	public function index($id)
	{
		$news=Post::where('category_id',$id)->orderBy('created_at','desc')->take(4)->get();
		return view('post.news',compact('news'));
		
	}
	
	public function getPost($id)
	{
		$post=Post::find($id);
		return view('post.news-single',compact('post'));
	}
}
