<?PHP 
session_start();
include('db.php');//Your connection to your database
 
//Get posted values from form
$u=$_POST['username'];
$p=$_POST['password'];

 
//Strip slashes
$u = stripslashes($u);
$p = stripslashes($p);
 
//Strip tags 
$u = strip_tags($u);
$p = strip_tags($p);
 
$check = mysql_query("SELECT * FROM users WHERE username ='$u' 
AND password='$p'")or die(mysql_error());
$check = mysql_num_rows($check);

if($check=="1")
{
$results = mysql_query("SELECT * FROM users WHERE username ='$u'") or die(mysql_error());
while ($row = mysql_fetch_assoc($results)) {
    $user=$row['username'];
    $_SESSION['username'] = $user;
	$_SESSION['username'] = $row['username'];
	header("location: home.php");	
echo "1";
} 
}
else
{
	echo "Wrong username or password";
}
?>