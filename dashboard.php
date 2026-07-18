<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

include "connection.php";

// Total Students
$studentQuery = "SELECT COUNT(*) AS total_students FROM students";
$studentResult = $conn->query($studentQuery);
$totalStudents = $studentResult->fetch_assoc()['total_students'];

// Total Teachers
$teacherQuery = "SELECT COUNT(*) AS total_teachers FROM users WHERE role='teacher'";
$teacherResult = $conn->query($teacherQuery);
$totalTeachers = $teacherResult->fetch_assoc()['total_teachers'];

// Total Administrators
$adminQuery = "SELECT COUNT(*) AS total_admins FROM users WHERE role='admin'";
$adminResult = $conn->query($adminQuery);
$totalAdmins = $adminResult->fetch_assoc()['total_admins'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Dashboard | EduCore</title>

<link rel="stylesheet" href="style.css">

<style>

body{
    margin:0;
    font-family:Arial, sans-serif;
    background:#f1f5f9;
}

.header{
    background:#2563eb;
    color:white;
    padding:20px 40px;
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.header a{
    color:white;
    text-decoration:none;
    background:#ef4444;
    padding:10px 18px;
    border-radius:20px;
}

.container{
    width:90%;
    margin:40px auto;
}

.cards{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:20px;
}

.card{
    background:white;
    padding:30px;
    border-radius:15px;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
    text-align:center;
}

.card h2{
    font-size:40px;
    color:#2563eb;
    margin:10px 0;
}

.card p{
    color:#555;
}

.menu{
    margin-top:40px;
    display:flex;
    gap:20px;
    flex-wrap:wrap;
}

.menu a{
    text-decoration:none;
    background:#2563eb;
    color:white;
    padding:15px 25px;
    border-radius:10px;
}

</style>

</head>

<body>

<div class="header">

<div>
<h2>EduCore Dashboard</h2>
<p>Welcome, <?php echo $_SESSION['full_name']; ?></p>
</div>

<a href="logout.php">Logout</a>

</div>

<div class="container">

<div class="cards">


<?php if($_SESSION['role']=="admin"){ ?>


<div class="card">
<h2><?php echo $totalStudents; ?></h2>
<p>Total Students</p>
</div>


<div class="card">
<h2><?php echo $totalTeachers; ?></h2>
<p>Total Teachers</p>
</div>


<div class="card">
<h2><?php echo $totalAdmins; ?></h2>
<p>Total Administrators</p>
</div>


<?php } ?>





<?php if($_SESSION['role']=="teacher"){ ?>


<div class="card">
<h2><?php echo $totalStudents; ?></h2>
<p>Total Students</p>
</div>


<div class="card">
<h2>Student</h2>
<p>Management Access</p>
</div>


<div class="card">
<h2><?php echo date("Y"); ?></h2>
<p>Academic Year</p>
</div>


<?php } ?>





<?php if($_SESSION['role']=="student"){ ?>


<div class="card">
<h2>1</h2>
<p>My Profile</p>
</div>


<?php } ?>


</div>

<div class="menu">


<?php if($_SESSION['role']=="admin"){ ?>


<a href="add_student.php">
Add Student
</a>


<a href="view_students.php">
View Students
</a>


<a href="register.php">
Register User
</a>


<a href="view_users.php">
Manage Users
</a>


<?php } ?>




<?php if($_SESSION['role']=="teacher"){ ?>

<a href="add_student.php">
Register Student
</a>


<a href="view_students.php">
View Students
</a>


<a href="update_student.php">
Update Student
</a>


<?php } ?>





<?php if($_SESSION['role']=="student"){ ?>


<a href="student_profile.php">
My Profile
</a>


<?php } ?>


</div>

</div>

</body>
</html>