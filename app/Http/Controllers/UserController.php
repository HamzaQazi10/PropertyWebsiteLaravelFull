<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
class UserController extends Controller
{
    //
    function index(){   
        $students = DB::select("select * from ad"); 
        return view('index', ['students' => $students]);
            
        /*if(Session::has('user')){     
            return view("postad");
        }
        else{
        return redirect("/admindashboard");
        }*/
    }
    function indexfilter(Request $request){  
        $type = $request->input('slct1'); 
        $city = $request->input('slct3'); 
        $area = $request->input('slct4'); 
        $category = $request->input('slct2');
        $price = $request->input('inputPrice');
        $price2 = $request->input('inputPrice2');

        $students = DB::select("select * from ad where type='$type' and city = '$city' 
        and category='$category' and area = '$area' and price>='$price' and price<='$price2'"); 
        return view('index', ['students' => $students]);
            
    }

    function SearchFilter(){
        return view("SearchFilter"); 
    }
    function signup(){       
        return view("signup");
    }
    function signin(){      
        if(Session::has('user')){ 
            //Session::flush();
            return redirect("/userdashboard");
        }
        else{
            return view("signin");
        }
    }
    function EditInfo(){
        $id=session("user");
        $ads = DB::select("select * from signup where email = ?",[$id]);
            return view('EditInfo',['ad' => $ads]);
    }
    function EditPasswordUser(){
        $id=session("user");
        $ads = DB::select("select * from signup where email = ?",[$id]);
            return view('EditPasswordUser',['ad' => $ads]);
    }


    public function signedup(Request $request) { 
        $email = $request->input('inputEmail'); 
        $pass = $request->input('inputPassword'); 
 
        $confirm = $request->input('inputConfirmPassword'); 
        $phone = $request->input('inputPhone'); 

        $address = $request->input('inputAddress');
        
        $city = $request->input('inputCity');
        $zip = $request->input('inputZip');
     
        DB::unprepared("insert into signup (email, password, confirmpassword, phone, address, city, zip) values
             ('$email','$pass','$confirm','$phone','$address','$city','$zip') 
            "); 
        return view('signin'); }

    function postad(){  
        if(Session::has('user')){     
            return view("postad");
        }
        
        else{
            return view("signin");
        }

    }

    function AdminDashboard(){       
        $students = DB::select("select * from ad" //where price>2000000 order by price"
    ); 
        return view('AdminDashboard', ['students' => $students]);
    }
    function UserDashboard(){  
        if(Session::has('user')){     
            $email = session("user");     
            $students = DB::select("select * from ad where email = ?",[$email]); 
            return view('UserDashboard', ['students' => $students]);
        }
        else{
            return redirect("signin");
        }

    }
    function ProductDescription(){
        return view("ProductDescription");
    }
    
    public function detail($id) { 
        $users = DB::select("select * from ad where ad_id = ?",[$id]);
        return view('ProductDescription',['ad' => $users]); }
    public function sellerdetail($id) { 
            $users = DB::select("select * from signup where email = ?",[$id]);
            return view('check',['signup' => $users]); }

    function check(){       
        //$students = DB::select("select * from ad"); 
        if(session("user")==""){
            return redirect("index");
        }
        else{
        return view('check'); //,['students' => $students]);
        }
    }

    public function xmlhttprequest(){
        $searchTerm = request('search'); 
        if (strlen($searchTerm) > 0){
            $searchResults = DB::select(DB::raw("select city from ad where city like '$searchTerm%'")
        ); 
        return response($searchResults); 
//$users = DB::select("select terms from searchterms where terms like ?",($term%)); 
//$users = DB::statement("select terms from searchterms where terms like '$term%'"); }
    }}
    public function xmlhttprequest1(){
        $searchTerm = request('search'); 
        if (strlen($searchTerm) > 0){
            $searchResults = DB::select(DB::raw("select * from signup where email='$searchTerm'")
        ); 
        return response($searchResults); 
//$users = DB::select("select terms from searchterms where terms like ?",($term%)); 
//$users = DB::statement("select terms from searchterms where terms like '$term%'"); }
    }}

    public function adposted(Request $request) { 
        $type = $request->input('slct1'); 
        $city = $request->input('slct3'); 
        $area = $request->input('slct4'); 
        $category = $request->input('slct2');
        $price = $request->input('inputPrice');
        $size = $request->input('inputSize');
        $plotno = $request->input('inputPlot');
        $streetno = $request->input('inputStreet');
        $rooms = $request->input('inputRoom');
        $washrooms = $request->input('inputWashroom');
        $shops = $request->input('inputShop');
        $file = $request->file('file')->getClientOriginalName();               
        $moveImage = $request->file('file')->move('uploads', $file);
        $email = session("user");
        $detail=$request->input("detail");
        DB::unprepared("insert into ad (type, city, area, category,price, size,plotno,streetno,rooms,washrooms,
        shops,gallery,email,detail)
         values ('$type','$city','$area','$category','$price','$size','$plotno','$streetno','$rooms','$washrooms','$shops'
         ,'$file','$email','$detail')"); 
        return redirect()->back(); }

        public function updatead($id) {
            $ads = DB::select("select * from ad where ad_id = ?",[$id]);
            return view('updatead',['ad' => $ads]); }

        public function updatedad1(Request $request,$id) { 
            $type = $request->input('slct1'); 
            $city = $request->input('slct3'); 
            $area = $request->input('slct4'); 
            $category = $request->input('slct2');
            $price = $request->input('inputPrice');
            $size = $request->input('inputSize');
            $plotno = $request->input('inputPlot');
            $streetno = $request->input('inputStreet');
            $rooms = $request->input('inputRoom');
            $washrooms = $request->input('inputWashroom');
            $shops = $request->input('inputShop');
            $file = $request->file('file')->getClientOriginalName();               
            $moveImage = $request->file('file')->move('uploads', $file);
            //$email = session("user");
            $detail=$request->input("detail");

            DB::unprepared("update ad set type='$type', city='$city', area='$area', category='$category',
            price='$price', size='$size',plotno='$plotno',streetno='$streetno',rooms='$rooms',washrooms='$washrooms',
            shops='$shops',gallery='$file',detail='$detail'
            where ad_id = '$id'"); 
            return redirect()->previous(); }

            public function EditInfo1(Request $request,$id) { 
 
                $phone = $request->input('inputPhone'); 
        
                $address = $request->input('inputAddress');
                
                $city = $request->input('inputCity');
                $zip = $request->input('inputZip');
             
             
                DB::unprepared("update signup set  
                phone='$phone',
                address='$address', city='$city',zip='$zip'
                where email = '$id'"); 
                return redirect('/index'); }

                public function EditPasswordUser1(Request $request,$id) { 
 
                    $pass = $request->input('inputPassword'); 
 
                    $confirm = $request->input('inputConfirmPassword');
                 
                 
                    DB::unprepared("update signup set  
                    password='$pass',
                    confirmpassword='$confirm' 
                    where email = '$id'"); 
                    return redirect('/signin'); }

            public function delete($id) {
                DB::unprepared("delete from ad where ad_id = '$id'");
                
                return redirect('/index'); }
            
            function signinsess(Request $request){
                $email =   $request->input('email');
                $pass = $request->input('password');
                $logindata=DB::select('select password from signup where email=?',[$email]);
                if(count($logindata) > 0){
                    foreach ($logindata as $tablepass){
                        if($tablepass->password == $pass){
                            Session::put('user',$email);
                            Session::put('pass',$pass);
                            return redirect('userdashboard');
                        }
                        else{
                            $error='Password is Wrong';
                            return redirect('/index');//->with('error',$error));
                        }
                    }
                }
            }
            function signinsessadmin(Request $request){
                $email =   $request->input('email');
                $pass = $request->input('password');
                $logindata=DB::select('select pass from admin where email=?',[$email]);
                if(count($logindata) > 0){
                    foreach ($logindata as $tablepass){
                        if($tablepass->pass == $pass){
                            Session::put('user',$email);
                            Session::put('pass',$pass);
                            return redirect('admindashboard');
                        }
                        else{
                            $error='Password is Wrong';
                            return view('adminlogin');//->with('error',$error));
                        }
                    }
                }
            }
            function signinendsess(){
                if(Session::has('user')){
                    Session::flush();
                }
                return redirect('/index');
            }
            function signinendsessadmin(){
                if(Session::has('user')){
                    Session::flush();
                }
                return redirect('/index');
            }



}
