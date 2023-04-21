<?php 
  session_start();
  include("dbcon.php");
  $userid=$_SESSION['userid'];

  $select=mysqli_query($conn, "SELECT * FROM user WHERE id='$userid' ");
  $row=mysqli_fetch_assoc($select);
  $check=mysqli_num_rows($select);

  if($check > 0){
   $fname=$row['fname'];
   $lname=$row['lname'];
   $username=$row['username'];
   $password=$row['password'];
   $profile=$row['profile'];
   $type=$row['type'];
  }
  else{
    header("Location: ../");
  }



?>