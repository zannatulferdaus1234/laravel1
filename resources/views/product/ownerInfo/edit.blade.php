@extends('layout.product_layout')


@section('content')

<br>
      <!-- Testimonial -->
<div id="testimonial" class="testimonial">
   <div class="container">
      <div class="row">
         <div class="col-md-8">
            <div class="titlepage">
               <h3>Owners Information</h3>
            </div>
         </div>
         <div class="col-md-4 text-center">
            <a class="btn btn-info " href="{{ route('ownerInfo.manage')}} "> All Owners</a> 
         </div>
      </div>
            <div class="row">
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                  <div class="contact">
                     <h3>Update Information</h3>
                     <form method="POST" action="{{ route('ownerInfo.update',$edit) }}">
                     @csrf
                     @method('PUT')
                        <div class="row">
                           <div class="col-sm-12">
                              <input class="contactus" value="{{ $edit->name }}" type="text" name="name">
                           </div>
                           <div class="col-sm-12">
                              <input class="contactus" value="{{ $edit->position }}" type="text" name="position">
                           </div>
                           <div class="col-sm-12">
                              <textarea class="textarea" type="text" name="details">{{ $edit->details }}</textarea>
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