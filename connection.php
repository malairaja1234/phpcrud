<?php

$con = mysqli_connect("localhost","root","","crudoperation");

if(!$con)
{
	die("Not connected");
}
else
{
	echo "Connected successfully";

}

?>