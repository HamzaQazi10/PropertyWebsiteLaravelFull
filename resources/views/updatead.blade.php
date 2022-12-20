<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
    <title>Post Property</title>

</head>
<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark ">
    <a class="navbar-brand" href="#">iStock</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Login</a>
            </li>

        </ul>
    </div>
  </nav>

<div class="container mt-4">
  <form class="my-form form-group" onsubmit="return validation()" action="/updatedad1/{{ $ad[0]->ad_id }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="jumbotron">
        <h1 class="text-centre text-danger mb-5">Property Ad Details Please Enter</h1>
        <div class="form-group col-md-4">
          <label  for="type1">Property Type</label>
          <select id="slct1" name="slct1" onchange="populate(this.id,'slct2')">
            <option value="">--Select Type--</option>
            <option value="Lands">Lands</option>
            <option value="Homes">Homes</option>
            <option value="Commercials">Commercials</option>
          </select>
          <span id="ptype1" class="text-danger font-weight-bold"></span>
        </div>

        <div class="form-group col-md-4">
          <label  for="type2">Select City</label>
          <select id="slct3"  name="slct3" onchange="populate3(this.id,'slct4')">
          
            <option value="">--Select City--</option>
            <option value="islamabad">Islamabad</option>
            <option value="karachi">Karachi</option>
            <option value="lahore">Lahore</option>
            <option value="rawalpindi">Rawalpindi</option>
          </select>
          <span id="city1" class="text-danger font-weight-bold"></span>
        </div>

        <div class="form-group col-md-4">
          <label  for="type3">Select Area</label>
          <select class="custom-select my-1 mr-sm-2" id="slct4" name="slct4">            
          </select>
          <span id="sarea1" class="text-danger font-weight-bold"></span>
        </div>
        
        <div class="form-group col-md-6">
          <label  for="type3">Category</label>
          <select class="custom-select my-1 mr-sm-2" id="slct2" name="slct2" onchange="populate1(this.id)">   
          </select>
          <span id="category1" class="text-danger font-weight-bold"></span>
        </div>



        <div class="form-group col-md-6">
          <label for="exampleFormControlTextarea1">Size</label>
          <input type="text" class="form-control" id="exampleFormControlTextarea1"
           placeholder="Area must be in Marla" name="inputSize"></input>
          <span id="area1" class="text-danger font-weight-bold"></span>
        </div>

        <div class="form-group col-md-6">
          <label for="exampleFormControlTextarea1">Price</label>
          <input type="text" class="form-control" id="exampleFormControlTextarea1"
           placeholder="Price in Pkr e.g 2000000" name="inputPrice"></input>
          <span id="price1" class="text-danger font-weight-bold"></span>
        </div>

        <div class="form-group col-md-6">
          <label for="plotno">Property No.</label>
          <input type="text" class="form-control" id="plotno"  placeholder="Plot No."name="inputPlot"></input>
          <span id="plot1" class="text-danger font-weight-bold"></span>
        </div>

        <div class="form-group col-md-6">
          <label for="streetno">Street No.</label>
          <input type="text" class="form-control" id="streetno"  placeholder="Street No." name="inputStreet"></input>
          <span id="street1" class="text-danger font-weight-bold"></span>
        </div>

        <div class="form-group col-md-6">
          <label for="streetno">Ad Description</label>
          <input type="text" class="form-control" id="detail"  placeholder="Description" name="detail"></input>
          <span id="detail1" class="text-danger font-weight-bold"></span>
        </div>

        <div class="form-group col-md-6">
          <label for="roomno">Number of Rooms</label>
          <input type="text" class="form-control" id="roomno" name="inputRoom" placeholder="Number of Rooms" disabled></input>
        </div>

        <div class="form-group col-md-6">
          <label for="washno">Number of WashRooms</label>
          <input type="text" class="form-control" id="washno"  name="inputWashroom" placeholder="Number of WashRooms" disabled></input>
        </div>

        <div class="form-group col-md-6">
          <label for="shopno">Number of Shops</label>
          <input type="text" class="form-control" id="shopno" name="inputShop" placeholder="Number of Shops" disabled></input>
        </div>

        
        <div class="form-group col-md-12">
          <label for="file" class="text-danger">Gallery</label>
          <input type="file" class="form-control" id="inputFile" name="file" placeholder="Upload Images here">
          <span id="gallery1" class="text-danger font-weight-bold"></span>
        </div>
      

        <button type="submit" class="btn btn-danger my-1">Post</button>
      </div>
  </form>
</div>

<div class="container mt-5 " style="margin-top: 80px;">
  <div class="row">
      <div class="col-12 col-sm-4">
          <h class="text-dark" style="font-size: 25px;"> Links</h>        
          <ul">
              <li> <a class="text-dark" href="#Home">Home</a></li>
              <li> <a class="text-dark" href="#About">About</a></li>
              <li> <a class="text-dark" href="#Contact">Contact</a></li>
          </ul>

      </div>
      <div class="col-12 col-sm-4">
          <h class="text-dark" style="font-size: 25px;"> Links</h>
          <p class="text-dark">Our Address <br>

              121, Clear Water Bay <br>

              Road<br>

              Clear Water Bay, Kowloon <br>

              HONG KONG <br>

              Tel.: +852 1234 5678 <br>

              Fax: +852 8765 4321 <br>

              Email: <br>
              <a type="email" href="istock@gmail.com"> istock@gmail.com</a>
          </p>
      </div>        
      <div class="col-12 col-sm-4">
          <h class="text-dark" style="font-size: 25px;"> Follow us at</h><br>
          
          <i class="fa fa-facebook-official" style="font-size: 48px;"></i>
          <i class="fa fa-twitter-square ml-3" style="font-size: 48px; "></i><br> 
          <i class="fa fa-youtube" style="font-size: 48px;"></i>
          <i class="fa fa-linkedin-square ml-3" style="font-size: 48px;"></i><br>
          
          
      
      </div>
  </div> 
</div>
</footer>
<footer class="page-footer bg-dark">

<!-- Copyright -->
<div class="footer-copyright text-center py-3" style="color: white;">© 2021 Copyright:
<a href="https://mdbootstrap.com/"> iStock.com</a>
</div>
<!-- Copyright -->

</footer>
    <!--Form for property info
    <div class="form-group">
        <label for="exampleFormControlSelect1">Example select</label>
        <select class="form-control" id="userInput">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>
    <form class="form-inline">
        <label  for="type1">Property Type</label>
        <select id="slct1" name="slct1" onchange="populate(this.id,'slct2')">
          <option value=""></option>
          <option value="Lands">Lands</option>
          <option value="Homes">Homes</option>
          <option value="Commercials">Commercials</option>
        </select>-->
        
        


        <!--label  for="type3">City1</label>
        <select class="custom-select my-1 mr-sm-2" id="slct3" name="slct3">
          
        </select>-->



      
   <!--     <div class="custom-control custom-checkbox my-1 mr-sm-2">
          <input type="checkbox" class="custom-control-input" id="customControlInline">
          <label class="custom-control-label" for="customControlInline">Remember my preference</label>
        </div>-->
      
        
   <!--   </form>-->

      <script>
        function validation(){
          var ptype=document.getElementById("slct1").value;
          var city=document.getElementById("slct3").value;
          var sarea=document.getElementById("slct4").value;
          var category=document.getElementById("slct2").value;
          var area=document.getElementById("exampleFormControlTextarea1").value;
          var plot=document.getElementById("plotno").value;
          var price=document.getElementById("price").value;
          var street=document.getElementById("streetno").value;
          var file=document.getElementById("inputFile").value;

          if(ptype==""){
          document.getElementById("ptype1").innerHTML="*Please select, Can't be Empty";
          return false;
        }

        if(city==""){
          document.getElementById("city1").innerHTML="*Please select, Can't be Empty";
          return false;
        }
        if(sarea==""){
          document.getElementById("sarea1").innerHTML="*Please select, Can't be Empty";
          return false;
        }

        if(category==""){
          document.getElementById("category1").innerHTML="*Please select, Can't be Empty";
          return false;
        }
        if(area==""){
          document.getElementById("area1").innerHTML="*Please enter, Can't be Empty";
          return false;
        }
        if(isNaN(area)){
          document.getElementById("area1").innerHTML="*Can't enter alphabets Please enter Numbers only";
          return false;
        }
        if(price==""){
          document.getElementById("price1").innerHTML="*Please enter, Can't be Empty";
          return false;
        }
        if(isNaN(price)){
          document.getElementById("price1").innerHTML="*Can't enter alphabets Please enter Numbers only";
          return false;
        }
        if(plot==""){
          document.getElementById("plot1").innerHTML="*Please enter, Can't be Empty";
          return false;
        }
        if(street==""){
          document.getElementById("street1").innerHTML="*Please enter, Can't be Empty";
          return false;
        }
        if(file==""){
          document.getElementById("gallery1").innerHTML="*Please enter, Can't be Empty";
          return false;
        }
        if(detail==""){
          document.getElementById("detail1").innerHTML="*Please enter, Can't be Empty";
          return false;
        }

        }



        function populate(s1,s2){
          var s1 = document.getElementById(s1);
          var s2 = document.getElementById(s2);
          s2.innerHTML = "";
          if(s1.value == "Lands"){
            var optionArray = ["|","residential|Residential","agriculture|Agriculture"];
          } else if(s1.value == "Homes"){
            var optionArray = ["|","house|House","flat|Flat"];
          } else if(s1.value == "Commercials"){
            var optionArray = ["|","lands|Lands","plaza|Plaza","shop|Shops"];
          }
          for(var option in optionArray){
            var pair = optionArray[option].split("|");
            var newOption = document.createElement("option");
            newOption.value = pair[0];
            newOption.innerHTML = pair[1];
            s2.options.add(newOption);
          }
        }

        function populate3(s1,s2){
          var s1 = document.getElementById(s1);
          var s2 = document.getElementById(s2);
          s2.innerHTML = "";
          if(s1.value == "islamabad"){
            var optionArray = ["|","f-11|F-11","g-11|G-11"];
          } else if(s1.value == "karachi"){
            var optionArray = ["|","clifton|Clifton","nazimabad|Nazimabad"];
          } else if(s1.value == "lahore"){
            var optionArray = ["|","dha|Dha","bahria|Bahria"];
          }
          else if(s1.value == "rawalpindi"){
            var optionArray = ["|","askari|Askari","scheme|Scheme"];
          }
          for(var option in optionArray){
            var pair = optionArray[option].split("|");
            var newOption = document.createElement("option");
            newOption.value = pair[0];
            newOption.innerHTML = pair[1];
            s2.options.add(newOption);
          }
        }

        function populate1(s1){
          var s1=document.getElementById(s1);
            if(s1.value=="house"){
              document.getElementById("roomno").disabled = false;
              document.getElementById("washno").disabled = false;
            }
            else if(s1.value=="flat"){
              document.getElementById("roomno").disabled = false;
              document.getElementById("washno").disabled = false;
            }
            else if(s1.value=="plaza"){
              document.getElementById("shopno").disabled = false;
            }
            else if(s1.value=="residential"){
              document.getElementById("roomno").disabled = true;
              document.getElementById("washno").disabled = true;
              document.getElementById("shopno").disabled = true;
            }
        }
        
        


        </script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>