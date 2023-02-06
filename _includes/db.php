<?php
/* DATABASE CONFIGURATION */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'attendance');


$dbhost=DB_SERVER;
$dbuser=DB_USERNAME;
$dbpass=DB_PASSWORD;
$dbname=DB_DATABASE;
try {
$dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
$dbh->exec("set names utf8");
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if($dbh){
// 	echo "process complete";
}
return $dbh;
}
catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}
?>

<!-- $query = 'select * from onemonth';
$add = $dbh->prepare($query);
$add->execute();
$table1 = $add->fetchAll($dbh::FETCH_ASSOC);
 -->
