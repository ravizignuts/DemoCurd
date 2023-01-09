<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\customer;
class DemoController extends Controller
{
    function productList(Request $request)
    {
         //echo "list function";
         //Insert Data Using Create method

            $custom = customer::create([
                'email' => $request['uemail'],
                'password' => $request['upass']
                ]);



        /* Insert Data using Instance creation
        $custom = new customer;
        $em = $_REQUEST['uemail'];
        $pass = $_REQUEST['upass'];
        $custom->email=$em;
        $custom->password=$pass;
        $custom->save();
        */
        $customers = customer::all();
        return view('home',['customers'=>$customers]);
        //return database data im jason format with model
        #return customer::all();
        //just return the database data in json format with database class
        # return DB::select("select * from customers");
    }
    function productAdd()
    {

        echo "</br>Product add";
    }
    function productUpdate($id)
    {
        // dd($id);

       $customers = customer::find($_REQUEST['id']);
        $customers->email=$_REQUEST['uemail'];
        $customers->upass=$_REQUEST['upass'];
        $customers->save();

    #return view('about'/*,['customer'=>$customers]*/);
        /*$student = Student: :find(8) ;
        $student-›name = 'hema'; $student-›email = hema@gmail.com'
        $student-›city = 'dhanbad';
        $student-›marks = 60;
        $student -›save () ;*/

    }
}
