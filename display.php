<?php
include 'connection.php';
?>

<html>

<head>

<style>

.container
{
    display:flex;
    align-items:center;
    justify-content:center;
    flex-direction:column;
}

button
{
    padding:8px;
    border-radius:5px;
}

.tablediv
{

display:flex;

}
body
{
    background-color:lightblue;
}


tbody
{
padding:100px;
color:black;
font-size:larger;
}

table
{
border:2px solid blue;
height:200px;
width:1200px;
background-color:grey;
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
<td>Email</td>
<td>Mobile</td>
<td>Password</td>
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

