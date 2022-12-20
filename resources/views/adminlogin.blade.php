<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
    <title>Sign in</title>
    <style>
      #backcolor{
        background-color: black;
      }
      body{
        background-image: url('https://thumbor.forbes.com/thumbor/960x0/https%3A%2F%2Fblogs-images.forbes.com%2Fstartswithabang%2Ffiles%2F2017%2F09%2Fpexels-photo-128458-1200x461.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        
      }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark ">
        <a class="navbar-brand" href="#">iStock</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact us</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Login</a>
                </li>

            </ul>
        </div>
      </nav>

    <!--Form for property info-->
    <div class="container">
      <div class="row my-5">
        <div class="col-md-3"></div>
      <div class="col-md-6">
    <form class="centre-form" onsubmit="return validation()" action="/signedinadmin" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="container my-5" id="backcolor" >
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="inputEmail4" class="text-danger">Email</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
            <span id="email1" class="text-danger font-weight-bold"></span>
          </div>
          <div class="form-group col-md-12">
            <label for="inputPassword4" class="text-danger">Password</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password">
          </div>
          <span id="pass1" class="text-danger font-weight-bold"></span>
        </div>



        <button type="submit" class="btn btn-danger mb-4">Sign in</button>
      </div>
      </form>
    </div>

  </div>
</div>


    <script>
      function validation(){
        var email=document.getElementById("inputEmail4").value;
        var pass=document.getElementById("inputPassword4").value;

        if(email==""){
          document.getElementById("email1").innerHTML="*Please enter, Can't be Empty";
          return false;
        }

        if(pass==""){
          document.getElementById("pass1").innerHTML="*Please enter, Can't be Empty";
          return false;
        }

        if((pass.length <=7) || (pass.length >20) ){
          document.getElementById("pass1").innerHTML="*Password must be between of 7 to 20 characters ";
          return false;
        }

        
      }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>