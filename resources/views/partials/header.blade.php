<div class="the-header">
    <header id="header">
        <div class="container">
            <div class="relative-section text-center">
                <a href="{{ url('/') }}" class="toggle-menu"><img src="{{ asset("assets/images/menu.png") }}" alt=""></a>
                <a href="{{ url('/') }}" class="logo"><img src="{{ Voyager::image(setting('site.logo')) }}" alt=""></a>
                <div class="header-right">
                    <a href="{{ url('/') }}" class="toggle-cars relative-section"><img src="{{ asset("assets/images/cart-icon.png") }}" alt=""><span>3</span></a>
                </div>
            </div>
        </div>
    </header>
</div>
<div class="menu-transform"></div>
<div id="menu-main">
    <div class="menu-inner">
        <a href="" class="menu-close"><img src="{{ asset("assets/images/menu-close.png") }}" alt=""></a>
        <div class="languages text-left">
            <a href="" class="current"><img src="{{ asset("assets/images/fr.png") }}" alt=""> Francais</a>
            <ul>
                <li><a href=""><img src="{{ asset("assets/images/fr.png") }}" alt=""> Francais</a></li>
                <li><a href=""><img src="{{ asset("assets/images/en.jpg") }}" alt=""> England</a></li>
            </ul>
        </div>
        <div class="menu-nav">
            {{ menu('main') }}
        </div>
        <a href="{{ route('get.logout') }}" class="logout-link">Log Out</a>
    </div>
</div>
