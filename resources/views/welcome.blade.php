@extends("layouts.mainLayout")

@section("css")
    <link rel="stylesheet" href="css/styles.css"/>
    <link rel="stylesheet" href="css/webfonts/all.css"/>

@section("main-html")

@endsection

<div class="row justify-content-center" id="circle">

</div>
<div class="row justify-content-center" id="blackText">
</div>
<div class="row justify-content-center" id="orangeText">

</div>
<div class="row justify-content-center" id="username"></div>
<div class="row justify-content-center" id="password"></div>
<div class="row justify-content-center" id="button">

</div>
@section("js")
    <script src="buttonComponent.js"></script>
    <script src="loginDraw.js"></script>
@endsection("js")
