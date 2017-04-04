<?php
$config = array("host" => "localhost",
                "username" => "root",
                "pwd" => "",
                "database" => "db_name");
$con = new mysqli($config["host"], $config["username"], $config["pwd"], $config["database"]);
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else{
    echo "Connected";
}
?>