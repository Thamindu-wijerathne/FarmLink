<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/home.css">
    <script src="<?= ROOT ?>/assets/js/home.js" defer></script> <!-- Link to your JS file -->
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
   
    <style>
        /* Popup styles */


    </style>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
</head>
<body>
    <div class="bg-image-container">
        <img src="<?= ROOT ?>/assets/images/backgroundImage.png" alt="Background">
    </div>
    <div class="content">
        <?php $this->renderComponent('LandingNavbar'); ?>
        <h1>Hello from Home Page</h1>
    </div>

    <!-- Popup for Login -->
    <div id="loginPopup" class="popup-container">
        <div class="popup">
            <div class="close" onclick="hidePopup('login')">&times;</div>
            <h2>Login</h2>
            <form method="POST">
                
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="hidden" name="form_type" value="login"> <!-- Hidden input to distinguish forms -->
                <button class="loginButton" type="submit">Login</button>
            </form>

                <div class="account-create">
                    <h4>Not a Member ?</h4>
                    <button class="signup-In-loginPage" onclick="showPopup('signup')">Sign Up</button>
                </div>
        </div>
    </div>

    <!-- Popup for Sign Up -->
    <div id="signupPopup" class="popup-container">
        <div class="popup">
            <div class="close" onclick="hidePopup('signup')">&times;</div>
            <h2>Sign Up</h2>
            <form method="POST">
                <input type="text" name="username" placeholder="Username" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="confirmPassword" placeholder="Confirm Password" required>
                <input type="hidden" name="form_type" value="signup"> <!-- Hidden input to distinguish forms -->
                <button class="signupButton" type="submit">Sign Up</button>
            </form>
        </div>
    </div>

    <script>
        // Function to show popup
        function showPopup(type) {
            const popup = document.getElementById(type + 'Popup');
            popup.style.display = 'flex';
        }

        // Function to hide popup
        function hidePopup(type) {
            const popup = document.getElementById(type + 'Popup');
            popup.style.display = 'none';
        }
    </script>
</body>
</html>
