<?php
include 'header.html';
try {
    $pdo = new PDO('mysql:host=localhost;dbname=carsys; charset=utf8', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = 'SELECT count(*) FROM customers WHERE CustomerID = :cid';

    $result = $pdo->prepare($sql);
    $result->bindValue(':cid', $_POST['id']);
    $result->execute();
    if ($result->fetchColumn() > 0) {
        $sql = 'SELECT * FROM customers where CustomerID = :cid ';
        $result = $pdo->prepare($sql);
        $result->bindValue(':cid', $_POST['id']);
        $result->execute();

        $row = $result->fetch();
        $id = $row['CustomerID'];
        $email = $row['Email'];
        $licence = $row['LicenceNum'];
        $name = $row['Name'];
        $address = $row['Address'];
        $country = $row['Country'];
        $postcode = $row['Postcode'];
        $phone = $row['PhoneNum'];
    } else {
        //From https://www.w3schools.com/js/js_popup.asp
        echo '<script type = "text/javascript">
											alert("No rows matched the query. Try again.");
											window.location = ("updatedCustomer.php")
											</script>';
    }
} catch (PDOException $e) {
    echo $output = 'Unable to connect to the database server: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine();


}

?>
    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Update Details</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Change your details here</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->
    <!--== update Page Content Start ==-->
    <section id="lgoin-page-wrap" class="section-padding">
        <div class="col-lg-5 col-md-8 m-auto">
            <div class="login-page-content">
                <div class="login-form">
                    <h3>Update your details here</h3>
                    <form action="updatedCustomer.php" method="post">
                        <input type="hidden" name="ud_id" value="<?php echo $id; ?>">
                        <div class="name">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" name="ud_name"
                                           value="<?php if (isset($name)) echo $name; ?>" placeholder=" Name">
                                </div>
                            </div>
                        </div>

                        <div class="username">
                            <input type="email" name="ud_email" value="<?php if (isset($email)) echo $email; ?>"
                                   placeholder="Email">
                        </div>
                        <div class="name">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="number" name="ud_licence"
                                           value="<?php if (isset($licence)) echo $licence; ?>"
                                           placeholder="Licence Number">
                                </div>
                                <div class="col-md-6">
                                    <input type="number" name="ud_phone"
                                           value="<?php if (isset($phone)) echo $phone; ?>"
                                           placeholder="Phone Number">
                                </div>
                            </div>
                        </div>
                        <div class="username">
                            <input type="text" name="ud_address"
                                   value="<?php if (isset($address)) echo $address; ?>" placeholder="Address">
                        </div>
                        <div class="username">
                            <input type="text" name="ud_country"
                                   value="<?php if (isset($country)) echo $country; ?>" placeholder="Country">
                        </div>
                        <div class="username">
                            <input type="text" name="ud_postcode"
                                   value="<?php if (isset($postcode)) echo $postcode; ?>"
                                   placeholder="Postcode">
                        </div>


                        <div class="log-btn">
                            <button type="submit" value="Update"><i class="fa fa-check-square"></i>Update
                            </button>
                        </div>
                    </form>
                </div>


                <div class="login-menu">
                    <a href="about.php">About</a>
                    <span>|</span>
                    <a href="contact.php">Contact</a>
                </div>
            </div>
        </div>

    </section>
    <!--== update Page Content End ==-->

<?php
include 'footer.html';
?>