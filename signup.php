<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/style/signup.css">
    <link rel="stylesheet" href="src/style/fonts.css">
    <title>SIGNUP</title>
</head>
<body>
    <div class="container">
        <section>
            <header>
               <div>
                   <img src="src/icon/message-4652.svg" alt="" srcset="">
               </div>
               <div>
                   <h1>Create account</h1>
               </div>
               <div></div>
            </header>
        </section>
        <section>
            <form action="post">
                <div>
                    <input type="text" name="firstName" id="firstName" placeholder="First name">
                </div>
                <div>
                    <input type="text" name="laststName" id="lastName" placeholder="Last name">
                </div>
                <div>
                    <input type="email" name="email" id="email" placeholder="Email">
                </div>
                <div>
                    <input type="password" name="password" id="password" placeholder="Password">
                </div>
                <div>
                   <input type="text" placeholder="Enter your favourite colour(optional)">
                </div>
                <div>
                   <button type="submit">Signup</button>
                </div>
                <div>
                   <span>
                       Already a member? <a href="login.php">Login</a>
                   </span>
                </div>
            </form>
        </section>
        <footer>
            <div>
                <span>By signing up means that you have agreed to our <br><a href="">Terms & Conditions</a></span>
            </div>
        </footer>
    </div>
</body>
</html>