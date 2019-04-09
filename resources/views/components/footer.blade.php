<footer class="footer">
    <div class="container">
        <div class="footer__wrapper">
            <div class="footer__logo">
                <img src="{{ asset('/img/logo.png') }}">
            </div>
            <ul class="footer__menu">
                <li><a href="{{ route('index') }}">Главная</a></li>
                <li><a href="{{ route('about') }}">О нас</a></li>
                <li><a href="{{ route('promotions') }}">Акции</a></li>
                <li><a href="tel:718893">Позвонить нам</a></li>
                <!--<li><a href="">Забронировать время</a></li>-->
            </ul>
        </div>
    </div>
</footer>