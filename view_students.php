<?php

session_start();

if(!isset($_SESSION['user_id'])){

    header("Location: login.php");
    exit();

}


include __DIR__ . "/connection.php";


$sql = "SELECT * FROM students";

$result = $conn->query($sql);


?>


<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>View Students | EduCore</title>


<link rel="stylesheet" href="style.css">


<style>


table{

    width:90%;

    margin:50px auto;

    border-collapse:collapse;

    background:white;

    box-shadow:0 10px 30px rgba(0,0,0,.08);

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


tr:hover{

    background:#f8fafc;

}


.action-btn{

    padding:8px 15px;

    border-radius:20px;

    color:white;

    text-decoration:none;

    display:inline-block;

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
Student Records
</h1>


<p>
Retrieve Student Information
</p>


</section>






<table>


<tr>

<th>ID</th>

<th>Name</th>

<th>Student ID</th>

<th>Email</th>

<th>Class</th>

<th>Course</th>

<th>Action</th>


</tr>





<?php


if($result->num_rows > 0){


    while($row = $result->fetch_assoc()){


?>


<tr>


<td>
<?php echo $row['id']; ?>
</td>


<td>
<?php echo $row['student_name']; ?>
</td>


<td>
<?php echo $row['student_id']; ?>
</td>


<td>
<?php echo $row['email']; ?>
</td>


<td>
<?php echo $row['class']; ?>
</td>


<td>
<?php echo $row['course']; ?>
</td>



<td>


<a class="action-btn edit"
href="update_student.php?id=<?php echo $row['id']; ?>">
Edit
</a>



<a class="action-btn delete"
href="delete_student.php?id=<?php echo $row['id']; ?>"
onclick="return confirm('Are you sure you want to delete this student?');">
Delete
</a>


</td>


</tr>


<?php


    }


}

else{


?>


<tr>

<td colspan="7">

No Student Records Found

</td>

</tr>


<?php

}


?>


</table>




</body>

</html>