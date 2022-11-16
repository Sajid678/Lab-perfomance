
<?php require("signup_fun.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up page</title>
</head>
<body>
    <h1>Sign-up</h1>
      <form action="" method="post" autocomplete="off" style="display:block;">
        <div >
          <h2>Register here</h2>
        </div>
        <div style ="display:inline-block;">
            <label for="name"> Full name :</label>
            <input type="text" name="username" placeholder="Full name">
            <p class="error" style="display:block;"><?php echo $username_error ?></p>
            <label for="email"> Enter E-mail :</label>
            <input type="text" name="email" placeholder="email@email.com">
            <p class="error" style="display:block;"><?php echo $email_error ?></p>
            <label for="phone"> NID number :</label>
            <input type="text" name="nid" placeholder="NID number">
            <p class="error" style="display:block;"><?php echo $nid_error ?></p>
            <label for="password"> Password :</label>
            <input type="password" name="password" placeholder="Password">
            <p class="error" style="display:block;"><?php echo $password_error ?></p>
          
            <button type="submit" href="/" name="submit">Sign up</button>
        </div>
      <p class="success"><?php echo $success_msg ?></p>
      </form>
    <a href="login.php">Log in here</a>
    <a href="index.php">go home</a>
    
</body>
</html>