<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Site Metas -->
    <title>FATS AND ANGRY</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/angry.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

 <style>
    /*ปุ่ม Register */
    button {
    	padding: 20px;
    	font-size: 20px;
    	cursor: pointer;
    	border: 0px;
    	background: transparent;
    	position: relative;
    	margin: 1px;
    	transition: all 0.25s ease;
    }
    .btn-4 {
    	background: #0d256e;
    	color: #fff;
    	border-radius: 30px;
    	transition: all 0.25s ease;
    }
    .btn-4:hover{
      transform: translate( -2px, -2px);
    }
    </style>

</head>

<body>

	<!-- Start Customer Reviews -->
	<div class="customer-Register-box" style="background-color:#f7ce48;">
		<div class="container">
			<div class="row">

      <div class="col-lg-12">
        <div class="heading-title text-center"><br><br>
          <center>
            <img src="images/angry.png" alt="" width="150" height="150"/><br><br><br>
             

           <h2 class="title">ADMIN REGISTER</h2> <!-- ส่วน Register -->
           <form action="RegisterAdmin_insert.php" method = "POST"> 
         <div   style=" padding: 50px ; margin: 10px ; width: 678.33px ;background-color:#006c31">
              <div class="input-field ">
             	<div class="row">
                <div class="col-md-0 offset-xl-1">
                  <p>
                    <img src="images/person_icon.png"  width="30" height="30"/>&nbsp;&nbsp;&nbsp;
                    <input type="text" name ="Fname" placeholder="Firstname" SIZE="22.5" required autofocus/>
                <input type="text" name ="Lname" placeholder="Lastname" SIZE="22.5" required autofocus/></p>
                </div>
                </div>
                </div><br>
                
             
       	   <div class="input-field "><p>
             	<div class="row">
                <div class="col-md-0 offset-xl-1">
                <img src="images/phone.png" alt="" width="30" height="30"/>&nbsp;>&nbsp;
                <input type="text" name ="Pnum" placeholder="Phone Number" SIZE="25" required autofocus/></p></div></div>
              </div><br>

			  <div class="input-field ">
          	<div class="row">
              <div class="col-md-0 offset-xl-1">
             <img src="images/mail_icon.png" alt="" width="30" height="30"/>&nbsp;>&nbsp;
                <input type="email" name ="Email" placeholder="E-mail" SIZE="55" required autofocus/></div></div>
              </div><br>

			 <div class="input-field ">
         	<div class="row">
            <div class="col-md-0 offset-xl-1">
             <img src="images/key_icon.png" alt="" width="25" height="15"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="password" name ="pass" placeholder="Password" SIZE="55" required autofocus/></div></div>
              </div><br>

			  <div class="input-field ">
          <div class="col-md-0 offset-xl-1">
          	<div class="row">&nbsp;&nbsp;&nbsp;>&nbsp;>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="password" name ="pass" placeholder="Confirm password" SIZE="55" required autofocus/></div></div>
              </div><br>
              <button type="submit" class="btn-4" >Register</button><br>
            </div>
             </form>
              <p class="social-text">Have Account?
              <a href="AdminLogin.php"> >>> Login <<< </a></p>
              </center>
      </div>
    </div>
	  </div>
                </div><br><br><br><br>
	<!-- End Customer Reviews -->
              

         <!-- ALL JS FILES -->
         <script src="js/jquery-3.2.1.min.js"></script>
         <script src="js/bootstrap.min.js"></script>
           <!-- ALL PLUGINS -->
         <script src="js/jquery.superslides.min.js"></script>
         <script src="js/images-loded.min.js"></script>
         <script src="js/isotope.min.js"></script>
         <script src="js/baguetteBox.min.js"></script>
         <script src="js/form-validator.min.js"></script>
           <script src="js/contact-form-script.js"></script>
           <script src="js/custom.js"></script>
       </body>
       </html>