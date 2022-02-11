@extends("layouts.mainLayout")
@section("css")
    <link rel="stylesheet" href="css/styles.css"/>
    <link rel="stylesheet" href="css/webfonts/all.css"/>
    <script src="https://kit.fontawesome.com/97cc7f82b3.js" crossorigin="anonymous"></script>

@endsection
@section("main-html")
    <div id="title" class="row justify-content-center" style="position: fixed; top: 0; width: 100%;">
        <div class="col-12">
            <div class="row justify-content-center" id="blackText" style="margin-top: 10px;">
                <h2 class="text-center">МАТРИЦЯ САМОРЕАЛІЗАЦІЇ</h2>
            </div>
            <div class="row justify-content-center" id="orangeText" style="padding-left: 30px; padding-right: 30px;">
                <p class="gradient-text text-center">ТВОЇ 4 ТИПИ ОРІЄНТАЦІЙ: ВЕКТОРИ СТРАТЕГІЇ УСПІХУ</p>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-1 align-self-center">
            <div class="row justify-content-center">
                <i class="fas fa-arrow-circle-left text-center fa-lg"></i>
            </div>

        </div>
        <div class="col-10 talent-icon">
            <div class="row justify-content-center">
                <div class="col-5">
                    <div class="image-icon-talent" style="text-align: center;">
                        <div class="row justify-content-center">
                            <div class="col-12 align-self-center">
                                <div class="row justify-content-center" style="margin-top: 30px;">
                                    <i class="fas fa-heart fa-2x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 align-self-center">
                    <div class="row justify-content-center">
                        <p>СЕНСОТВОРЧА ОРІЄНТАЦІЯ</p>
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
    <div id="nav" class="row justify-content-center" style="position: fixed; bottom: 0; width: 100%"></div>
@endsection

@section("js")
    <script src="buttonComponent.js"></script>
    <script src="talent.js"></script>
@endsection("js")
