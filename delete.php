<?php
    $conn = mysqli_connect("localhost","root","","regsitrationform");
    $id = $_GET['id'];
    $sql = mysqli_query($conn,"delete from user where id = '$id'");
    echo "Deleting....";
    if($sql)
    {
        echo "sknj";
        mysqli_close($conn); // Close connection
        header("location:view.php"); // redirects to all records page
        exit;	
    }
    else
    {
        echo "Error deleting record"; // display error message if not delete
    }
?>