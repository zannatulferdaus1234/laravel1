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
            <div class="col-md-8 col-md-offset-2">
            <div class="">
            <h3>{{ Session::get('message') }}</h3>
            </div>
            <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Roll</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Phone No.</th>
      <th scope="col"> Action</th>

    </tr>
  </thead>
  <tbody>
  @foreach($student as $row)
    <tr>
      <th scope="row">{{ $loop->iteration}}</th>
      <td>{{ $row->student_name}}</td>
      <td>{{ $row->address}}</td>
      <td>{{ $row->phone_no}}</td>
      <td> 
      <a class="btn btn-primary" href="{{ route('edit',$row->id)}}"> Edit</a>
      <a class="btn btn-primary" href="{{ route('delete',$row->id)}}">Delete</a>
      </td>
    </tr>
    @endforeach
   
  </tbody>
</table>
<a class="btn btn-primary" href="{{ route('student') }}">Add Student</a>
            
           

</div>

</div>
</div> 

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  </body>
</html>