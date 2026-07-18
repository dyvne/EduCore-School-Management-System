<?php

include "auth.php";

checkRole(['admin','teacher']);

include __DIR__ . "/connection.php";



if(isset($_POST['submit'])){


    $student_name = $_POST['student_name'];

    $student_id = $_POST['student_id'];

    $email = $_POST['email'];

    $class = $_POST['class'];

    $course = $_POST['course'];



    $sql = "INSERT INTO students

    (student_name, student_id, email, class, course)

    VALUES

    ('$student_name',
     '$student_id',
     '$email',
     '$class',
     '$course')";




    if($conn->query($sql)){


        echo "

        <script>

        alert('Student Added Successfully');

        window.location='view_students.php';

        </script>

        ";


    }else{


        echo "

        <script>

        alert('Error: ".$conn->error."');

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


<title>Add Student | EduCore</title>


<link rel="stylesheet" href="style.css">


</head>



<body>



<header>

<nav class="navbar">


<div class="logo">

<img src="images/logo.png">

<h2>EduCore</h2>

</div>



<div class="user-area">

Welcome, <?php echo $_SESSION['full_name']; ?>

<a href="logout.php">
Logout
</a>

</div>


</nav>

</header>






<section class="page-banner">


<div class="banner-content">

<h1>
Add Student
</h1>


<p>
Create a new student record
</p>


</div>


</section>






<section class="contact-section">


<div class="contact-form">


<h2>
Add Student Record
</h2>





<form method="POST">



<input 
type="text"
name="student_name"
placeholder="Student Full Name"
required>




<input 
type="text"
name="student_id"
placeholder="Student ID"
required>




<input 
type="email"
name="email"
placeholder="Email Address"
required>




<input 
type="text"
name="class"
placeholder="Class"
required>




<input 
type="text"
name="course"
placeholder="Course"
required>






<button 
type="submit"
name="submit"
class="btn-primary">

Add Student

</button>



</form>



</div>


</section>






<footer>


<div class="copyright">

© 2026 EduCore School Management System

</div>


</footer>





</body>

</html>