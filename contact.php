<?php

$pageTitle = "Contact | EduCore School Management System";

$page = "contact";

include "header.php";

?>


<!-- ================= PAGE BANNER ================= -->

<section class="page-banner">

    <div class="banner-content">

        <h1>
            Contact Us
        </h1>

        <p>
            We'd love to hear from you.
        </p>

    </div>

</section>



<!-- ================= CONTACT INFO ================= -->

<section class="contact-info">


<div class="contact-card">

<i class="fa-solid fa-location-dot"></i>

<h3>
Address
</h3>

<p>
P.O. Box MA 45
</p>

<p>
Accra, Ghana
</p>

</div>



<div class="contact-card">

<i class="fa-solid fa-phone"></i>

<h3>
Phone
</h3>

<p>
+233 20 374 3456
</p>

<p>
+233 24 374 3456
</p>

</div>



<div class="contact-card">

<i class="fa-solid fa-envelope"></i>

<h3>
Email
</h3>

<p>
info@educore.edu
</p>

<p>
support@educore.edu
</p>

</div>


</section>





<!-- ================= CONTACT FORM ================= -->

<section class="contact-section">


<div class="contact-form">


<h2>
Send Us a Message
</h2>



<form>


<input type="text" 
placeholder="Full Name" 
required>


<input type="email" 
placeholder="Email Address" 
required>


<input type="text" 
placeholder="Subject" 
required>


<textarea rows="6" 
placeholder="Your Message">
</textarea>



<button type="submit" class="btn-primary">

Send Message

</button>


</form>


</div>





<div class="office-hours">


<h2>
Office Hours
</h2>


<ul>

<li>
Monday - Friday : 8:00 AM - 5:00 PM
</li>

<li>
Saturday : 9:00 AM - 1:00 PM
</li>

<li>
Sunday : Closed
</li>

</ul>



<h2 style="margin-top:40px;">
Follow Us
</h2>


<div class="social-icons">

<a href="#">
<i class="fab fa-facebook-f"></i>
</a>


<a href="#">
<i class="fab fa-twitter"></i>
</a>


<a href="#">
<i class="fab fa-instagram"></i>
</a>


<a href="#">
<i class="fab fa-linkedin-in"></i>
</a>


</div>


</div>


</section>





<!-- ================= MAP ================= -->


<section class="map">


<h2>
Find Us
</h2>


<div class="map-box">

<p>
Google Map Placeholder
</p>

</div>


</section>




<?php

include "footer.php";

?>