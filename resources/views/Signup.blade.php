<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
    <title>Sign up</title>
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
                <a class="nav-link" href="#">Home </a>
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
      <div class="row">
        <div class="col-md-3"></div>
      <div class="col-md-6">
    <form class="centre-form" onsubmit="return validation()" action="/signedup" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="container my-5" id="backcolor" >
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="inputEmail" class="text-danger">Email</label>
            <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Email">
            <span id="email1" class="text-danger font-weight-bold"></span>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="inputPassword" class="text-danger">Password</label>
            <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Password">
            <span id="pass1" class="text-danger font-weight-bold"></span>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="inputConfirmPassword" class="text-danger">Confirm Password</label>
            <input type="password" class="form-control" id="inputConfirmPassword" name="inputConfirmPassword" placeholder="Confirm Password">
            <span id="confirm1" class="text-danger font-weight-bold"></span>
          </div>
        </div>

        <div class="form-row">
        <div class="form-group col-md-12">
          <label for="inputPhone" class="text-danger">Phone Number</label>
          <input type="text" class="form-control" id="inputPhone" name="inputPhone" placeholder="Number">
          <span id="phone1" class="text-danger font-weight-bold"></span>
        </div>
      </div>

        <div class="form-row">
        <div class="form-group col-md-12">
          <label for="inputAddress" class="text-danger">Address</label>
          <input type="text" class="form-control" id="inputAddress" name="inputAddress" placeholder="1234 Main St">
          <span id="address1" class="text-danger font-weight-bold"></span>
        </div>
      </div>

        <div class="form-row">
          <div class="form-group col-md-8">
            <label for="inputCity" class="text-danger">City</label>
            <select id="inputCity" name="inputCity" class="form-control">
              <option selected>Choose City</option>
              <option>Islamabad</option>
              <option>Lahore</option>
            </select>
            <span id="city1" class="text-danger font-weight-bold"></span>
          </div>
 <!--         <div class="form-group col-md-4">
            <label for="inputState" class="text-danger">State</label>
            <select id="inputState" class="form-control">
              <option selected>Choose...</option>
              <option>...</option>
            </select>
          </div>-->
          <div class="form-group col-md-4">
            <label for="inputZip" class="text-danger">Zip</label>
            <input type="text" class="form-control" id="inputZip" name="inputZip">
            <span id="zip1" class="text-danger font-weight-bold"></span>
          </div>
        </div>
       <!-- <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label text-danger" for="gridCheck">
              Check me out
            </label>
          </div>
        </div>-->
        <input type="submit" class="btn btn-danger mb-4"></input>
      </div>
      </form>
    </div>

  </div>
</div>

    <script type="text/javascript">
      function validation(){
        var email=document.getElementById("inputEmail").value;
        var pass=document.getElementById("inputPassword").value;
        var confirm=document.getElementById("inputConfirmPassword").value;
        var phone=document.getElementById("inputPhone").value;
        var address=document.getElementById("inputAddress").value;
        var city=document.getElementById("inputCity").value;
        var zip=document.getElementById("inputZip").value;

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

        if(confirm==""){
          document.getElementById("confirm1").innerHTML="*Please enter, Can't be Empty";
          return false;
        }

        if(pass!=confirm){
          document.getElementById("confirm1").innerHTML="*Please enter the same password, Above Password is different";
          return false;
        }

        if(phone==""){
          document.getElementById("phone1").innerHTML="*Please enter, Can't be Empty";
          return false;
        }

        if(isNaN(phone)){
          document.getElementById("phone1").innerHTML="*Please enter Digits only";
          return false;
        }

        if((phone.length!=9) && (phone.length!=10)){
          document.getElementById("phone1").innerHTML="*wrong length";
          return false;
        }
        
        if(address==""){
          document.getElementById("address1").innerHTML="*Please enter, Can't be Empty";
          return false;
        }

        if(city=="Choose City"){
          document.getElementById("city1").innerHTML="*Please enter, Can't be Empty";
          return false;
        }

        if(zip==""){
          document.getElementById("zip1").innerHTML="*Please enter, Can't be Empty";
          return false;
        }

        if(zip.length!=5){
          document.getElementById("zip1").innerHTML="*Invalid Zip";
          return false;
        }

      }
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>