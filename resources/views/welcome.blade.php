@extends("layouts.mainLayout")

@section("css")
    <link rel="stylesheet" href="styles.css"/>
    <link rel="stylesheet" href="css/webfonts/all.css"/>

@section("main-html")
    <h3>AH AH AH</h3>
    <div class="container">
        <div class="row justify-content-center">
            <h2 class="text-center ">Login</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-4" id="userContainer">

            </div>

        </div>
        <div class="row justify-content-center">
            <div class="col-4" id="passwordContainer">

            </div>

        </div>
        <div class="row justify-content-center">
            <div class="col-4" id="button">

            </div>
        </div>

    </div>
@endsection


@section("js")
    <script src="buttonComponent.js"></script>
    <script src="loginDraw.js"></script>
@endsection("js)
