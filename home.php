<?php
session_start();
if(!isset($_SESSION['username'])){
    header('Location: index.php');
}

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js">
    <title>Home</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-expand-md navbar-expand-lg">
        <a class="navbar-brand" href="home.php">SEKUL HASSAN</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="routeMapBtn" href="#">Route-map</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profileBtn" href="#">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="img">
        <div class="topOverlay">
            <div class="topContent">
                <h3>Welcome to <span style="cursor:pointer; color:yellow"> <?php echo $_SESSION['username'] ?></span></h3>
                <h3>thanks for taking our buss service</h3>
                <h3>Please Enjoy it</h3>
            </div>
        </div>
    </div>
    <footer>
        <p> All rights reserved <span> © 2023 SEKULL HASSAN</span>.</p>
    </footer>
    <div class="container">
        <div class="routeMap" id="routeMap">
            <h3 class="text-center pt-3">Please Select One Bus</h3>
            <form action="registration.php" method="post">
                <div class="row">
                    <div class="col pl-5">
                        <label for="">Anonna</label>
                        <select name="anonna1" id="anonna1">
                            <option value=""></option>
                            <option value="srj">SRJ</option>
                            <option value="bottola">Bottola</option>
                            <option value="bank">Bank</option>
                            <option value="transport">Transport</option>
                        </select>
                    </div>
                    <div class="col pl-5">
                        <label for="">Anonna</label>
                        <select name="anonna2" id="anonna2">
                            <option value=""></option>
                            <option value="srj">SRJ</option>
                            <option value="bottola">Bottola</option>
                            <option value="bank">Bank</option>
                            <option value="transport">Transport</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col pl-5">
                        <label for="">Rojina </label>
                        <select name="rojina1" id="rojina1">
                            <option value=""></option>
                            <option value="bottola">Bottole</option>
                            <option value="newresister">New Resister</option>
                            <option value="janaraimam">Janaraimam</option>
                            <option value="dairy">Dairy</option>
                        </select>
                    </div>
                    <div class="col pl-5">
                        <label for="">Rojina </label>
                        <select name="rojina2" id="rojina2">
                            <option value=""></option>
                            <option value="bottola">Bottole</option>
                            <option value="newresister">New Resister</option>
                            <option value="janaraimam">Janaraimam</option>
                            <option value="dairy">Dairy</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col pl-5">
                        <label for="">Boishaki</label>
                        <select name="boishaki1" id="boishaki1">
                            <option value=""></option>
                            <option value="mh">MH</option>
                            <option value="shohidminar">Shohid Minal</option>
                            <option value="chourongi">Chourongi</option>
                            <option value="janaraimam">Janaraimam</option>
                        </select>
                    </div>
                    <div class="col pl-5">
                        <label for="">Boishaki</label>
                        <select name="boishaki2" id="boishaki2">
                            <option value=""></option>
                            <option value="mh">MH</option>
                            <option value="shohidminar">Shohid Minal</option>
                            <option value="chourongi">Chourongi</option>
                            <option value="janaraimam">Janaraimam</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col pl-5">
                        <label for="">Enter your card number</label>
                        <input type="text" name="cardnumber" placeholder="Enter your card number" required><br>
                        <button name="saveBus" class="btn btn-primary mt-2" id="saveBus">Submit</button>
                        <a class="btn btn-danger buscancel" id="mapCancel">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="profile" id="profile">
        <h5>Your name is : <?php echo $_SESSION['username'];?></h5>
        <h5>Your email is :<?php echo $_SESSION['useremail'];?></h5>
        <h5>Your phone is : <?php echo $_SESSION['userphone'];?></h5>
        <h5>Your gender is : <?php echo $_SESSION['usergender'];?></h5>
        <h5>Your BG is : <?php echo $_SESSION['userbg'];?></h5>
        <button class="btn btn-primary buscancel" id="profileUpdate">Update</button>
        <button class="btn btn-danger buscancel" id="profileCancel">Cancel</button>
    </div>

    <div class="profileForm" id="profileForm">
        <h4>update your information</h4>
        <form action="update.php" method="post">
            <label for="">Your Name is :</label> 
            <input id="uname" name="name" type="text" required placeholder="<?php echo $_SESSION['username'];?>"><br>

            <label for="">Your Email is :</label>
            <input id="uemail" name="email" type="email" required placeholder="<?php echo $_SESSION['useremail'];?>"><br>

            <label for="">Your Phone is :</label>
            <input id="uphone" name="phone" type="tel" required placeholder="<?php echo $_SESSION['userphone'];?>"><br>

            <label for="">Your Gender is :</label>
            <input id="ugender" name="gender" type="text" required placeholder="<?php echo $_SESSION['usergender'];?>"><br>

            <label for="">Your BG is :</label>
            <input id="ubg" name="bg" type="text" required placeholder="<?php echo $_SESSION['userbg'];?>"><br>

            <label for="">Your Password is :</label>
            <input id="upassword" name="password" type="password" required placeholder="<?php echo $_SESSION['userpassword'];?>"><br>

            <button name="updateDone" type="submit" class="btn btn-primary buscancel">Update</button>
            <button name="deleteDone" type="submit" class="btn btn-danger buscancel" id="deleteDone">Delete</button>
            <a class="btn btn-danger buscancel mb-2" id="cancelUpdate">Cancel</a>
        </form>
    </div>

    <script src=" index.js"></script>
</body>

</html>