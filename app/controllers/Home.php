<?php 

// landing page class
class Home
{
    use Controller;
    public function index()
    {
        $user = new User();
        // echo "<script>console.log('Page loaded');</script>";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'] ?? "no data";
            $email = $_POST['email'] ?? "no data";
            $password = $_POST['password'] ?? "no data";
            $confirmPassword = $_POST['confirmPassword'] ?? "no data";
            $form_type = $_POST['form_type'] ?? NULL;
            $user_type = $_POST['userType'] ?? NULL;

            // echo "<script>console.log('button pressed');</script>";

            $data = [
                "user_name" => $username,
                "email" => $email,
                "password" => $password,
                "confirmPassword" => $confirmPassword,
                "form_type" => $form_type,
                "user_type" => $user_type
            ];

            // Send data to console
            echo "<script>
                console.log('Form Data: " . json_encode($data) . "');
            </script>";

            if ($data['form_type'] == 'login') {
                $userDetail = $user->findUser($data);
                
                // Assuming findUser returns an array, store the first user
                $_SESSION['user'] = $userDetail[0]; // Save the first user in session
                echo "<script>console.log('Session Data: " . json_encode($_SESSION) . "');</script>";
            
                if ($_SESSION['user']["role"] == 'Farmer') {
                    header("Location:". ROOT ."/Farmer");
                    exit();
                } else if ($_SESSION['user']["role"] == 'Admin') {
                    header("Location:". ROOT ."/Admin");
                } else if ($_SESSION['user']["role"] == 'Seller') {
                    header("Location:". ROOT . "/Seller");
                } else {
                    header("Location:". ROOT ."/Home");
                }
            }
            
            
            if ($data['form_type'] == 'signup') {
                // Validate and process the data
                if ($password === $confirmPassword) {
                    // Save the data to the model
                    // Assuming you have a User model
                    // require_once 'models/User.php';
                    $user->addUser($data);
                    // // Redirect or show success message
                    header("Location:". ROOT ."/Home");
                    exit();
                } else {
                    // Handle password mismatch
                    // $errorMessage = "Passwords do not match."; // Set the error message
                }
            }

        }
        $this->view('home');
    }
}


