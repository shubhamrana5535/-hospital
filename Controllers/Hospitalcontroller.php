<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use App\Models\Docter;
use App\Models\Patient;
use App\Models\Contact;

use Illuminate\Support\Facades\DB;

use Crypt;

use Session;

class Hospitalcontroller extends Controller
{
    //

    function reg(Request $req){
        
            $register = new Register;
            $register->name= $req->name;
            $register->email= $req->email;
            $register->phone= $req->phone;
            $register->address= $req->address;
           
            $register->password= $req->password;
            $register->save();
            return redirect("/register");
    
    
        }
        function login(Request $req){

            $user = Register::where('email',$req->input('email'))->get();
            // if(Crypt::decrypt($user[0]->password)==$req->input('password')){
                // $req->session()->put('user',$user[0]->name);
                return redirect('/admin');
            
    
}
function docter(Request $req){
        
    $docter = new Docter;
    $docter->name= $req->name;
    $docter->email= $req->email;
    $docter->number= $req->number;
    $docter->address= $req->address;
    $docter->department= $req->department;
   
    $docter->password= $req->password;
    $docter->save();
    return redirect("/adddoc");


}
function list(){
    $data = DB::table('docters')->get();
     return view('doclist',["data"=>$data]);
 }
 function patient(Request $req){
        
    $patient = new Patient;
    $patient->name= $req->name;
    $patient->email= $req->email;
    $patient->number= $req->number;
    $patient->address= $req->address;
  
   
    $patient->password= $req->password;
    $patient->save();
    return redirect("/addpat");


}
function patlist(){
    $data = DB::table('patients')->get();
     return view('patlist',["data"=>$data]);
 }

function addcon(Request $req){
        
    $contact = new Contact;
    $contact->name= $req->name;
    $contact->email= $req->email;
    $contact->number= $req->number;
    $contact->address= $req->address;
   
    $contact->massege= $req->massege;
    $contact->save();
    return redirect("/contact");


}
}