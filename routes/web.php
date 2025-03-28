<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});



Route::get("/about",function(){
    return view("about");
});


//passing parameter in route
Route::get("contact/{id?}/comment/{cid}", function(string $id=null , string $cid = null){
    if($id){
        return "<h1>{$id}</h1"."<h2>{$cid}</h2>";
    }
   return view("/about");
});


//ididating constratints of route

Route::get("/service/{id}", function(string $id=null){
   return "<h1>Id is :{$id}</h1>";
})->whereNumber('id');


Route::get("/string/{cid}", function(string $cid = null){
   return "<h1>String idue is :$cid</h1>";
})->whereAlpha('cid');


Route::get("/alphanum/{alpha}", function(string $alpha = null){
   return "<h2>AlphaNumeric idue is :$alpha</h2>";
})->whereAlphaNumeric('alpha');

// passing that user will choose onlt one idue

Route::get("/selected/{id}",function(string $id = null){
   return "<h1>Selected id is : $id</h1>";
})->whereIn('id',['MCA','BCA','BTECH']);

// using regular expression

Route::get("/regualr/{reg}",function(string $reg=null){
   return "<h2>Regular Expression :$reg </h2>";
})->where('id','[0-9]+');


// passing multiple constraints
Route::get("/multiple/{cont}/post/{str}", function(string $cont = null , string $str = null){
   return "<h1>Passign Multiple COnstraints : $cont and String is $str</h1>";
})->where('cont','[0-9]+5')->whereAlpha('str');


//! Named Route

Route::get("/home", function(){
  return view("home");
});

Route::get("/plan", function(){
 return view("plan");
});

//! before changing route name
// Route::get("/data", function(){
//    return view("data");
// });


//! after changing route

Route::get("/datassssssssssssssssssss", function(){
    return view("data");
 })->name('mypost'); //! here we will get error page not found so get rid of this problem we use named route 


 //! if any user save route as bookmark and if we change route name and user again same it will get error so to get rid of this problem we use a cocept of redirect
//  Route::redirect('/home', '/demo'); 



 //! if want to show proper error if page not found we will use a php method fallback

 Route::fallback(function(){
   return "<h1>Page Not FOund</h1>";
 });


 //!  create a route for template engine here we practise all syntax of blade.
 Route::get("/syntaxBlade", function(){
     return view("syntax");
 });