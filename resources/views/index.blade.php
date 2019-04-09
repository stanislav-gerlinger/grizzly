@extends('layouts.app')

@section('content')
<section class="index__about-wrapper">
    <div class="container">
        <div class="index__about">
            <div class="index__about-text">
                <h1 class="index__about-title">Grizzzly</h1>
                <p class="index__about-descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis posuere ante, vitae porttitor velit. Donec feugiat commodo metus sit amet malesuada. Vestibulum sit amet lacinia felis. Nunc mollis, leo a laoreet iaculis, erat leo vestibulum urna, quis porta elit velit quis est. Praesent non aliquet massa. Suspendisse potenti. Etiam volutpat aliquet cursus. Mauris sollicitudin tincidunt mi non finibus. Quisque mi erat, pulvinar vel blandit vel, cursus et metus. Phasellus eleifend vitae velit at interdum. Sed scelerisque velit eget cursus ultrices</p>
            </div>
            <div class="index__about-media">
                <img src="/img/3.jpg">
            </div>
        </div>
        <div class="index__about index__about--reverse">
            <div class="index__about-media">
                <img src="/img/5.jpg">
            </div>
            <div class="index__about-text">
                <h1 class="index__about-title">Grizzzly</h1>
                <p class="index__about-descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis posuere ante, vitae porttitor velit. Donec feugiat commodo metus sit amet malesuada. Vestibulum sit amet lacinia felis. Nunc mollis, leo a laoreet iaculis, erat leo vestibulum urna, quis porta elit velit quis est. Praesent non aliquet massa. Suspendisse potenti. Etiam volutpat aliquet cursus. Mauris sollicitudin tincidunt mi non finibus. Quisque mi erat, pulvinar vel blandit vel, cursus et metus. Phasellus eleifend vitae velit at interdum. Sed scelerisque velit eget cursus ultrices</p>
            </div>
        </div>
    </div>
</section>

<section class="barber__list-wrapper">
    <div class="container">
        <h2 class="barber__list-title">Наша команда</h2>
        <div class="barber__list">
            <div class="barber">
                <div class="barber__photo"><img src="/img/tmp.jpg"></div>
                <div class="barber__descr">
                    <h3 class="barber__name">Даша</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis posuere ante, vitae porttitor velit. Donec feugiat commodo metus sit amet malesuada. Vestibulum sit amet lacinia felis</p>
                </div>
            </div>
            <div class="barber">
                <div class="barber__photo"><img src="/img/tmp.jpg"></div>
                <div class="barber__descr">
                    <h3 class="barber__name">Оля</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis posuere ante, vitae porttitor velit. Donec feugiat commodo metus sit amet malesuada. Vestibulum sit amet lacinia felis</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="index__gallery-wrapper">
    <div class="container">
        <h2 class="index__gallery-title">Фото</h2>
        <div class="index__gallery">
            @for($i=1; $i<=9; $i++)
            <a
                class="index__gallery-image"
                href="/img/{{ $i }}.jpg"
                data-fancybox="igallery"
                data-caption="Caption #1"
            >
                <img src="/img/{{ $i }}.jpg" alt="">
            </a>
            @endfor
        </div>
    </div>
</section>
@endsection