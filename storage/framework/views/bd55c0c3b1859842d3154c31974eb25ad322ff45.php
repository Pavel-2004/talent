

<?php $__env->startSection("css"); ?>
    <link rel="stylesheet" href="css/webfonts/all.css"/>
    <link rel="stylesheet" href="css/styles.css"/>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("main-html"); ?>
    <div class="row justify-content-center blackTextTitle-color" id="blackText">

    </div>
    <!--
    <img src="circle.png" width="300Px" height="300px" alt="">
       -->
    <div class="row justify-content-center orangeText-pos2" id="orangeText">

    </div>
    <div class="row justify-content-center faq1" id="faq1">
    </div>

    <div class="row justify-content-center faq2" id="faq2" style="margin-top: 20px;">
    </div>
    <div class="row justify-content-center" id="navBar" style="position: fixed; bottom: 0; width: 100%;"></div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("js"); ?>
    <script src="buttonComponent.js"></script>
    <script src="faq.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.mainLayout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\talent\resources\views/faq.blade.php ENDPATH**/ ?>