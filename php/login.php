<?php
session_start();
$con = mysqli_connect('localhost','root','','duhigure');

if (isset($_POST['login'])) {


$username = $_POST['name'];
$password = $_POST['password'];
$role = $_POST['role'];

$sql = mysqli_query($con,"SELECT * FROM user WHERE username='$username' AND `password`='$password' And `role` ='$role'"); 
$sql1 = mysqli_query($con,"SELECT * FROM abanyamuryango WHERE username='$username' AND `password`='$password' And `role` ='$role'"); 
$sql2 = mysqli_query($con,"SELECT * FROM umuryango WHERE username='$username' AND `password`='$password' And `role` ='$role'"); 



if( (mysqli_num_rows($sql)) > 0){

    session_start();
    $_SESSION['username']=$username;
    header("location: ../admin/");

}elseif((mysqli_num_rows($sql1)) > 0){
    session_start();
    $_SESSION['username']=$username;
    header("location: ../member/index.php");
}
elseif((mysqli_num_rows($sql2)) > 0){
    session_start();
    $_SESSION['username']=$username;
    header("location: ../family/index.php");
}
else{
    echo '<script>alert("Login Failed...????")</script>'; 
}

}
   

?>

