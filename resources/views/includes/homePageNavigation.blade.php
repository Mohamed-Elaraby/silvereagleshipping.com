<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container-fluid">
        <div>
            {{--            <a class="navbar-brand" href="{{ route('index') }}">SilverEagle</a>--}}
            <img src="{{ asset('img/logo.png') }}" alt="" height="150px" width="150px">
        </div>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('overView') }}">overView</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('whatWeDo') }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        what We Do
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('sub.provisionAdnBonded') }}">Provision & Bonded</a>
                        <a class="dropdown-item" href="{{ route('sub.technicalStores') }}">Technical Stores</a>
                        {{--                        <div class="dropdown-divider"></div>--}}
                        <a class="dropdown-item" href="{{ route('sub.logisticServices') }}">Logistic Services & Owners' Good</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contactUs') }}">contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
