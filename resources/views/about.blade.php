@extends('layout.master')
@section('title')About Page @endsection
@section('aboutpage')
    <h1 align="center" style="color: blueviolet">About Page</h1><hr><br>
    {{ URL::current() }}<p>Current Page URL</p>
    <center>
    <a href="/">Welcome Page</a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="/home">home Page</a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="/contact">Contact Page</a><br></center>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <hr><br>
@endsection
