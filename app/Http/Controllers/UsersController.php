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
		$this->data['groups']=group::arrayForSelect();
	   /* $groups=group::all();
		$this->data['groups']=[];
		foreach ($groups as  $group) {
			$this->data['groups'][$group->id]=$group->title;*/
		
		return view('user.create',$this->data);
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
            'name' => 'required|string',
            'phone' => 'required|numeric|unique:users',
            'email' => 'nullable|email|unique:users',

		]);

	     $data=$request->all();
         if (User::create($data)) {
         	Session::flash('message', 'Group create Successfully');
         }
        
    	return redirect()->to('users');
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
