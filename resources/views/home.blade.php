<h1>Home Page</h1>
<a href="/">Welcome Page</a><br>
 <a href="/about">About Page</a><br>
 <a href="/contact">Contact Page</a><br>
 <?php
if (isset($_REQUEST['submit'])) {
    $email = $_REQUEST["uemail"];
    $pass = $_REQUEST["upass"];
    echo "Welcome".$email.'</br>';
    echo "Your Password is ".$pass;
}
#$email = $_request['email'];
#$pass = $_request['pass'];
#echo "Welcome".$email;
#echo "Pass".$pass;
