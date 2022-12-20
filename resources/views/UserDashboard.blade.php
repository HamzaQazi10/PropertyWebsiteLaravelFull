
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .sidebar{
           width: 17%;
           background-color: rgb(22, 22, 36);
           height: 950px;
           position: absolute;
           margin-top: -30px;
           z-index:1
           
       }nav{
           z-index: 1;

       }.main{
           color: white;
           font-size: 17px;
          
           margin-top: 50px;
          
       }a{
          color: white; 
          
       }.Accounts{
       
       padding-top: 50px;
       justify-content: center;
       align-items: center;
       text-align: center;
       width: 70%;
       margin-left: 250px;
       margin-top: 30px;
       }.button1{
           width: 30%;
           align-self: center;
       }
       
       .active{
           background-color: black;
       }
       nav i:hover {
       color: #d9534f;
}
      @media (max-width: 480px){
           .sidebar{
               width: 30%;
           }.h1{
                padding-left: 0px;
               font-size: 20px;
           }.Accounts{
               margin-left: 10px;
           }
       }@media(max-width:770px){
        .sidebar{
               width: 30%;
           }
        .Accounts{
               margin-left: 30px;
           }
       }
        .h1{
           margin-bottom: 50px;
           
       }
       

    </style>
    <script>
        var i=0;
        var open2=true;
        var open1=true;
        var up="fa-sort-asc";
       var down="fa-sort-desc";
        function closesidebar(){
           if(i==0){
            $('.sidebar').animate({left:'-300px'},1000);
            i=1;
           }else if(i==1){
            $('.sidebar').animate({left:'0px'},1000);
            i=0;
           }
          
          
       }
       function openAccountMenu(s){
           if(open1==true){
            $('.OrderList').slideToggle(1000);
            $('#arrow1').removeClass(up);
            $('#arrow1').addClass(down);
            open1=false;
           }
          
           if(open2==false){
            $('.AccountList').slideToggle(1000);
            $('#arrow2').addClass(up);
                $('#arrow2').removeClass(down);
            open2=true;
           }else{
            $('.AccountList').slideToggle(1000);
            $('#arrow2').removeClass(up);
            $('#arrow2').addClass(down);
            open2=false;
            
           }
           
       }function openOrdertMenu(){
           if(open2==true){
            $('.AccountList').slideToggle(1000);
            $('#arrow2').removeClass(up);
            $('#arrow2').addClass(down);
            open2=false;
           }
           if(open1==false){
            $('.OrderList').slideToggle(1000);
            $('#arrow1').removeClass(down);
            $('#arrow1').addClass(up);
            open1=true;
           }else{
            $('.OrderList').slideToggle(1000);
            $('#arrow1').removeClass(up);
            $('#arrow1').addClass(down);
            open1=false;
           }
       }
    </script>
</head>
<body>
    <nav class="navbar navbar-nav bg-dark navbar-dark">
       
            <div class="mr-auto d-inline-block float-left bg-dan">
                <button class="" type="button" onclick="closesidebar()"><span class="navbar-toggler-icon"></span></button>
                <a href="#" class="navbar-brand">iStock</a>
                
            </div>
     
        
  <!--      <div class="ml-auto d-none d-sm-inline-block" style="margin-top: -40px;">
            <a href="#" class="navbar-brand"><?php //echo $_SESSION['adminemail']  ?></a>
            <a href="../logout.php" role="button" class="navbar-brand">Logout</a>
        </div>-->
        
       

    </nav>
    <div class="combine">
        <div class="sidebar">
          <ul class="navbar-nav">
                    <li class="nav-item main active ">
                         <a href="/index" method="POST" class="nav-link" role="button" ><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link account " role="button" id="accountmenu" onclick="openOrdertMenu(this.id)"><i class="fa fa-cog" aria-hidden="true"></i> Ad Settings <i class="fa fa-sort-desc" aria-hidden="true" id="arrow1"></i></a>
                        <ul class="navbar-nav OrderList">
                            <li class="nav-item">
                                <a href="postad" class="nav-link" role="button"  > &nbsp; &nbsp;<i class="fa fa-plus" aria-hidden="true"></i> Post Ad</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link account " role="button" id="accountmenu" onclick="openAccountMenu(this.id)"><i class="fa fa-cog" aria-hidden="true"></i> Account Setting <i class="fa fa-sort-desc" aria-hidden="true" id="arrow2"></i></a>
                        <ul class="navbar-nav AccountList">
                            <li class="nav-item">
                                <a href="EditInfo" method="POST" class="nav-link"> &nbsp; &nbsp;<i class="fa fa-pencil" aria-hidden="true"></i> Edit Information</a>
                            </li>
                            <li class="nav-item ">
                                <a href="EditPasswordUser" method="POST" class="nav-link"> &nbsp;&nbsp;<i class="fa fa-key" aria-hidden="true"></i> Change Password</a>
                            </li>
                            
                        </ul>
                    </li>
                   
                    <li class="nav-item">
                        <a href="logout" method="POST" class="nav-link "><i class="fa fa-sign-out"></i> Log Out</a>
                    </li>
                   
                
                
                </ul>

                    
            </div>
        <div class="Accounts">
        <div class="h1" >Welcome To the Dashboard </div>
        <div class="p">You Signed in with Email {{Session::get('user')}}</div>
        <form action="/logout" method="POST">
            @csrf
            <button class="btn btn-danger mt-5"> logout</button>
        </form>
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

                                 
                                 <a role="button" class="btn btn-danger bg-danger fa fa-pencil" aria-hidden="true" 
                                 onclick="return confirm('Do you really want to update this record?')"
                                 href="updatead/{{ $student->ad_id }}"> </a>

                                 <a role="button" class="btn btn-danger bg-danger fa fa-trash" aria-hidden="true"
                                 href="delete/{{ $student->ad_id }}" onclick=
                                 "return confirm('Do you really want to delete this record?')"></a>
 

                        </div>

                    </div>
                    </div>
                </div>     
            </div>
                                
                            
                @endforeach        
                </div>
                
        </div>
    
    





    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  
</body>
</html>




