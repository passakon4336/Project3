<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('welcome');
});

Route::get('/page1',function(){

    return "Hello Page1";
});

Route::get('/page2',function(){
$html='<table border="1">';
$html.='<tr>';
$html.='<td>Hello</td>';
$html.='</tr>';
$html.='</table>';
return $html;

});

Route::get('/page3',function(){
   
    $html='<table border="1">';
    for($i=1;$i<=12;$i++){
    $html.='<tr>';
    $html.='<td>2*'.$i.'</td>';
    $html.='<td>'.(2*$i).'</td>';
    $html.='</tr>';
    }
    $html.='</table>';
    return $html;
    
    });

Route::get('/page4',function(){
    
    $n=$_GET['pn'];
    $html='<table border="1">';
    
    for($i=1;$i<=12;$i++){
    $html.='<tr>';
    $html.='<td>'.$n.'*'.$i.'</td>';
    $html.='<td>'.($n*$i).'</td>';
    $html.='</tr>';
    }
    $html.='</table>';
    return $html;
        
    });

Route::get('/page5',function(){

       $html='<form action="page4">';
       $html.='<input type="text" name="pn">';
       $html.='<input type="submit">';
       $html.='</form>';
    
        return $html;
            
        });

//page6?pname=wichai&pemail=wi@hot.com
Route::get('/page6',function(){
            
            return 'Hello'.$_GET['pname'].":".$_GET['pemail'];
            
            });

//page7/wichai
Route::get('/page7/{paname}',function($pname){
            
            return 'Hello'.$_GET['pname'];
                
 });



Route::get('/page8', function () {
 return view('page8view');
});