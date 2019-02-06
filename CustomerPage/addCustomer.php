
<?php
include 'header.html';

if (isset($_POST['submitdetails']))
{
    try
    {
        $cname = $_POST['cname'];
        $cemail = $_POST['cemail'];
        $clicence = $_POST['clicence'];
        $caddress = $_POST['caddress'];
        $ccountry = $_POST['ccountry'];
        $cpostcode = $_POST['cpostcode'];
        $caddress = $_POST['caddress'];
        $cphone = $_POST['cphone'];
        if ($cname == '' or $caddress == '' or $cemail == '' or $clicence == '' or $ccountry == '' or $cphone == '')
        {
            //From https://www.w3schools.com/js/js_popup.asp
            echo "<script type = \"text/javascript\">
											alert(\"You did not complete the form correctly\");
											window.location = (\"register.php\")
											</script>";
        }
        else
        {
            $pdo = new PDO('mysql:host=localhost;dbname=carsys; charset=utf8', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = 'INSERT INTO customers (Email,LicenceNum, Name,Address,Country,Postcode,PhoneNum) VALUES(:cemail, :clicence,:cname,:caddress,:ccountry,:cpostcode, :cphone)';
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':cname', $cname);
            $stmt->bindValue(':caddress', $caddress);
            $stmt->bindValue(':cemail', $cemail);
            $stmt->bindValue(':clicence', $clicence);
            $stmt->bindValue(':ccountry', $ccountry);
            $stmt->bindValue(':cpostcode', $cpostcode);
            $stmt->bindValue(':cphone', $cphone);
            $stmt->execute();

            // From https://www.w3schools.com/PHP/php_mysql_insert_lastid.asp

            $last_id = $pdo->lastInsertId();
            echo '<section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                    <p>Rember your ID number for future bookings: ' . $last_id . ' </p>
                    <button class="book-now-btn" type="submit" name="delete"><i class="fa fa-check-square"></i><a href="index.php"> Click here to go back </a></button>
                     
                         
                    </div>
                </div>
            
            </div>
        </div>
    </section>';
        }
    }

    catch(PDOException $e)
    {
        $title = 'An error has occurred';
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

include 'footer.html'

?>