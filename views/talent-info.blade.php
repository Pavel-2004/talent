@extends("layouts.mainLayout")
@section("css")
    <link rel="stylesheet" href="css/styles.css"/>
    <link rel="stylesheet" href="css/webfonts/all.css"/>
    <script src="https://kit.fontawesome.com/97cc7f82b3.js" crossorigin="anonymous"></script>

@endsection
@section("main-html")
    <div class="row justify-content-center" id="blackText">

    </div>
    <!--
    <img src="circle.png" width="300Px" height="300px" alt="">
       -->
    <div class="row justify-content-center" id="orangeText">

    </div>
    <div class="row justify-content-center" style="position: fixed; top: 0; width: 100%; overflow-y: scroll;" id="main">
        <div class="col-12">
            <div class="row justify-content-center" style="margin-top: 10px;">
                <p class="text-center gradient-text">§1. Сенсотворча орієнтація</p>
            </div>
            <div class="row justify-content-center">
                <p class="text-center">#ВИД№1</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-1 align-self-center">
                    <div class="row justify-content-center">
                        <i class="fas fa-arrow-circle-left text-center fa-lg"></i>
                    </div>

                </div>
                <div class="col-6 outBox" id="outsideSqr" onclick="talentInfo()">
                    <div class="row justify-content-center">
                        <div class="col-10 outBox" id="innerSquare">
                            <div class="row justify-content-center" style="margin-top: 10px;">
                                <p class="text-center">У чому полягає?</p>
                            </div>
                            <div class="row justify-content-center">
                                <p class="text-center" style="color: grey;">Ці люди дуже хороші презентори.....</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1 align-self-center">
                    <div class="row justify-content-center">
                        <i class="fas fa-arrow-circle-right text-center fa-lg"></i>
                    </div>

                </div>
            </div>
            <div class="row justify-content-center" id="faq1" style="margin-top: 10px;"></div>
            <div class="row justify-content-center" id="faq2" style="margin-top: 10px;"></div>
            <div class="row justify-content-center" style="margin-top: 20px;">
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

    <div class="row justify-content-center" style="position: fixed; bottom: 0; width: 100%;" id="navBar">
    </div>
@endsection

@section("js")
    <script src="buttonComponent.js"></script>
    <script src="talentInfo.js"></script>
@endsection("js")
