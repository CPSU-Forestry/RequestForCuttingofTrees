<?php 
    include("user_session.php");
    
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];	 
    $gender=$_POST['gender'];      
    $contact=$_POST['contact'];	
    $address=$_POST['address'];	
    $username=$_POST['username'];	
    $password=$_POST['password'];	

    $select=mysqli_query($conn, "SELECT * FROM tree_feller WHERE username='$username' ");
    $row=mysqli_fetch_assoc($select);
    $username1=$row['username'];
    
    if($username1 == $username){
        echo "<script>
        alert('Email Address Already exist!!');
        window.location.href='index.php$uid'
        </script>";
        exit();
    }

    $rand=rand();
    $directory = 'Uploads/Tree Feller/profile/';

    $profile = $_FILES["file1"]["name"];
    $tempname = $_FILES["file1"]["tmp_name"];
    $movefolder=$directory.$rand.$profile;
    move_uploaded_file($tempname, $movefolder);
    $profilepic=$rand.$profile;

    $directory2 = 'Uploads/Tree Feller/pdf/';
    $attach_file = $_FILES["file2"]["name"];
    $tempname2 = $_FILES["file2"]["tmp_name"];
    $movefolder2=$directory2.$rand.$attach_file;
    move_uploaded_file($tempname2, $movefolder2);
    $attach_files=$rand.$attach_file;

                                                                                                                                                                                                                                                                              
    $insert=mysqli_query($conn, "INSERT INTO tree_feller (fname, lname, gender, contact, address, username, password, profile, attach_file, status) VALUES 
    ('$fname', '$lname', '$gender', '$contact', '$address', '$username', '$password', '$profilepic', '$attach_files', 'Unverified')"); 

    if($insert){
        echo "<script type='text/javascript'>
            alert('Your Account has Successfully Created. Please wait 1 to 2 days for your account to be verified.');
          </script>";
          
        header("Location: ../CPSU REQUEST APP/");
    }
   

?>