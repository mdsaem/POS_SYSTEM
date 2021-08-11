@extends('layout.main')

@section('main_content')



<div class="row clearfix page-header">
	<div class="col-md-6">
		<h2>Categories</h2>
	</div>

	<div class="col-md-6 text-right ">
		<a class=" btn btn-info" href="{{url ('categories/create') }}" ><i class="fa fa-plus"></i> New Category</a>
	</div>
</div>
                   
<div class="card shadow mb-4">

<div class="card-body">
<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th class="text-right">Action</th>
               
            </tr>
        </thead>
  
    <tbody>
    	@foreach($categories as $category)
        <tr>
            
	        <td>{{$category->id}}</td>
	        <td>{{$category->title}}</td>
	        <td class="text-right">
    <form method="post" action="{{url('categories/'.$category->id)}}">

     
	 <a href="{{route('categories.edit', ['category' =>$category->id])}}" class="btn btn-success"><i class="fa fa-edit">Edit</i></a>
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