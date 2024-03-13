<header class="header">
    <section class="flex">

        <a href="{{ route('home') }}" class="logo">Seblak Racing 🥵</a>

        <nav class="navbar">
            <a href="{{ route('home') }}">home</a>
            <a href="{{ route('about') }}">about</a>
            <a href="{{ route('menu') }}">menu</a>
            <a href="{{ route('contact') }}">contact</a>
        </nav>

        <div class="icons">
            <a href="{{ route('ship') }}"><i class="fas fa-shopping-cart"></i><span>(0)</span></a>
            <div id="user-btn" class="fas fa-user"></div>
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>

        <div class="profile">
    @auth
        <p class="name">{{ Auth::user()->name }}</p>
        <div class="flex">
            <a href="#" class="delete-btn" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    @else
        <p class="account"><a href="{{ route('login') }}">login</a></p>
    @endauth
</div>


    </section>
</header>
