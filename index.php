<?php
include ("config.php"); //include configuration

include ("class.php"); // include class

$in_data = new query($con); // create object

$in_data->insert(); // to insert data
$in_data->select(); // to select data from table
$in_data->update(); // to update required data to table
$in_data->delete(); // to delete selected data

?>