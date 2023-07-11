<?php

$server_name ="localhost";
$user_name = "id20796918_uv9";
$password = "Bricarr3!";
$db_name = "id20796918_proj1";

$conn = mysqli_connect($server_name, $user_name, $password, $db_name );

if (!$conn){
        echo "Connection failed!";
}
?>