<!--== Header Area Start ==-->
<?php include 'header.html' ?>
<!--== Header Area End ==-->

<!--== Slider Area Start ==-->
<section id="slider-area">
    <!--== slide Item One ==-->
    <div class="single-slide-item overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="book-a-car">
                        <form action="chosecar.php" method="post">
                            <!--== Pick Up Date ==-->
                            <div class="pick-up-date book-item">
                                <h4>PICK-UP DATE:</h4>
                                <input type="date" name="cstart"/>
                                <div class="return-car">
                                    <h4>Return DATE:</h4>
                                    <input type="date" name="cend"/>
                                </div>
                            </div>
                            <div class="name">
                                <div class="row">
                                    <div class="book-button text-center col-md-6">
                                        <button class="book-now-btn"><a class="add_detail" href="register.php"> Add
                                                Details</a></button>
                                    </div>
                                    <div class="book-button text-center col-md-6">
                                        <button class="book-now-btn">Book Now</button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="col-lg-7 text-right">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="slider-right-text">
                                <h1>BOOK A CAR TODAY!</h1>
                                <p>FOR AS LOW AS &euro;20 A DAY </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== slide Item One ==-->
</section>
<!--== Slider Area End ==-->

<!--== Choose Car Area Start ==-->
<section id="choose-car" class="section-padding">
    <div class="container">
        <div class="row">
            <!-- Section Title Start -->
            <div class="col-lg-12">
                <div class="section-title  text-center">
                    <h2>Choose your Car</h2>
                    <span class="title-line"><i class="fa fa-car"></i></span>
                    <p>Have a look at our available cars.</p>
                </div>
            </div>
            <!-- Section Title End -->
        </div>

        <div class="row">
            <!-- Choose Area Content Start -->
            <div class="col-lg-12">
                <div class="choose-content-wrap">
                    <!-- Choose Area Tab Menu -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#popular_cars" role="tab"
                               aria-selected="true">available Cars</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#office_map" role="tab"
                               aria-selected="false">Our Office</a>
                        </li>
                    </ul>
                    <!-- Choose Area Tab Menu -->

                    <!-- Choose Area Tab content -->
                    <div class="tab-content" id="myTabContent">
                        <!-- Popular Cars Tab Start -->
                        <div class="tab-pane fade show active" id="popular_cars" role="tabpanel"
                             aria-labelledby="home-tab">
                            <!-- Popular Cars Content Wrapper Start -->
                            <div class="popular-cars-wrap">
                                <!-- Filtering Menu -->
                                <div class="popucar-menu text-center">
                                    <a href="#" data-filter="*" class="active">available Cars</a>
                                </div>

                                <!-- Filtering Menu -->

                                <!-- PopularCars Tab Content Start -->
                                <?php include 'viewindex.php' ?>
                                <!-- PopularCars Tab Content End -->
                            </div>
                            <!-- Popular Cars Content Wrapper End -->
                        </div>
                        <!-- Popular Cars Tab End -->


                        <!-- Office Map Tab -->
                        <div class="tab-pane fade" id="office_map" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="map-area">
                                <iframe src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;coord=51.901458,-8.472846&amp;q=+()&amp;ie=UTF8&amp;t=&amp;z=15&amp;iwloc=B&amp;output=embed"
                                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            </div>
                        </div>
                        <!-- Office Map Tab -->
                    </div>
                    <!-- Choose Area Tab content -->
                </div>
            </div>
            <!-- Choose Area Content End -->
        </div>
    </div>
</section>
<!--== Choose Car Area End ==-->

<!--== About Us Area Start ==-->
<section id="about-area" class="section-padding">
    <div class="container">
        <div class="row">
            <!-- Section Title Start -->
            <div class="col-lg-12">
                <div class="section-title  text-center">
                    <h2>About us</h2>
                    <span class="title-line"><i class="fa fa-car"></i></span>
                    <p>Learn more about our company</p>
                </div>
            </div>
            <!-- Section Title End -->
        </div>

        <div class="row">
            <!-- About Content Start -->
            <div class="col-lg-6">
                <div class="display-table">
                    <div class="display-table-cell">
                        <div class="about-content">
                            <p>Our station network includes nearly 250 stations in all major cities. Wherever you want to go, we are already there. No matter which airport, train station or city center.
                                We ensure the perfect connection everywhere. You can count on us to offer you perfect service and trouble-free rental.

                            </p>

                            <p>Our employees are well trained and will be glad to provide you with the desired rental car for the agreed rental period.
                                Whether you need a compact car, or a SUV, our fleet has models from leading brand manufacturers like Tesla, Audi and Ford.</p>
                            <div class="about-btn">
                                <a href="#">Book a Car</a>
                                <a href="contact.php">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Content End -->

            <!-- About Video Start -->
            <div class="col-lg-6">
                <div class="about-image">
                    <!-- Available at https://www.kisspng.com/png-tesla-model-s-tesla-motors-car-tesla-model-x-tesla-116689/preview.html -->
                    <img src="assets/img/home-1-about.png" alt="JSOFT">
                </div>
            </div>
            <!-- About Video End -->
        </div>
    </div>
</section>
<!--== About Us Area End ==-->

<!--== Partner Area Start ==-->
<div id="partner-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="partner-content-wrap">
                    <!-- Single Partner Start -->
                    <div class="single-partner">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <!-- Available at http://www.carlogos.org/Car-Logos/Ford-logo.html  -->
                                <img src="assets/img/partner/partner-logo-1.png" alt="JSOFT">
                            </div>
                        </div>
                    </div>
                    <!-- Single Partner End -->

                    <!-- Single Partner Start -->
                    <div class="single-partner">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <!-- Available at http://www.carlogos.org/Car-Logos/Toyota-logo.html -->
                                <img src="assets/img/partner/partner-logo-2.png" alt="JSOFT">
                            </div>
                        </div>
                    </div>
                    <!-- Single Partner End -->

                    <!-- Single Partner Start -->
                    <div class="single-partner">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <!-- Available at http://www.carlogos.org/Car-Logos/Mazda-logo.html -->
                                <img src="assets/img/partner/partner-logo-3.png" alt="JSOFT">
                            </div>
                        </div>
                    </div>
                    <!-- Single Partner End -->

                    <!-- Single Partner Start -->
                    <div class="single-partner">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <!-- Available at http://www.carlogos.org/Car-Logos/Audi-logo.html  -->
                                <img src="assets/img/partner/partner-logo-4.png" alt="JSOFT">
                            </div>
                        </div>
                    </div>
                    <!-- Single Partner End -->

                    <!-- Single Partner Start -->
                    <div class="single-partner">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <!-- Available at http://www.carlogos.org/tire-brands/Nokian-Tyres-logo.html  -->
                                <img src="assets/img/partner/partner-logo-5.png" alt="JSOFT">
                            </div>
                        </div>
                    </div>
                    <!-- Single Partner End -->



                    <!-- Single Partner Start -->
                    <div class="single-partner">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <!-- Available at http://www.carlogos.org/Car-Logos/Tesla-logo.html  -->
                                <img src="assets/img/partner/partner-logo-7.png" alt="JSOFT">
                            </div>
                        </div>
                    </div>
                    <!-- Single Partner End -->

                    <!-- Single Partner Start -->
                    <div class="single-partner">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <!-- Available at http://www.carlogos.org/tire-brands/Pirelli-logo.html -->
                                <img src="assets/img/partner/partner-logo-6.png" alt="JSOFT">
                            </div>
                        </div>
                    </div>
                    <!-- Single Partner End -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--== Partner Area End ==-->

<!--== Info Area Start ==-->
<section id="funfact-area" class="overlay section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-11 col-md-12 m-auto">
                <div class="funfact-content-wrap">
                    <div class="row">
                        <!-- Single FunFact Start -->
                        <div class="col-lg-4 col-md-6">
                            <div class="single-funfact">
                                <div class="funfact-icon">
                                    <i class="fa fa-smile-o"></i>
                                </div>
                                <div class="funfact-content">
                                    <p><span class="counter">
                                        <?php include 'numofcustomer.php' ?>
                                        </span>+</p>
                                    <h4>CUSTOMERS</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Single FunFact End -->

                        <!-- Single FunFact Start -->
                        <div class="col-lg-4 col-md-6">
                            <div class="single-funfact">
                                <div class="funfact-icon">
                                    <i class="fa fa-car"></i>
                                </div>
                                <div class="funfact-content">
                                    <p><span class="counter">
                                            <?php include 'numofcars.php' ?>
                                        </span>+</p>
                                    <h4>CARS IN STOCK</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Single FunFact End -->

                        <!-- Single FunFact Start -->
                        <div class="col-lg-4 col-md-6">
                            <div class="single-funfact">
                                <div class="funfact-icon">
                                    <i class="fa fa-book"></i>
                                </div>
                                <div class="funfact-content">
                                    <p><span class="counter">
                                            <?php include 'numofbook.php' ?>
                                        </span>+</p>
                                    <h4>Rentals to date</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Single FunFact End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Info Area End ==-->

<!--== Services Area Start ==-->
<section id="service-area" class="section-padding">
    <div class="container">
        <div class="row">
            <!-- Section Title Start -->
            <div class="col-lg-12">
                <div class="section-title  text-center">
                    <h2>Why chose us?</h2>
                    <span class="title-line"><i class="fa fa-car"></i></span>
                    <p></p>
                </div>
            </div>
            <!-- Section Title End -->
        </div>


        <!-- Service Content Start -->
        <div class="row">
            <!-- Single Service Start -->
            <div class="col-lg-4 text-center">
                <div class="service-item">
                    <i class="fa fa-taxi"></i>
                    <h3>Flexible rental </h3>
                    <p>Whether you need daily, monthly or just a one way rental, choose a time to suit your needs.</p>
                </div>
            </div>
            <!-- Single Service End -->

            <!-- Single Service Start -->
            <div class="col-lg-4 text-center">
                <div class="service-item">
                    <i class="fa fa-cog"></i>
                    <h3>New vehicles</h3>
                    <p>All our vehicles are less than 6 months old, ranging from compact to luxury.</p>
                </div>
            </div>
            <!-- Single Service End -->

            <!-- Single Service Start -->
            <div class="col-lg-4 text-center">
                <div class="service-item">
                    <i class="fa fa-map-marker"></i>
                    <h3>Best price guaranteed</h3>
                    <p>Get the best price when you book direct.</p>
                </div>
            </div>
            <!-- Single Service End -->


        </div>
</section>
<!--== Services Area End ==-->


<!--== Pricing Area Start ==-->
<section id="pricing-area" class="section-padding overlay">
    <div class="container">
        <div class="row">

        </div>

        <!-- Pricing Table Content Start -->
        <div class="row">

            <!-- Single Pricing Table -->
        </div>
        <!-- Pricing Table Content End -->
    </div>
</section>
<!--== Pricing Area End ==-->

<!--== Testimonials Area Start ==-->
<section id="testimonial-area" class="section-padding">
    <div class="container">
        <div class="row">
            <!-- Section Title Start -->
            <div class="col-lg-12">
                <div class="section-title  text-center">
                    <h2>Testimonials</h2>
                    <span class="title-line"><i class="fa fa-car"></i></span>

                </div>
            </div>
            <!-- Section Title End -->
        </div>

        <div class="row">
            <div class="col-lg-8 col-md-12 m-auto">
                <div class="testimonial-content">
                    <!--== Single Testimoial Start ==-->
                    <div class="single-testimonial">
                        <p>Excellent and professional staff, great offers for good price, I had a positive
                            experience using the services. Recommended!</p>
                        <h3>Amy Smith</h3>
                        <div class="client-logo">
                            <!-- Avalible from https://www.w3schools.com/howto/howto_css_image_avatar.asp -->
                            <img src="assets/img/client/client-pic-1.jpg" alt="JSOFT">
                        </div>
                    </div>
                    <!--== Single Testimonial End ==-->

                    <!--== Single Testimonial Start ==-->
                    <div class="single-testimonial">
                        <p>The car was in perfect condition and clean.
                            The paperwork was easy to follow and the delivery as well.</p>
                        <h3>John Doe </h3>
                        <div class="client-logo">
                            <!-- Avalible from https://www.w3schools.com/howto/howto_css_image_avatar.asp -->
                            <img src="assets/img/client/client-pic-3.jpg" alt="JSOFT">
                        </div>
                    </div>
                    <!--== Single Testimonial End ==-->

                    <!--== Single Testimonial Start ==-->
                    <div class="single-testimonial">
                        <p>Great experience with this rental company, staff was very helpful and friendly, car was like
                            new, not a scratch on it and spotless clean.</p>
                        <h3>Joe Smith</h3>
                        <div class="client-logo">
                            <!-- Avalible from https://www.w3schools.com/howto/howto_css_image_avatar.asp -->
                            <img src="assets/img/client/client-pic-2.jpg" alt="JSOFT">
                        </div>
                    </div>
                    <!--== Single Testimonial End ==-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Testimonials Area End ==-->


<!--== Footer Area Start ==-->
<?php include 'footer.html' ?>
<!-- Footer Bottom End -->

