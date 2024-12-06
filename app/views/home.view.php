<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/home.css">
    <script src="<?= ROOT ?>/assets/js/script.js" defer></script> <!-- Link to your JS file -->
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
   
    <style>
        /* Popup styles */
        .popup-container {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .popup {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            width: 300px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .popup h2 {
            margin: 0 0 10px;
            text-align: center;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .popup form {
            display: flex;
            flex-direction: column;
        }

        .popup input {
            margin-bottom: 20px;
            padding: 10px;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* .popup button {
            padding: 10px;
            background-color: #6200ea;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .popup button:hover {
            background-color: #3700b3;
        } */

        .loginButton {
            padding: 10px;
            background-color: #6200ea;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .loginButton:hover {
            background-color: #3700b3;
        }

        .signup-In-loginPage {
            all: unset; /* Resets all default styles */
            color: #6200ea; /* Text color */
            font-size: 1rem; /* Adjust font size as needed */
            cursor: pointer;
            text-decoration: underline; /* Adds underline */
            display: inline-block; /* Ensures proper spacing */
        }

        .signup-In-loginPage:hover {
            color: #3700b3; /* Hover effect */
            text-decoration: none; /* Removes underline on hover */
        }


        .signupButton{
            padding: 10px;
            background-color: #6200ea;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer; 
        }

        .signupButton:hover{
            background-color: #3700b3;
        }

        .popup .close {
            text-align: right;
            cursor: pointer;
            color: #888;
        }

        .popup .close:hover {
            color: #000;
        }

        .account-create {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .signup-In-loginPage {
            border: none;
            border-radius: 5px;
            padding: 10px;
            cursor: pointer;
        }

    </style>
</head>
<body>
    <div class="bg-image-container">
        <img src="<?= ROOT ?>/assets/images/backgroundImage.png" alt="Background">
    </div>
    <div class="content">
        <?php $this->renderComponent('navbar'); ?>
        <h1>Hello from Home Page</h1>
    </div>

    <!-- Popup for Login -->
    <div id="loginPopup" class="popup-container">
        <div class="popup">
            <div class="close" onclick="hidePopup('login')">&times;</div>
            <h2>Login</h2>
            <form>
                <input type="email" placeholder="Email" required>
                <input type="password" placeholder="Password" required>
                <button class="loginButton" type="submit">Login</button>
                <div class="account-create">
                    <h4>Not a Member ?</h4>
                    <button class="signup-In-loginPage" onclick="showPopup('signup')">Sign Up</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Popup for Sign Up -->
    <div id="signupPopup" class="popup-container">
        <div class="popup">
            <div class="close" onclick="hidePopup('signup')">&times;</div>
            <h2>Sign Up</h2>
            <form>
                <input type="text" placeholder="Username" required>
                <input type="email" placeholder="Email" required>
                <input type="password" placeholder="Password" required>
                <input type="confirmPassword" placeholder="confirmPassword" required>
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
