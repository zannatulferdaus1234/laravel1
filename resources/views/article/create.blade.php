@extends('layout.product_layout')


@section('content')

<br>
      <!-- Testimonial -->
<div id="testimonial" class="testimonial">
   <div class="container">
      <div class="row">
         <div class="col-md-8">
            <div class="titlepage">
               <h3>Add Article</h3>
            </div>
         </div>
         <div class="col-md-4 text-center">
            <a class="btn btn-info " href="{{ route('article.index')}} "> Articles</a> 
         </div>
      </div>
            <div class="row">
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                  <div class="contact">
                     <h3>Create Article</h3>
                     <form method="POST" action="{{ route('article.store')}} ">
                     @csrf
                        <div class="row">
                           <div class="col-sm-12">
                              <input 
                              class="contactus @error('title') is-danger @enderror" placeholder="Article Title" type="text" name="title" value="{{old('title')}}">
                              @error('title')
                              <p class="help text-danger">{{$errors->first('title')}}</p>
                              @enderror
                           </div>
                           
                           <div class="col-sm-12">
                              <input class="contactus" placeholder="Article Excert" type="text" name="excert" value="{{old('excert')}}">
                              @error('excert')
                              <p class="help text-danger">{{$errors->first('excert')}}</p>
                              @enderror
                           </div>
                           <div class="col-sm-12">
                              <textarea class="textarea" placeholder="Article body" type="text" name="body" value="{{old('body')}}"></textarea>
                              @error('body')
                              <p class="help text-danger">{{$errors->first('body')}}</p>
                              @enderror
                           </div>

                           <div class="col-sm-6">

                              <select class="nice-select" name="tags[]" multiple>
                              @foreach($tags as $tag)
                                 <option value="{{$tag->id}}">{{ $tag->name }}</option>
                              @endforeach
                              </select>
                            
                           
                              @error('body')
                              <p class="help text-danger">{{$message}}</p>
                              @enderror
                           </div>

                           <div class="col-sm-12">
                              <button class="send">Save Article</button>
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