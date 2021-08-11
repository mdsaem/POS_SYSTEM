@extends('layout.main')

@section('main_content')
<div class="row clearfix page-header">
<div class="col-md-6">
<h2>Users</h2>
</div>

<div class="col-md-6 text-right ">
<a class=" btn btn-info" href="{{url ('users/create') }}" ><i class="fa fa-plus"></i> New User</a>
</div>
</div>
<div class="card shadow mb-4">
<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>

                <tr>
                	<th>Id</th>
                	<th>Group ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th>Action</th>
                   
                </tr>
            </thead>
          
            <tbody>
            	@foreach($users as $user)

                <tr>
                	<td>{{$user->id}}</td>
                	<td>{{$user->group->title}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->address}}</td>
                     <td class="text-right">
                     	
                    


               <form method="post" action="{{url('users/'.$user->id)}}">

                    <a href="{{route('users.show', ['user' =>$user->id])}}" class="btn btn-info"><i class="fa fa-eye">show</i></a>

                    
               	<a href="{{route('users.edit', ['user' =>$user->id])}}" class="btn btn-success"><i class="fa fa-edit">Edit</i></a>
        		@csrf
        		@method('DELETE')
        		<button type="submit" onclick="return confirm('Are you Sure Delete')" class="btn btn-danger"><i class="fa fa-trash">Delete</i></button>  
        	</form>
                     </td>
                </tr>
              @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop