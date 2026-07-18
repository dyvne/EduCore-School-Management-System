<?php

session_start();


if(!isset($_SESSION['user_id'])){

    header("Location: login.php");
    exit();

}


include "connection.php";



if(!isset($_GET['id'])){

    header("Location: view_users.php");
    exit();

}



$id = $_GET['id'];



// Get user details

$sql = "SELECT * FROM users WHERE id='$id'";

$result = $conn->query($sql);


if($result->num_rows == 0){

    header("Location: view_users.php");
    exit();

}


$user = $result->fetch_assoc();





// Update user

if(isset($_POST['update'])){


    $full_name = $_POST['full_name'];

    $email = $_POST['email'];

    $phone = $_POST['phone'];

    $role = $_POST['role'];



    $update = "UPDATE users SET

    full_name='$full_name',

    email='$email',

    phone='$phone',

    role='$role'


    WHERE id='$id'";




    if($conn->query($update)){


        echo "

        <script>

        alert('User Updated Successfully');

        window.location='view_users.php';

        </script>

        ";


    }


}



?>



<!DOCTYPE html>

<html>

<head>


<title>Update User | EduCore</title>


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



input,select{

width:100%;

padding:12px;

margin:10px 0;

border-radius:8px;

border:1px solid #ddd;

}



button{

width:100%;

padding:12px;

background:#2563eb;

color:white;

border:none;

border-radius:20px;

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
Update User
</h1>


<p>
Edit Account Information
</p>


</section>






<div class="form-box">


<form method="POST">



<input

type="text"

name="full_name"

value="<?php echo $user['full_name']; ?>"

required>




<input

type="email"

name="email"

value="<?php echo $user['email']; ?>"

required>




<input

type="text"

name="phone"

value="<?php echo $user['phone']; ?>"

required>





<select name="role" required>


<option value="student"
<?php if($user['role']=="student") echo "selected"; ?>>
Student
</option>


<option value="teacher"
<?php if($user['role']=="teacher") echo "selected"; ?>>
Teacher
</option>


<option value="admin"
<?php if($user['role']=="admin") echo "selected"; ?>>
Administrator
</option>


</select>




<button name="update">

Update User

</button>



</form>


</div>



</body>

</html>