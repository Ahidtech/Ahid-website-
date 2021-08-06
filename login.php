<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/style/login.css">
    <link rel="stylesheet" href="src/style/fonts.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <section>
            <header>
               <div>
                   <img src="src/icon/message-4652.svg" alt="" srcset="">
               </div>
               <div>
                   <h1>Login</h1>
               </div>
               <div></div>
            </header>
        </section>
        <section>
            <form action="post">
                <div>
                    <input type="email" name="email" id="email" class="entry" placeholder="Email">
                </div>
               <div>
                <input type="password" name="password" id="password" class="entry"  placeholder="Password">
               </div>
               <div>
                   <button type="submit">Login</button>
               </div>
               <section>
                    <div>
                        <input type="checkbox" id="remember"> <label for="remember">Remember me</label>
                    </div>
                    <div>
                        <a href="http://">forgot password</a>
                    </div>
               </section>
               
               <div>
                   <span>
                       Not yet a member? <a href="signup.php">Sign up</a>
                   </span>
               </div>
            </form>
        </section>
</body>
</html>