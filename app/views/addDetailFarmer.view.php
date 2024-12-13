<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Farmer Details</title>
    <style>

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            background-image: url('<?= ROOT ?>/assets/images/detailFarmerPage1.jpg');
            background-size: cover; /* Ensures the image covers the entire viewport */
            background-attachment: fixed; /* Keeps the background fixed when scrolling */
            background-position: center center; /* Centers the image */
            background-repeat: no-repeat; /* Prevents tiling of the background image */
        }

        .content {
            text-align: center;
            margin-top: 20px;
        }
        
        .content h1 {
            color: white;
        }

        .form-container {
            max-width: 650px;
            margin: 50px auto;
            background-color: rgba(255, 255, 255, 0.6); /* Slightly transparent white */
            backdrop-filter: blur(10px); /* Apply blur to the background behind the form */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        label {
            display: block;
            margin: 15px 0 5px;
            font-weight: bold;
        }

        input[type="text"], 
        input[type="date"],
        input[type="tel"], 
        textarea {
            width: 95%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        textarea {
            resize: none;
            height: 100px;
        }

        .btn-submit {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #508D4E;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-submit:hover {
            background-color: #396b39;
        }
    </style>
</head>
<body>
    <div class="content">
    </div>

    <div class="form-container" id="addFarmDetail">
        <form method="POST" action="<?php echo ROOT ?>/Home/addDetailFarmer">
            <h1>Farmer Details</h1>
            
            <label for="address">Address</label>
            <input type="text" id="address" name="address" placeholder="Enter address" required>
            
            <label for="telephone">Telephone Number</label>
            <input type="tel" id="telephone" name="telephone" placeholder="Enter telephone number" required>
            
            <label for="about">About</label>
            <textarea id="about" name="about" placeholder="Write about yourself" required></textarea>
            
            <label for="birthday">Birthday</label>
            <input type="date" id="birthday" name="birthday" required>
            
            <label for="nic">NIC</label>
            <input type="text" id="nic" name="nic" placeholder="Enter NIC" required>

            <input type="hidden" value=<?= $_SESSION['user']['user_id'] ?> id="user_id" name="user_id">
            
            <button type="submit" class="btn-submit">Submit</button>
        </form>
    </div>
</body>
</html>
