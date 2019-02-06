<?php
include 'header.html';
try {
    $pdo = new PDO('mysql:host=localhost;dbname=carsys; charset=utf8', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = 'DELETE FROM bookings WHERE BookingID= :cid';
    $result = $pdo->prepare($sql);
    $result->bindValue(':cid', $_POST['id']);
    $result->execute();
    echo '  
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h4>You just deleted booking no: ' . $_POST['id']. ' click<a href=removeBookingForm.php> here</a> to go back </h4>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Make bookings faster</p>
                    </div>
                </div>
            
            </div>
        </div>
    </section>';

}
catch (PDOException $e) {
    if ($e->getCode() == 23000) {
        //From https://www.w3schools.com/js/js_popup.asp
        echo "<script type = \"text/javascript\">
											alert(\"Unable to remove Booking. Referenced in different table.\");
											window.location = (\"removeBookingForm.php\")
											</script>";
    }
} ?>


<!--== Footer Area Start ==-->
<?php include 'footer.html'?>
<!--== Footer Area End ==-->

