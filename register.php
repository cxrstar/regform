<!doctype html>
<html lang="en">
    <head>
        <title>Tech Talk 2025 Registration</title>
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
 
    </head>
 
    <body>
            <div class="container my-5">
 
            <!-- Basic Form Controlss -->
            <section class="border border-dark rounded-3 p-4 bg-light mb-4">
 
            <h2 class="mb-4 text-center text-primary">Tech Talk 2025 Registration</h2>
 
            <form action="confirmation.php" method="GET" class"p-4 bg-white rounded">
 
                <div class="form-floating mb-3">
                    <input type="text" class="form-control rounded-5" id="fistname" name="firstname" required>
                    <label for="fistname" class="form-label">Full Name</label>
                    </div>
 
                <div class="form-floating mb-3">
                    <input type="text" class="form-control rounded-5" id="lastname" name="lastname" required>
                    <label for="lastname" class="form-label">Full Name</label>
                    </div>    
 
                <div class="form-floating mb-3">
                    <input type="email" class="form-control rounded-5" id="email" name="email" required />
                    <label for="email" class="form-label">Email Address</label>
                    </div>
               
                <div class="form-floating mb-3">
                    <input type="number" class="form-control rounded-5" id="number" name="number" required />
                    <label for="number" class="form-label">Mobile Number</label>
                </div>    
 
                <div class="form-floating mb-3">
                    <select class="form-select round-pill rounded-5" name="session" required>
                        <option value="" disabled selected>Choose One</option>
                        <option value="Web Dev">Web Dev</option>
                        <option value="AI">AI</option>
                        <option value="Cybersecurity">Cybersecurity</option>
                    </select>
                    <label for="session">Preferred Section</label>
                </div>
 
                <div class="mb-3">
                    <label for="form-label">Dietary Preference</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="diet" value="None" id="diet_none" required>
                        <label class="form-label" for="diet_none">None<label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="diet" value="Vegetarian" id="diet_none" required>
                        <label class="form-label" for="diet_vegetarian">Vegetarian<label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="diet" value="Halal" id="diet_none" required>
                        <label class="form-label" for="diet_halal">Halal<label>
                    </div>
 
                    <input type="hidden" name="ref_code" value="NU2025">
 
                    <div class="text-center">
                    <button type="submit" class="btn btn-primary rounded-pill px-5">Submit</button>
                </div>
                    </div>
                </div>
               
            </form>
        </section>
 
        </div>
 
 
        <script src="/bootstrap/bootstrap-5.3.5-dist/js/bootstrap.js"></script>
       
 
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