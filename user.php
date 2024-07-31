
<html>

<head>
<title>Student</title>
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


<form method="post">



<label>Name</label>

<input type="text" name="name"></br></br>

<label>Email</label>

<input type="text" name="email"></br></br>

<label>Mobile</label>

<input type="number" name="mobile"></br></br>

<label>password</label>

<input type="password" name="password"></br></br>


<input type="submit" name="submit">



</form>

</body>


</html>