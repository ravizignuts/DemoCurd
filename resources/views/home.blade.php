@extends('layout.master')
@section('title')Home Page @endsection
@section('homepage')
    <h1 align="center" style="color: blueviolet">Home Page</h1><hr><br>
    {{ URL::full() }}<p>Current Page FUll URL</p>
    <center>
    <a href="/">Welcome Page</a>&nbsp;&nbsp;&nbsp;&nbsp;
     <a href="/about">About Page</a>&nbsp;&nbsp;&nbsp;&nbsp;
     <a href="{{URL::to('/about')}}">About Page</a>&nbsp;&nbsp;&nbsp;&nbsp;<!--Routes through URL-->
     <a href="/contact">Contact Page</a><hr><br>
    </center>
    <?php
    if (isset($_REQUEST['submit'])) {
        $email = $_REQUEST["uemail"];
        $pass = $_REQUEST["upass"];
        echo "Welcome :- ".$email.'</br>';
        echo "Your Password is :- ".$pass;
    }?>
    <br><a href="/list">View By Controller list Fuction</a>
@endsection
