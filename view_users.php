<?php

include __DIR__ . "/auth.php";


checkLogin();


checkRole(['admin','teacher']);

include __DIR__ . "/connection.php";


$sql = "SELECT * FROM users";

$result = $conn->query($sql);


?>

<!DOCTYPE html>

<html>

<head>

<title>User Management | EduCore</title>

<link rel="stylesheet" href="style.css">


<style>

table{

width:90%;
margin:50px auto;
border-collapse:collapse;
background:white;

}


th{

background:#2563eb;
color:white;
padding:15px;

}


td{

padding:15px;
text-align:center;
border-bottom:1px solid #ddd;

}


.action-btn{

padding:8px 15px;
border-radius:20px;
color:white;
text-decoration:none;

}


.edit{

background:#10b981;

}


.delete{

background:#ef4444;

}


</style>


</head>


<body>



<header>

<nav class="navbar">


<div class="logo">

<img src="images/logo.png">

<h2>EduCore</h2>

</div>


</nav>

</header>




<section class="page-banner">

<h1>
User Management
</h1>


<p>
Manage System Users
</p>


</section>






<table>


<tr>

<th>ID</th>

<th>Name</th>

<th>Email</th>

<th>Phone</th>

<th>Role</th>

<th>Action</th>


</tr>



<?php


while($row=$result->fetch_assoc()){


?>


<tr>


<td>
<?php echo $row['id']; ?>
</td>


<td>
<?php echo $row['full_name']; ?>
</td>


<td>
<?php echo $row['email']; ?>
</td>


<td>
<?php echo $row['phone']; ?>
</td>


<td>
<?php echo $row['role']; ?>
</td>



<td>


<a class="action-btn edit"
href="update_user.php?id=<?php echo $row['id']; ?>">
Edit
</a>



<a class="action-btn delete"
href="delete_user.php?id=<?php echo $row['id']; ?>"
onclick="return confirm('Delete this user?');">
Delete
</a>


</td>


</tr>


<?php

}

?>


</table>



</body>

</html>