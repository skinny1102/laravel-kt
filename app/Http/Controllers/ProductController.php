<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Validate;
class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $product = Product::all()->sortByDesc("created_at");
        $category = Category::all();
        $supplier = Supplier::all();
        return view('admin.product.index')
        ->with(compact('product'))
        ->with(compact('category'))
        ->with(compact('supplier'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        //
        $category = Category::all();
        $supplier = Supplier::all();
        return view('admin.product.create')
        ->with(compact('category'))
        ->with(compact('supplier'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data= $request-> validate([
            'name_product'=>'required',
            'price'=>'required',
            'quanlity'=>'required',
            'title'=>'required',
            'content'=>'required',
            'category'=>'required',
            'supplier'=>'required',
            'cpu_name'=>'required',
            'ram_name'=>'required',
            'disk_name'=>'required',
            'card_name'=>'required',
            'desktop_name'=>'required',
        ]);
        if($request->has('image')){
            $file=$request->image;
            $ext = $request->image->extension();
            $file_name= time().'-'.'product.'. $ext;
            $file->move(public_path('uploads'),$file_name);
        }
        $product= new Product();
        $product->name_product=$data['name_product'];
        $product->price=$data['price'];
        $product->quanlity=$data['quanlity'];
        $product->title=$data['title'];
        $product->content=$data['content'];
        $product->id_category=$data['category'];
        $product->id_supplier=$data['supplier'];
        $product->cpu_name=$data['cpu_name'];
        $product->ram_name=$data['ram_name'];
        $product->disk_name=$data['disk_name'];
        $product->card_name=$data['card_name'];
        $product->desktop_name=$data['desktop_name'];
        $product->image_product=$file_name;
        $product->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $title = "Sản phẩm";
        return view('user/product-details')->with('title',$title);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        //
        
        // $data= $request-> validate([
        //     'name_product'=>'required',
        //     'price'=>'required',
        //     'quanlity'=>'required',
        //     'title'=>'required',
        //     'content'=>'required',
        //     'category'=>'required',
        //     'supplier'=>'required',
        // ]);
        $product=  Product::find($id);
        $data= $request->all();
        $product->name_product=$data['name_product'];
        $product->price=$data['price'];
        $product->quanlity=$data['quanlity'];
        $product->title=$data['title'];
        $product->content=$data['content'];
        $product->id_category=$data['category'];
        $product->id_supplier=$data['supplier'];
        $product->cpu_name=$data['cpu_name'];
        $product->ram_name=$data['ram_name'];
        $product->disk_name=$data['disk_name'];
        $product->card_name=$data['card_name'];
        $product->desktop_name=$data['desktop_name'];
        $product->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //     
        $product = Product::find($id);
        $product->delete();
        return redirect()->back();
    }

    public function indexcreate()
    {
        //
        $category = Category::all();
        $supplier = Supplier::all();
        return view('admin.product.create')
        ->with(compact('category'))
        ->with(compact('supplier'));
    }
    public function productinfo($id)
    {
        # code...
        $product = Product::find($id);
        return $product;
    }
}
