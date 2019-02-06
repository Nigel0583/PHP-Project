<!--== Header Area Start ==-->
<?php include 'header.html' ?>
<!--== Header Area End ==-->

<!--== Page Title Area Start ==-->
<section id="page-title-area" class="section-padding overlay">
    <div class="container">
        <div class="row">
            <!-- Page Title Start -->
            <div class="col-lg-12">
                <div class="section-title  text-center">
                    <h2>View bookings</h2>
                    <span class="title-line"><i class="fa fa-car"></i></span>
                    <p>View your bookings</p>
                </div>
            </div>
            <!-- Page Title End -->
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->

<!--== View booking Page Content Start ==-->
<section id="lgoin-page-wrap" class="section-padding">

    <div class="col-lg-5 col-md-8 m-auto">
        <div class="login-page-content">
            <div class="login-form">
                <h3>Enter your ID number to view your booking</h3>
                <form action="viewbookings.php" method="post">
                    <div class="username">
                        <input type="number" name="id" placeholder="ID Number" value="">
                    </div>

                    <div class="log-btn">
                        <button type="submit" name="submitdetails"><i class="fa fa-check-square"></i>Submit
                        </button>
                    </div>
                </form>
            </div>


            <div class="login-menu">
                <a href="about.php">About</a>
                <span>|</span>
                <a href="contact.php">Contact</a>
            </div>
        </div>
    </div>

</section>
<!--== View booking Content End ==-->

<!--== Footer Area Start ==-->
<?php include 'footer.html' ?>
<!--== Footer Area End ==-->