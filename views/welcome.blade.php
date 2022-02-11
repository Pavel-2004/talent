@extends("layouts.mainLayout")

@section("css")
    <link rel="stylesheet" href="css/styles.css"/>
{{--    <link rel="stylesheet" href="styles.css"/>--}}
    <link rel="stylesheet" href="css/webfonts/all.css"/>

@section("main-html")

@endsection

<div class="row justify-content-center" id="circle" style="margin-bottom: 7%">

</div>
<div class="row justify-content-center" id="blackText" >
</div>
<div class="row justify-content-center" id="orangeText" style="margin-bottom: 5%">

</div>
<div class="row justify-content-center" id="username" style="margin-bottom: 2%"></div>
<div class="row justify-content-center" id="password" style="margin-bottom: 5%"></div>
<div class="row justify-content-center" id="button">

</div>
@section("js")
    <script src="buttonComponent.js"></script>
    <script src="loginDraw.js"></script>
@endsection("js")
