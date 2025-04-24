<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
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
 
        
        <div class="container my-5">

            <section class="border border-dark rounded-3 p-4 bg-light mb-4 shadow">

                <h1 class="mb-4 text-center text-primary">Tech Talk 2025 Registration</h1>
            
            <form action="confirmation.php" method="post">

        
                    <form action="">

                        <div class="form-floating mb-3">
       
                            <input type="name" class="form-control border-primary rounded-4" name="fname" id="fname" placeholder="Enter your first name" required>
                            <label for="name" class="form-label">First Name</label>
        
                        </div>

                        <div class="form-floating mb-3">
       
                            <input type="name" class="form-control border-primary rounded-4" name="lname" id="lname" placeholder="Enter your first name" required>
                            <label for="name" class="form-label">Last Name</label>
        
                        </div>
        
        
                        <div class="form-floating mb-3">
           
                            <input type="email" class="form-control border-primary rounded-4" name="email" id="email" placeholder="Enter your email" required>
                            <label for="Email" class="form-label">Email Address</label>
        
                        </div>
        
                        <!-- number html -->
        
                        <div class="form-floating mb-3">       
                            
                            <input type="number" class="form-control border-primary rounded-4" name="number" id="number" placeholder="Enter your mobile number" required>
                            <label for="number" class="form-label">Mobile Number</label>
        
                        </div>
        
                        <!-- AAAA -->

                        <div class="form-floating my-3">
                            <select name="session" class="form-select rounded-input rounded-4 border-primary" id="session">
                                <option value="" disable selected>Choose One</option>
                                <option value="Web Dev">Web Dev</option>
                                <option value="AI">AI</option>
                                <option value="Cybersecurity">Cybersecurity</option>
                            </select>
                            <label for="Session" class="form-label">Preferred Session</label>
                        </div>

                        <input type="hidden" value="NU2025" class="form-control" name="nulp">

                        <!-- checkbox -->

                        <label class="form-check-label mx-2 my-2">Dietary Preference</label>
                         
                      <div class="d-flex">  

                        <div class="mb-3 form-check">

                    <input type="radio" class="form-input-check" name="pref" id="inlineRadio1" for="inlineRadio1">
                    <label class="form-check-label">None</label>
                
                </div>

                <div class="mb-3 form-check">

                    <input type="radio" class="form-input-check" name="pref" id="inlineRadio2" for="inlineRadio2">
                    <label class="form-check-label">Vegetarian</label>
                
                </div>

                <div class="mb-3 form-check">

                    <input type="radio" class="form-input-check" name="pref" id="inlineRadio3" for="inlineRadio3">
                    <label class="form-check-label">Halal</label>
                
                </div>

            </div>

            <div class="d-flex justify-content-center gap-3">

                <button class="btn btn-outline-primary w-25 rounded-4">Submit</button>


            </div>
        
                    </form>

                    </form>

            </section>


        </div>

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
