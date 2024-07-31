<?php
include 'connection.php';
?>

<html>

<head>

<style>

.tablediv
{

display:flex;


}


tbody
{
padding:100px;
color:red;
}


table
{
border:2px solid blue;
height:500px;
width:1200px;
}


</style>

</head>


<body>

<div class="container">

<button> <a href="user.php"> Add user </a> </button>
</br></br>

<div class="tablediv">

<table border="true">

<thead>
<tr>
<td>id</td>
<td>Name</td>
<td>email</td>
<td>mobile</td>
<td>password</td>
<td>Operations</td>

</tr>
</thead>

<tbody>


<?php

$sql="select * from `crud`";
$result=mysqli_query($con,$sql);
if($result)
{
while($row=mysqli_fetch_assoc($result))
{

$id=$row['id'];
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];

echo '<tr>
<th scope="row">'.$id.'</th>
<td>'.$name.'</td>
<td>'.$email.'</td>
<td>'.$mobile.'</td>
<td>'.$password.'</td>
<td>
<button><a href="update.php?updateid='.$id.'">Update</a></button>
<button><a href="delete.php?deleteid='.$id.'">Delete</a></button>
</td>
</tr>';

}



}

?>




</tbody>

</table>





</div>


</div>


</body>

</html>

