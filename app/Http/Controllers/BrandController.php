<?php
namespace App\Http\Controllers;
use App\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BrandController extends Controller
{
    protected $brand;

    public function __construct(){
        $this->brand = new Brand();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['brands'] = $this->brand->getAllBrands();

        return view('admin.brand.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brand.create');
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
            $brand = $this->brand;
            $brand->added_by = Auth::user()->id;
            $brand->name = $request->input('name');
            $brand->description = $request->input('description');
            if($brand->save()){

                $this->set_session('Brand Successfully Added.', true);
            }else{
                $this->set_session('Brand couldnot be added.', false);
            }

            return redirect()->route('brands.create');

        }catch(\Exception $e){
            $this->set_session('Brand Couldnot be Added.'.$e->getMessage(), false);
            return redirect()->route('brands.create');
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
        $data['brand'] = $this->brand->getSingleBrand($id);
        return view('admin.brand.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['brand'] = $this->brand->getSingleBrand($id);
        return view('admin.brand.edit')->with($data);
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
        try{
            //Updating Category
            $brand = Brand::find($id);
            $brand->added_by = Auth::user()->id;
            $brand->name = $request->input('name');
            $brand->description = $request->input('description');
            if($brand->save()){
                $this->set_session('Brand Successfully Edited.', true);
            }else{
                $this->set_session('Brand couldnot be edited.', false);
            }
            return redirect()->route('brands.edit', ['id'=> $id]);
        }catch(\Exception $e){
            $this->set_session('Brand Couldnot be Edited.'.$e->getMessage(), false);
            return redirect()->route('brands.edit', ['id'=> $id]);
        }
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
