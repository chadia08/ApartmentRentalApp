<?php
define("host", "localhost");
define("username", "root");
define("pass", "");
define("base", "location");

$con = mysqli_connect(host, username, pass, base);
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>