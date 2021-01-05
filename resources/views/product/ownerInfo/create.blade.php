@extends('layout.product_layout')


@section('content')

<br>
      <!-- Testimonial -->
<div id="testimonial" class="testimonial">
   <div class="container">
      <div class="row">
         <div class="col-md-8">
            <div class="titlepage">
               <h3>Add Owners Information</h3>
            </div>
         </div>
         <div class="col-md-4 text-center">
            <a class="btn btn-info " href="{{ route('ownerInfo.manage')}} "> All Owners</a> 
         </div>
      </div>
            <div class="row">
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                  <div class="contact">
                     <h3>Contact Us</h3>
                     <form method="POST" action="{{ route('ownerInfo.store')}} ">
                     @csrf
                        <div class="row">
                           <div class="col-sm-12">
                              <input 
                              class="contactus @error('name') is-danger @enderror" placeholder=" Owner's Name" type="text" name="name" value="{{old('name')}}">
                              @error('name')
                              <p class="help text-danger">{{$errors->first('name')}}</p>
                              @enderror
                           </div>
                           
                           <div class="col-sm-12">
                              <input class="contactus" placeholder=" Owner's Position" type="text" name="position" value="{{old('position')}}">
                              @error('position')
                              <p class="help text-danger">{{$errors->first('position')}}</p>
                              @enderror
                           </div>
                           <div class="col-sm-12">
                              <textarea class="textarea" placeholder=" Owner's Description" type="text" name="details" value="{{old('details')}}"></textarea>
                              @error('details')
                              <p class="help text-danger">{{$errors->first('details')}}</p>
                              @enderror
                           </div>
                           <div class="col-sm-12">
                              <button class="send">Save Information</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <br>
      <!-- end Testimonial --> 




@endsection