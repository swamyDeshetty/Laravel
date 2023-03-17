
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Add Record</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
          h3{
        font-family:cursive;
        color:yellow;
    }
    .email {
    margin: 2% 0 0 0%;
    }
    .form-control{
        margin: 2% 0 0 0%;
}
.input {
    margin: -1% 0 0 0%;
}
.btn {
    margin:1% 1% 1% 1%;
}
    </style>

</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style='background-color: #00ff5573;'>
        Laravel Complete CRUD Application
    </nav>
    
    <div class="container">
        <div class="text-center mb-4"> 
            <h3>Edit User</h3>
        </div>
        <div class="container d-flex justify-content-center">
            <form action="{{url('update-student')}}" method="post" style="width:50vw; min-width:300px;">
            @csrf
            <input type="hidden" name="id" value="{{$data->id}}">
            <div class="row mb-3">
                <div class="col">
                    <label for="form-label">First Name:</label>
                    <input type="text" class="form-control" name="first_name" placeholder="Albert" value="{{$data->first_name}}">
                @error('first_name')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
                @enderror
                </div>
                <div class="col">
                    <label for="form-label">Last Name:</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Einstein" value="{{$data->last_name}}">
                    @error('last_name')
                <div class="alert alert-success" role="alert">
                    {{$message}}
                </div>
                @enderror
                
                </div>
                <div class="email">
                <div class="mb-3">
                    <label for="form-label">Email:</label>
                    <input type="email" class="form-control" name="email" placeholder="name@email.com" value="{{$data->email}}">
                    @error('email')
                <div class="alert alert-secondary" role="alert">
                    {{$message}}
                </div>
                @enderror
                 </div>
                </div>
                <div class="col">
                    <label for="form-label">Age:</label>
                    <input type="text" class="form-control" name="age" placeholder="25" value="{{$data->age}}">
                    @error('age')
                <div class="alert alert-primary" role="alert">
                    {{$message}}
                </div>
                @enderror
                
                </div>
                <div class='btn'>
                    <button type="submit" class="btn btn-info" name="submit">Save</button>

                    <a href="{{url('index')}}" class="btn btn-secondary">Cancel</a>
                </div>

            </div>
        </form>
        </div>
    </div>