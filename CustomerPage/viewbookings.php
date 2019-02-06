<?php
include 'header.html';
try {
    $pdo = new PDO('mysql:host=localhost;dbname=carsys; charset=utf8', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = 'SELECT count(*) FROM bookings WHERE CustomerID = :cid';

    $result = $pdo->prepare($sql);
    $result->bindValue(':cid', $_POST['id']);
    $result->execute();
    if ($result->fetchColumn() > 0) {
        $sql = 'SELECT * FROM bookings where CustomerID = :cid ';
        $result = $pdo->prepare($sql);
        $result->bindValue(':cid', $_POST['id']);
        $result->execute();

      echo ' 
   <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>View Bookings</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>View your previous bookings</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->
 <table  class="viewb our-table">
            <tr>
                <td>Booking Number</td>
                <td>ID Number</td>
                <td>Car Registration </td>
                <td>Start Date</td>
                <td>End Date</td>
            </tr>
            
            <tbody>';


            while ($row = $result->fetch()) {

             echo  ' <tr><td> '.$row['BookingID'].' </td><td>'. $row['CustomerID'].'</td><td>' .$row['RegNo']. '</td> <td>'. $row['StartDate'].'</td><td>'. $row['EndDate'].'</td></tr>';
            }
          echo ' </tbody></table>';

    } else {
        //From https://www.w3schools.com/js/js_popup.asp
        echo '<script type = "text/javascript">
											alert("No rows matched the query. Try again.");
											window.location = ("selectviewBooking.php")
											</script>';
    }
} catch (PDOException $e) {
    echo $output = 'Unable to connect to the database server: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine();


}

include 'footer.html';
?>

