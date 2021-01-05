@extends('layout.product_layout')


@section('content')

<br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center m-4">
                    <h1><u>Article ID : {{$show->id}}<u></h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="mt-5">
                    <h2><u>Article Name :</u> {{$show->title}}</h2>
                </div>
                    <div class="mt-5">
                        <h2> Article Photo :</h2>
                        <img src="{{asset('')}}assets/images/testimonial-img.png">
                    </div>
                    <div class="mt-5">
                        <h2><u>Article Excert : </u>{{$show->excert}}</h2>
                    </div>
                    <div class="my-5">
                        <h2><u>Article Body : </u>{{$show->body}}</h2>
                    </div>

                    <a class="btn btn-primary" href="{{ route('article.edit',$show)}} "> Edit </a>
                    <a class="btn btn-primary" href=" "> Delete </a>

                    <p class="mt-5">
                        @foreach($show->tags as $tag)
                            <a href="{{ route('article.index',['tag'=>$tag->name])}} ">{{ $tag->name }}</a>
                        @endforeach
                    </p>
                    
            
                            
                     
            </div>
        </div>
    </div>
<br>



@endsection