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

    .add-product-button {
    position: fixed;
    bottom: 40px; /* Distance from the bottom */
    right: 40px; /* Distance from the right */
    width: 80px;
    height: 80px;
    background-color: #80AF81; /* Button background color */
    color: white;
    font-size: 44px;
    font-weight: bold;
    text-align: center;
    line-height: 80px; /* Vertically centers the `+` */
    border-radius: 50%; /* Makes the button circular */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    cursor: pointer;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    z-index: 1000; /* Ensures it stays above other elements */
    }

    .add-product-button:hover {
    transform: scale(1.1); /* Slight zoom effect on hover */
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
    }

    /* Modal Style */
    .modal {
        display: none; /* Hidden by default */
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5); /* Black background with opacity */
        z-index: 2000;
        align-items: center;
        justify-content: center;
    }

    .modal-content {
        background-color: white;
        padding: 20px;
        border-radius: 8px;
        width: 400px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    .modal-content h2 {
        margin-bottom: 15px;
        color: #1A5319;
    }

    .modal-content label {
        display: block;
        margin: 10px 0 5px;
        font-size: 14px;
        color: #508D4E;
    }

    .modal-content input {
        width: 95%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-bottom: 15px;
    }

    .submit-btn {
        background-color: #80AF81;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 10px 15px;
        cursor: pointer;
        font-size: 16px;
    }

    .submit-btn:hover {
        background-color: #1A5319;
    }

    .close {
        float: right;
        font-size: 40px;
        font-weight: bold;
        cursor: pointer;
        color: #333;
    }

    .close:hover {
        color: #1A5319;
    }


</style>

<body>
    <div class="content">
        <?php $this->renderComponent('navbar',['activeIndex' => 1]); ?>
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

            <div class="card">
                <img src="https://via.placeholder.com/250" alt="Product Image">
                <div class="card-title">Product 3</div>
                <div class="card-text">Price: $60</div>
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

        <div class="add-product-button">+</div>
    </div>


    <!-- Add Product Popup -->
    <div id="addProductModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Add Product</h2>
            <form id="addProductForm">
                <label for="productName">Product Name:</label>
                <input type="text" id="productName" name="productName" required>

                <label for="productPrice">Price:</label>
                <input type="number" id="productPrice" name="productPrice" required>

                <label for="productImage">Image URL:</label>
                <input type="file" id="productImage" name="productImage" required>

                <button type="submit" class="submit-btn">Add Product</button>
            </form>
        </div>
    </div>

    <!-- Edit Product Popup -->
    <div id="editProductModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Edit Product</h2>
            <form id="editProductForm">
                <label for="editProductName">Product Name:</label>
                <input type="text" id="editProductName" name="editProductName" required>

                <label for="editProductPrice">Price:</label>
                <input type="number" id="editProductPrice" name="editProductPrice" required>

                <label for="editProductImage">Image URL:</label>
                <input type="file" id="editProductImage" name="editProductImage" required>

                <button type="submit" class="submit-btn">Save Changes</button>
            </form>
        </div>
    </div>

    <script>
    // Get modals and buttons
    const addProductModal = document.getElementById('addProductModal');
    const editProductModal = document.getElementById('editProductModal');
    const addProductButton = document.querySelector('.add-product-button');
    const closeButtons = document.querySelectorAll('.close');
    const editButtons = document.querySelectorAll('.edit-btn');

    // Open Add Product Modal
    addProductButton.addEventListener('click', () => {
        addProductModal.style.display = 'flex';
    });

    // Open Edit Product Modal
    editButtons.forEach((button) => {
        button.addEventListener('click', () => {
            editProductModal.style.display = 'flex';
        });
    });

    // Close Modal
    closeButtons.forEach((button) => {
        button.addEventListener('click', () => {
            addProductModal.style.display = 'none';
            editProductModal.style.display = 'none';
        });
    });

    // Close Modal on Click Outside
    window.addEventListener('click', (event) => {
        if (event.target === addProductModal) {
            addProductModal.style.display = 'none';
        }
        if (event.target === editProductModal) {
            editProductModal.style.display = 'none';
        }
    });

    // Form Submission Handling
    document.getElementById('addProductForm').addEventListener('submit', (event) => {
        event.preventDefault();
        alert('Product Added!');
        addProductModal.style.display = 'none';
    });

    document.getElementById('editProductForm').addEventListener('submit', (event) => {
        event.preventDefault();
        alert('Product Updated!');
        editProductModal.style.display = 'none';
    });
</script>


</body>
</html>
