<?php
//session_start();
//include_once("../class.user.php");


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sign In</title>
<link rel="stylesheet" href="../style/style.css" type="text/css"  />
</head>
<body>

<div id="main2">




       <form  method="post" >

        <h1 >Sign In</h1>

    



        <input type="text"  name="txt_uname_email" placeholder="Username or email" required />



        <input type="password"  name="txt_password" placeholder="Your Password" />



            <input value="SIGN IN" type="submit" name="btn-login" class="button">



            <p>Don't have account! <a href="sign-up.php">SING UP</a> or go <a href="../index.php">HOME</a></p>
      </form>



</div>

</body>
</html>
