<?php
error_reporting(0);
?>
<?php
session_start();    
$email = $_SESSION['email'];
$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {

	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];	
		$folder = "image/".$filename;
		
	$db = mysqli_connect("localhost", "root", "", "regsitrationform");

		// Get all the submitted data from the form
		$sql = "UPDATE user SET profileimage='$filename' where email='$email' ";
		// Execute query
		mysqli_query($db, $sql);
		
		// Now let's move the uploaded image into the folder: image
		if (move_uploaded_file($tempname, $folder)) {
			$msg = "Image uploaded successfully";
		}else{
			$msg = "Failed to upload image";
	}
}


	?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="profilestyle.css">
    <link rel="stylesheet" href="style.css">
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
    <h1 class="h-primary center">Profile</h1>
    <div>
    <a id="pen" href="editprofile.php">&#9998; </a>
    </div>
    <div id="content">
    
        </form>
        <div class="info">
            <?php
                session_start();
                $email = $_SESSION['email'];
                // echo $email;
                $con = mysqli_connect("localhost","root","","regsitrationform");
                $name_person = "Select * from user where email='$email'";
                $imgloc = "default.JPG";
                
                $sql = mysqli_query($con,$name_person);
               
                while( $fetch = mysqli_fetch_assoc($sql)){
                    $imgloc = $fetch['profileimage'];
                    echo "<div><img src='$imgloc' alt=''>". 
                    "<form method='POST'; action='' enctype='multipart/form-data' class='in' id='border-remove'>
                    <input type='file' name='uploadfile' value='' />
                    <div>
                        <button type='submit' name='upload'>UPLOAD</button>
                    </div>".
                        "</div><div class='in'  id='paddtop'><div class='inDiv'>Name: </div><div class='inDivData'>".$fetch['nname'].
                        "</div></div><div class='in'><div class='inDiv'>Email: </div> <div class='inDivData'>".$email.
                        "</div></div><div class='in'><div class='inDiv'>Mobile No.: </div> <div class='inDivData'>".$fetch['mobileno'].
                        // "</div></div><div class='in'><div class='inDiv'>Pass: </div> <div class='inDivData'>".$fetch['pass'].
                        "</div></div><div class='in'><div class='inDiv'>Gender: </div> <div class='inDivData'>".$fetch['gender'].
                        "</div></div><div class='in'><div class='inDiv'>Games Lost: </div> <div class='inDivData'>".$fetch['win'].
                        "</div></div><div class='in'><div class='inDiv'>Games Won: </div> <div class='inDivData'>".$fetch['lost'].
                        "</div></div><div class='in'><div class='inDiv'>Games Draw: </div> <div class='inDivData'>".$fetch['draw']."</div";
                }
            ?>
        </div>
    </div>
</body>
</html>