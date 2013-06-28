<?PHP
$localhost = 'localhost'; //name of server. Usually localhost
$database = 'office_um'; //database name.
$username = 'root'; //database username.
$password = 'root'; //database password.

// connect to db  
$conn = mysql_connect($localhost, $username, $password) or die('Error connecting to mysql');   
$db = mysql_select_db($database,$conn) or die('Unable to select database!');    

?>