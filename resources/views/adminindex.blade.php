<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .background{
    background-image: url('https://media.istockphoto.com/photos/beautiful-luxury-home-exterior-at-twilight-picture-id1026205392');
    background-size: 100%;
    background-repeat:no-repeat;
    height: 500px;
    background-size: cover;
        }
    ul{
    list-style-type: none;
    
}
    .navbar-brand{
    font-size: larger;
    font-family: monospace;
}
    .hov:hover{
        color:white;
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
                <li class="nav-item active">
                    <a class="nav-link" href="index">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admindashboard">profile</a>
                </li>
                <li class="nav-item">
                <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">
                <a href="postad" method="POST" class="nav-link" href="signin">Post Ad</a>
                </button>
                </li>
    

            </ul>
        </div>
      </nav>
  

    <div class="jumbotron background mb-0 jumbotron-fluid" style="height: 500px; padding-top: 90px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">     
                <div class="col-md-4 text-light">
                   <h3 class="display-5">Ads in Pakistan</h1>
                </div>
                <div class="row">
                <div class="col-md-4">
                       <form class="form-inline my-2 my-lg-0" >                           
                          <!--  <form class="form-inline md-3 my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search it" aria-label="Search">
                                <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
                                   
                                </form>
                                       <h1 style="color:white">Search Property by City</h1> 

<input type="text" id="txtSearch" alt="Search Criteria" onkeyup="searchSuggest();" autocomplete="off" I> 
<input class="button bg-danger"type="submit" id="cmdSearch" value="Search"/>
 <div id="search_suggest" style="color:white"></div>
 </form>
                                   
                                   
                                   <form action="/Signin" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <button class="btn btn-outline-danger mt-3 my-2 my-sm-0"> Search Filters</button>
                                    </form>
                                    -->
                                 <a href="SearchFilter" method="POST" 
                                 class="btn btn-outline-danger mt-3 my-2 my-sm-0"> 
                            
                                    Search Filters</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5">
            @foreach ($students as $student)
             <div class="container my-5">                     
               <div class="card my-5" id="card1">
                   <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                        <img src = "{{ asset('uploads/'.$student->gallery) }}" height="100" width="200">
                        </div>
                        <div class="col-md-8">
                           <h6 class="card-title">{{ $student->area }} {{ $student->city }}</h4>
                                 <p class="card-text fa fa-money" aria-hidden="true"> {{ $student->price }}</p>
                                 
                                 <p class="card-text fa fa-area-chart" aria-hidden="true">{{ $student->size }}</p>
                                 <br>
                                 <a role="button" class="btn btn-danger bg-danger fa fa-eye" aria-hidden="true"
                                 href="detail/{{ $student->ad_id }}"
                                 ></a>                                                 

                                 

 

                        </div>

                    </div>
                    </div>
                </div>     
            </div>
                                
                            
                @endforeach        
                </div>

        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-sm-12">
                    <div id="buttons" class="carousel slide" data-ride="carousel">
    
                        <a href="#buttons" class="carousel-control-prev pr-md-5" data-slide="prev">
                            <span class="carousel-control-prev-icon bg-danger"></span>
                        </a>
    
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                 <div class="container">
                                     <div class="row">
                                         <div class="col-sm-12 col-lg-4">
                                             <div class="card" style="width: 300px;margin: auto;">
                                                 <img src="https://media.istockphoto.com/photos/beautiful-luxury-home-exterior-at-twilight-picture-id1026205392" class="card-img-top">
                                                 <div class="card-body">
                                                     <h4 class="card-title">Why you should use skin masks ?</h4>
                                                     <p class="card-text">Skin masks help us to make are skin fresh and also they protect our skin from the harm rays of sun</p>
                                                     <button type="button" class="btn btn-danger bg-danger">Read More</button>                                                 
                                                 </div>                                          
                                             </div>     
                                        </div>
    
                                         <div class="col-sm-12 col-lg-4">
                                             <div class="card" style="width: 300px;margin: auto;">
                                                 <img src="https://media.istockphoto.com/photos/beautiful-luxury-home-exterior-at-twilight-picture-id1026205392" class="card-img-top">
                                                 <div class="card-body">
                                                     <h4 class="card-title">Why you should use skin masks ?</h4>
                                                     <p class="card-text">Skin masks help us to make are skin fresh and also they protect our skin from the harm rays of sun</p>
                                                     <button type="button" class="btn btn-danger">Read More</button>                                                 
                                                 </div>                                             
                                             </div>                                         
                                         </div>
    
                                         <div class="col-sm-12 col-lg-4">
                                             <div class="card" style="width: 300px;margin: auto;">
                                                 <img src="https://media.istockphoto.com/photos/beautiful-luxury-home-exterior-at-twilight-picture-id1026205392" class="card-img-top">
                                                 <div class="card-body">
                                                     <h4 class="card-title">Why you should use skin masks ?</h4>
                                                     <p class="card-text">Skin masks help us to make are skin fresh and also they protect our skin from the harm rays of sun</p>
                                                     <button type="button" class="btn btn-danger">Read More</button>
                                                </div>                                             
                                             </div>                                         
                                         </div>
                                     </div>
                                 </div>
                                
                            </div>
                            <div class="carousel-item">
                                 <div class="container">
                                     <div class="row">
                                         <div class="col-sm-12 col-lg-4">
                                             <div class="card" style="width: 300px;margin: auto;">
                                                 <img src="https://media.istockphoto.com/photos/beautiful-luxury-home-exterior-at-twilight-picture-id1026205392" class="card-img-top">
                                                 <div class="card-body">
                                                     <h4 class="card-title">Why you should use skin masks ?</h4>
                                                     <p class="card-text">Skin masks help us to make are skin fresh and also they protect our skin from the harm rays of sun</p>
                                                     <button type="button" class="btn btn-danger">Read More</button>                                                 
                                                 </div>
                                             </div>
                                         </div>
    
                                         <div class="col-sm-12 col-lg-4">
                                             <div class="card" style="width: 300px;margin: auto;">
                                                 <img src="https://media.istockphoto.com/photos/beautiful-luxury-home-exterior-at-twilight-picture-id1026205392" class="card-img-top">
                                                 <div class="card-body">
                                                     <h4 class="card-title">Why you should use skin masks ?</h4>
                                                     <p class="card-text">Skin masks help us to make are skin fresh and also they protect our skin from the harm rays of sun</p>
                                                     <button type="button" class="btn btn-danger">Read More</button>            
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="col-sm-12 col-lg-4">
                                             <div class="card" style="width: 300px;margin: auto;">
                                                 <img src="https://media.istockphoto.com/photos/beautiful-luxury-home-exterior-at-twilight-picture-id1026205392" class="card-img-top">
                                                 <div class="card-body">
                                                     <h4 class="card-title">Why you should use skin masks ?</h4>
                                                     <p class="card-text">Skin masks help us to make are skin fresh and also they protect our skin from the harm rays of sun</p>
                                                     <button type="button" class="btn btn-danger">Read More</button>
                                                 </div>
                                             </div>                                         
                                         </div>
                                     </div>
                                 </div>
                            </div>
                        </div>
                        
                        <a href="#buttons" class="carousel-control-next" data-slide="next">
                            <span class="carousel-control-next-icon bg-danger"></span>
                        </a>
                        
                    </div>                
                </div>
            </div>
        </div>
        <div id="googleMap" style="width:100%;height:400px;"></div>
        <footer>
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
          

<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(33.646246,72.960114),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA3NQw_kgJTrCaPZgfCf-Y2hsgP3Xrw8AY&callback=myMap"></script>
 <script type="text/javascript">
  function searchSuggest() { 
    
var str = document.getElementById('txtSearch').value; 
document.getElementById("search_suggest").innerHTML=""; 
document.getElementById("search_suggest").style.border="0px"; 
searchReq = new XMLHttpRequest(); 
var url= '/request?search=' + str; 
searchReq.open("GET", url); 
searchReq.send(); 

searchReq.onreadystatechange = function() { 
if (searchReq.readyState == 4 && searchReq.status==200) { 
const JSONResponse = JSON.parse(searchReq.responseText); 

for(let item in JSONResponse) { 
    document.getElementById('search_suggest').innerHTML += JSONResponse[item].city +"<br>"; 
    
    document.getElementById("search_suggest").style.border="lpx solid black";
}
}
};
  } 
  </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>