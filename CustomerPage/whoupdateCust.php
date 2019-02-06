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
                    <h2>Update Details</h2>
                    <span class="title-line"><i class="fa fa-car"></i></span>
                    <p>Need to update your details</p>
                </div>
            </div>
            <!-- Page Title End -->
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->

<!--== Who update Page  Start ==-->
<section id="lgoin-page-wrap" class="section-padding">

    <div class="col-lg-5 col-md-8 m-auto">
        <div class="login-page-content">
            <div class="login-form">
                <h3>Enter your ID number to update your details</h3>
                <form action="updateformCustomer.php" method="post">
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
<!--== Who update  End ==-->

<!--== Footer Area Start ==-->
<?php include 'footer.html' ?>
<!--== Footer Area End ==-->
