<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Customers;
class DemoController extends Controller
{
    function productList()
    {

        echo "list function";
        //return database data im jason format with model
        return customers::all();
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
