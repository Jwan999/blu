<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600&display=swap" rel="stylesheet">

    <link href="/resources/assets/fonts/cairo-webkit/stylesheet.css" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">
    <title>Blu</title>
    <style>
        body {
            font-family: 'Cairo', sans-serif;
        }

        .bg {
            background-image: url("/bg.png");
            background-position: center;

        }


        .footerbg {
            background-image: url("/footer.png");
        }

        .darkgray {
            background-color: #34302B;
        }

        .red {
            background-color: #DB111B;
        }

    </style>
</head>
<body dir="rtl" class="bg-gray-100">
<div id="app">
    <div class="w-full">
        @include('components .navbar')
    </div>

    <div class="w-full w-auto h-screen bg bg-cover bg-no-repeat">
        {{--    welcoming--}}
        @include('components .welcoming')

    </div>

    <div class="lg:p-16 p-6">
        @include('components .whoarewe')
        @include('components .products')
        @include('components .agencies')
        @include('components .services')

        @include('components .reviews')
        @include('components .contact')

    </div>
    {{--footer--}}
    <div class="h-96 w-full footerbg bg-no-repeat bg-cover">

    </div>

</div>

{{--@include('components.navbar')--}}
<script src="js/app.js"></script>
<script>
    let vue = new Vue({
        el: '#app',
        data: {
            isOpen: false
        },
    })
</script>
</body>
</html>