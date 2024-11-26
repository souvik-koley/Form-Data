<?php
 $fname=$_POST['FirstName'];
 $lnmae=$_POST['LastName'];
 $email=$_POST['Email'];
 $phone=$_POST['Phone'];

 
 
 $conn = mysqli_connect("localhost","root","","data") or die("Connection Failed");

 $sql="INSERT INTO `personaldata`(`FirstName`, `LastName`, `Email`, `Phone`) VALUES ('$fname','$lnmae', '$email','$phone')";

 $result = mysqli_query($conn,$sql) or die("Query Unsuccessful");

 header("Location:http://localhost:8080/Form-Data/index.php");
    
 mysqli_close($conn)

?>