@extends("layouts.mainLayout")

@section("css")
    <link rel="stylesheet" href="css/webfonts/all.css"/>
    <link rel="stylesheet" href="css/styles.css"/>
@endsection()

@section("main-html")
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
@endsection

@section("js")
    <script src="buttonComponent.js"></script>
    <script src="faq.js"></script>
@endsection
