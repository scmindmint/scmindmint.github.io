<?php
        require 'connectdb.php';
        
        $Email = mysqli_real_escape_string($dbcon, $_POST['Email']);
        $pass = mysqli_real_escape_string($dbcon, $_POST['pass']);
        
        $salt = 'Fat&AngryCafeAdmin';
        $hash_pass = hash_hmac('sha256', $pass, $salt);
        
        $sql = "SELECT * FROM adminregister WHERE Email=? AND pass=?";
        $stmt = mysqli_prepare($dbcon, $sql);
        mysqli_stmt_bind_param($stmt, "ss", $Email, $hash_pass);
        mysqli_execute($stmt);
        $result_user = mysqli_stmt_get_result($stmt);
        
        if ($result_user -> num_rows == 1) {
            session_start();
            $row_user = mysqli_fetch_array($result_user,MYSQLI_ASSOC);
            $_SESSION['id'] = $row_user['id'];
            Header("Location: seeorder.php");
            //Header();
    } else{
            $alert = '<script type = "text/javascript">';
            $alert .= 'alert("Please check your E-mail or password");';
            $alert .= 'window.location.href = "AdminLogin.php";';
            $alert .= '</script>';
            echo $alert;
    }
    mysqli_close($dbcon);

