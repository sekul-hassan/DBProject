<?php   
session_start();
$con = mysqli_connect('localhost','root','','shuttle');
if(!$con){
    echo "connection die";
}
if(isset($_POST['saveuser'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone']; 
    $gender = $_POST['gender'];
    $bg = $_POST['bg'];
    $password = $_POST['password'];

    $q = "INSERT INTO user(username, email, phone, gender, bg, password) 
    VALUES ('$username','$email','$phone','$gender','$bg','$password')";
    mysqli_query($con,$q);
    echo "regi done";
    header('Location: index.php');

}

if (isset($_POST['logIn'])){
    $inputName = $_POST['inputName'];
    $inputPassword = $_POST['inputPassword'];
    $qu = "SELECT * FROM user WHERE username='$inputName' AND password='$inputPassword'";
    $res = $con->query($qu);
    if ($res->num_rows > 0) {
        $row = $res->fetch_assoc();
        $_SESSION['userId'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['useremail'] = $row['email'];
        $_SESSION['userphone'] = $row['phone'];
        $_SESSION['usergender'] = $row['gender'];
        $_SESSION['userbg'] = $row['bg'];
        $_SESSION['userpassword'] = $row['password'];
        header('Location: home.php');
    } else {
        $_SESSION['notMatch'] =  "Dear ".$inputName." Your Name or Password Not match";
        header('Location: index.php');
    }
}

if(isset($_POST['saveBus'])){
    $name = "";
    $busname = "";
    $account = $_POST['cardnumber'];
    $amount = "5";
    if(isset($_SESSION['username'])){
        $name = $_SESSION['username'];
    }
    $cnt = 0;
    $ok1 = "";
    $ok2 = "";
    $anonna1 = $_POST['anonna1'];
    $anonna2 = $_POST['anonna2'];
    if($anonna1!="" && $anonna2!=""){
        $ok1 = $anonna1;
        $ok2 = $anonna2;
        $cnt+=1;
        $busname = "Anonna";
    }
    $rojina1 = $_POST['anonna1'];
    $rojina2 = $_POST['rojina2'];
    if($rojina1!="" && $rojina2!=""){
        $ok1 = $rojina1;
        $ok2 = $rojina2;
        $cnt+=1;
        $busname = "Rojina";
    }
    $boishaki1 = $_POST['boishaki1'];
    $boishaki2 = $_POST['boishaki2'];
    if($boishaki1!="" && $boishaki2!=""){
        $ok1 = $boishaki1;
        $ok2 = $boishaki2;
        $cnt+=1;
        $busname = "Boishaki";
    }
    if($cnt==1){
        $qry = "INSERT INTO buss(username, bussname, source, destination, accountnumner, amount) 
        VALUES ('$name','$busname','$ok1','$ok2','$account','$amount')";
        $res = $con->query($qry);
        $_SESSION['bussuccess'] = "Have a save journey";
        header('Location: home.php');
    }
    else{
        $_SESSION['notsave'] = "Your information not save";
        header('Location: home.php');
    }
}

?>