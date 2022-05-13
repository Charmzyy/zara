
<?php
    $host="localhost";
	$user="root";
	$password="";
	$db="zara-art";

session_start();
$_SESSION['username']="";

$data=mysqli_connect($host,$user,$password,$db);
if($data===false)

{

	die("connection error");

}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$email=$_POST["email"];
	$password=$_POST["password"];

    $sql="select * from users where email='".$email."' AND password='".$password."' ";
    if( $result=mysqli_query($data,$sql)){
        header('location: ../Auth/Homepage.php'); 
    }
    else{
        echo"Kindly Login";
    }

}
?>