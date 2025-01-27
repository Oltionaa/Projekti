<?php
session_start();
include_once 'Database.php';
include_once 'User.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new Database();
    $connection = $db->getConnection();
    $user = new User($connection);

    $name = $_POST['name'];
    $password = $_POST['password'];

    if ($user->login($name, $password)) {
        $_SESSION['name'] = $name;
        $_SESSION['user_id'] = $user->getUserId($name);  
        header("Location: home.php");
        exit;
    } else {
        header("Location: signinn.html");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">








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
<<<<<<< HEAD

            <form id="login-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

            <form id="login-form" action="login.php" method="POST">

=======
<<<<<<< HEAD
            <form id="login-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
=======
            <form id="login-form" action="login.php" method="POST">
>>>>>>> 888a5f9dc5fb6a12a33f208aee3cdce8b4a13d0b
>>>>>>> f3f1c22c6fca8a5d102c61bef042ff2f1589453f
                <div class="field">
                    <div class="input-field name-field">
                        <input type="text"  name="name" placeholder="Name" class="name" />
                    </div>
                </div>
                <br>
                <div class="field create-password">
                    <div class="input-field">
                        <input type="password" name="password" placeholder="Password" class="password" />
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
            <?php include_once 'C:\xampp\htdocs\Projekti-1\registerController.php';?>
        </div>
    </div>
<<<<<<< HEAD
    
=======
<<<<<<< HEAD
    
    
=======
>>>>>>> 888a5f9dc5fb6a12a33f208aee3cdce8b4a13d0b
>>>>>>> f3f1c22c6fca8a5d102c61bef042ff2f1589453f
     <script>
        document.addEventListener("DOMContentLoaded", function (ngjarja) {
            const BtnSubmit = document.getElementById('submit-btn');
            const loginForm = document.getElementById("login-form");
            const nameField = document.querySelector(".name");
            const passwordField = document.querySelector(".password");
    
            const validate = (ngjarja) => {
                ngjarja.preventDefault();
    
                if (nameField.value === "") {
                    alert("Ju lutem shtoni emrin.");
                    nameField.focus();
                    return false;
                }

                if (passwordField.value === "") {
                    alert("Ju lutem shtoni fjalëkalimin.");
                    passwordField.focus();
                    return false;
                }

                if (!passwordValid(passwordField.value)) {
                    alert("Fjalëkalimi duhet të ketë të paktën 8 karaktere dhe të përmbajë numra dhe simbole.");
                    passwordField.focus();
                    return false;
                }

                alert("Log in me sukses!");
                loginForm.submit(); 
            };
    
            
            const passwordValid = (password) => {
                const passwordRegex = /^(?=.[A-Za-z])(?=.\d)(?=.[!@#$%^&])[A-Za-z\d!@#$%^&*]{8,}$/;
                return passwordRegex.test(password); 
            };

            BtnSubmit.addEventListener('click', validate);
        });
    </script>
<<<<<<< HEAD
</body>
=======
</body>
<<<<<<< HEAD
</html>
             
=======

                 
>>>>>>> 888a5f9dc5fb6a12a33f208aee3cdce8b4a13d0b
>>>>>>> f3f1c22c6fca8a5d102c61bef042ff2f1589453f
