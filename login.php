<?php
require 'config.php';
if(!empty($_SESSION["id_admin"])){
	header("Location: admin.php");
  }

  if(isset($_POST["logsubmit"])){
	$email = $_POST["email_ad"];
	$password = $_POST["password_ad"];
	$result = mysqli_query($conn, "SELECT * FROM admin  WHERE email_ad = '$email'");
	$row = mysqli_fetch_array($result);
	 if(mysqli_num_rows($result) > 0){
	   if($password == $row['password_ad']) {
	 	$_SESSION["id_admin"] = $row['id_admin'];
	 	header("Location: admin.php");
         echo "<div class='alert alert-success'>Login successful!</div>";
	   }
	   else{
         echo "<div class='alert alert-danger'> Wrong Password</div>";
	   }
	 }
	 else{
       echo "<div class='alert alert-danger'>User Not Registered</div>";
     }
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Admin</title>

    <link rel="stylesheet" href="login.css">

    <link href="../client/assets/img/gaming.png" rel="icon">
    <link href="../client/assets/img/gaming.png" rel="apple-touch-icon">
    <link href="../client/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../client/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../client/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../client/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../client/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../client/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
</head>

<body>
    <div class="login-box">
        <h2>Login</h2>
        <form method="Post" action="">
            <div class="user-box">
                <input type="Email" name="email_ad" required="">
                <label>Email</label>
            </div>
            <div class="user-box">
                <input type="password" name="password_ad" required="">
                <label>Password</label>
            </div>
            <button type="submit" name="logsubmit" >
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Submit
            </button>
        </form>
    </div>
</body>

</html>