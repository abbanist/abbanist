
                    <style>
  .sub { display: none; }
</style>

<!-- Button trigger modal -->
  <button type="button" class="btn btn-primary rounded-0" data-toggle="collapse" 
  data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    ШУУД ЗАХИАЛАХ
  </button>
  <div class="message mt-3">
    
    @if ($message = Session::get('success'))
   <div class="alert alert-success alert-block rounded-0">
    <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>{{ $message }}</strong>
   </div>
   @endif
  </div>

<div class="collapse" id="collapseExample">
 <div class="box mt-3 border">

    @if (count($errors) > 0)
    <div class="alert alert-danger rounded-0">
     <button type="button" class="close" data-dismiss="alert">×</button>
     <ul>
      @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
      @endforeach
     </ul>
    </div>
   @endif

        <div class="col-md-12 mx-auto">
            <form method="post" action="{{url('send-engiin-product')}}">
              {{ csrf_field() }}
                <div class="form-group row mt-3">
                    <div class="col-sm-4">
                      <label for="exampleFormControlSelect1">Нэр</label>
                      <input type="text" name="name" class="form-control rounded-0 pro_name"
                      style="font-weight: 900;text-align: left;" placeholder="" value="" />
                    </div>

                    <div class="col-sm-4">
                      <label for="exampleFormControlSelect1">Тоо ширхэг</label>
                      <input type="number" name="quantity" class="form-control rounded-0" placeholder="1" min="1" max="3" value="1" />
                    </div>

                    <div class="col-sm-4">
                      <label for="exampleFormControlSelect1">Утасны дугаар</label>
                      <input type="text" name="phone" class="form-control rounded-0" placeholder="Утасны дугаар" min="8" max="" value="" />
                    </div>

                    <div class="col">
                      <div class="mt-3">
                        <button type="submit" name="send" 
                          class="order_b btn btn-primary px-4 float-left rounded-0">
                          Захиалах
                        </button>
                      </div>
                    </div>
                </div>
                    
            </form>
        </div>


  </div>
  </div>