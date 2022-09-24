@include('User.layouts.style')
<nav class="navbar navbar-expand-lg navbar-light shadow-sm">
    <div class="container">

        <form action="#">
            <div class="input-group input-navbar">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
                </div>
                <input type="text" class="form-control" placeholder="Enter keyword." aria-label="Username" aria-describedby="icon-addon1">
            </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">Team</a>
                </li>
                <div class="dropdown">
                    <button class="nav-link dropdown-toggle"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Projects
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Web Development</a>
                        <a class="dropdown-item" href="#">Mobile Application</a>
                        <a class="dropdown-item" href="#">Machine Learning</a>
                    </div>
                </div>
                <li class="nav-item">
                    <a class="nav-link" href="blog.html">Thesis</a>
                </li>

                @if(Route::has('login'))
                    @auth
                        <div style="height: 30px;">
                            <x-app-layout>
                            </x-app-layout>
                        </div>

                    @else
                        <li class="nav-item">
                            <a class="btn btn-primary ml-lg-3" href={{ route('login') }}>Login </a>
                        </li>

                        <li class="nav-item">
                            <a class="btn btn-primary ml-lg-3" href="{{ route('register') }}">Register </a>
                        </li>
                    @endauth
                @endif


            </ul>
        </div> <!-- .navbar-collapse -->
    </div> <!-- .container -->
</nav>

