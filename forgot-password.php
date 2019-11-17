<?php
error_reporting(0);
if($_POST['submit']=='Send')
{
//keep it inside
$email=$_POST['email'];
$code = $_GET['activation_code'];
$con=mysql_connect("Localhost","root","123","user");
// Check connection
if (mysql_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysql_connect_error();
  }
$query = mysql_query($con,"select * from login where user_email='$email'")
or die(mysql_error($con)); 

 if (mysql_num_rows ($query)==1) 
 {
$code=rand(100,999);
$message="You activation link is: http://bing.fun2pk.com/resetpass.php?email=$email&code=$code";
mail($email, "ZatWing", $message);
echo 'Email sent';
$query2 = mysql_query($con,"update login set activation_code='$code' where user_email='$email' ")
or die(mysql_error($con)); 
}
else
{
echo 'No user exist with this email id';

}}

?>
<form action="resetpass.php" method="post">
Enter you email ID: <input type="text" name="email">
<input type="submit" name="submit" value="Send">
</form>

