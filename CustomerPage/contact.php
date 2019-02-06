
<?php
include 'header.html'

?>

<!--== Page Title Area Start ==-->
<section id="page-title-area" class="section-padding overlay">
    <div class="container">
        <div class="row">
            <!-- Page Title Start -->
            <div class="col-lg-12">
                <div class="section-title  text-center">
                    <h2>Contact Us</h2>
                    <span class="title-line"><i class="fa fa-car"></i></span>

                </div>
            </div>
            <!-- Page Title End -->
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->

<!--== Contact Page Area Start ==-->
<div class="contact-page-wrao section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="contact-form">
                    <form action="index.php">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="name-input">
                                    <input type="text" placeholder="Full Name">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="email-input">
                                    <input type="email" placeholder="Email Address">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="website-input">
                                    <input type="url" placeholder="Website">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="subject-input">
                                    <input type="text" placeholder="Subject">
                                </div>
                            </div>
                        </div>

                        <div class="message-input">
                            <textarea name="review" cols="30" rows="10" placeholder="Message"></textarea>
                        </div>

                        <div class="input-submit">
                            <button type="submit">Submit Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== Contact Page Area End ==-->

<!--== Map Area Start ==-->
<div class="maparea">
    <iframe src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;coord=51.901458,-8.472846&amp;q=+()&amp;ie=UTF8&amp;t=&amp;z=15&amp;iwloc=B&amp;output=embed"
            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
</div>
<!--== Map Area End ==-->

<?php
include 'footer.html'

?>
