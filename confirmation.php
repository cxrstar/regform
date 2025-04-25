<!doctype html>
<html lang="en">
    <head>
        <title>Tech Talk 2025 Confirmation</title>
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
 
        <link rel="stylesheet" href="./bootstrap-5.3.5-dist/css/bootstrap.css">
 
        <!-- CSS ni SweetAkert (d1 the package first) -->
        <link rel="stylesheet" href="package/dist/sweetalert2.css">
    </head>
 
    <body>
 
    <?php
    if (!isset($_GET['firstname'])) {
        header(header: 'Location: register.php?status=fail');
        exit();
    }
 
    $name = $_GET['firstname'] .' '. $_GET['lastname'];
    $email = $_GET['email'];
    $number = $_GET['number'];
    $session = $_GET['session'];
    $diet = $_GET['diet'];
    $ref = $_GET['ref_code'];
    ?>
 
 
<section class="">
    <div class="container my-5">
        <div class="border border-dark rounded-3 d-flex flex-wrap align-items-start gap-4">
            <!-- Left: Date and QR -->
            <div class="ticket-date text-center bg-primary text-white p-4 rounded-3">
                <h4><?= date('d') ?></h4>
                <p><?= date('F') ?></p>
                <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=<?= urlencode($ref) ?>" alt="QR Code" class="img-fluid my-3 bg-white p-2 rounded-2">

</div>
 
        <!-- Right: Ticket Info -->
        <div class="ticket-content flex-grow-1">
                <h3 class="text-center">Registration Confirmation</h3>
                <p><strong>Full Name:</strong> <?= $name ?></p>
                <p><strong>Email:</strong> <?= $email ?></p>
                <p><strong>Mobile Number:</strong> <?= $number ?></p>
                <p><strong>Dietary Preference:</strong> <?= $diet ?></p>
                <p><strong>Session:</strong> <?= $session ?></p>
                <p><strong>Reference Code:</strong> <?= $ref ?></p>
                <div class="d-flex justify-content-end gap-3">
                    <button id="confirm" class="btn btn-success">Confirm</button>
                    <a href="register.php" class="btn btn-secondary">Go Back</a>
                </div>
               
            </div>
        </div>
    </div>
</section>
 
        <script src="/bootstrap/bootstrap-5.3.5-dist/js/bootstrap.js"></script>
 
        <script src="package/dist/sweetalert2.js"></script>
 
        <!-- Bootstrap JavaScript Libraries -->
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
 
 
        <script>
            document.getElementById('confirm').addEventListener('click', function() {
                Swal.fire({
                    title: 'Registration Confirmed',
                    text: 'Your registration has been successfully confirmed.',
                    icon: 'success',
                    confirmButtonText: 'OK'
                });
            });
        </script>
    </body>
</html>