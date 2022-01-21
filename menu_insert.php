<?php

        require 'connectdb.php';   

        error_reporting(0); 
        session_start();
        if (isset($_POST["Add"]))
        {
            $query = "SELECT * FROM goods ORDER BY id DESC";
        $result = mysqli_query($dbcon, $query); 
            if (isset($_SESSION["shopping_cart"]))
            {
                $item_array_id = array_column($_SESSION["shopping_cart"],"id");
                if (!in_array($_GET["id"], $item_array_id))
                    {    
                    $count = count($_SESSION["shopping_cart"]);
                    $item_array = array(
                        'id'          =>      $_GET["id"],
                        'Name'          =>      $_POST["hidden_name"],
                        'p_pic'        =>       $_POST["p_pic"],
                        'Number'        =>      $_POST["Number"],
                        'Cost'          =>      $_POST["hidden_Cost"],
                    );
                    $_SESSION["shopping_cart"][$count] = $item_array;
                     $alert = '<script type = "text/javascript">';
                    $alert .= 'alert("เพิ่มสินค้าลงในตะกร้าเรียบร้อย");';
                    $alert .= 'window.location.href = "menu.php";';
                    $alert .= '</script>';
                    echo $alert;
                    }
                    
                 else {
                    $alert = '<script type = "text/javascript">';
                    $alert .= 'alert("สินค้าซ้ำ กรุณาทำการสั่งใหม่");';
                    $alert .= 'window.location.href = "menu.php";';
                    $alert .= '</script>';
                    echo $alert;
                      }
                                  
            }
            
            else {
            $item_array = array(
                        'id'          =>      $_GET["id"],
                        'Name'          =>      $_POST["hidden_name"],
                        'p_pic'        =>       $_POST["p_pic"],
                        'Number'        =>      $_POST["Number"],
                        'Cost'          =>      $_POST["hidden_Cost"]
             );
            $_SESSION["shopping_cart"][0] = $item_array;
            
             $alert = '<script type = "text/javascript">';
             $alert .= 'alert("เพิ่มสินค้าลงในตะกร้าเรียบร้อย");';
             $alert .= 'window.location.href = "menu.php";';
             $alert .= '</script>';
                    echo $alert;
                 } 
    
            }

//remove item in cart
        if (isset($_GET['action']))
        {
            if($_GET['action']=="delete")
            {
                foreach ($_SESSION["shopping_cart"] as $key => $value){
                    if ($value["id"] == $_GET["id"]){
                    unset($_SESSION["shopping_cart"][$key]);
                    $alert = '<script type = "text/javascript">';
                    $alert .= 'alert("สินค้าถูกลบแล้วนะ ;-; ");';
                    $alert .= 'window.location.href = "shop.php";';
                    $alert .= '</script>';
                    echo $alert;
                    }
                }
            }
        } 
        
    ?>