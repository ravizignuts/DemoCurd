@extends('layout.master')
@section('title')Contact Page @endsection
@section('contactpage')
    <h1 align="center" style="color: blueviolet">Contact Page </h1><hr><br>
    {{ URL::current() }}<p>Current Page URL</p>
    <center>
    <a href="/">Welcome Page</a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="/home">Home Page</a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="/about">About Page</a></center>
    <hr><br>
@endsection
