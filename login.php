<!DOCTYPE html>
<html lang="en">

  <head>
    
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Sign In and Registration Form</title>
 
    <link rel="stylesheet" href="login.css"/>
  </head>
  <body>
    <div class="container">
        <div class="form-box">
            <h1 id="title">Log In</h1>
            <form id="login-form" action="welcome.php" method="POST">

                <div class="field">
                    <div class="input-field name-field">
                    <input type="text" name="Name" placeholder="Name" required />
                    </div>
                </div>
                <br>
                <div class="field create-password">
                    <div class="input-field">
                    
                    <input type="password" name="Password" placeholder="Password" required />
                    </div>
                </div>
                <br>
                <div class="options">
                    <label>
                        <input type="checkbox" name="remember_me"> Remember Me
                    </label>
                    <a href="/forgot-password">Forgot Password?</a>
                </div>
                <div class="button">
                    <input type="submit" id="submit-btn" value="Log In" />
                </div>

            </form>
        </div>
    </div>
    