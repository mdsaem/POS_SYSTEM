@extends('layout.main')

@section('main_content')
<div class="row clearfix page-header">
<div class="col-md-4">
<a class=" btn btn-info" href="{{route ('users.index') }}" ><i class="fas fa-arrow-left"></i> Back </a>

</div>

<div class="col-md-8 text-right ">
<a class=" btn btn-info" href="{{url ('users/create') }}" ><i class="fa fa-plus"></i>New Saless</a>

<a class=" btn btn-info" href="{{url ('users/create') }}" ><i class="fa fa-plus"></i>New Purchase</a>

<a class=" btn btn-info" href="{{url ('users/create') }}" ><i class="fa fa-plus"></i>New Payment</a>

<a class=" btn btn-info" href="{{url ('users/create') }}" ><i class="fa fa-plus"></i>New Receipt</a>
</div>
</div>
<div class="card shadow mb-4">

<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

          <th>Group Name:</th>
    		<td>{{$users->group->title}}</td>
    	</tr>

    	<tr>
    		<th>Name:</th>
    		<td>{{$users->name}}</td>
    	</tr>

    	<tr>
    		<th>Email:</th>
    		<td>{{$users->email}}</td>
    	</tr>

    	<tr>
    		<th>Phone:</th>
    		<td>{{$users->phone}}</td>
    	</tr>


    	<tr>
    		<th>Address:</th>
    		<td>{{$users->address}}</td>
    	</tr>

    	

    	
              
            </tbody>
        </table>
    </div>
</div>

@stop


