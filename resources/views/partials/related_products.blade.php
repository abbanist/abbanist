{{--  <div class="row lc-row">

        <p class="text-center w-100">
         САНАЛ БОЛГОХ БҮТЭЭГДЭХҮҮН 
        </p>

        @foreach ($products as $product)

        <div class="lc-col-md-4 col-md-4">
         <div class="card mb-4 box-shadow">
          <img class="card-img-top" data-src="" alt="" style="height: 300px; width: 100%; display: block;" 
          src="{{ asset('images/backend_images/products/large/'.$product->image) }}" data-holder-rendered="true">
          <div class="card-body">
            <h5>{{$product->title}}</h5>
            <p class="card-text">{!! str_limit($product->content, 70)  !!}</p>

            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <i class="fas fa-long-arrow-alt-right align-self-center"></i>
                <a class="ml-2" href="/product/{{$product->id}}">ДЭЛГЭРЭНГҮЙ</a>
              </div>
            </div>
          </div>
        </div>
        </div>
        
      @endforeach --}}