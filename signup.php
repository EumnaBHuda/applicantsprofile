<?php 

if( $_POST )
{
  $con = mysql_connect("localhost","root","");

  if (!$con)
  {
    die('Could not connect: ' . mysql_error());
  }

  mysql_select_db("eahmed_test", $con);
  
  $name = $_POST['name'];
  $user = $_POST['user'];
  $pass = $_POST['pass'];
  $cpass= $_POST['cpass'];
  $enpass= md5($pass);
  $encpass = md5($cpass);

  $query = "INSERT INTO `master` (`name`, `username`, `password`, `confirm password`) VALUES ('$name',
        '$user', '$enpass', '$encpass');";
  mysql_query($query);
		
$sql="SELECT count(*) as num FROM master WHERE username='$user' $$ name='$name'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
//$count=mysql_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if($result == 0){
    //$row = mysql_fetch_assoc($result);
    if ($enpass == $encpass){
        $_SESSION['user'] = $user;
		$_SESSION['enpass'] = $enpass;
		echo "Login Successful";
        return true;
    }
    else {
        echo "Wrong Username or Password";
        return false;
    }
}
else{
     echo "Username is already there";
    return false;
}


  

  echo "<h2>Welcome!</h2>";

  mysql_close($con);
}


?>