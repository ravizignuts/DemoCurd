<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\customer;
class DemoController extends Controller
{
    function productList()
    {
         //echo "list function";
         //Insert Data Using Create method
        $custom = customer::create([
            'email' => $_REQUEST['uemail'],
            'password' => $_REQUEST['upass']

            ]);
        /* Insert Data using Instance creation
        $em = $_REQUEST['uemail'];
        $pass = $_REQUEST['upass'];
        $custom = new customer;
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
    function productUpdate()
    {

        echo "</br>Product Update";
    }
}
