<div class="toggle-menu">
    <div class="toggle-section">
        <a href="#" class="menu-btn">
            <span></span>
        </a>
    </div>
</div>



<?php $home = '/' ?>

<header class="header">
    <div class="container">
        <div class="header__inner">
            <div class="header__logo-wrap">

                @if($home == $_SERVER['REQUEST_URI'])
                    <p class="header__logo">Gagarin</p>
                @else
                    <a href="{{ url('/') }}" class="header__logo-link">
                        Gagarin
                    </a>
                @endif


            </div>

            <nav class="header__nav" itemscope="" itemtype="http://schema.org/SiteNavigationElement">
                <ul class="header__list" itemprop="about" itemscope="" itemtype="http://schema.org/ItemList">

{{--                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ItemList">--}}
{{--                        <a class="header__link" href="{{ url('/') }}" itemprop="url">Главная</a>--}}
{{--                        <meta itemprop="name" content="Главная" />--}}
{{--                    </li>--}}

                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ItemList">
                        @if($home == $_SERVER['REQUEST_URI'])

                        <a class="header__link" href="#about" itemprop="url">О нас</a>
                        @else
                            <a class="header__link" href="{{ url('/#about') }}" itemprop="url">О нас</a>
                        @endif
                        <meta itemprop="name" content="О нас" />
                    </li>

                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ItemList">
                        <a class="header__link" href="#portfolio" itemprop="url">Портфолио</a>
                        <meta itemprop="name" content="Портфолио" />
                    </li>



                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ItemList">
                        @if($home == $_SERVER['REQUEST_URI'])

                            <a class="header__link" href="#price" itemprop="url">Цены</a>
                        @else
                            <a class="header__link" href="{{ url('/#price') }}" itemprop="url">Цены</a>
                        @endif
                        <meta itemprop="name" content="Цены" />
                    </li>





{{--                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ItemList">--}}
{{--                        <a class="header__link" href="{{ url('/razrabotka-sajtov') }}" itemprop="url">Сайты</a>--}}
{{--                        <meta itemprop="name" content="Услуги" />--}}
{{--                    </li>--}}

{{--                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ItemList">--}}
{{--                        <a class="header__link" href="{{ url('/seo') }}" itemprop="url">SEO</a>--}}
{{--                        <meta itemprop="name" content="Услуги" />--}}
{{--                    </li>--}}
{{--                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ItemList">--}}
{{--                        <a class="header__link" href="{{ url('/kontekstnaya-reklama') }}" itemprop="url">Реклама</a>--}}
{{--                        <meta itemprop="name" content="Услуги" />--}}
{{--                    </li>--}}




{{--                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ItemList">--}}
{{--                        <a class="header__link" href="{{ url('/contacts') }}" itemprop="url">Контакты</a>--}}
{{--                        <meta itemprop="name" content="Контакты" />--}}
{{--                    </li>--}}
                </ul>
            </nav>


            <div class="header__social">
                <div class="header__social-wrapper">
                    <a href="#" class="header__item">
                        <i class="fab fa-vk"></i>
                    </a>
                    <a href="#" class="header__item">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="header__item">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </div>

                <a href="#" class="header__social-phone">8(952) 150 70-46</a>


            </div>


        </div>
    </div>
</header>
