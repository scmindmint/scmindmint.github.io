<?php
        require 'connectdb.php';
        
        $r_Name = $_POST['r_Name'];
        $r_email = $_POST['r_email'];
        $r_Comments = $_POST['r_Comments'];	
      
        
        $query = "INSERT INTO review (r_Name,r_email,r_Comments) VALUES ('$r_Name','$r_email', '$r_Comments')";

        $result = mysqli_query($dbcon, $query);
        
        if ($result == "submit") {
            $alert = '<script type = "text/javascript">';
            $alert .= 'alert("ขอบคุณที่เข้ามารีวิวกันน้าา");';
            $alert .= 'window.location.href = "review.php";';
            $alert .= '</script>';
            echo $alert;
           
    } else{
        echo "error". mysqli_error($dbcon);
    }
    mysqli_close($dbcon);