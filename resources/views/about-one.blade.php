@extends("layouts.mainLayout")

@section("css")
    <link rel="stylesheet" href="css/webfonts/all.css"/>
    <link rel="stylesheet" href="css/styles.css"/>
@endsection()
@section("main-html")


    <div class="row justify-content-center">
        <img src="../../svgs/earth-icon.svg" alt="earth icon" style="margin-bottom: 7%">
    </div>
    <div class="row justify-content-center" id="blackText">
    </div>
    <div class="row justify-content-center" id="orangeText" style="margin-bottom: 5%">

    </div>
    <div class="row justify-content-center" id="smallText" style="margin-bottom: 5%">

    </div>
    <div class="row justify-content-center" id="button" style="margin-bottom: 5%">

    </div>
    <div class="row justify-content-center" >

        <div class="col-6" id="circleNav">

        </div>
    </div>

@endsection

@section("js")
    <script src="buttonComponent.js"></script>
    <script src="aboutOne.js"></script>
@endsection()
