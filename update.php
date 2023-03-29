<?php
session_start();
$con = mysqli_connect('localhost','root','','shuttle');
if(!$con){
    echo "connection die";
}

if(isset($_POST['updateDone'])){
    $id = $_SESSION['userId'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $bg = $_POST['bg'];
    $password = $_POST['password'];
    $query = "UPDATE user SET username='$name',email='$email',phone='$phone',gender='$gender',bg='$bg',password='$password' WHERE id=$id";
    mysqli_query($con,$query);
    $_SESSION['update'] = "Your information is updated";
    header('Location: home.php');
}

if(isset($_POST['deleteDone'])){
    $id = $_SESSION['userId'];
    $query = "DELETE FROM user WHERE id=$id";
    mysqli_query($con,$query);
    // echo "Your account has been deleted";
    header('Location: logout.php');
}

?>