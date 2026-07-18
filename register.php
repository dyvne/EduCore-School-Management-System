<?php

include "connection.php";


if(isset($_POST['register'])){


    $full_name = $_POST['fullname'];

    $email = $_POST['email'];

    $phone = $_POST['phone'];

    $password = $_POST['password'];

    $confirm_password = $_POST['confirm_password'];

    $role = $_POST['role'];




    if($password != $confirm_password){


        $error = "Passwords do not match";


    }else{



        // Check if email already exists

        $check = "SELECT * FROM users WHERE email='$email'";


        $result = $conn->query($check);



        if($result->num_rows > 0){


            $error = "Email already registered";


        }else{



            $sql = "INSERT INTO users
            (full_name, email, phone, password, role)

            VALUES

            ('$full_name',
             '$email',
             '$phone',
             '$password',
             '$role')";





            if($conn->query($sql)){



                echo "

                <script>

                alert('Registration Successful');

                window.location='login.php';

                </script>

                ";



            }else{


                $error = "Registration failed: ".$conn->error;


            }


        }


    }


}




$pageTitle = "Register | EduCore School Management System";

$page = "register";

include "header.php";

?>





<!-- ================= REGISTER BANNER ================= -->


<section class="page-banner">

<div class="banner-content">


<h1>
Create Account
</h1>


<p>
Join the EduCore School Management System
</p>


</div>

</section>







<!-- ================= REGISTER SECTION ================= -->


<section class="register-section">


<div class="register-box">



<h2>
Create EduCore Account
</h2>


<p>
Register as a student or teacher
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
Full Name
</label>


<input

type="text"

name="fullname"

placeholder="Enter your full name"

required>


</div>







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
Phone Number
</label>


<input

type="text"

name="phone"

placeholder="+233 XX XXX XXXX"

required>


</div>







<div class="form-group">

<label>
Password
</label>


<input

type="password"

name="password"

placeholder="Create password"

required>


</div>







<div class="form-group">

<label>
Confirm Password
</label>


<input

type="password"

name="confirm_password"

placeholder="Confirm password"

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


</select>



</div>







<button 

type="submit"

name="register"

class="btn-primary">


Register


</button>







<p class="login-link">

Already have an account?


<a href="login.php">

Login Here

</a>


</p>






</form>



</div>


</section>







<?php

include "footer.php";

?>