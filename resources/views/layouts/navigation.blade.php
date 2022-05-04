<nav x-data="{ open: false }">
    <img src="{{ asset('icons/icon_menu.svg') }}" alt="menu" class="menu_nav">
    <div class="navbar-left">
        <img src="{{ asset('logos/logo_yard_sale.svg') }}" alt="logo" class="logo_nav">

        <ul>
            <li>
                <a href="/">Home</a>
            </li>
            <li>
                <a href="/">About us</a>
            </li>
            <li>
                <a href="/">Properties</a>
            </li>
            <li>
                <a href="/">Agent</a>
            </li>
            <li>
                <a href="/">Contact</a>
            </li>
        </ul>
    </div>
    @if (Route::has('login'))
    <div class="navbar-right">
        <ul>
          @auth
            <li href="{{ url('/dashboard') }}" class="navbar-email"><div>{{ Auth::user()->name }}</div></li>
          @else
            <li class="navbar-email">
              <a href="{{ route('login') }}">Log in</a>
            </li>
            @if (Route::has('register'))
              <li class="navbar-email">
                <a href="{{ route('register') }}">Register</a>
              </li>
              @endif
          @endauth
            <!--li class="navbar-shopping-cart">
                <img src="{{ asset('icons/icon_shopping_cart.svg') }}" alt="shopping cart">
                <div>3</div>
            </li-->
        </ul>
    </div>
    @endif
</nav>
