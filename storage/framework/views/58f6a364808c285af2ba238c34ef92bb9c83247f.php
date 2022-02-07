

<?php $__env->startSection("css"); ?>
    <link rel="stylesheet" href="css/styles.css"/>
    <link rel="stylesheet" href="css/webfonts/all.css"/>
<?php $__env->stopSection(); ?>


<?php $__env->startSection("main-html"); ?>
    <div class="row justify-content-center" style="position: fixed; top: 3%; width: 100%; padding-left: 5px; padding-right: 5px;" id="title">
        <div class="col-5">
            <div class="row justify-content-center" id="optionOne">
                <div class="col-12 top-selector-active border">
                    <div class="row justify-content-center border">
                        <div class="col-12 top-inner-selector-active" style="text-align: center;">
                            <h2 class="smallH2 text-center">Резульати окремих методик</h2>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
        <div class="col-5" onclick="profile()">
            <div class="row justify-content-center" id="optionTwo">
                <div class="col-12">
                    <div class="row justify-content-center top-selector">
                        <div class="col-12 top-inner-selector" style="text-align: center;">
                            <h2 class="smallH2 text-center">Резульати окремих методик</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="main" style="position: fixed; top: 25%; width: 100%; overflow-y: scroll;">
        <div class="row justify-content-center" id="title">
        </div>
        <div class="row justify-content-center" id="talent1">

        </div>
        <div class="row justify-content-center" id="talentTwo" style="margin-top: 20px;">

        </div>
        <div class="row justify-content-center" id="talentThree" style="margin-top: 20px;"></div>
    </div>

    <div class="row justify-content-center" style="position: fixed; width: 100%; bottom: 0;">
        <div id="nav">

        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("js"); ?>
    <script src="buttonComponent.js"></script>
    <script src="results.js"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.mainLayout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\talent\resources\views/results.blade.php ENDPATH**/ ?>