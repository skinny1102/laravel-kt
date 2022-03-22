<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Supplier;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{


    public function index()
    { 
        $category = Category::all();
        $supplier = Supplier::all();
        $product =DB::table('product')
                    ->orderBy('id_product', 'desc')
                    ->take(3)
                    ->get();
        $productnew =DB::table('product')
            ->orderBy('id_product', 'asc')
            ->take(5)
            ->get();
        $productEx =DB::table('product')
            ->orderBy('price', 'asc')
            ->take(6)
            ->get();
        $productimg =DB::table('product')
            ->orderBy('price', 'asc')
            ->take(6)
            ->get();
        return view('user.homeuser')
        ->with(compact('product'))
        ->with(compact('productnew'))
        ->with(compact('productEx'))
        ->with(compact('productimg'))
        ->with(compact('category'))
        ->with(compact('supplier'))
        ;
    }
    public function productdetails($id)
    {
        # code...
        $productarr =DB::table('product') ->select(
            DB::raw('product.id_product'),
            DB::raw('product.name_product'),
            DB::raw('product.cpu_name'),
            DB::raw('product.card_name'),
            DB::raw('product.disk_name'),
            DB::raw('product.desktop_name'),
            DB::raw('product.ram_name'),
            DB::raw('product.price'),
            DB::raw('product.quanlity'),
            DB::raw('product.title'),
            DB::raw('product.sumary'),
            DB::raw('product.content'),
            DB::raw('product.image_product'),
            DB::raw('product.status'),
            DB::raw('category.name_category'),
            DB::raw('supplier.name_supplier'),
           )->leftJoin('category','category.id_category'  , '=', 'product.id_category')
           ->leftJoin('supplier', 'supplier.id_supplier', '=', 'product.id_supplier')
           ->where('product.id_product', $id)
           ->take(1)
           ->get();
        $productld =DB::table('product')
           ->orderBy('id_product', 'desc')
           ->take(5)
           ->get();
        $product = $productarr[0];
        return view('user.product-details')
                    ->with(compact('product'))
                    ->with(compact('productld'));
    }
}
