

<?php $__env->startSection("css"); ?>
    <link rel="stylesheet" href="css/styles.css"/>

    <link rel="stylesheet" href="css/webfonts/all.css"/>

<?php $__env->startSection("main-html"); ?>

<?php $__env->stopSection(); ?>

<div class="row justify-content-center" id="circle" style="margin-bottom: 7%">

</div>
<div class="row justify-content-center" id="blackText" >
</div>
<div class="row justify-content-center" id="orangeText" style="margin-bottom: 5%">

</div>
<div class="row justify-content-center" id="username" style="margin-bottom: 2%"></div>
<div class="row justify-content-center" id="password" style="margin-bottom: 5%"></div>
<div class="row justify-content-center" id="button">

</div>
<?php $__env->startSection("js"); ?>
    <script src="buttonComponent.js"></script>
    <script src="loginDraw.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.mainLayout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\talent\resources\views/welcome.blade.php ENDPATH**/ ?>