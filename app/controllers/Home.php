<?php 

// Landing page class
class Home
{
    use Controller;

    public function index()
    {
        $user = new User();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve form data
            $username = $_POST['username'] ?? "no data";
            $email = $_POST['email'] ?? "no data";
            $password = $_POST['password'] ?? "no data";
            $confirmPassword = $_POST['confirmPassword'] ?? "no data";
            $form_type = $_POST['form_type'] ?? NULL;
            $user_type = $_POST['userType'] ?? NULL;

            $data = [
                "user_name" => $username,
                "email" => $email,
                "password" => $password,
                "confirmPassword" => $confirmPassword,
                "form_type" => $form_type,
                "user_type" => $user_type
            ];

            // Log data to console
            echo "<script>console.log(" . json_encode($data) . ");</script>";

            // Handle login
            if ($data['form_type'] == 'login') {
                $userDetail = $user->findUser($data);

                if (!empty($userDetail)) {
                    $_SESSION['user'] = $userDetail[0];
                    echo "<script>console.log(" . json_encode($_SESSION) . ");</script>";

                    // Redirect based on status and role
                    if (isset($_SESSION['user']['status']) && $_SESSION['user']['status'] == 0) {
                        if ($_SESSION['user']["role"] == 'Farmer') {
                            header("Location:" . ROOT . "/Home/addDetailFarmer");
                            exit();
                        } else if ($_SESSION['user']["role"] == 'Seller') {
                            header("Location:" . ROOT . "/Home/addDetailSeller");
                            exit();
                        } else {

                        }
                    } else {
                        switch ($_SESSION['user']["role"]) {
                            case 'Farmer':
                                header("Location:" . ROOT . "/Farmer");
                                break;
                            case 'Admin':
                                header("Location:" . ROOT . "/Admin");
                                break;
                            case 'Seller':
                                header("Location:" . ROOT . "/Seller");
                                break;
                            default:
                                header("Location:" . ROOT . "/Home");
                        }
                        exit();
                    }
                } else {
                    echo "<script>alert('User not found');</script>";
                    header("Location:" . ROOT . "/Home");
                    exit();
                }
            }

            // Handle signup
            elseif ($data['form_type'] == 'signup') {
                if ($password === $confirmPassword) {
                    $user->addUser($data);
                    header("Location:" . ROOT . "/Home");
                    exit();
                } else {
                    echo "<script>alert('Passwords do not match');</script>";
                }
            }
        }

        $this->view('home');
    }

    public function addDetailFarmer()
    {
        $farmer = new Farmer();
        $user = new User();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $data = [
                "nic" => $_POST['nic'],
                "address" => $_POST['address'],
                "telephone" => $_POST['telephone'],
                "about" => $_POST['about'],
                "birthday" => $_POST['birthday'],
                "user_id" => $_POST['user_id']
            ];

            echo "<script>console.log(" . json_encode($data) . ");</script>";
            $farmer->addFarmer($data);
            $user->updateStatus($_SESSION['user']['user_id']);
            header("Location:". ROOT ."/Farmer");
        }
        
        $this->view('addDetailFarmer');
    }


    public function addDetailSeller()
    {
        $seller = new Seller();
        $user = new User();
    
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Main seller data
            $data = [
                "nic" => $_POST['nic'],
                "address" => $_POST['address'],
                "telephone" => $_POST['telephone'],
                "about" => $_POST['about'],
                "birthday" => $_POST['birthday'],
                "user_id" => $_POST['user_id']
            ];
    
            // Handle vehicle data
            if (isset($_POST['vehicle']) && is_array($_POST['vehicle'])) {
                $vehicles = [];
                foreach ($_POST['vehicle'] as $vehicleData) {
                    $vehicles[] = [
                        'type' => $vehicleData['type'],
                        'registration' => $vehicleData['registration']
                    ];
                }
                $data['vehicles'] = $vehicles; // Add vehicles data to the main array
            }
    
            // Debug output to check the data being passed
            echo "<script>console.log(" . json_encode($data) . ");</script>";
    
            // Further processing for storing data in the database could go here
        }
    
        // Load the view (optional)
        $this->view('addDetailSeller');
    }
    
}
