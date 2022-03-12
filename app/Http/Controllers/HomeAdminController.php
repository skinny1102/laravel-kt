<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
class HomeAdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
         $categorycount = Category::count();
         $productcount = Product::count();
         return view('home')
         ->with(compact('categorycount'))
         ->with(compact('productcount'));
    }
 }
