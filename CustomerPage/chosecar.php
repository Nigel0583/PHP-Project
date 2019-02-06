
<!--== Header Area Start ==-->
<?php
include 'header.html' ?>
<!--== Header Area End ==-->

<?php

include 'ourcars.html' ?>

<!-- Car List Content Start -->
<div class="col-lg-8">
    <div class="car-list-content m-t-50">
        <?php

        try
        {
            $start = $_POST['cstart'];
            $end = $_POST['cend'];
            $pdo = new PDO('mysql:host=localhost;dbname=carsys; charset=utf8', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT ca.Cost, ca.Description, Image, Make,Model,cars.CarType,`A/C`,NumSeats,Transmission,Fuel
    ,RegNo from category ca, cars WHERE ca.CatID = cars.CatID AND Availability = 'A' AND  RegNo NOT IN
(SELECT RegNo FROM bookings WHERE bookings.BookingStatus='RET' AND `StartDate` >= '$start'
            AND `EndDate` <= '$end' OR '$start' BETWEEN StartDate AND EndDate)";
            $result = $pdo->query($sql);
            $result->execute();
            if ($result->fetchColumn() > 0)
            {
                $sql = "SELECT ca.Cost, ca.Description, Image, Make,Model,cars.CarType,`A/C`,NumSeats,Transmission,Fuel 
       ,RegNo from category ca, cars WHERE ca.CatID = cars.CatID AND Availability = 'A' AND  RegNo NOT IN
(SELECT RegNo FROM bookings WHERE bookings.BookingStatus='RET' AND `StartDate` >= '$start'
            AND `EndDate` <= '$end' OR '$start' BETWEEN StartDate AND EndDate)";
                $result = $pdo->query($sql);
                $result->execute();
                while ($row = $result->fetch())
                {
                    ?>

                    <!-- Single Car Start -->
                    <div class="single-car-wrap">
                        <div class="row">
                            <!-- Single Car Thumbnail -->
                            <div class="col-lg-5">
                                <img alt="Image of car" class="car-list-thumb" src="assets/img/car/<?php
                                echo $row['Image']; ?>">
                            </div>
                            <!-- Single Car Thumbnail -->

                            <!-- Single Car Info -->
                            <div class="col-lg-7">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <div class="car-list-info">
                                            <h2>
                                                <a href="bookcar.php?RegNo=<?php
                                                echo $row['RegNo'] ?>&StartDate=<?php
                                                echo $start ?>&EndDate=<?php
                                                echo $end ?>"><?php
                                                    echo $row['Make']; ?> <?php
                                                    echo $row['Model']; ?></a>
                                            </h2>
                                            <h5>&euro;<?php
                                                echo $row['Cost']; ?> per day </h5>
                                            <p><?php
                                                echo $row['Description']; ?></p>
                                            <ul class="car-info-list">
                                                <li>Air Condition <?php
                                                    echo $row['A/C']; ?></li>
                                                <li><?php
                                                    echo $row['Fuel']; ?></li>
                                                <li><?php
                                                    echo $row['Transmission']; ?></li>
                                            </ul>

                                            <a href="bookcar.php?RegNo=<?php
                                            echo $row['RegNo'] ?>&StartDate=<?php
                                            echo $start ?>&EndDate=<?php
                                            echo $end ?>" class="rent-btn">Select</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Car info -->
                        </div>
                    </div>
                    <!-- Single Car End -->
                    <?php
                }
            }
            else
            {
                print "No rows matched the query.";
            }
        }

        catch(PDOException $e)
        {
            echo $output = 'Unable to connect to the database server: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine();
        }

        ?>
    </div>
    <!-- Car List Content End -->
</div>


</section>
<!--== Car List Area End ==-->

<?php
include 'footer.html' ?>
