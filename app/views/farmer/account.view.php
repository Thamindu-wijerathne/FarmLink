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
</style>    
<body>
    <div class="content">
        <?php $this->renderComponent('navbar',['activeIndex' => 3]); ?>
        <h1>Hello from Account Page</h1>
    </div>
    <h1>hellow from farmer</h1>
</body>
</html>