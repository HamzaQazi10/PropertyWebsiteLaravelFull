<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- <link rel="stylesheet" href="style.css"> -->
  <title>Description</title>
</head>
<body>

@foreach ($ad as $student)
    <div class="container">

    <!-- Portfolio Item Heading -->
    <h1 class="text-danger my-4">iStock
        <small> buy it</small>
    </h1>

    <!-- Portfolio Item Row -->
    <div class="row">

        <div class="col-md-8">
        <img class="img-fluid" src="{{ asset('uploads/'.$student->gallery) }}" alt="">
        </div>

        <div class="col-md-4">
        <h1 class="text-danger my-3">iStock</h1>
        <h5 class="my-3">Project Description</h5>
        <p>{{ $student->detail }}</p>
        </div>

    </div>
    <!-- /.row -->

    <table class="table table-striped">
        <div>
          <h2 class="text-danger">Details</h2>
        </div>

        <tbody>
        <tr>
            <th scope="row">Ad ID</th>
            <td>{{ $student->ad_id }}</td>
            <th scope="row">Size(in Marla's)</th>
            <td>{{ $student->size }}</td>
          </tr>
          <tr>
            <th scope="row">Type</th>
            <td>{{ $student->type }}</td>
            <th scope="row">Area</th>
            <td>{{ $student->area }}</td>
          </tr>
          <tr>
            <th scope="row">Price</th>
            <td>{{ $student->price }}</td>
            <th scope="row">Purpose</th>
            <td>For Sale</td>
          </tr>
          <tr>
            <th scope="row">Location</th>
            <td>{{ $student->city }}</td>
            <th scope="row">Bedroom(s)</th>
            <td>{{ $student->rooms }}</td>
          </tr>
          <tr>
            <th scope="row">Bath(s)</th>
            <td>{{ $student->washrooms }}</td>
            <th scope="row">Attached Shops</th>
            <td>{{ $student->shops }}</td>
          </tr>
        </tbody>
      </table>


    </div>
 
<div class="continer mx-5">
    

<!--form class="my-form form-group"  action="/sellerdetail/{{ $ad[0]->email }}" method="POST" enctype="multipart/form-data">
      @csrf
    <button class="btn btn-danger my-4 mx-4" type="submit">{{ $student->email }}</button>
</form>-->


<p type="hidden" id="txtSearch" name="txtSearch" style="visibility:hidden;">{{ $student->email }}</p>
<!--<script>var str = <?php //$a=$student->email;?>
alert(str);
</script>-->
<button  class="btn btn-danger mt-4 mx-4" alt="Search Criteria" onclick="searchSuggest();" I>Advertiser Info </button>

<div class="container mt-2">
<div class="row">

<h4 class="col-md-6 " id="search_suggest3"></h4>
 <p class="col-md-6 text-danger" id="search_suggest" ></p>
 <br>

 <h4 class="col-md-6" id="search_suggest4"></h4>
 <p class="col-md-6 text-danger" id="search_suggest1" ></p>
 <br>

 <h4 class="col-md-6" id="search_suggest5"></h4>
 <p class="col-md-6 text-danger" id="search_suggest2" ></p>
 <br>
 </div>
 
 <div id="search_suggest1" style="color:red"></div>
 <br>
 
 
 </div>


 </div>
@endforeach

<script type="text/javascript">
  function searchSuggest(a) { 
    
var str = document.getElementById("txtSearch").innerHTML; 
alert(str);
document.getElementById("search_suggest").innerHTML=""; 
document.getElementById("search_suggest").style.border="0px"; 
searchReq = new XMLHttpRequest(); 
var url= '/request1?search=' + str; 
searchReq.open("GET", url); 
searchReq.send(); 

searchReq.onreadystatechange = function() { 
if (searchReq.readyState == 4 && searchReq.status==200) { 
const JSONResponse = JSON.parse(searchReq.responseText); 

for(let item in JSONResponse) { 
    document.getElementById('search_suggest').innerHTML += JSONResponse[item].email +"<br>"; 
    document.getElementById('search_suggest1').innerHTML += JSONResponse[item].phone +"<br>";
    document.getElementById('search_suggest2').innerHTML += JSONResponse[item].city +"<br>";
    document.getElementById('search_suggest3').innerHTML +="Contact Email" ;
    document.getElementById('search_suggest4').innerHTML +="Contact Number" ;
    document.getElementById('search_suggest5').innerHTML +="Advertiser's City of Residence" ;
    
}
}
};
  } 
  </script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>