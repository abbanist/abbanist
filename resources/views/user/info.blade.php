@extends('layouts.frontLayout.front_design')

@section('content')

        {{-- <h2>{{$aboutpage->page_title}}</h2> --}}
        <img  style="width:100%;" src="{{ asset ('/images/backend_images/infos/large/'.$Info->image) }}" class="img-fluid pb-4" alt="">
        <h3>
            {!! htmlspecialchars_decode($Info->title) !!}
        </h3>
        <p>
            {!! htmlspecialchars_decode($Info->description) !!}
        </p>
        
@endsection

