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
                    <h2>Add Details</h2>
                    <span class="title-line"><i class="fa fa-car"></i></span>
                    <p>Make bookings faster</p>
                </div>
            </div>
            <!-- Page Title End -->
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->

<!--== Register Start ==-->
<section id="lgoin-page-wrap" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-8 m-auto">
                <div class="login-page-content">
                    <div class="login-form">
                        <h3>Enter your details here</h3>
                        <form action="addCustomer.php" method="post">

                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" name="cname" value="<?PHP if (isset($cname)) {
                                        echo $cname;
                                    } ?>" placeholder=" Name">
                                </div>

                            </div>

                            <input type="email" name="cemail" placeholder="Email">

                            <div class="row">
                                <div class="col-md-6">
                                    <input type="number" name="clicence" placeholder="Licence Number">
                                </div>
                                <div class="col-md-6">
                                    <input type="number" name="cphone" placeholder="Phone Number">

                                </div>
                            </div>

                            <input type="text" name="caddress" placeholder="Address">
                            <input type="text" name="ccountry" placeholder="Country">
                            <input type="text" name="cpostcode" placeholder="Postcode">

                            <div class="log-btn">
                                <button type="submit" name="submitdetails"><i class="fa fa-check-square"></i> Sign Up
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="login-other">
                        <span class="or">or</span>
                    </div>
                    <div class="create-ac">
                        <p>Have an account? <a href="index.php">Make Booking</a></p>
                    </div>
                    <div class="login-menu">
                        <a href="about.php">About</a>
                        <span>|</span>
                        <a href="contact.php">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Register End ==-->

<!--== Footer Area Start ==-->
<?php include 'footer.html' ?>
<!--== Footer Area End ==-->
