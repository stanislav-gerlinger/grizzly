<header class="header">
    <div class="header__logo-wrapper">
        <a class="header__logo" href="/">
            <img src="{{ asset('/img/logo.png') }}">
        </a>
    </div>

    <div class="container">
        <ul class="header__menu">
            <li><a href="{{ route('index') }}">Главная</a></li>
            <li><a href="{{ route('about') }}">О нас</a></li>
            <li><a href="{{ route('promotions') }}">Акции</a></li>
            <li><a href="tel:718893">Позвонить нам</a></li>
            <!--<li><a href="">Забронировать время</a></li>-->
        </ul>
    </div>
</header>