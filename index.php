<?php

$pageTitle = "Home | EduCore School Management System";

$page = "home";

include "header.php";

?>
<!-- ================= HERO SECTION ================= -->

<section class="hero">

    <div class="hero-content">

        <span class="welcome">
            WELCOME TO EDUCORE
        </span>

        <h1>
            Empowering Education Through Technology
        </h1>

        <p>
            EduCore School Management System provides a smart,
            secure and modern platform for managing students,
            teachers and academic activities.
        </p>


        <div class="hero-buttons">

            <a href="about.php" class="btn-primary">
                Explore School
            </a>


           <button type="submit" name="login" class="btn-primary">
    Login
</button>

        </div>

    </div>

</section>



<!-- ================= ANNOUNCEMENT ================= -->

<section class="announcement">

    <div id="scrollText">

         Admissions Open for 2026 |
        Scholarship Applications Available |
        Parent Meeting Every Friday |
        New Digital Learning Programs Available |
        Welcome to EduCore School

    </div>

</section>




<!-- ================= IMAGE SLIDER ================= -->

<section class="slider-section">

    <h2>Our Campus Gallery</h2>


    <div class="slider">

        <img id="sliderImage"
             src="images/1.jpg"
             alt="EduCore Campus">

    </div>


</section>





<!-- ================= ABOUT PREVIEW ================= -->


<section class="about">


    <div class="about-text">


        <h2>
            About EduCore School
        </h2>


        <p>

            EduCore School Management System is designed
            to improve communication, administration and
            learning experiences through technology.

            Our institution focuses on academic excellence,
            innovation and preparing students for future
            challenges.

        </p>



        <a href="about.php" class="btn-primary">

            Read More

        </a>


    </div>


</section>






<!-- ================= FEATURES ================= -->


<section class="features">


<h2>
Why Choose EduCore?
</h2>



<div class="feature-grid">



<div class="card">

<i class="fa-solid fa-user-graduate"></i>

<h3>
Qualified Teachers
</h3>

<p>
Experienced teachers committed to student success.
</p>

</div>





<div class="card">

<i class="fa-solid fa-laptop"></i>

<h3>
Smart Learning
</h3>

<p>
Technology-based classrooms for modern education.
</p>

</div>





<div class="card">

<i class="fa-solid fa-book-open"></i>

<h3>
Digital Library
</h3>

<p>
Access learning resources anytime and anywhere.
</p>

</div>





<div class="card">

<i class="fa-solid fa-trophy"></i>

<h3>
Academic Excellence
</h3>

<p>
Developing successful and responsible leaders.
</p>

</div>



</div>


</section>






<!-- ================= STATISTICS ================= -->


<section class="stats">


<div class="stat">

<h2>
2500+
</h2>

<p>
Students
</p>

</div>



<div class="stat">

<h2>
150+
</h2>

<p>
Teachers
</p>

</div>




<div class="stat">

<h2>
50+
</h2>

<p>
Classrooms
</p>

</div>




<div class="stat">

<h2>
98%
</h2>

<p>
Success Rate
</p>

</div>



</section>












<!-- ================= JAVASCRIPT DEMO ================= -->


<section class="popup-demo">


<h2>
JavaScript Demonstration
</h2>


<p>
Click the buttons to demonstrate JavaScript pop-ups.
</p>



<div class="popup-buttons">


<button onclick="showAlert()">
Alert
</button>



<button onclick="showConfirm()">
Confirm
</button>



<button onclick="showPrompt()">
Prompt
</button>


</div>


</section>






<?php

include "footer.php";

?>