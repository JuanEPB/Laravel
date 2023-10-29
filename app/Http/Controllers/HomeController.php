<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->only('index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::paginate(12);
        return view('welcome');
    }

    public function home(){
        $products = Product::paginate(5);
        return view('welcome', compact('products'));
    }
    public function home2(request $request){
        if($request->ajax()){
            return view('paginate.pagination', compact('products'));
        }
        return view('paginate.products');
    }
}
