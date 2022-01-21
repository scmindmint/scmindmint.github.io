<?php
        require 'connectdb.php';
        
        $Fname = $_POST['Fname'];
        $Lname = $_POST['Lname'];
        $Location = $_POST['Location'];	
        $Pnum = $_POST['Pnum'];
        $Email = $_POST['Email'];
        $pass = $_POST['pass'];
        
        //Encode password
        $salt = 'fat&angryUser';
        $hash_pass = hash_hmac('sha256', $pass, $salt);
        
        $query = "INSERT INTO register (Fname,Lname,Location,Pnum,Email,pass) VALUES ('$Fname','$Lname', '$Location', '$Pnum', '$Email', '$hash_pass')";

        $result = mysqli_query($dbcon, $query);
        
        if ($result == "Register") {
            $alert = '<script type = "text/javascript">';
            $alert .= 'alert("Register Complete");';
            $alert .= 'window.location.href = "Login_frm.php";';
            $alert .= '</script>';
            echo $alert;
           
    } else{
        echo "error". mysqli_error($dbcon);
    }
    mysqli_close($dbcon);
