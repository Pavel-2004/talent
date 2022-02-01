@extends("layouts.mainLayout")

@section("css")
    <link rel="stylesheet" href="css/webfonts/all.css"/>
    <link rel="stylesheet" href="css/styles.css"/>
@endsection()

@section("main-html")
    <div class="row justify-content-center" id="blackText">

    </div>

    <img src="circle.png" width="500px" height="500px" alt="">

    <div class="row justify-content-center" id="orangeText">

    </div>
    <div class="row justify-content-center" id="faq1">
    </div>

    <div class="row justify-content-center" id="faq2" style="margin-top: 10px;">
    </div>
    <div class="row justify-content-center" style="position: fixed; bottom: 10px;">
        <div class="col-12">
            <div class="row justify-content-center">
                <div class="col-11" id="navBar">

                </div>
            </div>
        </div>
    </div>
@endsection

@section("js")
    <script src="buttonComponent.js"></script>
    <script src="faq.js"></script>
@endsection
