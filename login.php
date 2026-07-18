<?php

session_start();

include "connection.php";


if(isset($_POST['login'])){


    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];



    $sql = "SELECT * FROM users 
            WHERE email='$email' 
            AND role='$role'";


    $result = $conn->query($sql);



    if($result->num_rows > 0){


        $user = $result->fetch_assoc();



        if($password == $user['password']){


            $_SESSION['user_id'] = $user['id'];
            $_SESSION['full_name'] = $user['full_name'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['role'] = $user['role'];



            header("Location: dashboard.php");
            exit();



        }else{


            $error = "Incorrect password";


        }



    }else{


        $error = "Account not found";


    }


}



$pageTitle = "Login | EduCore School Management System";

$page = "login";

include "header.php";

?>



<!-- ================= LOGIN BANNER ================= -->


<section class="page-banner">

    <div class="banner-content">

        <h1>
            Login Portal
        </h1>

        <p>
            Access your EduCore account
        </p>

    </div>

</section>




<!-- ================= LOGIN SECTION ================= -->


<section class="login-section">


<div class="login-box">


<h2>
Welcome Back
</h2>


<p>
Login to continue to EduCore
</p>



<?php

if(isset($error)){

echo "

<p style='color:red;text-align:center;'>

$error

</p>

";

}

?>




<form action="" method="POST">



<div class="form-group">

<label>
Email Address
</label>


<input 
type="email"
name="email"
placeholder="Enter your email"
required>

</div>





<div class="form-group">

<label>
Password
</label>


<input 
type="password"
name="password"
placeholder="Enter your password"
required>


</div>





<div class="form-group">


<label>
Account Type
</label>


<select name="role" required>


<option value="">
Select Account Type
</option>


<option value="student">
Student
</option>


<option value="teacher">
Teacher
</option>


<option value="admin">
Administrator
</option>


</select>


</div>





<button type="submit" name="login" class="btn-primary">

Login

</button>





<p class="register-link">

Don't have an account?

<a href="register.php">
Register Here
</a>

</p>



</form>


</div>


</section>






<?php

include "footer.php";

?>