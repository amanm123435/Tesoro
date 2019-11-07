<?php

/**
 * @author gencyolcu
 * @copyright 2017
 */
if(isset($_GET['code'])) $acode = $_GET['code'];
else die("No code!");

@mysql_connect("localhost","root","");
    @mysql_select_db("cms");
if (mysql_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysql_connect_error();
} else {
    $acode = mysql_real_escape_string($con, $acode);
    $query = mysql_query($con,"select * from login where activation_code='$acode'")
    or die(mysql_error($con)); 
    if(mysql_num_rows($query) == 0) {
        echo "Wrong code";
        die();
    } elseif (mysql_num_rows ($query)==1 && isset($_POST['pass'])) {
        $pass = mysql_real_escape_string($con, $_POST['pass']);
        $query3 = mysql_query($con,"update login set Password='$pass' where activation_code='$acode'")
        or die(mysql_error($con)); 

        echo 'Password Changed';
    }
}

?>

    <form action="resetpass.php?code=<?php echo $_GET['code'];?>" method="POST">
    <p>New Password:</p><input type="password" name="pass" />
    <input type="submit"  name="submit" value="Signup!" />
    </form>
