<?php

session_start();



function checkLogin(){


    if(!isset($_SESSION['user_id'])){


        header("Location: login.php");

        exit();

    }


}




function checkRole($allowedRoles){



    if(!in_array($_SESSION['role'], $allowedRoles)){


        echo "

        <script>

        alert('Access denied');

        window.location='dashboard.php';

        </script>

        ";


        exit();


    }


}



?>