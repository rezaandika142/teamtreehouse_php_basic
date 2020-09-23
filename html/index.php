<?php

$name = "Reza Andika";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/boostrap.min.css">
    <link rel="stylesheet" href="asset/css/all.css">
    <title>Threehouse <?php echo $name; ?></title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="sidebar col-lg-4 border bg-dark vh-100">
                <div class="d-flex flex-column m-5">
                    <img class="d-flex align-self-center" src="images/bumi.jpg" alt="logo" width="90px">
                </div>

                <div class="d-flex flex-column m-5">
                    <div class="d-flex align-self-center">
                        <p class="h2 text-light"><?php echo $name; ?></p>
                    </div>
                </div>
            </div>

            <div class="content col-lg-8 vh-100">
                    <p class="h2">My first page PHP</p>

                    <section class="pl-5">
                        <p class="h2">Unit</p>
                        <?php include "inc/units.php"; ?>
                        <p class="lead"><?php echo celciusToFahrenheit(80); ?></p>
                    </section>

                    <section class="pl-5">
                        <p class="h2">String</p>
                        <?php include "inc/string.php"; ?>
                        <p class="lead"><?php echo askName("Reza andIkA"); ?></p>
                    </section>
                </div>

                <div class="d-flax flex-column"></div>
                    
                <div class="d-flex border position-absolute fixed-bottom">
                    <p class="font-weight-normal mx-auto">&copy; <?php echo $name; echo "Modified ".getlastmod() ?></p>
                </div>
            </div>
        </div>
    </div>
    <script src="asset/js/jquery-3.5.1.slim.min.js"></script>
    <script src="asset/js/popper.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
</body>
</html>