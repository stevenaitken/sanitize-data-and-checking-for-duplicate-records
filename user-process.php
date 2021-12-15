<?php 
include 'includes/errors.php';

if( isset($_POST['username']) && isset($_POST['pwd']) ){

 $user = $_POST['username'];
 //$user = htmlspecialchars(strip_tags(trim($_POST['username'])));
 
 $user_trim = trim($_POST['username']);
 $user_strip = strip_tags($user_trim);
 $user_htmlspecialchars = htmlspecialchars($user_strip);

 
 $user = strip_tags($_POST['username']);
$user = htmlspecialchars($_POST['username']);

$pwd = $_POST['pwd'];
$hashed_pwd = md5($pwd);


}
else{

echo "No data received";
  
}
include 'includes/db_connx.php';
//$check = "SELECT username, COUNT(username) FROM users GROUP BY username HAVING COUNT(username) > 1";
$checkUser = "SELECT * FROM users WHERE username  = '$user_htmlspecialchars'";

$result = $conn->query($checkUser);

if($result->num_rows > 0){

  echo "The number of users with this username is: ". $result->num_rows;
exit("<p>Username already taken</p>");


}

else{
// add a record if none exists
$sql = "INSERT INTO users (username, pwd)VALUES ('$user', '$hashed_pwd')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}

$conn->close();

?>
