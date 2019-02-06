<!--== Header Area Start ==-->
<?php
include 'header.html' ?>
<!--== Header Area End ==-->

<!--== Page Title Area Start ==-->
<section id="page-title-area" class="section-padding overlay">
    <div class="container">
        <div class="row">
            <!-- Page Title Start -->
            <div class="col-lg-12">
                <div class="section-title  text-center">
                    <h2>Book Car</h2>
                    <span class="title-line"><i class="fa fa-car"></i></span>

                </div>
            </div>
            <!-- Page Title End -->
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->

<!--== Car List Area Start ==-->
<section id="car-list-area" class="section-padding">
    <div class="container">
        <div class="row">
            <!-- Car List Content Start -->
            <div class="col-lg-8">
                <div class="car-details-content">
                    <?php

                    include 'getcarinfo.php' ?>
                    <h2><?php

                        echo $row['Make']; ?> <?php
                        echo $row['Model']; ?> <span class="price">Rent per day: <b>&euro;<?php
                                echo $row['Cost']; ?> </b></span>
                    </h2>

                    <div class="single-car-preview">
                        <img alt="Image of car" src="assets/img/car/<?php
                        echo $row['Image']; ?>">
                    </div>

                    <div class="car-details-info">
                        <h4>Additional Info</h4>
                        <p><?php
                            echo $row['Description']; ?></p>

                        <div class="technical-info">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="tech-info-table">
                                        <table class="table table-bordered">
                                            <tr>
                                                <th>Class</th>
                                                <td><?php
                                                    echo $row['CarType']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Fuel</th>
                                                <td><?php
                                                    echo $row['Fuel']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Doors</th>
                                                <td><?php
                                                    echo $row['NumSeats']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>GearBox</th>
                                                <td><?php
                                                    echo $row['Transmission']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Air Condition</th>
                                                <td><?php
                                                    echo $row['A/C']; ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="tech-info-list">
                                        <ul>
                                            <li>ABS</li>
                                            <li>Air Bags</li>
                                            <li>Bluetooth</li>
                                            <li>Car Kit</li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Car List Content End -->

            <!-- Sidebar Area Start -->
            <div class="col-lg-4">
                <div class="sidebar-content-wrap m-t-50">
                    <!-- Single Sidebar Start -->
                    <div class="single-sidebar">
                        <h3>For More Information</h3>

                        <div class="sidebar-body">
                            <p><i class="fa fa-mobile"></i> (123) 45678</p>
                            <p><i class="fa fa-clock-o"></i> Mon-Fri 09.00 - 17.00</p>
                        </div>
                    </div>
                    <!-- Single Sidebar End -->

                    <!-- Single Sidebar Start -->
                    <div class="sidebar-body">
                        <div class="login-page-content">
                            <div class="login-form">
                                <h3>Make Booking</h3>
                                <form action="makebooking.php" method="post">
                                    <input type="hidden" name="RegNo" value="<?php
                                    echo $row['RegNo']; ?>">

                                    <div class="username">
                                        <input type="number" name="cid" placeholder="ID Number">
                                    </div>

                                    <?php

                                    if (isset($_GET['StartDate']))
                                    {
                                        ?>
                                        <div class="username">
                                            <label>PICK-UP DATE:
                                                <input type="date" name="cstart" readonly="readonly" value="<?php
                                                echo $_GET['StartDate'] ?>"/>
                                            </label>
                                        </div>
                                        <?php
                                    }
                                    else
                                    {
                                        ?>
                                        <div class="username">
                                            <input type="date" name="cstart" placeholder="Start Date" "/>
                                        </div>
                                        <?php
                                    }

                                    if (isset($_GET['EndDate']))
                                    {
                                        ?>
                                        <div class="username">
                                            <label>RETURN DATE:
                                                <input type="date" name="cend" readonly="readonly" value="<?php
                                                echo $_GET['EndDate'] ?>"/>
                                            </label>
                                        </div>
                                        <?php
                                    }
                                    else
                                    {
                                        ?>
                                        <div class="username">
                                            <input type="date" name="cend" placeholder="Return Date" "/>
                                        </div>
                                        <?php
                                    }

                                    ?>
                                    <div class="log-btn">
                                        <button type="submit" name="submitdetails"><i class="fa fa-sign-in"></i> Book
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="create-ac">
                                <p>Don't have an account? <a href="register.php">Sign Up</a></p>
                            </div>
                            <div class="login-menu">
                                <a href="about.php">About</a>
                                <span>|</span>
                                <a href="contact.php">Contact</a>
                            </div>
                        </div>

                    </div>
                    <!-- Single Sidebar End -->

                </div>
            </div>
            <!-- Sidebar Area End -->
        </div>
    </div>
</section>
<!--== Car List Area End ==-->

<?php
include 'footer.html' ?>
