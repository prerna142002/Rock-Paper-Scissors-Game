<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" src="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" src="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.css"/>
    
</head>
<body>
    <h1 style="text-align: center;">DATA FROM DATABASE</h1>
    <table class="table table-light table-bordered" id="myTable" style="border: 2px solid pink;
  border-collapse: collapse; width:95vw; margin:auto;">
    <thead>
      <tr>
            <th style='border: 2px solid pink;'>ID</th>
            <th style='border: 2px solid pink;'>NAME</th>
            <th style='border: 2px solid pink;'>PASS</th>
            <th style='border: 2px solid pink;'>EMAIL ID</th>
            <th style='border: 2px solid pink;'>MOBILE NO</th>
            <th style='border: 2px solid pink;'>GENDER</th>
            <th style='border: 2px solid pink;'>DELETE</th>
      </tr>
    </thead>
        <tbody>
        <?php
        $conn = mysqli_connect("localhost","root","","regsitrationform");
        $sql = "SELECT * FROM user";
        $result = $conn->query($sql);


        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr style='border: 2px solid pink;'><td style='border: 2px solid pink;'>" .$row["id"].
            "</td><td style='border: 2px solid pink;'>".$row["nname"]. 
            "</td><td style='border: 2px solid pink;'>" . $row["pass"]. 
            "</td><td style='border: 2px solid pink;'>" . $row["email"]. 
            "</td><td style='border: 2px solid pink;'>". $row["mobileno"]. 
            "</td><td style='border: 2px solid pink;'>". $row["gender"]. 
            "</td>"?>
            <td style='border: 2px solid pink;'>
            <button type="submit" name="submit" onClick="javascript: return confirm('Please confirm deletion');" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
            <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td></tr>
            <?php
        }}else {
        echo "0 results";
        }
        $conn->close();
    ?>

        </tbody>
    </table>


</body>
</html>