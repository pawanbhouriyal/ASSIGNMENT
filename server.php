<?php
session_start();
$username = "";
$email    = "";
$errors = array(); 
$conn = mysqli_connect('localhost', 'root', '1234', 'database7');
if (isset($_POST['reg'])) {
  $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
  $lastname =  mysqli_real_escape_string($conn, $_POST['lastname']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  
  if (empty($firstname)) { array_push($errors, "Firstname is required"); }
  
  if (empty($email)) { array_push($errors, "Email is required"); }
 
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  array_push($errors,"Invalid email format");
}
  $user_check_query = "SELECT * FROM info WHERE email='$email' LIMIT 1";
  $result = mysqli_query($conn,$user_check_query);
  $user = mysqli_fetch_assoc($result);  
  if ($user){
    
    if ($user['email'] == $email) {
      array_push($errors, "email already exists");
    }
  }
  if (count($errors) == 0) {
  	
  	$query = "INSERT INTO info (firstname, lastname, email) 
  			  VALUES('$firstname','$lastname' ,'$email');";
  	mysqli_query($conn,$query);
	header('location: display.php');  
}
}
if (isset($_POST['newreg'])) {
	header('location: index.php');
}
if (isset($_POST['tabss'])) {
	header('location: display.php');
}
?>

