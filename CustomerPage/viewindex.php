<div class="row popular-car-gird">

    <?php
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=carsys; charset=utf8', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM cars WHERE Availability = 'A'";
        $result = $pdo->query($sql);
        while ($row = $result->fetch()) {
            ?>
            <!-- Single Popular Car Start -->
            <div class="col-lg-4 col-md-6 con suv mpv">
                <div class="single-popular-car">
                    <div class="p-car-thumbnails">

                        <!--
                        Images of cars in database available at
                        https://www.netcarshow.com/audi/2019-a4/1280x960/wallpaper_02.htm
                        https://www.netcarshow.com/audi/2018-a8/1280x960/wallpaper_02.htm
                        https://www.netcarshow.com/ford/2017-fiesta/1280x960/wallpaper_03.htm
                        https://www.netcarshow.com/ford/2019-focus/1280x960/wallpaper_01.htm
                        https://www.netcarshow.com/ford/2015-mondeo/1280x960/wallpaper_02.htm
                        https://www.netcarshow.com/ford/2018-mustang_gt/1280x960/wallpaper_07.htm
                        https://www.netcarshow.com/mazda/2017-mx-5_rf/1280x960/wallpaper_02.htm
                        https://www.netcarshow.com/toyota/2017-yaris/1280x960/wallpaper_01.htm
                        https://www.netcarshow.com/tesla/2017-model_x/1280x960/wallpaper_03.htm
                        -->
                        <a class="car-hover" href="assets/img/car/<?php echo $row['Image']; ?>">
                            <img alt="Image of car" class="thumb" src="assets/img/car/<?php echo $row['Image']; ?> ">
                        </a>
                    </div>

                    <div class="p-car-content">
                        <h3>
                            <p><?php echo $row['Make']; ?></p>
                            <span class="price"><i class="fa fa-tag"></i><?php echo $row['CarType']; ?></span>
                        </h3>

                        <h5><span class="property_size"><?php echo $row['Model']; ?></span></h5>

                        <div class="p-car-feature">
                            <a href="">A/C <span class="property_size"><?php echo $row['A/C']; ?></a>
                            <a href="">Seats <span class="property_size"><?php echo $row['NumSeats']; ?></a>
                            <a href=""><span class="property_size"><?php echo $row['Fuel']; ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Popular Car End -->
            <?php
        }
    } catch (PDOException $e){
     echo   $output = 'An error has occurred: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine();
    }
    ?>
</div>