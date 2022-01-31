<?php
      
    $con = mysqli_connect("localhost","root","","regsitrationform");

    // if(isset($_POST['submit'])){
    //      $id=$_POST['id']; 
    //      $name=$_POST['name']; 
    //      $insert="INSERT INTO `m_project`(`id`, `name`) VALUES ('$id','$name')"; 
         
         

    if (isset($_POST['submit']) ) {
        // collect value of input field
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $mobileno =(int)$_POST['mobileno'];
        $gender = $_POST['gender'];
        $insert = "INSERT INTO `user` (`id`, `nname`, `email`, `pass`, `mobileno`, `gender`, `time`) VALUES ('','$name','$email','$pass','$mobileno','$gender','')";
        $sql=mysqli_query($con,$insert); 
        if($sql){ 
            $message = " Welcome .$name";
            echo "<script type ='text/JavaScript'>";  
            echo "alert('$message')";  
            echo "</script>";   
            } else{ echo "not inserted"; } } 
    
      ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
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
            <h1 class="h-primary center">SIGN UP FORM</h1>
            <!-- <marquee direction="right" height="50" bgcolor="white">---------------------------------------------------------ENTER YOUR INFO---------------------------------------------------------------</marquee> -->
    
            <div id="contact-box">
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                    <div id="name">

                        <label for ="name" class="center">Full Name:</label><span style="color:#ff0000">*</span>
                        <input type="text" name="name" id="name"
                        placeholder="What to call you?" required>
            
                    </div>

                    <div id="mail">

                        <label for ="email">Email:</label><span style="color:#ff0000">*</span>
                        <input type="text" name="email" id="email"
                        placeholder="How to contact you?" required>

                    </div>

                    <div class="pass">

                        <label for ="pass">Create Password:</label><span style="color:#ff0000">*</span>
                        <input type= "password" name="pass" id="pass"
                        placeholder="Secure your account" required>
                        <p></p>
                    </div>

                    <div class="dob">

                        <div>
                            <label for ="mobileno">Mobile No.</label><span style="color:#ff0000">*</span>
                            <input type="text" name="mobileno" required> </input>
                        </div>

                        <div id="gen">
                            <!-- Gender: -->
                            <label for ="gender">Gender:</label><span style="color:#ff0000">*</span><br>


                            <label for="male" class="c">
                                <input type="radio" id="male" name="gender" value="MALE">
                                &#9794;(M)
                            </label>
                            <label for="female" class="c">
                                <input type="radio" id="female" name="gender" value="FEMALE">
                                &#9792;(F)
                            </label>
                            <label for="other" class="c">
                                <input type="radio" id="other" name="gender" value="OTHER">
                                &#215;(O)</label>
                            
                            <!-- <label for ="name">Gender:  </label>
                            <input type="date" name="date" required> </input>
                            U+2640 -->
                        </div>
                    </div>
        
                    <input type="submit" value="submit" id="sbtn" name="submit">
                    <a href="view.php"><input type="button" value="View Data" id="sbtn" name="viewall" action="view.php"></a>
                    
                    
                </form>
            </div>
    </div>
    
</body>
</html>