<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function productList(Request $req)
    {

        return view("home");
    }
    function productAdd($name)
    {
        echo $name;
        echo "</br>Product add";
    }
    function productUpdate($name)
    {
        echo $name;
        echo "</br>Product Update";
    }
}
