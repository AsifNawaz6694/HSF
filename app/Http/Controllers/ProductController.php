<?php

namespace App\Http\Controllers;
use App\Product;
use App\Category;
use App\Brand;
use App\Supplier;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    protected $product;

    public function __construct(){
        $this->product = new Product();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['products'] = $this->product->getAllProducts();
        return view('admin.product.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['categories'] = Category::all();
        $data['brands'] = Brand::all();
        $data['suppliers'] = Supplier::all();
        return view('admin.product.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            //Creating new Product
            $product = $this->product;
            $product->added_by = Auth::user()->id;
            $product->name = $request->input('name');
            $product->category_id = $request->input('category_id');
            $product->brand_id = $request->input('brand_id');
            $product->supplier_id = $request->input('supplier_id');
            if($product->save()){

                $this->set_session('Product Successfully Added.', true);
            }else{
                $this->set_session('Product couldnot be added.', false);
            }

            return redirect()->route('products.create');

        }catch(\Exception $e){
            $this->set_session('Product Couldnot be Added.'.$e->getMessage(), false);
            return redirect()->route('products.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['product'] = $this->product->getSingleProduct($id);
        return view('admin.product.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['product'] = $this->product->getSingleProduct($id);
        $data['categories'] = Category::all();
        $data['brands'] = Brand::all();
        $data['suppliers'] = Supplier::all();
        return view('admin.product.edit')->with($data);
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
    }
}
