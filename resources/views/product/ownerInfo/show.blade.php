@extends('layout.product_layout')


@section('content')

<br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center m-4">
                    <h1>Owners Information</h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="">
                        <h2> Owner ID : {{$show->id}}</h2>   
                    </div>
                    <div class="mt-5">
                        <h2> Owner Photo :</h2>
                        <img src="{{asset('')}}assets/images/testimonial-img.png">
                    </div>

                    <div class="mt-5">
                        <h2>Owner Name : {{$show->name}}</h2>
                    </div>
                    <div class="mt-5">
                        <h2> Owner Position : {{$show->position}}</h2>
                    </div>
                    <div class="my-5">
                        <h2> Owner Details : {{$show->details}}</h2>
                    </div>

                    <a class="btn btn-primary" href="{{ route('ownerInfo.edit',$show)}} "> Edit </a>
                    <a class="btn btn-primary" href="{{ route('ownerInfo.destroy')}} "> Delete </a>
                    
            
                            
                     
            </div>
        </div>
    </div>
<br>



@endsection