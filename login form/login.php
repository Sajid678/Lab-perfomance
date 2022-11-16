
<?php require("login_fun.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h1> User Login</h1>
    </div>
      <form action="" method="post">
        <div >
          <h2>Login here</h2>
        </div>
        <div >
            <label for="username"> Full name :</label>
            <input type="text" name="username" placeholder="Full name">
            <!-- <label for="email"> Enter E-mail :</label>
            <input type="text" name="email" placeholder="Email"> -->
            <label for="password"> Password :</label>
            <input type="password" name="password" placeholder="Password">
          
            <button type="submit" href="/" name="submit">Submit</button>
        </div>
        <p class="error"><?php echo $error ?><a href="signup.php">Sign up now!</a></p>
      </form>
    </div>

    <footer><a href="index.php">Go back.</a></footer>
    
</body>
</html>