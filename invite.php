<?php
$msg="";
 if(isset($_REQUEST['Invite']))
{
    @mysql_connect("localhost","root","");
    @mysql_select_db("cms");
    $dup=mysql_query("SELECT t_email FROM tes_db WHERE t_email='$_REQUEST[useremail]'");
    if($dup){
    if(mysql_affected_rows()>0){
        echo "<script type='text/javascript'>";
        echo"alert('User Email is Already in Use!')";
        echo"</script>";
    }
    else{
            $qry = "insert into tes_db(t_username,t_fname,t_lname,t_pass,t_email,t_gender) values ('$_REQUEST[username]','$_REQUEST[firstname]','$_REQUEST[lastname]','$_REQUEST[pass]','$_REQUEST[useremail]','$_REQUEST[gender]')";     
           mysql_query($qry);
           if(mysql_affected_rows()>0){
                 echo '<script>alert("Congrats, You are now Registered!")';
                 echo'</script>';
                 mysql_error();
                 ?>
           <script>window.location.href='index.php';</script>
           <?php
            }
            else{
                echo '<script>alert("Error Registration! Please Try Again Later!!");</script>';
            }
        mysql_error();
     mysql_close();   
}
}}
else{
    if(isset($_REQUEST['Login'])){
        header("location:index.php");
    }
}
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <script type="text/javascript" src="invitevalidate.js"></script>
<title>OUR INVITATION</title>
<!-- Style --> <link rel="stylesheet" href="css/styleinvite.css" type="text/css" media="all" />
</head>
<body>
<div class="header">
</div>
<div class="container">
	<div class="signup">
     	<form name="finvite" method="post" class="form-invite" id="Finvite" onsubmit="return(validate());">
	<table border="0" width="300" align="center">
		<tr>
			<td style="font-family: Oswald-Light;color: #FFF;">User Name</td>
			<td ><input type="text" class="name" name="username" id="userName" placeholder="Enter your UserName" maxlength="10" required></td>
		</tr>
		<tr>
			<td style="font-family: Oswald-Light;color: #FFF;">First Name</td>
			<td><input type="text" class="name" name="firstname" id="firstName" placeholder="Enter your First Name" maxlength="50" required></td>
		</tr>
		<tr>
			<td style="font-family: Oswald-Light;color: #FFF;">Last Name</td>
			<td><input type="text" class="name" name="lastname" id="lastName" placeholder="Enter your Last Name" maxlength="50" required></td>
		</tr>
		<tr>
			<td style="font-family: Oswald-Light;color: #FFF;">Password</td>
			<td><input type="password" class="pass" name="pass" id="password" placeholder="Enter your Password" min="6" maxlength="20" required></td>
		</tr>
		<tr>
			<td style="font-family: Oswald-Light;color: #FFF;">Confirm Password</td>
			<td><input type="password" class="pass" name="c_pass" id="confirm_password" placeholder="Confirm Password" min="6" maxlength="20" required></td>
		</tr>
		<tr>
			<td style="font-family: Oswald-Light;color: #FFF;">Email</td>
			<td><input type="email" class="user" name="useremail" id="userEmail" placeholder="Enter your Email ID" maxlength="100" required></td>
		</tr>
		<tr style="font-family: Oswald-Light;color: #FFF;">
			<td>Gender</td>
			<td><input type="radio" name="gender" value="M">Male
			<input type="radio" name="gender" value="F">Female
			</td>
		</tr>
		<tr>
			<td colspan=2 style="font-family: Oswald-Light;color: #FFF;">
			<input type="submit" name="Invite" value="ACCEPT INVITATION" id="invite"/></td>
		</tr>
        </table>
        </form>
        <form name="lmn" method="post" class="form-invite">
        <table border="0" width="300" align="center">
        <tr><td colspan="2" style="font-family: Oswald-Light;color: #FFF;"><input type="submit" value="LET ME IN" name="Login"/>
        </td></tr>
	</table>
</form>
	</div>
</div>
<div class="footer">
</div>
</body>
</html>