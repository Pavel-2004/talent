
<?php $__env->startSection("css"); ?>
    <link rel="stylesheet" href="css/styles.css"/>
    <link rel="stylesheet" href="css/webfonts/all.css"/>
    <script src="https://kit.fontawesome.com/97cc7f82b3.js" crossorigin="anonymous"></script>

<?php $__env->stopSection(); ?>
<?php $__env->startSection("main-html"); ?>
    <div class="row justify-content-center" style="position: fixed; top: 3%; width: 100%; padding-left: 5px; padding-right: 5px;" id="title">
        <div class="col-5" onclick="result()">
            <div class="row justify-content-center" id="optionOne">
                <div class="col-12 top-selector border">
                    <div class="row justify-content-center border">
                        <div class="col-12 top-inner-selector" style="text-align: center;">
                            <h2 class="smallH2 text-center">Резульати окремих методик</h2>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
        <div class="col-5">
            <div class="row justify-content-center" id="optionTwo">
                <div class="col-12 top-selector-active">
                    <div class="row justify-content-center border">
                        <div class="col-12 top-inner-selector-active" style="text-align: center;">
                            <h2 class="smallH2 text-center">Резульати окремих методик</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center" style="position: fixed; top: 15%; width: 100%; overflow-y: scroll; padding-bottom: 30px;" id="main">
        <div class="col-12">
            <div class="row justify-content-center">
                <p class="text-center gradient-text">ЯКИЙ У ТЕБЕ ТАЛАНТ-ПОТЕНЦІАЛ?</p>
            </div>
            <div class="row justify-content-center" style="padding-left: 20px; padding-right: 20px;">
                <p class="text-center smallH2">
                    КОМПЛЕКСНА ОЦІНКА, ПІДСУМКИ ТА ПОЯСНЕННЯ ВІД ТАЛАНТ-КОУЧА
                </p>
            </div>

            <div class="row justify-content-center" style="margin-top: 15px;">
                <div id="backgroundCircle" class="col-6 circle-embeded" style="">
                    <img src="circle.png" id="image">
                </div>
            </div>

            <div class="row justify-content-center" style="margin-top: 20px;">
                <p class="text-center">
                    ВІДЕО-ІНТЕРПРЕТАЦІЯ
                </p>
            </div>
            <div class="row justify-content-center">
                <p class="text-center smallH2 gradient-text">
                    ТВОГО ТАЛАНТ-ТОТЕНЦІАЛУ
                </p>
            </div>
            <div class="row justify-content-center">
                <div class="col-10 talent-icon">
                    <div class="row justify-content-center">
                        <div class="col-5">
                            <div class="image-icon" style="text-align: center;">
                                <i class="far fa-play-circle fa-4x floating-shadow" style="margin-top: 15px; color: white;"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row justify-content-center">
                                <div class="col-12 text-center">
                                    <i class="fas fa-lock fa-3x"></i>
                                </div>
                            </div>
                            <div class="row justify-content-center" style="margin-top: 10px;">
                                <div class="col-12" style="text-align: center;">
                                    <button class="small-button-orange">ЗАМОВИТИ</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="row justify-content-center" id="nav" style="position: fixed; bottom: 0; width: 100%;">

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("js"); ?>
    <script src="buttonComponent.js"></script>
    <script src="profile.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.mainLayout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\talent\resources\views/profile.blade.php ENDPATH**/ ?>