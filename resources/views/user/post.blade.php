@extends('layouts.frontLayout.front_design')

@section('content')
		
		  <div class="row lc-row">


		<div class="col-md-8">
				
	        <img style="width:100%;" src="{{ asset ('/images/backend_images/posts/large/'.$Post->image) }}" class="img-fluid pb-2" alt="">
	        <h3 class="pageTitle">
	            {!! htmlspecialchars_decode($Post->post_title) !!}
	        </h3>
	        <p>
	           <div class="contend">
	            {!! htmlspecialchars_decode($Post->post_content) !!}
	           </div>
	        </p>
		</div>

        <div class="col-md-4">
        	  @include('layouts.frontLayout.front_sidebar')

        </div>
        </div>


        
@endsection

