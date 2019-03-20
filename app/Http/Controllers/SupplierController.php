<?php

namespace App\Http\Controllers;
use App\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SupplierController extends Controller
{
    protected $supplier;

    public function __construct(){
        $this->supplier = new Supplier();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['suppliers'] = $this->supplier->getAllSuppliers();

        return view('admin.supplier.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.supplier.create');
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
            //Creating new Supplier
            $supplier = $this->supplier;
            $supplier->added_by = Auth::user()->id;
            $supplier->name = $request->input('name');
            $supplier->contact_number = $request->input('contact_number');
            $supplier->address = $request->input('address');
            if($supplier->save()){
                $this->set_session('Supplier Successfully Added.', true);
            }else{
                $this->set_session('Supplier couldnot be added.', false);
            }
            return redirect()->route('suppliers.create');
        }catch(\Exception $e){
            $this->set_session('Supplier Couldnot be Added.'.$e->getMessage(), false);
            return redirect()->route('suppliers.create');
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
        $data['supplier'] = $this->supplier->getSingleSupplier($id);
        return view('admin.supplier.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['supplier'] = $this->supplier->getSingleSupplier($id);
        return view('admin.supplier.edit')->with($data);
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
            //Updating Supplier
            $supplier = Supplier::find($id);
            $supplier->added_by = Auth::user()->id;
            $supplier->name = $request->input('name');
            $supplier->contact_number = $request->input('contact_number');
            $supplier->address = $request->input('address');
            if($supplier->save()){
                $this->set_session('Supplier Successfully Edited.', true);
            }else{
                $this->set_session('Supplier couldnot be edited.', false);
            }
            return redirect()->route('suppliers.edit', ['id'=> $id]);
        }catch(\Exception $e){
            $this->set_session('Supplier Couldnot be Edited.'.$e->getMessage(), false);
            return redirect()->route('suppliers.edit', ['id'=> $id]);
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
