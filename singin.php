
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign In and Registration Form</title>
    <link rel="stylesheet" href="signin.css"/>
</head>
<body>
    <div class="container">
        <div class="form-box">
            <h1 id="title">Sign Up</h1>
            <form id="signup-form" action="krijo.php" method="POST">
                <div class="field">
                    <div class="input-field name-field">
                        <input type="text" name="name" id="name" placeholder="Name" required />
                    </div>
                </div>
                <br>

                <div class="field email-field">
                    <div class="input-field">
                        <input type="email" name="email" id="email" placeholder="Email" required />
                    </div>
                </div>
                <br>

                <div class="field confirm-password">
                    <div class="input-field">
                        <input type="password" name="password" id="password" placeholder="Password" required />
                    </div>
                    <div class="input-field">
                        <input type="password" name="confirm-password" id="confirm-password" placeholder="Confirm Password" required />
                    </div>
                </div>
                <br>
                <select name="role" required>
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
</select>


                <div class="button">
                    <input type="submit" name="submit" id="submit-btn" value="Sign Up" />
                </div>
                <br><br>

                <p>Already have an Account?</p>
                <br>
                <a href="login.php" class="button">Log In</a>
            </form>

        </div>
    </div>
    
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const BtnSubmit = document.getElementById('submit-btn');
            const signupForm = document.getElementById("signup-form");
            const nameField = document.getElementById("name");
            const emailField = document.getElementById("email");
            const passwordField = document.getElementById("password");
            const confirmPasswordField = document.getElementById("confirm-password");

            const validate = (ngjarja) => {
                ngjarja.preventDefault(); 

                if (nameField.value === "") {
                    alert("Ju lutem shtoni emrin.");
                    nameField.focus();
                    return false;
                }

              
                if (emailField.value === "") {
                    alert("Ju lutem shtoni email-in.");
                    emailField.focus();
                    return false;
                }
                if (!emailValid(emailField.value)) {
                    alert("Ju lutem shtoni një email të vlefshëm.");
                    emailField.focus();
                    return false;
                }

                
                if (passwordField.value === "") {
                    alert("Ju lutem shtoni fjalëkalimin.");
                    passwordField.focus();
                    return false;
                }
                if (!passwordValid(passwordField.value)) {
                    alert("Fjalëkalimi duhet të ketë mes 4 dhe 8 karaktere, të përmbajë të paktën një shkronjë, një numër dhe një simbol.");
                    passwordField.focus();
                    return false;
                }

                
                if (passwordField.value !== confirmPasswordField.value) {
                    alert("Fjalëkalimi dhe konfirmimi i fjalëkalimit nuk përputhen.");
                    confirmPasswordField.focus();
                    return false;
                }

                
                alert("Sign in me sukses!");
                signupForm.submit();
                window.location.href = "offers.html";
            };
           
            const emailValid = (email) => {
                const emailRegex = /^([A-Za-z0-9_\-.]+)@[A-Za-z0-9\-]+\.[a-z]{2,4}$/;
                return emailRegex.test(email.toLowerCase());
            };

            const passwordValid = (password) => {
                const passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{4,8}$/;
                return passwordRegex.test(password);
            };

            BtnSubmit.addEventListener('click', validate);
        });
    </script>
</body>
</html>
