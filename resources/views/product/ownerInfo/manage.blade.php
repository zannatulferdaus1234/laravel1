@extends('layout.product_layout')


@section('content')

<br>
<div id="testimonial" class="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="titlepage">
                    <h3>Owners Information</h3>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <a class="btn btn-info " href="{{ route('ownerInfo.create')}} "> Add Owners</a> 
            </div>
            
        </div>

        <div class="row">
        @foreach($ownerInfo as $ownerInfo)
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-4">
                <div class="banner-bg">
                  <a href="{{ route('ownerInfo.show',$ownerInfo) }}">  <img src="{{asset('')}}assets/images/testimonial-img.png"></a>
                    <div class="container">
                        <div class="carousel-caption relat">
                            <h3>{{$ownerInfo->name}}</h3>
                            <span><i class="fa fa-quote-left"></i> ( {{$ownerInfo->position}})<i class="fa fa-quote-right"></i></span>
                            <p>{{$ownerInfo->details}}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>
<br>



@endsection