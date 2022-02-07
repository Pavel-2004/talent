<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
    <?php echo $__env->yieldContent("css"); ?>
</head>
<style>
    body{
        background-color: #DDE1E0;
    }
</style>
<body>

    <div class="container">

            <?php echo $__env->yieldContent("main-html"); ?>

    </div>
</body>
</html>

    <?php echo $__env->yieldContent("js"); ?>

<?php /**PATH C:\xampp\htdocs\talent\resources\views/layouts/mainLayout.blade.php ENDPATH**/ ?>