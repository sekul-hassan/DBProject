<?php
session_start();
$con = mysqli_connect('localhost','root','','db_lab');
if(!$con){
    echo "connection die";
}

if(isset($_POST['dataSave'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $bg = $_POST['bg'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];

    $query = "INSERT INTO user(name, email, phone, bg, gender, password) 
    VALUES ('$name','$email','$phone','$bg','$gender','$password')";
    $con->query($query);
    $_SESSION['save'] = "data is successfully save";

}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New form</title>
</head>
<style>
    button {
        margin: 10px 0;
        padding: 5px;
        color: white;
        background-color: blue;
        border-radius: 10%;
    }

    button:hover {
        transition: 0.5s;
        color: black;
        background-color: white;
    }

    form {
        width: 40%;
        height: 400px;
        background-color: rgba(1, 225, 225, 1.0);
        padding: 20px 100px;
        margin-left: auto;
        margin-right: auto;
    }
</style>
<body>
    <div>
        <form method="post">
            <h4><?php if(isset($_SESSION['save'])) echo $_SESSION['save']; ?></h4>
            <label>Enter your name</label><br>
            <input type="text" name="name" required placeholder="Enter your name"><br><br>

            <label>Enter your email</label><br>
            <input type="email" name="email" required placeholder="Enter your email"><br><br>

            <label>Enter your phone</label><br>
            <input type="tel" name="phone" required placeholder="Enter your phone"><br><br>

            <label>Enter your blood group</label><br>
            <input type="text" name="bg" required placeholder="Enter your blood group"><br><br>

            <label>Select your gender</label><br>
            <select name="gender" required>
                <option value="">Your Gender is : </option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="others">Others</option>
            </select><br><br>
            <label>Enter your password</label><br>
            <input type="password" name="password" required placeholder="Enter your password"><br>
            <button type="submit" name="dataSave">Submit</button>
        </form>
    </div>
</body>

</html>