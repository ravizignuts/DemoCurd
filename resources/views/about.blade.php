@extends('layout.master')
@section('title')About Page @endsection
@section('aboutpage')
    <h1 align="center" style="color: blueviolet">About Page</h1><hr><br>
    {{ URL::current() }}<p>Current Page URL</p>
    <center>
    <a href="/">Welcome Page</a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="/home">home Page</a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="/contact">Contact Page</a><br></center>
    <hr><br>
@endsection
