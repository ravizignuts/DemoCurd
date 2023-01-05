<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function productList($name)
    {
        echo $name;
        echo "</br>Product List";
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
