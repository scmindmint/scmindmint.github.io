<?php
 require 'connectdb.php';  
require 'shop.php'; 
require 'menu_insert.php';

             if (!empty($_SESSION["shopping_cart"])){
             $total_ = 0;
             foreach($_SESSION["shopping_cart"] as $key => $value){
        
        $t_Name = $_POST['t_Name'];
        $t_Address = $_POST['t_Address'];
        $t_Tel = $_POST['t_Tel'];
        $total_1 ;
        $t_Number;
 
	
           //$fileupload = $_POST['fileupload']; //รับค่าไฟล์จากฟอร์ม	
$fileupload = (isset($_POST['fileupload']) ? $_POST['fileupload'] : '');
//ฟังก์ชั่นวันที่
        date_default_timezone_set('Asia/Bangkok');
	$date = date("Ymd");	
//ฟังก์ชั่นสุ่มตัวเลข
         $numrand = (mt_rand());
//เพิ่มไฟล์
$upload=$_FILES['fileupload'];
if($upload =! '') {   //not select file
//โฟลเดอร์ที่จะ upload file เข้าไป 
$path="fileupload/";  
//เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล
 $type = strrchr($_FILES['fileupload']['name'],".");
	
//ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม
$newname = $date.$numrand.$type;
$path_copy=$path.$newname;
$path_link="fileupload/".$newname;

//คัดลอกไฟล์ไปเก็บที่เว็บเซริ์ฟเวอร์
move_uploaded_file($_FILES['fileupload']['tmp_name'],$path_copy);  	
	}
	// เพิ่มไฟล์เข้าไปในตาราง uploadfile

                 $sql = "INSERT INTO uploadfile (t_Name,t_Address,t_Tel,fileupload,t_Number,total_1)VALUES('$t_Name','$t_Address', '$t_Tel','$newname','$t_Number','$total_1')";
         
                    $query = mysqli_query($dbcon, $sql) or die ("Error in query: $sql " . mysqli_error());
                    
                     $result = mysqli_query($dbcon, $query);
                       
                    
                     mysqli_close($dbcon);   
                     
	 //javascript แสดงการ upload file
                     
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('สินค้ากำลังถูกจัดส่ง กรุณารอสักครู่ ...');";
	echo "window.location = 'shop1.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('สินค้ากำลังถูกจัดส่ง กรุณารอสักครู่ ...');";
        	echo "window.location = 'shop1.php'; ";
	echo "</script>";
                      }
                              
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

