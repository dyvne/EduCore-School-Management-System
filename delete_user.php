<?php

session_start();


if(!isset($_SESSION['user_id'])){

    header("Location: login.php");
    exit();

}


include "connection.php";



if(isset($_GET['id'])){


    $id = $_GET['id'];



    // Prevent deleting yourself

    if($id == $_SESSION['user_id']){


        echo "

        <script>

        alert('You cannot delete your own account');

        window.location='view_users.php';

        </script>

        ";


        exit();

    }





    $sql = "DELETE FROM users WHERE id='$id'";



    if($conn->query($sql)){


        echo "

        <script>

        alert('User Deleted Successfully');

        window.location='view_users.php';

        </script>

        ";


    }



}else{


    header("Location:view_users.php");

}


?>