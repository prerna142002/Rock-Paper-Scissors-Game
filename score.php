<?php
      session_start();
      $email = $_SESSION['email'];
      $userScore = $_COOKIE['user-score'];
      $compScore = $_COOKIE['comp-score'];
      $status = 'draw';
      if($userScore > $compScore) $status = 'win';
      if($userScore < $compScore) $status = 'lost';
      
      $query_name = "UPDATE user 
      SET $status = $status + 1
      WHERE email = '$email' ";

      $conn = mysqli_connect("localhost","root","","regsitrationform");
      $sql = mysqli_query($conn,$query_name);
      // echo "Deleting....";
      if($sql)
      {
          // echo "sknj";
          mysqli_close($conn); 
          // Close connection
          header("location:Rock,Paper,Scissors/index.php"); // redirects to all records page
          exit;	
      }
      else
      {
          echo "Error deleting record"; 
          // display error message if not delete
      }
    // $con = mysqli_connect("localhost","root","","regsitrationform");

    // // if(isset($_POST['submit'])){
    // //      $id=$_POST['id']; 
    // //      $name=$_POST['name']; 
    // //      $insert="INSERT INTO `m_project`(`id`, `name`) VALUES ('$id','$name')"; 
         
         

    // if (isset($_POST['submit']) ) {
    //     // collect value of input field
    //     $name = $_POST['name'];
    //     $email = $_POST['email'];
    //     $pass = $_POST['pass'];
    //     $mobileno =(int)$_POST['mobileno'];
    //     $gender = $_POST['gender'];
    //     $insert = "INSERT INTO `user` (`id`, `nname`, `email`, `pass`, `mobileno`, `gender`, `time`) VALUES ('','$name','$email','$pass','$mobileno','$gender','')";
    //     $sql=mysqli_query($con,$insert); 
    //     if($sql){ 
    //         $message = " Welcome .$name";
    //         echo "<script type ='text/JavaScript'>";  
    //         echo "alert('$message')";  
    //         echo "</script>";   
    //         } else{ echo "not inserted"; } } 
    
      ?>