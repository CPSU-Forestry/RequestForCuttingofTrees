<?php 
  session_start();
  include("dbcon.php");
  $fellerid=$_SESSION['fellerid'];

  $select=mysqli_query($conn, "SELECT * FROM tree_feller WHERE id='$fellerid' ");
  $row=mysqli_fetch_assoc($select);
  $check=mysqli_num_rows($select);
  									
  if($check > 0){
   $fname=$row['fname'];
   $lname=$row['lname'];
   $gender=$row['gender'];
   $contact=$row['contact'];
   $address=$row['address'];
   $username=$row['username'];
   $password=md5($row['password']);
   $profile=$row['profile'];
   $attach_file=$row['attach_file'];
   $status=$row['status'];

  }



?>