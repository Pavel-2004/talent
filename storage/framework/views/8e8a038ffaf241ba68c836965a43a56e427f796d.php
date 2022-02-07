

<?php $__env->startSection("css"); ?>
    <link rel="stylesheet" href="css/styles.css"/>
    <link rel="stylesheet" href="css/webfonts/all.css"/>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("main-html"); ?>

    <div class="row justify-content-center">
        <img src="../../svgs/lock-icon.svg" alt="earth icon" style="margin-bottom: 7%">
    </div>
    <div class="row justify-content-center" id="blackText">
    </div>
    <div class="row justify-content-center" id="orangeText" style="margin-bottom: 5%">

    </div>
    <div class="row justify-content-center" id="smallText" style="margin-bottom: 5%">

    </div>
    <div class="row justify-content-center" id="button" style="margin-bottom: 5%">

    </div>
    <div class="row justify-content-center" style="padding-top: 15px;">

        <div class="col-6" id="circleNav" style="text-align: center;">

        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("js"); ?>
    <script src="buttonComponent.js"></script>
    <script src="aboutTwo.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.mainLayout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\talent\resources\views/about-two.blade.php ENDPATH**/ ?>