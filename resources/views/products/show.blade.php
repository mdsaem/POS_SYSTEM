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
</div>

<div class="card-body col-md-12" >
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <tr>
          <th class="col-md-4">Group Name:</th>
    		<td>{{$products->category->title}}</td>
    	</tr>

    	<tr>
    		<th class="col-md-4">Title:</th>
    		<td>{{$products->title}}</td>
    	</tr>

        <tr>
            <th class="col-md-4">Description:</th>
            <td>{{$products->description}}</td>
        </tr>

    	<tr>
    		<th class="col-md-4">Cost Price:</th>
    		<td>{{$products->cost_price}}</td>
    	</tr>

    	<tr>
    		<th class="col-md-4">Price:</th>
    		<td>{{$products->price}}</td>
    	</tr>

        </table>
    </div>
</div>



@stop


