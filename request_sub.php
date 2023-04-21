<?php 
    include("user_session.php");
    
    $tree_name=$_POST['tree_name'];
    $tree_no=$_POST['tree_no'];	 
    $reason=$_POST['reason'];  
    $date=date('m/d/Y');    

    $select=mysqli_query($conn, "SELECT * FROM trees WHERE tree_no='$tree_no' ");
    $row=mysqli_fetch_assoc($select);
    $tree_id=$row['id'];

    $insert=mysqli_query($conn, "INSERT INTO request (feller_id, tree_id, tree_name, tree_no, reason, status, date) VALUES ('$fellerid', '$tree_id', '$tree_name', '$tree_no', '$reason', 'Pending...', '$date')"); 

    header("Location: ../CPSU REQUEST APP/");
?>