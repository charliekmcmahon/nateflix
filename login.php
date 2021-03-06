<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>NateFlix - Login</title>
    <link rel="stylesheet" type="text/css" href="./css/user-login-css.css">
  </head>
  <body>
    <?php include('internal/login-backend.php'); ?>
    <a class="logo" href="./index.html"><img src="./images/nateflix-logo.png"/></a>
    <div class="login">
      <h1 class="login__title">Login</h1>

      <div class="login-form">
              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                  <div id="login__group__label" class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                      <label id="login__label">Email or Phone Number</label> <br /><br />
                      <input id="login__group__input" type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                      <span class="help-block"><?php echo $username_err; ?></span>
                  </div>
                  <div id="login__group__label" class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                      <label id="login__label">Password</label> <br /><br />
                      <input id="login__group__input" type="password" name="password" class="form-control">
                      <span class="help-block"><?php echo $password_err; ?></span>
                  </div>
                  <div class="form-group">
                      <input type="submit" id="login__sign-in" class="btn btn-primary" value="Login">
                  </div>
                  <p class="login__secondary-cta__text">Don't have an account? <a class="login__loginredirect"href="register.php">Sign up now</a>.</p>
              </form>
          </div>

  </body>
</html>
