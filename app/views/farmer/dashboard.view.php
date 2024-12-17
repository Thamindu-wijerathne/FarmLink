<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            color: #000000;
        }

        .section-1 {
            display: flex;
            justify-content: space-between; /* Distributes equal space between the cards */
            gap: 20px; /* Optional: Adds consistent spacing between cards */
        }

        .card-1, .card-2, .card-3 {
            width: 30%;
            padding: 80px 0px;
            margin-top: 50px;
            border-radius: 10px;
            text-align: center;
            background-color: #508D4E;
            font-size: 50px;
            color: white;
            font-weight: bold;
            transition: transform 0.5s ease; /* Adjust duration and easing as needed */

        }

        .card-1:hover, .card-2:hover, .card-3:hover {
            transform: scale(1.03);
        }

        .card-1 {
            margin-left: 50px;
        }

        .card-2 a {
            text-decoration: none; /* You can remove this if you don't want it applied */
            color: inherit; /* Ensures it uses the parent's color */
            display: inline; /* Default behavior for links */
            height: auto; /* Resets to default */
            line-height: normal; /* Resets to default */
        }

        
        .card-3 {
            margin-right: 50px;
        }


    </style>


<body>
    <div class="content">
        <?php $this->renderComponent('navbar',['activeIndex' => 0]); ?>
    </div>
    <div class="block-1">
        <div class="section-1">
            <div class="card-1">
                Add Product
            </div>
            <div class="card-2">
                <a href="<?= ROOT ?>/farmer/products">View Product</a>
            </div>
            <div class="card-3">
                History
            </div>
        </div>
    </div>
</body>
</html>