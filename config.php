<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'sql306.epizy.com');
define('DB_USERNAME', 'epiz_25726231');
define('DB_PASSWORD', 'XhW7DQGeW6O8pF');
define('DB_NAME', 'nateflix');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
