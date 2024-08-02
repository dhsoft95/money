<nav id="navbar" class="navbar navbar-fixed-top navbar" data-color="white">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navLogo navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('images/smoney-logo-svg.svg') }}" alt="Smoney Logo">
            </a>
        </div>
        <div id="navbar-collapse" class="collapse navbar-collapse">
            <ul id="w0" class="navbar-nav navbar-right nav">
                <li class="{{ Request::is('/') ? 'active' : '' }}">
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li class="helpcenter {{ Request::is('help') ? 'active' : '' }}">
                    <a href="{{ route('help') }}">Help Center</a>
                </li>
                <li class="{{ Request::is('contact') ? 'active' : '' }}">
                    <a href="{{ route('contact') }}">Contact Us</a>
                </li>
                <li class="get-NayaPay">
                    <a class="get-nayapay-modal text-black" data-toggle="modal" data-target="#myModal" style="color: black;" href="https://play.google.com/store/apps/details?id=com.simbamoney.simba_money.simba_money&hl=en">Download Now</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
