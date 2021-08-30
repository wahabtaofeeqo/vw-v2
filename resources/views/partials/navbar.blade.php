<nav class="navbar navbar-expand-md navbar-light bg-dark">
    <div class="container py-2">
        <a class="navbar-brand text-white" href="{{ url('/') }}">
            <b>TheValidWallets</b>
        </a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Overview</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="/validate-wallet">Keys</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Doc</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="#apps">Apps</a>
                </li>
            </ul>
        </div>
    </div>
</nav>