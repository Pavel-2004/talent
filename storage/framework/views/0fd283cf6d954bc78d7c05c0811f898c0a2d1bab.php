

<?php $__env->startSection("css"); ?>
    <link rel="stylesheet" href="css/styles.css"/>
    <link rel="stylesheet" href="css/webfonts/all.css"/>

<?php $__env->startSection("main-html"); ?>

    <div class="row justify-content-center">
        <img src="../../svgs/arrows-icon.svg" width="150px" alt="earth icon" style="margin-bottom: 7%">
    </div>

    <div class="row justify-content-center blackText-pos" id="blackText">
    </div>
    <div class="row justify-content-center orangeText-pos" id="orangeText" style="margin-bottom: 5%">

    </div>
    <div class="row justify-content-center smallText-pos" id="smallText" style="margin-bottom: 5%">

    </div>
    <div class="row justify-content-center" id="button" style="margin-bottom: 5%">

    </div>
    <div class="row justify-content-center circleNav-pos" style="padding-top: 15px; margin-top: 147px;">

        <div class="col-6" id="circleNav" style="text-align: center;">

        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("js"); ?>
    <script src="buttonComponent.js"></script>
    <script src="aboutThree.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.mainLayout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\talent\resources\views/about-three.blade.php ENDPATH**/ ?>