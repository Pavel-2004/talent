@extends("layouts.mainLayout")

@section("css")
    <link rel="stylesheet" href="../css/styles.css"/>
    <link rel="stylesheet" href="../css/webfonts/all.css"/>
@endsection

@section("main-html")
    <div class="row justify-content-center" id="orangeText" style="position: fixed; top: 5%; width: 100%;">

    </div>


    <div class="row justify-content-center" id="main" style="position: fixed; width: 100%; top: 10%; overflow-y: scroll; ">
        <div class="col-12">
            <div class="row justify-content-center" id="sliderInfo"></div>
            <div class="row justify-content-center" id="slider">
            </div>
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="row justify-content-center" id="icon"></div>
                </div>
            </div>
            <div class="row justify-content-center" id="button" style="margin-top: 25px;">
            </div>
            <div class="row justify-content-center" style="margin-top: 20px;">
                <div class="col-11" id="whatToDo">
                </div>
            </div>
            <div class="row justify-content-center" style="margin-top: 20px;">

                <div class="col-5" id="method"></div>
                <div class="col-1"></div>
                <div class="col-5" id="result"></div>
            </div>
        </div>
    </div>


    <div class="row justify-content-center" style="position: fixed; width: 100%; bottom: 0;">
        <div id="nav">

        </div>
    </div>

@endsection


@section("js")
    <script src="../buttonComponent.js"></script>
    <script src="../method.js"></script>
    <script>
        console.log("here")
    </script>
@endsection
