<?php

error_reporting(0);
session_start();
session_destroy();

if ($_SESSION['message']) {
    $message = $_SESSION['message'];
    echo "<script type='text/javascript'>
    alert('$message');
    </script>";
}

$host = "localhost";
$user = "root";
$password = "";
$db = "schoolproject";

$data = mysqli_connect($host, $user, $password, $db);

$sql = "SELECT * FROM teacher";

$result = mysqli_query($data, $sql);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="urf-8">
    <title>Student Management System</title>
    <link rel="Stylesheet" type="text/css" href="style.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>

<body>
    <nav>
        <label class="logo">NextStep Academy</label>

        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Admission</a></li>
            <li><a href="login.php" class="btn btn-success">Login</a></li>
        </ul>

    </nav>

    <div class="section1">

        <label class="img_text"> We deliver excellence in Education </label>
        <img class="main_img" src="images/class.jpg">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="welcome_img" src="images/multi.jpeg">

            </div>
            <div class="col-md-8">
                <h1>Welcome to NextStep Academy</h1>
                <p>At NextStep Academy, we are dedicated to providing top-quality education and training to empower individuals for success.
                    Our comprehensive programs are designed to foster learning, growth, and excellence in various fields.
                    Join us to experience a supportive and dynamic environment that nurtures your potential and drives you toward your goals.
                    Whether you are looking to enhance your skills or start a new career path, NextStep Academy is here to guide you every step of the way.</p>

            </div>

        </div>


    </div>

    <center>
        <h1>Our Teachers</h1>
    </center>

    <div class="container">
        <div class="row">

            <?php
            while ($info = $result->fetch_assoc()) {

            ?>


                <div class="col-md-4">
                    <img class="teacher" src="<?php echo "{$info['image']}" ?>">

                    <h3><?php echo "{$info['name']}" ?></h3>

                    <h5><?php echo "{$info['description']}" ?></h5>

                </div>
            <?php
            }
            ?>


        </div>

    </div>


    <center>
        <h1>Our Courses</h1>
    </center>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="teacher" src="images/web.jpeg">
                <h1>Web Development</h1>


            </div>
            <div class="col-md-4">
                <img class="teacher" src="images/graphic.jpeg">
                <h1>Mobile Computing</h1>


            </div>
            <div class="col-md-4">
                <img class="teacher" src="images/marketer.jpeg">
                <h1>Data Science</h1>


            </div>

        </div>

    </div>

    <center>
        <h1 class=adm>Admission Form</h1>
    </center>


    <div align="center" class="admision_from">
        <form action="data_check.php" method="POST">

            <div class="adm_int">
                <lable class="lable_text">Name</lable>
                <input class="input_deg" type="text" name="name">
            </div>

            <div class="adm_int">
                <lable class="lable_text">Email</lable>
                <input class="input_deg" type="text" name="email">
            </div>

            <div class="adm_int">
                <lable class="lable_text">Phone</lable>
                <input class="input_deg" type="text" name="phone">
            </div>

            <div class="adm_int">
                <lable class="lable_text">Note</lable>
                <textarea class="input_txt" name="message"></textarea>
            </div>

            <div class="adm_int">

                <input class="btn btn-primary" id="submit" type="Submit" value="apply" name="apply">
            </div>




        </form>

    </div>

    <footer>
        <h3 class="footer_text">© 2024 NextStep Academy. All rights reserved - Student Management System</h3>

    </footer>

</body>

</html>