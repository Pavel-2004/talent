@extends("layouts.mainLayout")

@section("css")
    <link rel="stylesheet" href="css/styles.css"/>
    <link rel="stylesheet" href="css/webfonts/all.css"/>
@endsection

@section("main-html")
    <div class="row justify-content-center" id="orangeText" style="position: fixed; top: 5%; width: 100%;">

    </div>
    <div class="row justify-content-center" id="main" style="position: fixed; top: 10%; width: 100%; overflow-y: scroll;">
        <div class="col-12">
            <div class="row justify-content-center" onclick="display('view1')">
                <div class="col-12" >
                    <div class="row justify-content-center" id="sliderInfo1">

                    </div>
                    <div class="row justify-content-center" id="slider1">

                    </div>
                    <div class="row justify-content-center display" id="view1">
                        <div class="col-12">
                            <div class="row justify-content-center">
                                <div class="col-5" id="icon1"></div>
                                <div class="col-1"></div>
                                <div class="col-5" id="icon2"></div>
                            </div>
                            <div class="row justify-content-center" style="margin-top: 20px;">

                                <div class="col-5" id="icon3"></div>
                                <div class="col-1"></div>
                                <div class="col-5" id="icon4"></div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="row justify-content-center" onclick="display('view2')">
                <div class="col-12" >
                    <div class="row justify-content-center" id="sliderInfo2">

                    </div>
                    <div class="row justify-content-center" id="slider2">

                    </div>
                    <div class="row justify-content-center display" id="view2">
                        <div class="col-12">
                            <div class="row justify-content-center">
                                <div class="col-5" id="icon5"></div>
                                <div class="col-1"></div>
                                <div class="col-5" id="icon6"></div>
                            </div>
                            <div class="row justify-content-center" style="margin-top: 20px;">

                                <div class="col-5" id="icon7"></div>
                                <div class="col-1"></div>
                                <div class="col-5" id="icon8"></div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="row justify-content-center" style="position: fixed; width: 100%; bottom: 0;">
        <div id="nav">

        </div>
    </div>

@endsection


@section("js")
    <script src="buttonComponent.js"></script>
    <script src="overviewSpecific.js"></script>
    <script>
        console.log("here")
    </script>
@endsection
