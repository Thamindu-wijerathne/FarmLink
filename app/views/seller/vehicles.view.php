<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .card {
            background-color: #D6EFD8;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 10px;
            width: 250px;
            display: inline-block;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .card img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .card-title {
            font-size: 18px;
            font-weight: bold;
            color: #1A5319;
            margin-top: 10px;
        }

        .card-text {
            font-size: 14px;
            color: #508D4E;
            margin-top: 5px;
        }

        .card-button {
            background-color: #80AF81;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
            transition: background-color 0.3s ease;
        }

        .card-button:hover {
            background-color: #1A5319;
        }

        .card-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
        }

        .edit-btn {
            background-color: #80AF81;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 8px 12px;
            margin-left: 48%;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s ease;
        }

        .remove-btn {
            background-color: #80AF81;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 8px 12px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s ease;
        }

        .edit-btn:hover, .remove-btn:hover {
            background-color: #1A5319;
        }

        .remove-btn {
            background-color: #508D4E;
        }

        .remove-btn:hover {
            background-color: #1A5319;
        }


    </style>
</head>
<body>
    <div class="content">
        <?php $this->renderComponent('navbar',['activeIndex' => 2]); ?>        
        <?php 
        // Assuming you have a variable $vehicles containing the vehicle data
        if (isset($vehicles) && is_array($vehicles)) {
            foreach ($vehicles as $vehicle) { ?>
                <div class="card">
                    <h2><?php echo htmlspecialchars($vehicle->type); ?></h2>
                    <p><strong>Registration:</strong> <?php echo htmlspecialchars($vehicle->registration); ?></p>
                    <p><strong>Seller NIC:</strong> <?php echo htmlspecialchars($vehicle->seller_NIC); ?></p>
                </div>
            <?php }
        } else {
            echo "<p>No vehicles available.</p>";
        }
        ?>

        <div class="card">
            <img src="vehicle-image.jpg" alt="Vehicle Image">
            <div class="card-title">Car Model</div>
            <div class="card-text">Registration: ABC1234</div>
            <div class="card-buttons">
                <button class="edit-btn">Edit</button>
                <button class="remove-btn">Remove</button>
            </div>
        </div>

        <div class="card">
            <img src="vehicle-image.jpg" alt="Vehicle Image">
            <div class="card-title">Car Model</div>
            <div class="card-text">Registration: ABC1234</div>
            <div class="card-buttons">
                <button class="edit-btn">Edit</button>
                <button class="remove-btn">Remove</button>
            </div>
        </div>

        <div class="card">
            <img src="vehicle-image.jpg" alt="Vehicle Image">
            <div class="card-title">Car Model</div>
            <div class="card-text">Registration: ABC1234</div>
            <div class="card-buttons">
                <button class="edit-btn">Edit</button>
                <button class="remove-btn">Remove</button>
            </div>
        </div>

        <div class="card">
            <img src="vehicle-image.jpg" alt="Vehicle Image">
            <div class="card-title">Car Model</div>
            <div class="card-text">Registration: ABC1234</div>
            <div class="card-buttons">
                <button class="edit-btn">Edit</button>
                <button class="remove-btn">Remove</button>
            </div>
        </div>

        <div class="card">
            <img src="vehicle-image.jpg" alt="Vehicle Image">
            <div class="card-title">Car Model</div>
            <div class="card-text">Registration: ABC1234</div>
            <div class="card-buttons">
                <button class="edit-btn">Edit</button>
                <button class="remove-btn">Remove</button>
            </div>
        </div>

        <div class="card">
            <img src="vehicle-image.jpg" alt="Vehicle Image">
            <div class="card-title">Car Model</div>
            <div class="card-text">Registration: ABC1234</div>
            <div class="card-buttons">
                <button class="edit-btn">Edit</button>
                <button class="remove-btn">Remove</button>
            </div>
        </div>

    </div>
</body>
</html>
