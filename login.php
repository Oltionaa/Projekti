<?php

session_start();
include_once 'Database.php';
include_once 'User.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new Database();
    $connection = $db->getConnection();
    $user = new User($connection);

    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';

  
    if (!$user->userExists($name)) {
        header("Location: signinn.html?error=no_user");
        exit;
    }

    
    if ($user->login($name, $password)) {
        $_SESSION['name'] = $name;  
        $_SESSION['user_id'] = $user->getUserId();  
        $_SESSION['role'] = $user->getUserRole($name);  

        if ($_SESSION['role'] === 'admin') {
            $_SESSION['admin_id'] = $_SESSION['user_id'];  
            header("Location: home.php");  
        } else {
            header("Location: home.php");  
        }
        exit;
    } else {
      
        header("Location: login.php?error=1");
        exit;
    }
}

?>






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

            <form id="login-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
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
                </div>
                <div class="button">
                    <input type="submit" id="submit-btn" value="Log In" />
                </div>

            </form>
            <?php include_once 'C:\xampp\htdocs\Projekti-1\registerController.php';?>
        </div>
    </div>
    
     <script>
   document.addEventListener("DOMContentLoaded", function () {
    const BtnSubmit = document.getElementById('submit-btn');
    const loginForm = document.getElementById("login-form");
    const nameField = document.querySelector(".name");
    const passwordField = document.querySelector(".password");

    // Kontrollo nëse ka gabim nga PHP dhe shfaq alert
    const urlParams = new URLSearchParams(window.location.search);

    // Gabimi për fjalëkalim të gabuar
    if (urlParams.has("error") && urlParams.get("error") === "1") {
        alert("Fjalëkalimi gabim! Ju lutem provoni përsëri.");
        window.history.replaceState({}, document.title, "login.php");
    }

    
    if (urlParams.has("error") && urlParams.get("error") === "no_user") {
        alert("Përdoruesi nuk ekziston! Ju lutem regjistrohuni.");
        window.history.replaceState({}, document.title, "signinn.html"); 
    }

    const validate = (event) => {
        event.preventDefault();

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

        loginForm.submit(); 
    };

    const passwordValid = (password) => {
        const passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{8,}$/;
        return passwordRegex.test(password);
    };

    BtnSubmit.addEventListener('click', validate);
});

    </script>
</body> 
</html>