@extends("layouts.mainLayout")


@section("css")
    <link rel="stylesheet" href="css/webfonts/all.css"/>
    <link rel="stylesheet" href="css/styles.css"/>

@endsection()

@section("main-html")
    <div class="row justify-content-center" style="">
        <div class="col-10 col10-bc" style=background-color: #DDE1E7; border-radius: 25px; border: solid; border-color: lightgrey;>
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
@endsection

@section("js")
    <script src="buttonComponent.js"></script>
    <script src="getStarted.js"></script>
@endsection()
