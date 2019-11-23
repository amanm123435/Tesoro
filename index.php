<?php
session_start();
if(isset($_REQUEST['Login']))
{
    include 'blogic.php';
    $res=ExecuteQuery("select * from tes_db where t_email='$_REQUEST[username]' and t_pass='$_REQUEST[pass]'");
    if(mysql_affected_rows()>0) {
        if(isset($_REQUEST['rem'])){
            setcookie("mycookie",$_REQUEST['username'],time()+60);
            setcookie("mycookie1",$_REQUEST['pass'],time()+60);}
     $r=mysql_fetch_assoc($res);
     $_SESSION['email']=$r['t_email'];
     $_SESSION['uid']=$r['id'];
     header('location:home.php?id=$r[t_email]');   
    }
    else{
        echo("<script type='text/javascript'>");
        echo("alert('Invalid User Email and Password!')");
        echo("</script>");
    }
    }
else{
    if(isset($_REQUEST['Invite'])){
            header("location:invite.php");
        }
}

?>
<!DOCTYPE html>
<html>
<head>
<title>TESORO: Gems Of GLA</title>
<!-- Style --><link rel="stylesheet" href="css/stylelogin.css" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>
<div class="header">
</div>
<div class="container">
<h1></h1>
	<div class="signin" id="add_err">
     	<form method="post" name="myForm" action="index.php">
        <h1>WELCOME</h1>
	      	<input name="username" type="email" class="user" id="name"  placeholder="Enter your Email ID"/>
	      	<input name="pass" type="password" class="pass" id="pwd"  placeholder="Enter Password"/>
	      	<label>
		  		<input type="checkbox" name="rem" value="Remember-Me" /> Remember Me? &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <a href="#" class="btn-link"><u>Forgot Password</u></a>
                
		  	</label>
          	<input type="submit" value="LET ME IN" name="Login" id="login"/>
	 	
        <label>&nbsp Not Among Us?</label>
            <input type="submit" value="ACCEPT INVITATION" name="Invite"/>
        </form>
	</div>
</div>
<div class="footer">
</div>
</body>
</html>