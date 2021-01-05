@extends('layout.product_layout')


@section('content')

<br>
<div id="testimonial" class="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="titlepage">
                    <h3>All Article</h3>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <a class="btn btn-info " href="{{ route('article.create')}} ">Create Article</a> 
            </div>
            
        </div>

        <div class="row">
        @forelse($article as $article)
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-4">
                <div class="banner-bg">
                    <div class="container">
                        <div class="p-4">
                        <a href="{{ route('article.show',$article) }}"> <h3 class="py-3"><u>Title : {{$article->title}}</u></h3></a>
                            <p class="py-2">Excert : {{$article->excert}}</p>
                            <p class="py-3">Body : {{$article->body}}</p>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <p>No relevant articles yet </p>
        @endforelse
        </div>
    </div>
</div>
<br>



@endsection
