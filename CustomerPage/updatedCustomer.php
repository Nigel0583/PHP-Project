<?php
try {
    include 'header.html';
    $pdo = new PDO('mysql:host=localhost;dbname=carsys; charset=utf8', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = 'UPDATE customers SET Name= :cname,Address = :caddress, LicenceNum = :clicence, Country = :ccountry, Postcode = :cpostcode, PhoneNum= :cphone,Email = :cemail   WHERE CustomerID = :cid  ';
    $result = $pdo->prepare($sql);
    $result->bindValue(':cid', $_POST['ud_id']);
    $result->bindValue(':cemail', $_POST['ud_email']);
    $result->bindValue(':cname', $_POST['ud_name']);
    $result->bindValue(':clicence', $_POST['ud_licence']);
    $result->bindValue(':cphone', $_POST['ud_phone']);
    $result->bindValue(':caddress', $_POST['ud_address']);
    $result->bindValue(':ccountry', $_POST['ud_country']);
    $result->bindValue(':cpostcode', $_POST['ud_postcode']);
    $result->execute();

    $count = $result->rowCount();
    if ($count > 0) {
        echo '<section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                    <p>You just update your account: ' . $_POST['ud_email'] . '</p> 
                    <p>ID Number: ' . $_POST['ud_id'] . '</p> 
        <div class="book-now-btn">
            <button class="book-now-btn" type="submit" name="delete"><i class="fa fa-check-square"></i><a href="index.php"> Click here to go back </a></button>  
              </div>         
                    </div>
                </div>
            
            </div>
        </div>
    </section>';
    } else {
        //From https://www.w3schools.com/js/js_popup.asp
        echo '<script type = "text/javascript">
											alert("Nothing updated.");
											window.location = ("whoupdateCust.php")
											</script>';
    }
} catch (PDOException $e) {

    $output = 'Unable to process query sorry : ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine();
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
                    	<h4>AN ERROR HAS OCCURRED!</h4>
                    	<p> '. $output .'  </p> 
                    	<a href="index.php" class="btn-404-home"><i class="fa fa-home"></i>Go to Home</a>
                    </div>
                </div>
        	</div>
        </div>
    </section>';

}
include 'footer.html';
?>