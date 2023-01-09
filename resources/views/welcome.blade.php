@extends('layout.master')
@section('title')Welcome Page @endsection
@section('welcomepage')
<h1 align="center" style="color: blueviolet">Welcome</h1><hr><br>
{{ URL::current() }}<p>Current Page URL</p><!-- if you want to check in wich page you are so type this function and you can get you URL-->
<center>
<a href="/home">Home Page</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="/about">About Page</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="/contact">Contact Page</a>
</center>
<hr><br>
<form method="POST" action="/list">
    @csrf
<div class="form-group">
    <label for="uemail">Email address</label>
    <input type="email" class="form-control" id="uemail"  name="uemail" aria-describedby="emailHelp" placeholder="Enter email" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
</div>
<div class="form-group">
    <label for="upass">Password</label>
    <input type="password" class="form-control" id="upass" name="upass" placeholder="Password" required>
</div>
<button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
@endsection
 