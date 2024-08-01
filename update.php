
<html>

<head>
<title>Student</title>


<style>

a{
	font-size:30px;
	text-decoration:none;
	
	margin-left:300px;
}

form
{
	display:flex;
	background-color:grey;
	flex-direction:column;
	width:40%;
	align-items:center;
	justify-items:center;
	padding:20px;
	border-radius:10px;
}

input
{
	margin:20px;
	border-radius:10px;
	padding:10px;
}
body
{
	display:flex;
	background-color:lightblue;
	flex-direction:column;
	align-items:center;
	justify-items:center;
	
}

button{
	padding:10px;
	border-radius:10px;
}


</style>



</head>

<body>

<?php

include 'connection.php';

$id=$_GET['updateid'];

if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];

$sql="update `crud` set id=$id,name='$name',email='$email',mobile='$mobile',password='$password' where id=$id ";

$result=mysqli_query($con,$sql);

if($result)
{
	echo "data updated successfuly";

}
else
{
	die(mysqli_error($con));
}
//

}

?>

<h2>Employee Update</h2>

<form method="post">

<div class="indiv">
<label>Name</label>
<input type="text" name="name">
</div>

<div>
<label>email</label>
<input type="text" name="email">
</div>

<div>
<label>mobile</label>
<input type="number" name="mobile">
</div>

<div>
<label>passcode</label>
<input type="password" name="password">
</div>

<button type="submit" name="submit">Update</button>

<a href="display.php">Records</a>
</form>
</body>


</html>