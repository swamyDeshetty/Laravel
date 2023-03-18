<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title> LARAVEL CRUD APPLICATION</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
.pagination{
  margin: -4% 0 0 46%;
}
.addnew{
    margin: 1% 1% 1% 120px;
}
h2{
    color:aqua;
    font-style: normal;
    font-family: 'FontAwesome';

}
body{
    background-color:cornflowerblue;
}
</style>

  </head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style='background-color: #00ff5573;'>
        Laravel Complete CRUD Application
    </nav>
  <div class="container" style="max-width: 30%;">

<div class="text-center mt-5 mb-4"> 
@if(Session::has('success'))
            <div class="alert alert-success" >
                {{Session::get('success')}}
            </div>
            @endif
  <h2>Employees List</h2>
</div>

   </div> 
    <div class="container">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <table class="table table-hover text-center">
  <thead class="table-success">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Age</th>
      <th scope="col">Action</th>
</tr>
  </thead>               
   <tbody>
                    @foreach($data as $stu)
                    <tr>
                        <td>{{$stu->id}}</td>
                        <td>{{$stu->first_name}}</td>
                        <td>{{$stu->last_name}}</td>
                        <td>{{$stu->email}}</td>
                        <td>{{$stu->age}}</td>
                        <td>
    <a href="{{url('edit-student/'.$stu->id)}}" class="link-primary"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
    <a href="{{url('delete-student/'.$stu->id)}}"class="link-dark "><i class="fa-solid fa-trash fs-5"></i></a>

</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$data->links()}}
            </div>
        </div>

    </div>
</div>
<div class='addnew'>
<a href="add-student" class="btn btn-success mb-3">Add New</a>
</div>
    
</body>
</html>