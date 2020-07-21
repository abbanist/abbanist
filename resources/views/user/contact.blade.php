@extends('layouts.frontLayout.front_design') @section('content')

<div class="row lc-row" style="border:none; background:transparent;">

    <div class="col-md-6">

        <h3 class="pageTitle mb-4">

	        Холбоо барих

	    </h3> @include('form')

    </div>

    <div class="col-md-3 offset-1">

        
         {!!$contactInfo->page_content!!}

    </div>

</div>

</div>

@endsection