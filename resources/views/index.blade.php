<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow&display=swap" rel="stylesheet">
    @include('includes.headerFiles')
    <link rel="stylesheet" href="{{ asset('css/homePageStyle.css') }}">
    <style>
        .img-background {
            background: url({{ asset('img/HomeBack.jpg') }}) no-repeat center center fixed;
            -webkit-background-size:  100% 100%;
            -moz-background-size:  100% 100%;
            -o-background-size:  100% 100%;
            background-size: 100% 100%;
        }

        @media screen and (max-width: 992px) {
            .img-background {
                background: url({{ asset('img/HomeBack.jpg') }}) no-repeat center center fixed;
                -webkit-background-size:  100% 100%;
                -moz-background-size:  100% 100%;
                -o-background-size:  100% 100%;
                background-size: 100% 100%;
            }
        }

        @media screen and (max-width: 600px) {
            .img-background {
                background: url({{ asset('img/HomeBack.jpg') }}) no-repeat center center fixed;
                -webkit-background-size:  100% 100%;
                -moz-background-size:  100% 100%;
                -o-background-size:  100% 100%;
                background-size: 100% 100%;
            }
        }
    </style>


    <title>Home Page</title>

</head>

<body>

<!-- Navigation -->
@include('includes.homePageNavigation')

<div class="img-background img-fluid">
    <div id="homePage">
        <p class="homePageContent">
            "Not For One - Time Supply, But For a Constant Cooperation ..."
        </p>
    </div>
</div>

@include('includes.footerFiles')

</body>

</html>

