<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    @include('includes.headerFiles')
    @stack('css')

    <title>@yield('title')</title>

</head>

<body>

<!-- Navigation -->
@include('includes.navigation')

<!-- Page Header -->
@include('includes.pageHeader')


<!-- Main Content -->
@yield('content')

<!-- Footer -->
<footer>
    <div class="container">
        {{--  Social Media Icons  --}}
       {{-- <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <ul class="list-inline text-center">
                    <li class="list-inline-item">
                        <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
                        </a>
                    </li>
                </ul>
                <p class="copyright text-muted">Copyright &copy; Silver Eagle 2019</p>
            </div>
        </div>--}}
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <p class="text-center">Powered By <a href="https://www.facebook.com/mohamedelsayed300" class="text-decoration-none" style="color: #0085a1">Alaraby</a> </p>
            </div>
        </div>
    </div>
</footer>

@include('includes.footerFiles')
@stack('js')
</body>

</html>
