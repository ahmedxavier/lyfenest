<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\User;
class BerandaController extends Controller
{
	protected $category ;
	public function __construct(){
		$this->category = Category::where('parent_id',null)->get();
	}
   public function index(){
   	$category = $this->category;
   	$products = Product::take(12)->orderBy('id','DESC')->get();
   	return view('homepage.homepage',compact('products','category'));
   }
   public function product(){
   	$products = Product::orderBy('id','DESC')->paginate(10);
   	return view('homepage.product',compact('products','category'));
   }
   public function productbycategory($slug){
      $categorys = Category::where('slug',$slug)->first();
      $id 	  = $categorys->id;
      $category = $this->category;
      $name 	  = $categorys->name;
      $products = Product::orderBy('id','DESC')->where('category_id',$id)->get();
      return view('homepage.productbycategory',compact('products','category','name'));
}
   public function detail($slug){
      $products = Product::where('slug',$slug)->first();
      $category = $this->category;
      return view('homepage.detail',compact('products','category'));
}

   
}
