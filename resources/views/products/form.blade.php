@extends('layout.main')

@section('main_content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
		<h2>{{$headline}}</h2>

        <div class="card shadow mb-4">
	            <div class="card-header py-3">
	                <h6 class="m-0 font-weight-bold text-primary">Create Product</h6>
	            </div>
        <div class="card-body">
        	<div class="row justify-content-md-center">
        		<div class="col-md-6">
        	
        			 @if($mode == 'edit')

        		 {!! Form::model($products, ['route' =>['products.update',$products->id] , 'method' => 'put']) !!}

        		 @else
        		 {!! Form::open(['route' => 'products.store', 'method' => 'post']) !!}

        		@endif

        		
        		
				   <div class="form-group row">
					    <label for="name" class="col-sm-3 col-form-label">User Group <span class="text-danger">*</span> </label>
					    <div class="col-sm-9">
					      {{ Form::select('category_id', $categories, NULL, [ 'class'=>'form-control', 'id' => 'group', 'placeholder' => 'Select category' ]) }}
					    </div>
					  </div>

					  <div class="form-group row">
					    <label for="name" class="col-sm-3 col-form-label">Title <span class="text-danger">*</span> </label>
					    <div class="col-sm-9">
					      {{ Form::text('title', NULL, [ 'class'=>'form-control', 'id' => 'name', 'placeholder' => 'Product Title' ]) }}
					    </div>
					  </div>

					  <div class="form-group row">
					    <label for="phone" class="col-sm-3 col-form-label">Description <span class="text-danger">*</span>  </label>
					    <div class="col-sm-9">
					      {{ Form::textarea('description', NULL, [ 'class'=>'form-control', 'id' => 'description', 'placeholder' => 'Product Description' ]) }}
					    </div>
					  </div>
					  
					  <div class="form-group row">
					    <label for="email" class="col-sm-3 col-form-label">Cost Price</label>
					    <div class="col-sm-9">
					      {{ Form::text('cost_price', NULL, [ 'class'=>'form-control', 'id' => 'price', 'placeholder' => 'Cost Price' ]) }}
					    </div>
					  </div>
					  
					  <div class="form-group row">
					    <label for="address" class="col-sm-3 col-form-label">Product Price</label>
					    <div class="col-sm-9">
					      {{ Form::text('price', NULL, [ 'class'=>'form-control', 'id' => 'price', 'placeholder' => 'price' ]) }}
					    </div>
					  </div>


					  <div class="mt-4 text-right">
					  	<button type="submit" class="btn btn-primary">Submit</button>	
					  </div>
					  
					{!! Form::close() !!}
	    		</div>
	    	</div>
	    </div>
	</div>
@stop