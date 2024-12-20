<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield("pageTitle")</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('public/css/style.css') }}">
    </head>

    <body>
        <div class="container d-flex justify-content-center align-items-center flex-column">

            @include("navigation")
                <p>Current Time: {{ date("h:i:s") }}</p>
                @yield("textInfo")
                @yield("contactForm")
                @yield("allContacts")

                @yield("allProducts")
                @yield("addProduct")
                @yield("allProductsAdmin")
                @yield("fiveNewestProducts")

                @yield("loginForm")
                @yield("registerForm")

            @include("footer")


        </div>
    </body>
</html>


