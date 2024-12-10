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
        /* Common styles for all sections */
        .section {
            background-size: cover;
            background-position: center;
            height: 100vh; /* Full viewport height */
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            font-weight: bold;
        }

        .section h1 {
            font-size: 60px;
        }

        /* Specific styles for each section */
        #home-section {
            background-image: url('<?= ROOT ?>/assets/images/landingPage1.png');
            margin-top: -15px;
        }

        #about-section {
            background-image: url('<?= ROOT ?>/assets/images/landingPage2.jpg');
        }

        #services-section {
            background-image: url('<?= ROOT ?>/assets/images/landingPage3.png');
        }

        #contact-section {
            background-image: url('<?= ROOT ?>/assets/images/landingPage4.png');
        }

        .user-type {
            display: flex;
            margin: 0px 0px 13px 0px;
            text-align: center;
        }

        .type-1 {
            padding: 5px;
            width: 50%;
            margin-right: 2px;
            transition: all 0.3s ease;
            user-select: none;
            cursor: pointer;
            user-select: none;
        }

        .type-1:hover {
            color: white;
            background-color: #2bcb00;
        }
        .type-box[data-type="Farmer"].active {
            background-color: #2bcb00; /* Green for Farmer */
        }

        .type-2 {
            margin-left: 2px;
            width: 50%;
            padding: 5px;
            transition: all 0.3s ease;
            user-select: none;
            cursor: pointer;
            user-select: none;
        }
        .type-2:hover {
            color: white;
            background-color: #0005aa;
        }
        .type-box[data-type="Seller"].active {
            background-color: #0005aa; /* Blue for Seller */
        }
        .type-box.active {
            color: white;
        }

    </style>
</head>
<body>
    <!-- <div class="bg-image-container">
        <img src="<?= ROOT ?>/assets/images/backgroundImage.png" alt="Background">
    </div> -->
    <div class="content">
        <?php $this->renderComponent('LandingNavbar'); ?>
        <h1>Hello from Home Page</h1>
    </div>
    <div id="home-section" class="section">
        <h1>Hello, World!</h1>
    </div>

    <div id="about-section" class="section">
        <h1>About Us</h1>
    </div>

    <div id="services-section" class="section">
        <h1>Our Services</h1>
    </div>

    <div id="contact-section" class="section">
        <h1>Contact Us</h1>
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

                <!-- user Type Section -->
                <div class="user-type">
                    <div class="type-1 type-box" data-type="Farmer">FARMER</div>                       
                    <div class="type-2 type-box" data-type="Seller">SELLER</div>
                </div>
                <!-- Hidden input to store selected task type -->
                <input type="hidden" class="userType" name="userType" value="">

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


            const typeBoxes = document.querySelectorAll(".type-box");
            const userTypeInput = document.querySelector(".userType");

            typeBoxes.forEach(box => {
                box.addEventListener("click", () => {
                    // Remove active class from all boxes
                    typeBoxes.forEach(b => b.classList.remove("active"));

                    // Add active class to the selected box
                    box.classList.add("active");

                    // Set the hidden input value to the selected type
                    userTypeInput.value = box.getAttribute("data-type");

                    console.log("Selected User Type:", userTypeInput.value);

                });
            });

            // Password Matching Validation
            const signupForm = document.querySelector("#signupPopup form");
            const passwordInput = signupForm.querySelector('input[name="password"]');
            const confirmPasswordInput = signupForm.querySelector('input[name="confirmPassword"]');

            signupForm.addEventListener("submit", (e) => {
                const password = passwordInput.value;
                const confirmPassword = confirmPasswordInput.value;

                if (password !== confirmPassword) {
                    e.preventDefault(); // Prevent form submission

                    // Set custom error message
                    confirmPasswordInput.setCustomValidity("Passwords do not match. Please try again.");
                    confirmPasswordInput.reportValidity(); // Display the error message
                } else {
                    // Clear the custom validity message
                    confirmPasswordInput.setCustomValidity("");
                }
            });

                // Validate dynamically on input
            confirmPasswordInput.addEventListener("input", () => {
                const password = passwordInput.value;
                const confirmPassword = confirmPasswordInput.value;

                if (password === confirmPassword) {
                    confirmPasswordInput.setCustomValidity("");
                } else {
                    confirmPasswordInput.setCustomValidity("Passwords do not match.");
                }
            });


    </script>
</body>
</html>
