@extends("layouts.mainLayout")

@section("css")
    <link rel="stylesheet" href="css/webfonts/all.css"/>
    <link rel="stylesheet" href="css/styles.css"/>
@endsection()

@section("main-html")
    <div class="row justify-content-center" id="blackText">

    </div>
    <!--
    <img src="circle.png" width="300Px" height="300px" alt="">
       -->
    <div class="row justify-content-center" id="orangeText">

    </div>
    <div class="row justify-content-center" id="faq1">
    </div>

    <div class="row justify-content-center" id="faq2" style="margin-top: 10px;">
    </div>
    <div class="row justify-content-center" id="navBar" style="position: fixed; bottom: 0; width: 100%;"></div>
@endsection

@section("js")
    <script src="buttonComponent.js"></script>
    <script src="faq.js"></script>
@endsection
