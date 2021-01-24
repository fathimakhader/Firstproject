<?php
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
$repeatpassword = filter_input(INPUT_POST, 'repeatpassword');
if (!empty($email)){
if (!empty($password)){
if (!empty($repeatpassword)){    
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "register";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO sign (email, password, repeatpassword)
values ('$email','$password','$repeatpassword')";
if ($conn->query($sql)){
echo "Your account has been registered sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
}
else{
echo "Password can't be empty";
die();
}
}
else{
echo "Email can't be empty";
die();
}
?>
