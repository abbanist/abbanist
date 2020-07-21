@extends('layouts.frontLayout.front_design')
@section('content')

<div class="row">


  <div class="lc-col-md-12 col-md-12">

    {{-- ***********************************************************--}}

    {{-- <div class="row lc-row">
  
              <p class="text-center w-100">
               ГАРЧИГ 
              </p>

              <div class="lc-col-md-4 col-md-4">
               <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 300px; width: 100%; display: block;" src="http://via.placeholder.com/350x350.png" data-holder-rendered="true">
                <div class="card-body">
                  <h5>lorem</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <i class="fas fa-long-arrow-alt-right align-self-center"></i>
                      <a class="ml-2" href="#" >ДЭЛГЭРЭНГҮЙ</a>
                    </div>
                  </div>
                </div>
              </div>
              </div>

               <div class="lc-col-md-4 col-md-4">
               <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 300px; width: 100%; display: block;" src="http://via.placeholder.com/350x350.png" data-holder-rendered="true">
                <div class="card-body">
                  <h5>lorem</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <i class="fas fa-long-arrow-alt-right align-self-center"></i>
                      <a class="ml-2" href="#" >ДЭЛГЭРЭНГҮЙ</a>
                    </div>
                  </div>
                </div>
              </div>
              </div>

               <div class="lc-col-md-4 col-md-4">
               <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 300px; width: 100%; display: block;" src="http://via.placeholder.com/350x350.png" data-holder-rendered="true">
                <div class="card-body">
                  <h5>lorem</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                     <div class="btn-group">
                      <i class="fas fa-long-arrow-alt-right align-self-center"></i>
                      <a class="ml-2" href="#" >ДЭЛГЭРЭНГҮЙ</a>
                    </div>
                  </div>
                </div>
              </div>
              </div>
              </div> --}}





    {{-- ***********************************************************--}}

    <div class="row lc-row mt-4">

      <div class="lc-col-md-4 col-md-12">
        <!-- <div class="video-f"> -->
        <!--  <iframe width="100%" height="323" src="{{$frontsetup->video_embed}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->

        <img src="{{ asset ('/images/frontend_images/setups/large/'.$frontsetup->leftimage) }}" class="img-fluid w-100"
          alt="">
        <!-- </div> -->
      </div>

      <div class="lc-col-md-4 col-md-6 align-self-center">


        {!!$frontsetup->video_description!!}

      </div>


    </div>



    <p class="" style="text-align: left;
    margin: 30px 0px 10px 0;
    font-size: 20px;
    font-weight: 500;">
      {{-- БҮТЭЭГДЭХҮҮН  --}}
      {{$frontsetup->product_title}}
    </p>

    <div class="row lc-row pt-0" style="background: none; 
     border: 0px solid #ccc;">
      {{-- start --}}

      <!--@foreach ($products as $product)-->
      <!--<div class="lc-col-md-4 col-md-3">-->
      <!--  <div class="card mb-4 box-shadow">-->
      <!--    <img class="card-img-top" data-src="" alt="" style="height: 200px; width: 100%; display: block;" src="{{ asset('images/backend_images/products/large/'.$product->image) }}" data-holder-rendered="true">-->
      <!--    <div class="card-body">-->
      <!--      <a href="/product/{{$product->id}}" style="color: #333;font-size: 14px;">{!! strip_tags(str_limit($product->title, 35)) !!}</a>-->
      <!-- <p class="card-text">{!! strip_tags(str_limit($product->content, 25))  !!}</p> -->
      <!--      <p class="card-text">-->
      <!--        <b>{{$product->mainprice}} ₮</b>-->
      <!--      </p>-->
      <!--    </div>-->
      <!--  </div>-->
      <!--</div>-->

      <!--@endforeach-->


      @foreach ($products as $product)
      <div class="col-md-3 p-1">

        <div class="mb-2" style="border:1px solid rgba(144, 144, 144, 0.125);">

          <div class="pro_images" style="
                      width: 100%;background-size: cover;
                      background-image: url({{ asset('images/backend_images/products/large/'.$product->image) }});">
          </div>

          <div class="p-3" style="background-color: #f6f8fa;">

            <p href="/product/{{$product->id}}" style="color:#4d4d4d;text-align: left;font-size: 12px;">
              {!! str_limit($product->title, 70) !!}
            </p>

            <!--<p>-->
            <!--  {!!strip_tags( str_limit($product->content, 45)) !!}-->

            <!--</p>-->

            <!--<p class="card-text">{!! strip_tags(str_limit($product->content, 25))  !!}</p> -->
            <p class="card-text">
              <p style="    font-weight: 600;
    font-size: 22px;
">₮ {{$product->mainprice}} </p>
            </p>
            <i class="fas fa-long-arrow-alt-right align-self-center"></i>
            <a class="ml-2" href="/product/{{$product->id}}">Дэлгэрэнгүй</a>

          </div>
        </div>
      </div>
      @endforeach

      <a class="order_b btn btn-dark px-4 float-left rounded-0 tex" href="/products" style="    text-align: center;
    margin: auto;
    margin-top: 1rem;">БҮГДИЙГ ХАРАХ</a>
    </div>




    {{-- @foreach ($products->chunk(5) as $chunk)
        <div class="row lc-row">
          @foreach($chunk as $product)
            <div class="lc-col-md-2 col">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="" alt="" style=" width: 100%; display: block;" src="{{ asset('images/backend_images/products/large/'.$product->image) }}"
    data-holder-rendered="true">
    <div class="card-body">
      <a href="/product/{{$product->id}}" style="color: #333;font-size: 14px;">{!! strip_tags(str_limit($product->title,
        35)) !!}</a>
      <!-- <p class="card-text">{!! strip_tags(str_limit($product->content, 25))  !!}</p> -->
      <p class="card-text">
        <b>$8.00 - $12.00</b>
      </p>
      <!--  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <i class="fas fa-long-arrow-alt-right align-self-center"></i>
                      <a class="ml-2" href="/product/{{$product->id}}">ДЭЛГЭРЭНГҮЙ</a>
                    </div>
                  </div> -->
    </div>
  </div>
</div>
@endforeach
</div>
@endforeach --}}






<p class="" style="text-align: left;
    margin: 30px 0px 10px 0;
    font-size: 20px;
    font-weight: 500;">
  {{-- БҮТЭЭГДЭХҮҮН  --}}
  {{$frontsetup->blog_title}}
</p>


<div class="row lc-row">


  @foreach ($posts as $post)

  <div class="lc-col-md-3 col-md-3">

    <div class="card mb-4 box-shadow" style="border:1px solid rgba(144, 144, 144, 0.125);">
      <div class="" style="
                      height: 200px;width: 100%;background-size: cover;
                      background-image: url({{ asset('images/backend_images/posts/large/'.$post->image) }});">
      </div>

      <!--<img class="card-img-top" data-src="" alt="" style="height: 220px; width: 100%; display: block;" src="{{ asset('images/backend_images/posts/large/'.$post->image) }}" data-holder-rendered="true">-->
      <div class="card-body">
        {{-- <h5>{{$post->post_title}}</h5> --}}

        <h5 style="font-size: 15px;">
          {!! str_limit($post->post_title, 50) !!}
        </h5>

        {{-- <p class="card-text">{!! strip_tags(str_limit($post->post_content, 70))  !!}</p> --}}

        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <i class="fas fa-long-arrow-alt-right align-self-center"></i>
            <a class="ml-2" href="/post/{{$post->id}}">ДЭЛГЭРЭНГҮЙ</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  @endforeach

  <a class="order_b btn btn-dark px-4 float-left rounded-0 tex" href="/blogs" style="    text-align: center;
    margin: auto;
    margin-top: 1rem;">БҮГДИЙГ ХАРАХ</a>
</div>



<p class="" style="text-align: left;
    margin: 30px 0px 10px 0;
    font-size: 20px;
    font-weight: 500;">
  {{-- БҮТЭЭГДЭХҮҮН  --}}
  {!!$frontsetup->partner_title!!}
</p>



<div class="row lc-row mb-5 pt-5">


  <div class="col-md-4">
    {!!$frontsetup->partner_description!!}
  </div>
  <div class="col-md-8">

    <div class="owl-one owl-carousel owl-theme pt-2 ">
      @foreach ($hamts as $c)
      <div class="item p-2">
        <a href="{{$c->id}}">

          <img class="img-fluid vm_img " src="{{ asset ('/images/backend_images/hamts/large/'.$c->image)}}" alt="">
        </a>
      </div>
      @endforeach
    </div>
  </div>


</div>







</div>
</div>
@endsection