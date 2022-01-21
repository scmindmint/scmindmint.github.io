<?php
        require 'connectdb.php';
        
        $Fname = $_POST['Fname'];
        $Lname = $_POST['Lname'];
        $Pnum = $_POST['Pnum'];
        $Email = $_POST['Email'];
        $pass = $_POST['pass'];
        
        //Encode password
        $salt = 'Fat&AngryCafeAdmin';
        $hash_pass = hash_hmac('sha256', $pass, $salt);
        
        $query = "INSERT INTO adminregister (Fname,Lname,Pnum,Email,pass) VALUES ('$Fname','$Lname', '$Pnum', '$Email', '$hash_pass')";

        $result = mysqli_query($dbcon, $query);
        
        if ($result == "Register") {
            $alert = '<script type = "text/javascript">';
            $alert .= 'alert("Register Complete");';
            $alert .= 'window.location.href = "AdminLogin.php";';
            $alert .= '</script>';
            echo $alert;
           
    } else{
        echo "error". mysqli_error($dbcon);
    }
    mysqli_close($dbcon);
