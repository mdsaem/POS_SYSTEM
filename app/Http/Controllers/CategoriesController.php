<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Group;
use Illuminate\Support\Facades\Session;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['categories'] = Category::all();

        return view('category.categories',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $this->data['headline'] = 'Add New Category';
         $this->data['mode'] = 'create';
        return view('category.form',$this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
             
          'title'      => 'required|string',
          

        ]);
            
            $data = $request->all();

            if (Category::create($data)) {
                Session::flash('message','Category Create Successfully');
            }

            return redirect()->to('categories');
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
        $this->data['categories']= Category::findOrFail($id);
        $this->data['groups']=group::arrayForSelect();
        $this->data['mode']='edit';
        $this->data['headline']='update Information';
        return view('category.form',$this->data);
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
        $data =  $request->all();
        $categories = Category::find($id); 
        $categories->title = $data['title'];
   
        if ($categories->save()) {
            Session::flash('message', 'Category Update Successfully');
         }
        
        return redirect()->to('categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       ;
       if (Category::find($id)->delete()) {
            Session::flash('message', 'Category Delete Successfully');
         }
         return redirect()->to('categories');
    }
}
