@extends("layouts.mainLayout")

@section("css")
    <link rel="stylesheet" href="css/styles.css"/>
    <link rel="stylesheet" href="css/webfonts/all.css"/>

@section("main-html")

    <div class="row justify-content-center" id="blackText">
    </div>
    <div class="row justify-content-center" id="orangeText">

    </div>
    <div class="row justify-content-center" id="smallText">

    </div>
    <div class="row justify-content-center" id="button">

    </div>
    <div class="row justify-content-center" style="padding-top: 15px;">

        <div class="col-6" id="circleNav">

        </div>
    </div>

@endsection

@section("js")
    <script src="buttonComponent.js"></script>
    <script src="aboutTwo.js"></script>
@endsection("js")
