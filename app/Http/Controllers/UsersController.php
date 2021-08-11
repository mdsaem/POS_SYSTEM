<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateUserRequest;
use App\Models\User;
use App\Models\group;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
	   $this->data['users']= User::all();
	   return view('user.users',$this->data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()

	{
		$this->data['groups']   =   group::arrayForSelect();
		$this->data['mode']     =   'create';
		$this->data['headline'] =  'Add New User';
	   /* $groups=group::all();
		$this->data['groups']=[];
		foreach ($groups as  $group) {
			$this->data['groups'][$group->id]=$group->title;*/
		
		return view('user.form',$this->data);
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
             'group_id' => 'required',
            'name'      => 'required|string',
            'phone'     => 'required|numeric|unique:users',
            'email'     => 'nullable|email|unique:users',

		]);

	     $data=$request->all();
         if (User::create($data)) {
         	Session::flash('message', 'User create Successfully');
         }
        
    	return redirect()->to('users');
}


public function show($id)
	{
		$this->data['users']= User::find($id);
	
		return view('user.show',$this->data);
	}


	public function edit($id)
	{
		$this->data['users']= User::findOrFail($id);
		$this->data['groups']=group::arrayForSelect();
		$this->data['mode']='edit';
		$this->data['headline']='update Information';
		return view('user.form',$this->data);
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
		$users = User::find($id);
		$users->group_id = $data['group_id'];
		$users->name = $data['name'];
		$users->email = $data['email'];
		$users->phone = $data['phone'];
		$users->address = $data['address'];



		if ($users->save()) {
         	Session::flash('message', 'User Update Successfully');
         }
        
    	return redirect()->to('users');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		
         if (User::find($id)->delete()) {
         	Session::flash('message', 'User Delete Successfully');
         }
        
    	return redirect()->to('users');
	}

}