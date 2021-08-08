@extends('layout.main')

@section('main_content')
<h2>Create new Group</h2>

        <div class="card shadow mb-4">
	            <div class="card-header py-3">
	                <h6 class="m-0 font-weight-bold text-primary">Create Group</h6>
	            </div>
        <div class="card-body">
        	<div class="row justify-content-md-center">
        		<div class="col-md-6">
        			
        		<form action="{{url('groups')}}" method="post">
        			@csrf
				  <div class="form-group">
					    <label for="title">Users Group Title</label>
					    <input type="title" name="title" class="form-control" id="title" placeholder="Group Title">
					    <small id="titleHelp" class="form-text text-muted">Title Of User Group</small>
				  </div>
				 
				<button type="submit" class="btn btn-primary">Submit</button>
          </form>
        		</div>
        	</div>
 			
         </div> 

         </div>                

@stop