


<?php $__env->startSection("css"); ?>
    <link rel="stylesheet" href="css/webfonts/all.css"/>
    <link rel="stylesheet" href="css/styles.css"/>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("main-html"); ?>
    <div class="row justify-content-center" style="">
        <div class="col-10" style="background-color: #DDE1E7; border-radius: 25px; border: solid; border-color: lightgrey;">
            <div class="row justify-content-center" style="padding-top: 50px;" id="orangeText">
            </div>
            <div class="row justify-content-center" id="blackText">
            </div>
            <div class="row justify-content-center" id="button" style="margin-top: 50px; margin-bottom: 50px;">

            </div>
        </div>
    </div>

    <div style="position: fixed; bottom: 5%;" class="row justify-content-center">
        <div class="col-11" id="navBar">

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("js"); ?>
    <script src="buttonComponent.js"></script>
    <script src="getStarted.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.mainLayout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\talent\resources\views/get-started.blade.php ENDPATH**/ ?>