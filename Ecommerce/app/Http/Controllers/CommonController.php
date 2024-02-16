<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CommonController extends Controller
{
   public function pageView(Request $request,Product $product){
    //   dd($request->page);
      if($request->page=='shop'){
        $pro=$product->all();
          return view('page.shopeView',['type'=>$request->page],compact('pro'));
      }else if($request->page=='why-us'){
        return view('page.whyUsView',['type'=>$request->page]);
    }else if($request->page=='testimonial'){
        return view('page.testimonialView',['type'=>$request->page]);
    }
    else if($request->page=='contact-us'){
        return view('page.contactView',['type'=>$request->page]);
    }
   }


   public function home(Product $product)
    {
      $pro=$product->take(10)->get();
        return view('index',compact('pro'));
    }


    public function itemView(Request $request)
    {
    //   dd($request->id);
      $data=Product::where('id',$request->id)->first();
      return view('itemCard',compact('data'));
    }

    public function shopView(Request $request)
    {
    //   dd($request->id);
      $data=Product::where('id',$request->id)->first();
      return view('itemCard',compact('data'));
    }


    public function addToCart(Request $request,Product $product){
      $user_id=auth()->id();
      $count='stock count';
          //  dd($product->$count);
    if($product->$count<=0){
      return 'out of stock';
    }
    if($product->$count<=0){
      return 'out of atock';
    }
    Product::where('id', $product->id)->update(['stock count'=>$product->$count-1]);
     Cart::create([
      'user_id'=>$user_id,
      'product_id'=>$product->id,
      'quantity'=>1,
     ]);

    }
}


