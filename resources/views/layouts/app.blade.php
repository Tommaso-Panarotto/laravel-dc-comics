<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("head-title", "")</title>

</head>

<body>
    <!--header-->
    @include("partial.header")

    <!--contents-->
    <main>
        @yield("main-content")
    </main>

    @vite("resources/js/app.js")
</body>
</html>
