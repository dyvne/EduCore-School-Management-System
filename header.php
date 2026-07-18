<?php

// Default title if a page does not provide one
if (!isset($pageTitle)) {

    $pageTitle = "EduCore School Management System";

}


// Default active page
if (!isset($page)) {

    $page = "";

}

?>


<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" 
    content="width=device-width, initial-scale=1.0">


    <title>
        <?= $pageTitle ?>
    </title>


    <!-- Google Fonts -->

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" 
    rel="stylesheet">


    <!-- Font Awesome -->

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">


    <!-- CSS -->

    <link rel="stylesheet" href="style.css">


</head>


<body>



<!-- ================= HEADER ================= -->


<header>


<nav class="navbar">



    <!-- LOGO -->

    <div class="logo">


        <!---<img src="images/logo.png" 
        alt="EduCore Logo"> -->

        <h2>
            EduCore
        </h2>


    </div>





    <!-- NAVIGATION -->

    <ul class="nav-links">


        <li>

            <a href="index.php" 
            class="<?= ($page == 'home') ? 'active' : '' ?>">

                Home

            </a>

        </li>




        <li>

            <a href="about.php" 
            class="<?= ($page == 'about') ? 'active' : '' ?>">

                About

            </a>

        </li>





        <li>

            <a href="contact.php"
            class="<?= ($page == 'contact') ? 'active' : '' ?>">

                Contact

            </a>

        </li>





        <li>

            <a href="login.php"
            class="<?= ($page == 'login') ? 'active' : '' ?>">

                Login

            </a>

        </li>





        <li>

            <a href="register.php" 
            class="register-btn <?= ($page == 'register') ? 'active' : '' ?>">

                Register

            </a>

        </li>



    </ul>



</nav>


</header>