<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link rel="stylesheet" href="css/styles.css">
        <title>Registration page</title>
    </head>
    <body>
        <header>

            <span id="ahid">
                <h1>AHID</h1>
            </span>

        </header>

        <main>
            <div class="content">

                <div class="forms">
                    <h2>Sign up
                    <!--<br>
                    <i>To continue your browsing session with great experience</i>-->
                    </h2>
                    
                    
                    <form action="php/ahid.php" method="POST" onsubmit="return validateForm()">
                        <div class="fields">
                            <span class = "director">Full Name</span>
                            <input type="text" placeholder="Full name" name="fullname" autofocus>
                        </div>
    
                        <div class="fields">
                            <span class = "director">
                                Email/phone number</span>
                            <input type="email" placeholder="Email/phone" name="contact">
                        </div>
    
                        <div class="fields">
                            <span class = "director">Password</span>
                            <input type="text" placeholder="password" name="password">
                        </div>

                        <div class="fields">
                            <span class = "director" id="colour">Choose your favourite colour(optional)</span>
                            <input type="color" optional>
                        </div>

                        <div class="terms">
                            <input type="checkbox" required>
                            <span>By clicking, you agree to Ahid's  <a href="http://">terms and conditions</a></span>
                        </div>

                        <span id="next"> 
                            <p>Already have an account? <a href="customers login.php">login</a></p>
                        </span>

                        <!--the submit button-->

                        <div class="submit">
                            <input type="submit" id="submit" value="Sign-up" onclick="submit()">
                        </div>

                    </form>
                </div>
                

            </div>
        </main>
        <script src="js/script.js"></script>
    </body>

</html>