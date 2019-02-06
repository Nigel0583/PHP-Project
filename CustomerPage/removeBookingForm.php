

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
                        <h2>Cancel Booking</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>

                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->


    <!--== Remove booking  Start ==-->
    <section id="lgoin-page-wrap" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-8 m-auto">
                    <div class="login-page-content">
                        <div class="login-form">
                            <h3>Cancel Booking</h3>
                            <form action="deletebooking.php" method="post">
                                <div class="username">
                                    <input type="number"  name="id" placeholder="Booking ID">
                                </div>
                                <div class="log-btn">
                                    <button  type="submit" name="submitdetails" value="SUBMIT"><i class="fa fa-sign-in"></i>Cancel</button>
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
            </div>
        </div>
    </section>
    <!--== Remove booking End ==-->





    <!--== Footer Area Start ==-->
    <?php include 'footer.html' ?>
    <!-- Footer Bottom End -->

