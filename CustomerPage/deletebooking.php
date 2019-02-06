

<!--== Header Area Start ==-->
<?php include 'header.html' ?>
<!--== Header Area End ==-->




<?php
if (isset($_POST['submitdetails'])) {
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=carsys; charset=utf8', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = 'SELECT count(*) FROM bookings where BookingID = :cid ';
        $result = $pdo->prepare($sql);
        $result->bindValue(':cid', $_POST['id']);
        $result->execute();
        if ($result->fetchColumn() > 0) {
            $sql = 'SELECT BookingID, bookings.CustomerID,RegNo,Name FROM bookings, customers where bookings.CustomerID = :cid AND bookings.CustomerID = customers.CustomerID';
            $result = $pdo->prepare($sql);
            $result->bindValue(':cid', $_POST['id']);
            $result->execute();

            while ($row = $result->fetch()) {
                echo '<section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                    <p>Name: ' . $row['Name'] .' <br>Customer ID: ' . $row['CustomerID'] . '<br> Car Registration: ' . $row['RegNo'].  '<br> Are you sure you want to delete your booking ?</p>
                        <form action="remove-booking.php" method="post">
          <input type="hidden" name="id" value="' . $row['BookingID'] . '"> 
            <button class="book-now-btn" type="submit" name="delete"><i class="fa fa-check-square"></i>Confirm</button>  
        </form>
                        <span class="title-line"><i class="fa fa-car"></i></span>
       
                    </div>
                </div>
            
            </div>
        </div>
    </section>';
            }
        } else {
            //From https://www.w3schools.com/js/js_popup.asp
            echo "<script type = \"text/javascript\">
											alert(\"No rows matched the query. Check Booking ID.\");
											window.location = (\"removeBookingForm.php\")
											</script>";
        }
    } catch (PDOException $e) {
        $output = 'Unable to connect to the database server: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine();
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
                    	<h4>PAGE NOT FOUND !</h4>
                    	<p> '. $output .'  </p> 
                    	<a href="index.php" class="btn-404-home"><i class="fa fa-home"></i>Go to Home</a>
                    </div>
                </div>
        	</div>
        </div>
    </section>';
    }
}
?>

<!--== Footer Area Start ==-->
<?php include 'footer.html'?>
<!--== Footer Area End ==-->


