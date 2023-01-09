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
    <table border="2">
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Password</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        @foreach ($customers as $cust )
        <tr>
            <td>{{ $cust->id }}</td>
            <td>{{$cust->email}}</td>
            <td>{{$cust->password}}</td>
            <td> </td>
            <td></td>
        </tr>
        @endforeach
    </table>
    <?php
    /*if (isset($_REQUEST['submit'])) {
        $email = $_REQUEST["uemail"];
        $pass = $_REQUEST["upass"];
        echo "Welcome :- ".$email.'</br>';
        echo "Your Password is :- ".$pass;
    }
    */?>
    <br><a href="/list">View By Controller list Fuction</a>
@endsection
