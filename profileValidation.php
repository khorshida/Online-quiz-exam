<?php
$name= $_REQUEST['name'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$image=$_REQUEST['Picture'];

$atIndex = strpos($email,"@");
$dotIndex= strpos($email,".");

if($name == "" || $password == "" || $email == ""){
  echo "Input field Cannot be Empty";

}
elseif(strlen($password)<8){
  echo "Password must be 8 characters long";

}
elseif($atIndex < 1 || $dotIndex < $atIndex + 2 || $dotIndex + 2 >= strlen($email)){

  echo "Enter a valid email address";
}
else{
  echo "Changes Saved Succesfully";
}





?>