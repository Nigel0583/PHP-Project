<?php

include 'header.html';

if (isset($_POST['submitdetails'])) {
    try {
        $cid    = $_POST['cid'];
        $cstart = $_POST['cstart'];
        $cend   = $_POST['cend'];
        $creg   = $_POST['RegNo'];

        if ($cstart === '' or $cid === '') {
            echo ('<section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                    <p>You did not complete the booking correctly. You may not be registered. Click <a href="register.php">here</a> to register <br> </p>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </section> ');

        } else {
            $pdo = new PDO('mysql:host=localhost;dbname=carsys; charset=utf8', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql  = "INSERT INTO bookings (CustomerID,StartDate,EndDate, RegNo) VALUES ( :cid, :cstart, :cend, :creg );
                    UPDATE cars SET Availability = 'O'  WHERE RegNo = :creg;";

            $sql1 = ' SELECT COUNT(*) FROM customers, category ca, cars WHERE CustomerID = :cid AND cars.CatID = ca.CatID ';
            $sql2 = "SELECT DATEDIFF( '$cend', '$cstart') * ca.Cost AS Total FROM category ca, cars WHERE RegNo = '$creg' AND cars.CatID = ca.CatID  ";

            //From http://php.net/manual/en/pdo.query.php
            foreach ($pdo->query($sql2) as $cost) {
                $price = $cost['Total'];

            }

            $result = $pdo->prepare($sql1);
            $result->bindValue(':cid', $_POST['cid']);
            $result->execute();


            if ($result->fetchColumn() > 0) {
                $sql1   = " SELECT *, Cost FROM customers, category ca,cars WHERE CustomerID = :cid AND cars.CatID = ca.CatID";
                $result = $pdo->prepare($sql1);
                $result->bindValue(':cid', $_POST['cid']);
                $result->execute();

                $row      = $result->fetch();
                $cid      = $row['CustomerID'];
                $email    = $row['Email'];
                $licence  = $row['LicenceNum'];
                $name     = $row['Name'];
                $address  = $row['Address'];
                $country  = $row['Country'];
                $postcode = $row['Postcode'];
                $phone    = $row['PhoneNum'];
                $perday   = $row['Cost'];
                $regNo = $row['RegNo'];
                $make = $row['Make'];
                $model = $row['Model'];
                $fuel = $row['Fuel'];
            }

            $stmt = $pdo->prepare($sql);

            $stmt->bindValue(':cstart', $cstart);
            $stmt->bindValue(':cend', $cend);
            $stmt->bindValue(':cid', $cid);
            $stmt->bindValue(':creg', $creg);


            $stmt->execute();
            // From https://www.w3schools.com/PHP/php_mysql_insert_lastid.asp
            $last_id = $pdo->lastInsertId();
            //From https://www.w3schools.com/php/func_date_default_timezone_get.asp
            $date = date_default_timezone_get();


        }
    }
    catch (PDOException $e) {
        $title  = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine();
        echo '  <section id="page-404-wrap" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="page-404-content">
                        <div class="number">
                            <div class="four">4</div>
                            <div class="zero">
                                <img src="assets/img/404.png" alt="JSOFT">
                            </div>
                            <div class="four">4</div>
                        </div>
                        <h4>' . $title . '</h4>
                        <p> ' . $output . '  </p> 
                        <a href="index.php" class="btn-404-home"><i class="fa fa-home"></i>Go to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </section>';
    }
}
?>
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Thank you for booking with us</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Print this invoice</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>

    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="assets/img/logo.png" style="width:100%; max-width:300px;"
                                     alt="Express Car Rental">
                            </td>

                            <td>
                                Booking #: <?php
                                if (isset($last_id))
                                    echo $last_id;
                                ?>
                                <br> Customer #: <?php
                                if (isset($cid))
                                    echo $cid;
                                ?>
                                <br> Created: <?php
                                echo date("d-m-Y h:i");
                                ?>

                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                Express Car Rental
                                <br> Carroll's Quay
                                <br> Shandon, Cork
                            </td>

                            <td>

                                <?php
                                if (isset($name))
                                    echo $name;
                                ?>
                                <br> <?php
                                if (isset($email))
                                    echo $email;
                                ?>
                                <br> <?php
                                if (isset($address))
                                    echo $address;
                                ?>
                                <br> <?php
                                if (isset($country))
                                    echo $country;
                                ?>
                                <br> <?php
                                if (isset($postcode))
                                    echo $postcode;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h6>Car Information </h6>
                                <br>
                                <?php
                                if (isset($make))
                                    echo $make;
                                ?>
                                <br> <?php
                                if (isset($model))
                                    echo $model;
                                ?>
                                <br> <?php
                                if (isset($regNo))
                                    echo $regNo;
                                ?>
                                <br> <?php
                                if (isset($fuel))
                                    echo $fuel;
                                ?>

                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="heading">
                <td> Item</td>
                <td> Price</td>
            </tr>
            <tr class="item">
                <td>Rental per day</td>
                <td> &euro; <?php
                    if (isset($perday))
                        echo $perday;
                    ?></td>
            </tr>
            <tr class="item">
                <td>Dates</td>
                <td> From: <?php
                    if (isset($cstart))
                        echo $cstart;
                    ?> To: <?php
                    if (isset($cend))
                        echo $cend;
                    ?> </td>
            </tr>

            <tr class="total">
                <td></td>
                <td> Total: <?php
                    if (isset($price))
                        echo $price;
                    ?>  </td>
            </tr>
        </table>
    </div>

<?php
include 'footer.html';
?>