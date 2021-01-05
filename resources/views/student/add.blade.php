<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-3">
            <div class="">
            <h3>{{ Session::get('message') }}</h3>
            </div>
                <div class="card mt-5">
                
                <div class="card-header info-color white-text py-4 ">
                  <h5>
                    <strong>Student Information</strong>
                  </h5>
                  <a class="btn btn-primary " href="{{ route('manage') }}">All Student</a>
                </div>

    <div class="card-body px-lg-5 pt-0">
        <form class="text-center" style="color: #757575;" method="post" action="{{ route('store') }}">
        @csrf   
            <div class="form-group row mt-4">
                <label for="name" class="col-sm-2 col-form-label">Name  :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="student_name" required placeholder="Enter your Name">
                </div>
            </div>

            <div class="form-group row mt-4">
                <label for="address" class="col-sm-2 col-form-label">Address  :</label>
                <div class="col-sm-10">
                <textarea class="form-control" id="address" name="address" required placeholder="Enter your Address"></textarea>                    </div>
                </div>

                <div class="form-group row mt-4">
                <label for="phone" class="col-sm-2 col-form-label">Phone No.  :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="phone" name="phone_no" required placeholder="Enter your Phone No.">
                </div>
            </div>
                    
               
                <div class="form-group">
                    <div class="col-sm-12 text-right ">
                        <button type="submit" class="btn btn-primary">Save your information</button>
                    </div>
                </div>
        </form>

    </div>

</div>

</div>
</div> 

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  </body>
</html>