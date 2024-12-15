<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
/* Product Cards Layout */
.product-cards {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 20px;
    margin-top: 20px;
}

.card {
    background-color: #D6EFD8;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    margin: 10px;
    width: 250px;
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

<body>
    <div class="content">
    <?php $this->renderComponent('navbar',['activeIndex' => 1]); ?>

        <h1>Product Page</h1>
        <div class="product-cards">
            <div class="card">
                <img src="https://via.placeholder.com/250" alt="Product Image">
                <div class="card-title">Product 1</div>
                <div class="card-text">Price: $30</div>
                <div class="card-buttons">
                    <button class="edit-btn">Edit</button>
                    <button class="remove-btn">Remove</button>
                </div>
            </div>

            <div class="card">
                <img src="https://via.placeholder.com/250" alt="Product Image">
                <div class="card-title">Product 2</div>
                <div class="card-text">Price: $45</div>
                <div class="card-buttons">
                    <button class="edit-btn">Edit</button>
                    <button class="remove-btn">Remove</button>
                </div>
            </div>

            <div class="card">
                <img src="https://via.placeholder.com/250" alt="Product Image">
                <div class="card-title">Product 3</div>
                <div class="card-text">Price: $60</div>
                <div class="card-buttons">
                    <button class="edit-btn">Edit</button>
                    <button class="remove-btn">Remove</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
