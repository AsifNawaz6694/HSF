<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    protected $category;

    public function __construct(){
        $this->category = new Category();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['categories'] = $this->category->getAllCategories();

        return view('admin.category.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
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
            $category = $this->category;
            $category->added_by = Auth::user()->id;
            $category->name = $request->input('name');
            $category->description = $request->input('description');
            if($category->save()){

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
        $data['category'] = $this->category->getSingleCategory($id);
        return view('admin.category.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['category'] = $this->category->getSingleCategory($id);
        return view('admin.category.edit')->with($data);
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
            $category = Category::find($id);
            $category->added_by = Auth::user()->id;
            $category->name = $request->input('name');
            $category->description = $request->input('description');
            if($category->save()){
                $this->set_session('Category Successfully Edited.', true);
            }else{
                $this->set_session('Category couldnot be edited.', false);
            }
            return redirect()->route('categories.edit', ['id'=> $id]);
        }catch(\Exception $e){
            $this->set_session('Category Couldnot be Edited.'.$e->getMessage(), false);
            return redirect()->route('categories.edit', ['id'=> $id]);
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
