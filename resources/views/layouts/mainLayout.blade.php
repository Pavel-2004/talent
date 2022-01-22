<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @yield("css")
</head>
<body>
    <h3>Hello World</h3>
    <div class="container">
        <div class="col-6">
            @yield("main-html")
        </div>
    </div>
</body>
</html>

    @yield("js")

