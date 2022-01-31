<?php
if (isset($_POST['submit']) ) {
    // collect value of input field
    $_GLOBAL['email'] ="LKHDF";
    // $_GLOBAL['email'] = $_POST['email'];
    $_GLOBAL['pass'] = $_POST['pass'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">
   
</head>
<body>
    <div>
        <nav>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="https://github.com/prerna142002">Projects</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="https://drive.google.com/file/d/16CvBkWi1SelvT-tPIfm_-0Ddjje9lv7g/view?usp=sharing">Resume</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="https://www.linkedin.com/in/prerna-verma-6737081a3/">Contact</a>
                </li>
              </ul>
        </nav>
    </div>
    <div id="contact">
        <h1 class="h-primary center">Login Page</h1>
        <div id="contact-box" class="reg-cont-box">
            <!-- <div class="inside-contt">
                <h1>Hi</h1>
            </div> -->
            <!-- <div id="reg-form-div"> -->
                <form method="post" id="reg-form" action="loginCheck.php">
                    <div id="email">
                        <label for ="email" class="center">Email ID</label><span style="color:#ff0000">*</span>
                        <input class="newcss" type="text" name="email" id="email"
                        placeholder="Enter email" required>

                    </div>
                    <div id="pass">
                        <label for ="pass" class="center">Password</label><span style="color:#ff0000">*</span>
                        <input class="newcss" type="text" name="pass" id="pass"
                        placeholder="Enter password" required>
                    </div>
                    <input type="submit"></input>
                </form>
                <!-- </div> -->
                
        </div>
    </div>
</body>
</html>