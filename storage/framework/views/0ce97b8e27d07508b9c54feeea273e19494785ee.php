

<?php $__env->startSection("css"); ?>
    <link rel="stylesheet" href="css/webfonts/all.css"/>
    <link rel="stylesheet" href="css/styles.css"/>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("main-html"); ?>

<!-- editing-d -->
    <div class="row justify-content-center"id="earth">
        <img src="../../svgs/earth-icon.svg" alt="earth icon" style="margin-bottom: 7%">
    </div>
    <div class="row justify-content-center blackText-pos" id="blackText">
    </div>
    <div class="row justify-content-center orangeText-pos" id="orangeText" style="margin-bottom: 5%">

    </div>
    <div class="row justify-content-center smallText-pos" id="smallText" style="margin-bottom: 5%">

    </div>
    <div class="row justify-content-center button-pos" id="button" style="margin-bottom: 5%">

    </div>
    <div class="row justify-content-center circleNav-pos" >

        <div class="col-6" id="circleNav" style="text-align: center;">

        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("js"); ?>
    <script src="buttonComponent.js"></script>
    <script src="aboutOne.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.mainLayout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\talent\resources\views/about-one.blade.php ENDPATH**/ ?>