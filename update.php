
<html>

<head>
<title>Student</title>
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


<form method="post">



<label>Name</label>

<input type="text" name="name"></br></br>

<label>Email</label>

<input type="text" name="email"></br></br>

<label>Mobile</label>

<input type="number" name="mobile"></br></br>

<label>password</label>

<input type="password" name="password"></br></br>


<button type="submit" name="submit">update</button>



</form>

</body>


</html>