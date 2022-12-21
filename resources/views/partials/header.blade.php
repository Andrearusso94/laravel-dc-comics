<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg   bg-light">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="" class="my-2">

            <div class="collapse navbar-collapse justify-content-end" id="navbarText">
                <ul class="navbar-nav">
                    <li class="nav-item active">

                        <a class="nav-link text-dark" href="{{route('home')}}">home</a>
                    </li>
                    <li class="nav-item active">

                        <a class="nav-link text-dark" href="{{route('products')}}">Comics Products</a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
</header>