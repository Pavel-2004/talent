

<?php $__env->startSection("css"); ?>
    <link rel="stylesheet" href="css/styles.css"/>
    <link rel="stylesheet" href="css/webfonts/all.css"/>

<?php $__env->startSection("main-html"); ?>

    <div class="row justify-content-center">
        <div class="col-12">
            <div class="row justify-content-center" id="blackText">

            </div>
        </div>

    </div>

    <div class="row justify-content-center" id="orangeText" style="margin-bottom: 5%">

    </div>
    <div class="row justify-content-center" id="circle">
        <img src="circle.png" width="150px" height="150px" alt="">
    </div>
    <div class="row justify-content-center" id="smallText" style="margin-top: 50px;">

    </div>




    <div class="row justify-content-center" style="height: 350px; overflow-y: scroll; margin-bottom: 50px;" onclick="redirect()">
        <div class="col-12">
            <div class="row justify-content-center" id="titleText"></div>
            <div class="row justify-content-center" id="slider"></div>
            <div class="row justify-content-center" id="titleText2"></div>
            <div class="row justify-content-center" id="slider2"></div>
        </div>
    </div>
    <div class="row justify-content-center" style="position: fixed; bottom: 0; width: 100%;" id="navBar">

    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("js"); ?>
    <script src="buttonComponent.js"></script>
    <script src="overview.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.mainLayout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\talent\resources\views/overview.blade.php ENDPATH**/ ?>