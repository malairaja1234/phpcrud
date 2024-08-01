
<html>

<head>
<title>Student</title>

<style>

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
a{
	font-size:30px;
	text-decoration:none;
	
	margin-left:300px;
}

</style>


</head>

<body>


<?php

include 'connection.php';

if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];

$sql="insert into `crud` (name,email,mobile,password) values('$name','$email','$mobile','$password')";

$result=mysqli_query($con,$sql);

if($result)
{
	echo "data inserted successfuly";

}
else
{
	die(mysqli_error($con));
}
//

}

?>

<h2>Employee Creation</h2>

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

<button type="submit" name="submit">Submit</button>


<a href="display.php">Records</a>

</form>

</body>


</html>