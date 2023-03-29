<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>Home</title>
</head>

<body class="bodyImg">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="homeDiv">
                <h4 class="text-danger text-center"><?php if(isset($_SESSION['notMatch'])) echo $_SESSION['notMatch'];?></h4>
                    <div class="row">
                        <div class="col admin">
                            <h3>Admin Panel</h3>
                            <form class="" action="">
                                <label for="">Enter Admin Name</label><br>
                                <input class="" type="text" required placeholder="Enter name"><br><br>
                                <label for="">Enter Password</label><br>
                                <input class="" type="password" required placeholder="Enter password"><br><br>
                                <button class="btn btn-primary" id="adminLogin">Submit</button>
                            </form>
                        </div>
                        <div class="col user">
                            <h3>User Panel</h3>
                            <form method="post" action="registration.php">
                                <label for="">Enter User Name</label><br>
                                <input class="" type="text" name="inputName" required placeholder="Enter name"><br><br>
                                <label for="">Enter Password</label><br>
                                <input class="" type="password" name="inputPassword" required
                                    placeholder="Enter password"><br><br>
                                <button class="btn btn-primary" id="logIn" name="logIn">LogIn</button> OR
                                <a class="btn btn-primary" id="signUp">Sugin Up</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container signUpForm" id="signUpForm">
            <div class="row">
                <h3>please enter your information</h3>
                <form method="post" action="registration.php">
                    <label for="">Enter User Name</label><br>
                    <input name="username" type="text" placeholder="Enter Name" required><br>
                    <label for="">E-mail Address</label><br>
                    <input name="email" type="email" placeholder="Enter E-mail" required><br>
                    <label for="">Enter Your Phone Number</label><br>
                    <input name="phone" type="tel" placeholder="Enter phone number" required><br>
                    <label for="">Select Your Genger</label><br>
                    <select name="gender" id="gender" required>
                        <option value="">Select Your gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select><br>
                    <label for="">Enter Your Blood Group</label><br>
                    <input name="bg" type="text" placeholder="Enter Blood Group" required><br>
                    <label for="">Enter your password</label><br>
                    <input name="password" type="password" placeholder="Enter your password" required><br>
                    <button type="submit" name="saveuser" class="btn btn-success regiSubmit">Submit</button>
                    <a class="btn btn-outline-danger" id="regiCancel">Cancel</a>
                </form>
            </div>
        </div>
    </div>

    <script src="index.js"></script>
</body>

</html>