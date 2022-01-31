<?php

    $email = $_POST['email'];
    $paass = $_POST['pass'];
    session_start();

    $_SESSION['email'] = $email;
    $conn = mysqli_connect("localhost","root","","regsitrationform");
    $sql = "SELECT * FROM user WHERE email='$email' and pass='$paass'";
    $result = mysqli_query($conn,$sql);
    $count=mysqli_num_rows($result);
    echo $count;
    if($count == 1)
    {
        mysqli_close($conn); // Close connection
        header("location:Rock,Paper,Scissors\index.php"); // redirects to all records page
        exit;	
        } else
            { header("location:reg.php");
                echo "not inserted";}
        
    ?>