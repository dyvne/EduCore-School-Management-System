<?php

include "auth.php";

checkRole(['admin','teacher']);

include __DIR__ . "/connection.php";



// Check student ID

if(!isset($_GET['id'])){

    header("Location: view_students.php");
    exit();

}



$id = $_GET['id'];



// Get student information

$sql = "SELECT * FROM students WHERE id='$id'";


$result = $conn->query($sql);



if($result->num_rows == 0){

    echo "

    <script>

    alert('Student record not found');

    window.location='view_students.php';

    </script>

    ";

    exit();

}



$row = $result->fetch_assoc();






// Update student record

if(isset($_POST['update'])){


    $student_name = $_POST['student_name'];

    $student_id = $_POST['student_id'];

    $email = $_POST['email'];

    $class = $_POST['class'];

    $course = $_POST['course'];




    $update = "UPDATE students SET

    student_name='$student_name',

    student_id='$student_id',

    email='$email',

    class='$class',

    course='$course'


    WHERE id='$id'";




    if($conn->query($update)){


        echo "

        <script>

        alert('Student Updated Successfully');

        window.location='view_students.php';

        </script>

        ";


    }else{


        echo "

        <script>

        alert('Update failed');

        </script>

        ";


    }


}



?>





<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>Update Student | EduCore</title>


<link rel="stylesheet" href="style.css">


<style>


.form-box{

width:400px;

margin:50px auto;

background:white;

padding:30px;

border-radius:15px;

box-shadow:0 10px 30px rgba(0,0,0,.1);

}



input{

width:100%;

padding:12px;

margin:10px 0;

border:1px solid #ddd;

border-radius:8px;

}



button{

width:100%;

padding:12px;

background:#2563eb;

color:white;

border:none;

border-radius:20px;

cursor:pointer;

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



<div>

Welcome, <?php echo $_SESSION['full_name']; ?>

<a href="logout.php">

Logout

</a>

</div>


</nav>

</header>






<section class="page-banner">


<h1>
Update Student
</h1>


<p>
Edit Student Information
</p>


</section>







<div class="form-box">



<form method="POST">



<input 
type="text"
name="student_name"
value="<?php echo $row['student_name']; ?>"
required>




<input 
type="text"
name="student_id"
value="<?php echo $row['student_id']; ?>"
required>




<input 
type="email"
name="email"
value="<?php echo $row['email']; ?>"
required>




<input 
type="text"
name="class"
value="<?php echo $row['class']; ?>"
required>




<input 
type="text"
name="course"
value="<?php echo $row['course']; ?>"
required>





<button type="submit" name="update">

Update Student

</button>



</form>



</div>





</body>

</html>