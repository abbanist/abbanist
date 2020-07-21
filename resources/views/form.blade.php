<style>

  .sub { display: none; }

</style>



        

  <div class="box">



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



    @if ($message = Session::get('success'))

   <div class="alert alert-success alert-block rounded-0">

    <button type="button" class="close" data-dismiss="alert">×</button>

          <strong>{{ $message }}</strong>

   </div>



   @endif



        <div>

             <form method="post" action="{{url('sendContact')}}"> 
            <form method="post">



              {{ csrf_field() }}



                <div class="form-group row m-0" style="    background: #F6F8FA;

    padding: 2.9rem 3.9rem;

    border: .2rem solid #d9dfec;

    ">

                      <input type="text" name="name" class="form-control mb-3 rounded-0" placeholder="Нэр" value="" />

                      <input type="text" name="email" class="form-control mb-3 rounded-0" placeholder="Имэйл" value="" />

                      <input type="text" name="phone" class="form-control mb-3 rounded-0" placeholder="Утасны дугаар" value="" />



                      <textarea name="message" class="form-control mb-3 rounded-0" placeholder="Зурвас" 

                    style="width: 100%; height: 150px;"></textarea>

                

                <button type="submit" name="send" class="btn btn-primary px-4 float-right rounded-0">Илгээх</button>



                </div>

            </form>

        </div>





  </div>

      {{-- end body --}}



      {{-- <div class="modal-footer"> --}}

       {{--  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        <button type="button" class="btn btn-primary">Save changes</button> --}}

      {{-- </div> --}}

    