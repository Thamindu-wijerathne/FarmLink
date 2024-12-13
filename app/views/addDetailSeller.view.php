<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Seller Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            background-image: url('<?= ROOT ?>/assets/images/detailSellerPage.jpg');
            background-size: cover; 
            background-attachment: fixed;
            background-position: center center;
            background-repeat: no-repeat;
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
            background-color: rgba(255, 255, 255, 0.6);
            backdrop-filter: blur(10px);
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
        textarea,
        input[type="number"] {
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

        .vehicle-container {
            margin-top: 20px;
            border-top: 2px solid #ccc;
            padding-top: 20px;
        }

        .vehicle-container input[type="text"] {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="content">
    </div>

    <div class="form-container" id="addSellerDetail">
        <form method="POST" action="<?php echo ROOT ?>/Home/addDetailSeller">
            <h1>Seller Details</h1>
            
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

            <label for="num_vehicles">Number of Vehicles</label>
            <input type="number" id="num_vehicles" name="num_vehicles" placeholder="Enter number of vehicles" required min="1">

            <div class="vehicle-container" id="vehicleDetails">
                <!-- Vehicle details fields will be dynamically added here -->
            </div>

            <input type="hidden" value=<?= $_SESSION['user']['user_id'] ?> id="user_id" name="user_id">
            
            <button type="submit" class="btn-submit">Submit</button>
        </form>
    </div>

    <script>
        // Handle vehicle details based on number of vehicles
        document.getElementById("num_vehicles").addEventListener("input", function() {
            const numVehicles = parseInt(this.value);
            const vehicleContainer = document.getElementById("vehicleDetails");
            vehicleContainer.innerHTML = ""; // Clear existing vehicle fields

            if (numVehicles > 0) {
                for (let i = 0; i < numVehicles; i++) {
                    // Create vehicle detail input fields
                    const vehicleDiv = document.createElement("div");
                    vehicleDiv.classList.add("vehicle");
                    vehicleDiv.innerHTML = `
                        <label for="vehicle_${i}_type">Vehicle ${i + 1} Type</label>
                        <input type="text" id="vehicle_${i}_type" name="vehicle[${i}][type]" placeholder="Enter vehicle type" required>
                        
                        <label for="vehicle_${i}_registration">Vehicle ${i + 1} Registration Number</label>
                        <input type="text" id="vehicle_${i}_registration" name="vehicle[${i}][registration]" placeholder="Enter registration number" required>
                    `;
                    vehicleContainer.appendChild(vehicleDiv);
                }
            }
        });
    </script>
</body>
</html>
