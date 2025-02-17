<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    function index(){
        $blogs=Blog::latest()->paginate(1);
        $SliderBlogs= Blog::latest()->take(5)->get();

        return view('theme.index',compact('blogs','SliderBlogs'));
    }
    function category($id){
        $categoryName=Category::find($id)->name;
        $blogs=Blog::where('category_id',$id)->paginate(8);
        return view('theme.category',compact('blogs','categoryName'));
    } 
    function contact(){
        return view('theme.contact');
    }
    function login(){
        return view('theme.login');
    }
    function register(){
        return view('theme.register');
    }
}
