<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/home.css">
    <script src="<?= ROOT ?>/assets/js/script.js"></script> <!-- Link to your JS file -->

</head>
<body>
    <div class="bg-image-container">
        <img src="<?= ROOT ?>/assets/images/backgroundImage.png" alt="Background">
    </div>
    <div class="content">
        <?php $this->renderComponent('navbar'); ?>
        <h1>Hello from Home Page</h1>
    </div>
</body>
</html>
