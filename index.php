<?php session_start();  
define("USER", "admin");
define("PASS", "admin"); ?>
<html>
<head>
<link rel="stylesheet" href="css/global.css"> 
<style>
#login_form {
	padding-left: 145px;
	padding-top: 80px;
}
#button {
			width: auto;
	padding: 9px 15px;
	background: #356AA8;
	border: 0;
	font-size: 14px;
	color: #FFFFFF;
	border-radius: 4px;
	margin-bottom: 10px;
}
#but {
	margin-right: 140px;
	text-align: center;
}
#footer {
  padding-top: 100px;
}
h1 {
  padding-top: 30px;
}
#statu {
  color: red;
}
</style>
</head>
<body>
<center><h1>Online Test</h1></center>
<div id="container"> 

	<div id="login_form"> 
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
       <?php  $file="logindata.xml";
$logind= new SimpleXMLElement($file, null, true);

  if (isset($_POST["user"]) && isset($_POST["pass"]))
    {
      for ($i=0; $i<5; $i++) {
        
      
        if (($_POST["user"] == $logind->login[$i]->username && $_POST["pass"] == $logind->login[$i]->password))
          {
           if($logind->login[$i]->count==0) {
             $_SESSION["authenticated"] = TRUE;
             
             $username=(string)$logind->login[$i]->username;
             $_SESSION["username"] = $username;
             $logind->login[$i]->count=1;
            file_put_contents($file, $logind->asXML());
             header("Location: test.php");
             exit;
           } 
           else
            echo "<span id ='statu'>"."Your test is already over. You cannot log in again. Sorry."."</span>";
          } 
                  else if (($_POST["user"] == USER && $_POST["pass"] == PASS)) {
          $_SESSION["authenticated"] = TRUE;
          header("Location: result.php");
             exit;
        }

} 

}
?>

 <p> Username:
          <input name="user" type="text" /></p>
        <p>Password:
          <input name="pass" type="password" /></p></br>
<p id="but"><input type="submit" value="Log In" id="button" />     </p>
    </form>
    <?php if (count($_POST) > 0) echo "Invalid Login!"; ?><br>
     </div> 
<img src="img/example-frame.png" width="839" height="41" id="frame"> 
</div>
<div id="footer">By Prashant Baid and Binay Verma</div>
  </div>
</body>
</html>