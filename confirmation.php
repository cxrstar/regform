<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$number = $_POST['number'];
$session = $_POST['session'];
$pref = $_POST['pref'];
$nulp = $_POST['nulp'];
 
 
?>
 
<!doctype html>
<html lang="en">
    <head>
        <title>Display</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
 
        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="bootstrap-5.3.5-dist/css/bootstrap.css">
        <link rel="stylesheet" href = "package/dist/sweetalert2.css">
 

    </head>
 
    <body>

    <div class="container my-5">
   
        <div class="border border-dark rounded-3 p-4 bg-light">
        <h1 class="mb-4 text-center">Registration Confirmation</h1>
        <div class="bg-primary d-flex">
        <div class="d-flex">
        <img class=" "src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=<?= urlencode($nulp) ?>" alt="QR Code">
        <h1 class="text-white">April 24</h1>
    </div>
    </div>
        <div class="d-flex g-20">
            <p><strong>Name: </strong><?php echo $fname ?>  </p>
            <p><strong>  </strong><?php echo $lname ?>  </p>
        </div>
        <p><strong>Email:</strong> <?php echo $email ?> </p>
        <p><strong>Mobile Number:</strong> <?php echo $number ?> </p>
        <p><strong>Preferred Session:</strong> <?php echo $session ?> </p>
        <p><strong>Dietary Preference:</strong> <?php echo $pref ?> </p>
        <p><strong>Reference Number:</strong> <?php echo $nulp ?> </p>
 
 
        </div>
    </div>

    <!-- js sweetalert -->
    <script src="package/dist/sweetalert2.js>"></script> 

    <script src="bootstrap-5.3.5-dist/js/bootstrap.js">  </script>  
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>
 
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>