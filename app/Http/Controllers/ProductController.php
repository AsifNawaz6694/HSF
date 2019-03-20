<?php

namespace App\Http\Controllers;
use App\Product;
use App\Category;
use App\Brand;
use App\Supplier;
use App\User;
use Illuminate\Http\Request;

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
            //Creating new Category
            $product = $this->product;
            $product->added_by = Auth::user()->id;
            $product->category_id = $request->input('category_id');
            $product->brand_id = $request->input('brand_id');
            $product->supplier_id = $request->input('supplier_id');
            if($product->save()){

                $this->set_session('Category Successfully Added.', true);
            }else{
                $this->set_session('Category couldnot be added.', false);
            }

            return redirect()->route('categories.create');

        }catch(\Exception $e){
            $this->set_session('Category Couldnot be Added.'.$e->getMessage(), false);
            return redirect()->route('categories.create');
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
        //
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
