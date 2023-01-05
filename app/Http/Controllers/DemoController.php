<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function productList()
    {
        echo "Product List";
    }
    function productAdd()
    {
        echo "Product add";
    }
    function productUpdate()
    {
        echo "Product Update";
    }
}
