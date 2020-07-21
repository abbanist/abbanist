@extends('layouts.frontLayout.front_design')

@section('content')
           <div class="row lc-row">


         <div class="col-md-8">

	         <h3 class="pageTitle">
	             {!! htmlspecialchars_decode($Page->page_title) !!}
	         </h3>
	         <p>
	         	 <div class="page_contend">
	             {!! htmlspecialchars_decode($Page->page_content) !!}
	         	</div>
	         </p>

		</div>

        <div class="col-md-4">
        	  @include('layouts.frontLayout.front_sidebar')

        </div>
        </div>

@endsection

