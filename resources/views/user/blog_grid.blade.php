@extends('layouts.frontLayout.front_design')

@section('content')


   <h3 class="pageTitle w-100 text-center my-4" >

              {{-- {!! htmlspecialchars_decode($Post->post_title) !!} --}}

              МЭДЭЭЛЭЛ

      </h3>

<div class="row lc-row mb-5">

   
    

      @foreach ($posts as $post)

      <div class=" col-md-3">



        <div class="mb-4" style="border: 1px solid rgba(0,0,0,.125);">

          

          <div class="" style="

          height: 200px;width: 100%;background-size: cover;

          background-image: url({{ asset('images/backend_images/posts/large/'.$post->image) }});">

          </div>



          <div class="p-3" style="background-color: #f6f8fa;">

  

         <h5 style="font-size: 15px;">
          {!! str_limit($post->post_title, 50) !!}
        </h5>



            <i class="fas fa-long-arrow-alt-right align-self-center"></i>



            <a class="ml-2" href="/post/{{$post->id}}" >ДЭЛГЭРЭНГҮЙ</a>



          </div>



       </div>

       </div>



      @endforeach





</div>





@endsection 

           {{-- <p>

            {!! str_limit($post->post_content, 70)  !!}</p> 

            --}}