<!doctype html>
<html lang="{{ app()->getLocale() }}" >
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=cyrillic" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @yield('meta')
</head>
<body >
<header class="header">
    <transition name="fade">
        <div class="preloader" v-if="loader" v-cloak>
            <div class="el-loading-mask is-fullscreen" style="">
                <div class="el-loading-spinner">
                    <svg viewBox="25 25 50 50" class="circular">
                        <circle cx="50" cy="50" r="20" fill="none" class="path"></circle>
                    </svg>
                </div>
            </div>
        </div>
    </transition>
    <div class="header-top-wrapper">
        <div class="container">
            <div class="header-top">
                <div class="header-top-lang" v-cloak>
                    <div class="actual" v-on:click="lang = !lang"><div class="img" style="background-image:url('/img/rus.jpg')"></div><span  :class="{active : lang}">ru</span></div>
                    <transition name = fadeUp>
                        <ul class="list" v-if="lang" v-cloak>
                            <li class="active"><a href="#">
                                    <div class="img " style="background-image:url('/img/rus.jpg')"></div>
                                    <span>Русский</span>
                                </a>
                            </li>
                            <li><a href="#">
                                    <div class="img" style="background-image:url('/img/ro.png')"></div>
                                    <span>Română</span>
                                </a>
                            </li>
                            <li><a href="#">
                                    <div class="img" style="background-image:url('/img/en.png')"></div>
                                    <span>English</span>
                                </a>
                            </li>
                        </ul>
                    </transition>

                </div>
                <ul class="header-top-info">
                    <li><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 473.806 473.806" style="enable-background:new 0 0 473.806 473.806;" xml:space="preserve" height="15">
                                    <g>
                                        <g>
                                            <path d="M374.456,293.506c-9.7-10.1-21.4-15.5-33.8-15.5c-12.3,0-24.1,5.3-34.2,15.4l-31.6,31.5c-2.6-1.4-5.2-2.7-7.7-4    c-3.6-1.8-7-3.5-9.9-5.3c-29.6-18.8-56.5-43.3-82.3-75c-12.5-15.8-20.9-29.1-27-42.6c8.2-7.5,15.8-15.3,23.2-22.8    c2.8-2.8,5.6-5.7,8.4-8.5c21-21,21-48.2,0-69.2l-27.3-27.3c-3.1-3.1-6.3-6.3-9.3-9.5c-6-6.2-12.3-12.6-18.8-18.6    c-9.7-9.6-21.3-14.7-33.5-14.7s-24,5.1-34,14.7c-0.1,0.1-0.1,0.1-0.2,0.2l-34,34.3c-12.8,12.8-20.1,28.4-21.7,46.5    c-2.4,29.2,6.2,56.4,12.8,74.2c16.2,43.7,40.4,84.2,76.5,127.6c43.8,52.3,96.5,93.6,156.7,122.7c23,10.9,53.7,23.8,88,26    c2.1,0.1,4.3,0.2,6.3,0.2c23.1,0,42.5-8.3,57.7-24.8c0.1-0.2,0.3-0.3,0.4-0.5c5.2-6.3,11.2-12,17.5-18.1c4.3-4.1,8.7-8.4,13-12.9    c9.9-10.3,15.1-22.3,15.1-34.6c0-12.4-5.3-24.3-15.4-34.3L374.456,293.506z M410.256,398.806    C410.156,398.806,410.156,398.906,410.256,398.806c-3.9,4.2-7.9,8-12.2,12.2c-6.5,6.2-13.1,12.7-19.3,20    c-10.1,10.8-22,15.9-37.6,15.9c-1.5,0-3.1,0-4.6-0.1c-29.7-1.9-57.3-13.5-78-23.4c-56.6-27.4-106.3-66.3-147.6-115.6    c-34.1-41.1-56.9-79.1-72-119.9c-9.3-24.9-12.7-44.3-11.2-62.6c1-11.7,5.5-21.4,13.8-29.7l34.1-34.1c4.9-4.6,10.1-7.1,15.2-7.1    c6.3,0,11.4,3.8,14.6,7c0.1,0.1,0.2,0.2,0.3,0.3c6.1,5.7,11.9,11.6,18,17.9c3.1,3.2,6.3,6.4,9.5,9.7l27.3,27.3    c10.6,10.6,10.6,20.4,0,31c-2.9,2.9-5.7,5.8-8.6,8.6c-8.4,8.6-16.4,16.6-25.1,24.4c-0.2,0.2-0.4,0.3-0.5,0.5    c-8.6,8.6-7,17-5.2,22.7c0.1,0.3,0.2,0.6,0.3,0.9c7.1,17.2,17.1,33.4,32.3,52.7l0.1,0.1c27.6,34,56.7,60.5,88.8,80.8    c4.1,2.6,8.3,4.7,12.3,6.7c3.6,1.8,7,3.5,9.9,5.3c0.4,0.2,0.8,0.5,1.2,0.7c3.4,1.7,6.6,2.5,9.9,2.5c8.3,0,13.5-5.2,15.2-6.9    l34.2-34.2c3.4-3.4,8.8-7.5,15.1-7.5c6.2,0,11.3,3.9,14.4,7.3c0.1,0.1,0.1,0.1,0.2,0.2l55.1,55.1    C420.456,377.706,420.456,388.206,410.256,398.806z"/>
                                            <path d="M256.056,112.706c26.2,4.4,50,16.8,69,35.8s31.3,42.8,35.8,69c1.1,6.6,6.8,11.2,13.3,11.2c0.8,0,1.5-0.1,2.3-0.2    c7.4-1.2,12.3-8.2,11.1-15.6c-5.4-31.7-20.4-60.6-43.3-83.5s-51.8-37.9-83.5-43.3c-7.4-1.2-14.3,3.7-15.6,11    S248.656,111.506,256.056,112.706z"/>
                                            <path d="M473.256,209.006c-8.9-52.2-33.5-99.7-71.3-137.5s-85.3-62.4-137.5-71.3c-7.3-1.3-14.2,3.7-15.5,11    c-1.2,7.4,3.7,14.3,11.1,15.6c46.6,7.9,89.1,30,122.9,63.7c33.8,33.8,55.8,76.3,63.7,122.9c1.1,6.6,6.8,11.2,13.3,11.2    c0.8,0,1.5-0.1,2.3-0.2C469.556,223.306,474.556,216.306,473.256,209.006z"/>
                                        </g>
                                    </g>
                                </svg>

                        022 <b>00-00-00</b>, 022 <b>00-00-00</b>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 483.3 483.3" height="15" xml:space="preserve">
                                    <g>
                                        <g>
                                            <path d="M424.3,57.75H59.1c-32.6,0-59.1,26.5-59.1,59.1v249.6c0,32.6,26.5,59.1,59.1,59.1h365.1c32.6,0,59.1-26.5,59.1-59.1    v-249.5C483.4,84.35,456.9,57.75,424.3,57.75z M456.4,366.45c0,17.7-14.4,32.1-32.1,32.1H59.1c-17.7,0-32.1-14.4-32.1-32.1v-249.5    c0-17.7,14.4-32.1,32.1-32.1h365.1c17.7,0,32.1,14.4,32.1,32.1v249.5H456.4z"/>
                                            <path d="M304.8,238.55l118.2-106c5.5-5,6-13.5,1-19.1c-5-5.5-13.5-6-19.1-1l-163,146.3l-31.8-28.4c-0.1-0.1-0.2-0.2-0.2-0.3    c-0.7-0.7-1.4-1.3-2.2-1.9L78.3,112.35c-5.6-5-14.1-4.5-19.1,1.1c-5,5.6-4.5,14.1,1.1,19.1l119.6,106.9L60.8,350.95    c-5.4,5.1-5.7,13.6-0.6,19.1c2.7,2.8,6.3,4.3,9.9,4.3c3.3,0,6.6-1.2,9.2-3.6l120.9-113.1l32.8,29.3c2.6,2.3,5.8,3.4,9,3.4    c3.2,0,6.5-1.2,9-3.5l33.7-30.2l120.2,114.2c2.6,2.5,6,3.7,9.3,3.7c3.6,0,7.1-1.4,9.8-4.2c5.1-5.4,4.9-14-0.5-19.1L304.8,238.55z"/>
                                        </g>
                                    </g>
                                </svg>
                        info@foodchem.md
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 477 477" height="15" xml:space="preserve">
                                        <g>
                                            <g>
                                                <path d="M238.4,0C133,0,47.2,85.8,47.2,191.2c0,12,1.1,24.1,3.4,35.9c0.1,0.7,0.5,2.8,1.3,6.4c2.9,12.9,7.2,25.6,12.8,37.7    c20.6,48.5,65.9,123,165.3,202.8c2.5,2,5.5,3,8.5,3s6-1,8.5-3c99.3-79.8,144.7-154.3,165.3-202.8c5.6-12.1,9.9-24.7,12.8-37.7    c0.8-3.6,1.2-5.7,1.3-6.4c2.2-11.8,3.4-23.9,3.4-35.9C429.6,85.8,343.8,0,238.4,0z M399.6,222.4c0,0.2-0.1,0.4-0.1,0.6    c-0.1,0.5-0.4,2-0.9,4.3c0,0.1,0,0.1,0,0.2c-2.5,11.2-6.2,22.1-11.1,32.6c-0.1,0.1-0.1,0.3-0.2,0.4    c-18.7,44.3-59.7,111.9-148.9,185.6c-89.2-73.7-130.2-141.3-148.9-185.6c-0.1-0.1-0.1-0.3-0.2-0.4c-4.8-10.4-8.5-21.4-11.1-32.6    c0-0.1,0-0.1,0-0.2c-0.6-2.3-0.8-3.8-0.9-4.3c0-0.2-0.1-0.4-0.1-0.7c-2-10.3-3-20.7-3-31.2c0-90.5,73.7-164.2,164.2-164.2    s164.2,73.7,164.2,164.2C402.6,201.7,401.6,212.2,399.6,222.4z"/>
                                                <path d="M238.4,71.9c-66.9,0-121.4,54.5-121.4,121.4s54.5,121.4,121.4,121.4s121.4-54.5,121.4-121.4S305.3,71.9,238.4,71.9z     M238.4,287.7c-52.1,0-94.4-42.4-94.4-94.4s42.4-94.4,94.4-94.4s94.4,42.4,94.4,94.4S290.5,287.7,238.4,287.7z"/>
                                            </g>
                                        </g>
                                </svg>
                        г. Кишинёв, ул. Узинилор 0/2
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <div class="header-middle-wrapper">
        <div class="container">
            <div class="header-middle">
                <a href="#" class="img logo"></a>
                <live-search placeholder="test1" ref="search"  moreres="Показать все результаты" nores="Нет резулитатов"></live-search>
            </div>
        </div>

    </div>

    <div class="header-bottom-wrapper">
        <div class="container">
            <div class="header-bottom">
                <div class="catalog-menu">
                    <div class="catalog-menu-butt" v-on:click="openCat" :class="{'rounded': !openCatalog }">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 231 231" enable-background="new 0 0 231 231" height="17">
                            <g>
                                <rect width="181" x="50" y="164.5" height="33"/>
                                <rect width="181" x="50" y="99.5" height="33"/>
                                <rect width="181" x="50" y="32.5" height="33"/>
                                <rect width="33" y="165.5" height="33"/>
                                <rect width="33" y="99.5" height="33"/>
                                <rect width="33" y="32.5" height="33"/>
                            </g>
                        </svg>
                        <span>Категории</span>
                        <div v-if="unFixCat && width > 500" class="carrot" v-cloak :class="{open : openCatalog}"></div>
                    </div>
                    <transition name="fadeDown">
                        <div class="catalog-menu-list" v-cloak v-if="openCatalog">
                            <ul class="st-lvl">
                                <li class="st-lvl-el deep inPan">
                                    <a href="#" class="st-lvl-el_name"> Продукты</a>
                                    <div class="nd-lvl-block">
                                        <div class="mob-top-panel">
                                            <div class="back">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 400.004 400.004" style="enable-background:new 0 0 400.004 400.004;" xml:space="preserve">
                                                                    <g>
                                                                        <path d="M382.688,182.686H59.116l77.209-77.214c6.764-6.76,6.764-17.726,0-24.485c-6.764-6.764-17.73-6.764-24.484,0L5.073,187.757   c-6.764,6.76-6.764,17.727,0,24.485l106.768,106.775c3.381,3.383,7.812,5.072,12.242,5.072c4.43,0,8.861-1.689,12.242-5.072   c6.764-6.76,6.764-17.726,0-24.484l-77.209-77.218h323.572c9.562,0,17.316-7.753,17.316-17.315   C400.004,190.438,392.251,182.686,382.688,182.686z"/>
                                                                    </g>
                                                            </svg>
                                            </div>
                                            <div class="close-cat">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="15px" height="15px" x="0px" y="0px" viewBox="0 0 212.982 212.982"  xml:space="preserve">
                                                    <g id="Close">
                                                        <path style="fill-rule:evenodd;clip-rule:evenodd;" d="M131.804,106.491l75.936-75.936c6.99-6.99,6.99-18.323,0-25.312   c-6.99-6.99-18.322-6.99-25.312,0l-75.937,75.937L30.554,5.242c-6.99-6.99-18.322-6.99-25.312,0c-6.989,6.99-6.989,18.323,0,25.312   l75.937,75.936L5.242,182.427c-6.989,6.99-6.989,18.323,0,25.312c6.99,6.99,18.322,6.99,25.312,0l75.937-75.937l75.937,75.937   c6.989,6.99,18.322,6.99,25.312,0c6.99-6.99,6.99-18.322,0-25.312L131.804,106.491z"/>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                        <a href="#"  class="nd-lvl_title ">
                                            Загуститель
                                        </a>
                                        <ul class="nd-lvl">
                                            <li  class="nd-lvl-el deep">
                                                <a href="#" class="nd-lvl-el_name">Мальтол</a>
                                                <div class="rd-lvl-block">
                                                    <div class="mob-top-panel">
                                                        <div class="back">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 400.004 400.004" style="enable-background:new 0 0 400.004 400.004;" xml:space="preserve">
                                                                    <g>
                                                                        <path d="M382.688,182.686H59.116l77.209-77.214c6.764-6.76,6.764-17.726,0-24.485c-6.764-6.764-17.73-6.764-24.484,0L5.073,187.757   c-6.764,6.76-6.764,17.727,0,24.485l106.768,106.775c3.381,3.383,7.812,5.072,12.242,5.072c4.43,0,8.861-1.689,12.242-5.072   c6.764-6.76,6.764-17.726,0-24.484l-77.209-77.218h323.572c9.562,0,17.316-7.753,17.316-17.315   C400.004,190.438,392.251,182.686,382.688,182.686z"/>
                                                                    </g>
                                                            </svg>
                                                        </div>
                                                        <div class="close-cat">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="15px" height="15px" x="0px" y="0px" viewBox="0 0 212.982 212.982"  xml:space="preserve">
                                                                <g id="Close">
                                                                    <path style="fill-rule:evenodd;clip-rule:evenodd;" d="M131.804,106.491l75.936-75.936c6.99-6.99,6.99-18.323,0-25.312   c-6.99-6.99-18.322-6.99-25.312,0l-75.937,75.937L30.554,5.242c-6.99-6.99-18.322-6.99-25.312,0c-6.989,6.99-6.989,18.323,0,25.312   l75.937,75.936L5.242,182.427c-6.989,6.99-6.989,18.323,0,25.312c6.99,6.99,18.322,6.99,25.312,0l75.937-75.937l75.937,75.937   c6.989,6.99,18.322,6.99,25.312,0c6.99-6.99,6.99-18.322,0-25.312L131.804,106.491z"/>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="rd-lvl_title">Мальтол</a>
                                                    <ul class="rd-lvl">
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li  class="nd-lvl-el deep">
                                                <a href="#" class="nd-lvl-el_name">Мальтол</a>
                                                <div class="rd-lvl-block">
                                                    <div class="mob-top-panel">
                                                        <div class="back">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 400.004 400.004" style="enable-background:new 0 0 400.004 400.004;" xml:space="preserve">
                                                                    <g>
                                                                        <path d="M382.688,182.686H59.116l77.209-77.214c6.764-6.76,6.764-17.726,0-24.485c-6.764-6.764-17.73-6.764-24.484,0L5.073,187.757   c-6.764,6.76-6.764,17.727,0,24.485l106.768,106.775c3.381,3.383,7.812,5.072,12.242,5.072c4.43,0,8.861-1.689,12.242-5.072   c6.764-6.76,6.764-17.726,0-24.484l-77.209-77.218h323.572c9.562,0,17.316-7.753,17.316-17.315   C400.004,190.438,392.251,182.686,382.688,182.686z"/>
                                                                    </g>
                                                            </svg>
                                                        </div>
                                                        <div class="close-cat">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="15px" height="15px" x="0px" y="0px" viewBox="0 0 212.982 212.982"  xml:space="preserve">
                                                                <g id="Close">
                                                                    <path style="fill-rule:evenodd;clip-rule:evenodd;" d="M131.804,106.491l75.936-75.936c6.99-6.99,6.99-18.323,0-25.312   c-6.99-6.99-18.322-6.99-25.312,0l-75.937,75.937L30.554,5.242c-6.99-6.99-18.322-6.99-25.312,0c-6.989,6.99-6.989,18.323,0,25.312   l75.937,75.936L5.242,182.427c-6.989,6.99-6.989,18.323,0,25.312c6.99,6.99,18.322,6.99,25.312,0l75.937-75.937l75.937,75.937   c6.989,6.99,18.322,6.99,25.312,0c6.99-6.99,6.99-18.322,0-25.312L131.804,106.491z"/>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="rd-lvl_title">Мальтол</a>
                                                    <ul class="rd-lvl">
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li  class="nd-lvl-el deep">
                                                <a href="#" class="nd-lvl-el_name">Мальтол</a>
                                                <div class="rd-lvl-block">
                                                    <div class="mob-top-panel">
                                                        <div class="back">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 400.004 400.004" style="enable-background:new 0 0 400.004 400.004;" xml:space="preserve">
                                                                    <g>
                                                                        <path d="M382.688,182.686H59.116l77.209-77.214c6.764-6.76,6.764-17.726,0-24.485c-6.764-6.764-17.73-6.764-24.484,0L5.073,187.757   c-6.764,6.76-6.764,17.727,0,24.485l106.768,106.775c3.381,3.383,7.812,5.072,12.242,5.072c4.43,0,8.861-1.689,12.242-5.072   c6.764-6.76,6.764-17.726,0-24.484l-77.209-77.218h323.572c9.562,0,17.316-7.753,17.316-17.315   C400.004,190.438,392.251,182.686,382.688,182.686z"/>
                                                                    </g>
                                                            </svg>
                                                        </div>
                                                        <div class="close-cat">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="15px" height="15px" x="0px" y="0px" viewBox="0 0 212.982 212.982"  xml:space="preserve">
                                                                <g id="Close">
                                                                    <path style="fill-rule:evenodd;clip-rule:evenodd;" d="M131.804,106.491l75.936-75.936c6.99-6.99,6.99-18.323,0-25.312   c-6.99-6.99-18.322-6.99-25.312,0l-75.937,75.937L30.554,5.242c-6.99-6.99-18.322-6.99-25.312,0c-6.989,6.99-6.989,18.323,0,25.312   l75.937,75.936L5.242,182.427c-6.989,6.99-6.989,18.323,0,25.312c6.99,6.99,18.322,6.99,25.312,0l75.937-75.937l75.937,75.937   c6.989,6.99,18.322,6.99,25.312,0c6.99-6.99,6.99-18.322,0-25.312L131.804,106.491z"/>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="rd-lvl_title">Мальтол</a>
                                                    <ul class="rd-lvl">
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li  class="nd-lvl-el deep">
                                                <a href="#" class="nd-lvl-el_name">Мальтол</a>
                                                <div class="rd-lvl-block">
                                                    <div class="mob-top-panel">
                                                        <div class="back">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 400.004 400.004" style="enable-background:new 0 0 400.004 400.004;" xml:space="preserve">
                                                                    <g>
                                                                        <path d="M382.688,182.686H59.116l77.209-77.214c6.764-6.76,6.764-17.726,0-24.485c-6.764-6.764-17.73-6.764-24.484,0L5.073,187.757   c-6.764,6.76-6.764,17.727,0,24.485l106.768,106.775c3.381,3.383,7.812,5.072,12.242,5.072c4.43,0,8.861-1.689,12.242-5.072   c6.764-6.76,6.764-17.726,0-24.484l-77.209-77.218h323.572c9.562,0,17.316-7.753,17.316-17.315   C400.004,190.438,392.251,182.686,382.688,182.686z"/>
                                                                    </g>
                                                            </svg>
                                                        </div>
                                                        <div class="close-cat">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="15px" height="15px" x="0px" y="0px" viewBox="0 0 212.982 212.982"  xml:space="preserve">
                                                                <g id="Close">
                                                                    <path style="fill-rule:evenodd;clip-rule:evenodd;" d="M131.804,106.491l75.936-75.936c6.99-6.99,6.99-18.323,0-25.312   c-6.99-6.99-18.322-6.99-25.312,0l-75.937,75.937L30.554,5.242c-6.99-6.99-18.322-6.99-25.312,0c-6.989,6.99-6.989,18.323,0,25.312   l75.937,75.936L5.242,182.427c-6.989,6.99-6.989,18.323,0,25.312c6.99,6.99,18.322,6.99,25.312,0l75.937-75.937l75.937,75.937   c6.989,6.99,18.322,6.99,25.312,0c6.99-6.99,6.99-18.322,0-25.312L131.804,106.491z"/>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="rd-lvl_title">Мальтол</a>
                                                    <ul class="rd-lvl">
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li  class="nd-lvl-el deep">
                                                <a href="#" class="nd-lvl-el_name">Мальтол</a>
                                                <div class="rd-lvl-block">
                                                    <div class="mob-top-panel">
                                                        <div class="back">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 400.004 400.004" style="enable-background:new 0 0 400.004 400.004;" xml:space="preserve">
                                                                    <g>
                                                                        <path d="M382.688,182.686H59.116l77.209-77.214c6.764-6.76,6.764-17.726,0-24.485c-6.764-6.764-17.73-6.764-24.484,0L5.073,187.757   c-6.764,6.76-6.764,17.727,0,24.485l106.768,106.775c3.381,3.383,7.812,5.072,12.242,5.072c4.43,0,8.861-1.689,12.242-5.072   c6.764-6.76,6.764-17.726,0-24.484l-77.209-77.218h323.572c9.562,0,17.316-7.753,17.316-17.315   C400.004,190.438,392.251,182.686,382.688,182.686z"/>
                                                                    </g>
                                                            </svg>
                                                        </div>
                                                        <div class="close-cat">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="15px" height="15px" x="0px" y="0px" viewBox="0 0 212.982 212.982"  xml:space="preserve">
                                                                <g id="Close">
                                                                    <path style="fill-rule:evenodd;clip-rule:evenodd;" d="M131.804,106.491l75.936-75.936c6.99-6.99,6.99-18.323,0-25.312   c-6.99-6.99-18.322-6.99-25.312,0l-75.937,75.937L30.554,5.242c-6.99-6.99-18.322-6.99-25.312,0c-6.989,6.99-6.989,18.323,0,25.312   l75.937,75.936L5.242,182.427c-6.989,6.99-6.989,18.323,0,25.312c6.99,6.99,18.322,6.99,25.312,0l75.937-75.937l75.937,75.937   c6.989,6.99,18.322,6.99,25.312,0c6.99-6.99,6.99-18.322,0-25.312L131.804,106.491z"/>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="rd-lvl_title">Мальтол</a>
                                                    <ul class="rd-lvl">
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li  class="nd-lvl-el deep">
                                                <a href="#" class="nd-lvl-el_name">Мальтол</a>
                                                <div class="rd-lvl-block">
                                                    <div class="mob-top-panel">
                                                        <div class="back">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 400.004 400.004" style="enable-background:new 0 0 400.004 400.004;" xml:space="preserve">
                                                                    <g>
                                                                        <path d="M382.688,182.686H59.116l77.209-77.214c6.764-6.76,6.764-17.726,0-24.485c-6.764-6.764-17.73-6.764-24.484,0L5.073,187.757   c-6.764,6.76-6.764,17.727,0,24.485l106.768,106.775c3.381,3.383,7.812,5.072,12.242,5.072c4.43,0,8.861-1.689,12.242-5.072   c6.764-6.76,6.764-17.726,0-24.484l-77.209-77.218h323.572c9.562,0,17.316-7.753,17.316-17.315   C400.004,190.438,392.251,182.686,382.688,182.686z"/>
                                                                    </g>
                                                            </svg>
                                                        </div>
                                                        <div class="close-cat">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="15px" height="15px" x="0px" y="0px" viewBox="0 0 212.982 212.982"  xml:space="preserve">
                                                                <g id="Close">
                                                                    <path style="fill-rule:evenodd;clip-rule:evenodd;" d="M131.804,106.491l75.936-75.936c6.99-6.99,6.99-18.323,0-25.312   c-6.99-6.99-18.322-6.99-25.312,0l-75.937,75.937L30.554,5.242c-6.99-6.99-18.322-6.99-25.312,0c-6.989,6.99-6.989,18.323,0,25.312   l75.937,75.936L5.242,182.427c-6.989,6.99-6.989,18.323,0,25.312c6.99,6.99,18.322,6.99,25.312,0l75.937-75.937l75.937,75.937   c6.989,6.99,18.322,6.99,25.312,0c6.99-6.99,6.99-18.322,0-25.312L131.804,106.491z"/>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="rd-lvl_title">Мальтол</a>
                                                    <ul class="rd-lvl">
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li  class="nd-lvl-el deep">
                                                <a href="#" class="nd-lvl-el_name">Мальтол</a>
                                                <div class="rd-lvl-block">
                                                    <div class="mob-top-panel">
                                                        <div class="back">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 400.004 400.004" style="enable-background:new 0 0 400.004 400.004;" xml:space="preserve">
                                                                    <g>
                                                                        <path d="M382.688,182.686H59.116l77.209-77.214c6.764-6.76,6.764-17.726,0-24.485c-6.764-6.764-17.73-6.764-24.484,0L5.073,187.757   c-6.764,6.76-6.764,17.727,0,24.485l106.768,106.775c3.381,3.383,7.812,5.072,12.242,5.072c4.43,0,8.861-1.689,12.242-5.072   c6.764-6.76,6.764-17.726,0-24.484l-77.209-77.218h323.572c9.562,0,17.316-7.753,17.316-17.315   C400.004,190.438,392.251,182.686,382.688,182.686z"/>
                                                                    </g>
                                                            </svg>
                                                        </div>
                                                        <div class="close-cat">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="15px" height="15px" x="0px" y="0px" viewBox="0 0 212.982 212.982"  xml:space="preserve">
                                                                <g id="Close">
                                                                    <path style="fill-rule:evenodd;clip-rule:evenodd;" d="M131.804,106.491l75.936-75.936c6.99-6.99,6.99-18.323,0-25.312   c-6.99-6.99-18.322-6.99-25.312,0l-75.937,75.937L30.554,5.242c-6.99-6.99-18.322-6.99-25.312,0c-6.989,6.99-6.989,18.323,0,25.312   l75.937,75.936L5.242,182.427c-6.989,6.99-6.989,18.323,0,25.312c6.99,6.99,18.322,6.99,25.312,0l75.937-75.937l75.937,75.937   c6.989,6.99,18.322,6.99,25.312,0c6.99-6.99,6.99-18.322,0-25.312L131.804,106.491z"/>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="rd-lvl_title">Мальтол</a>
                                                    <ul class="rd-lvl">
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li  class="nd-lvl-el deep">
                                                <a href="#" class="nd-lvl-el_name">Мальтол</a>
                                                <div class="rd-lvl-block">
                                                    <div class="mob-top-panel">
                                                        <div class="back">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 400.004 400.004" style="enable-background:new 0 0 400.004 400.004;" xml:space="preserve">
                                                                    <g>
                                                                        <path d="M382.688,182.686H59.116l77.209-77.214c6.764-6.76,6.764-17.726,0-24.485c-6.764-6.764-17.73-6.764-24.484,0L5.073,187.757   c-6.764,6.76-6.764,17.727,0,24.485l106.768,106.775c3.381,3.383,7.812,5.072,12.242,5.072c4.43,0,8.861-1.689,12.242-5.072   c6.764-6.76,6.764-17.726,0-24.484l-77.209-77.218h323.572c9.562,0,17.316-7.753,17.316-17.315   C400.004,190.438,392.251,182.686,382.688,182.686z"/>
                                                                    </g>
                                                            </svg>
                                                        </div>
                                                        <div class="close-cat">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="15px" height="15px" x="0px" y="0px" viewBox="0 0 212.982 212.982"  xml:space="preserve">
                                                                <g id="Close">
                                                                    <path style="fill-rule:evenodd;clip-rule:evenodd;" d="M131.804,106.491l75.936-75.936c6.99-6.99,6.99-18.323,0-25.312   c-6.99-6.99-18.322-6.99-25.312,0l-75.937,75.937L30.554,5.242c-6.99-6.99-18.322-6.99-25.312,0c-6.989,6.99-6.989,18.323,0,25.312   l75.937,75.936L5.242,182.427c-6.989,6.99-6.989,18.323,0,25.312c6.99,6.99,18.322,6.99,25.312,0l75.937-75.937l75.937,75.937   c6.989,6.99,18.322,6.99,25.312,0c6.99-6.99,6.99-18.322,0-25.312L131.804,106.491z"/>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="rd-lvl_title">Мальтол</a>
                                                    <ul class="rd-lvl">
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li  class="nd-lvl-el deep">
                                                <a href="#" class="nd-lvl-el_name">Мальтол</a>
                                                <div class="rd-lvl-block">
                                                    <div class="mob-top-panel">
                                                        <div class="back">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 400.004 400.004" style="enable-background:new 0 0 400.004 400.004;" xml:space="preserve">
                                                                    <g>
                                                                        <path d="M382.688,182.686H59.116l77.209-77.214c6.764-6.76,6.764-17.726,0-24.485c-6.764-6.764-17.73-6.764-24.484,0L5.073,187.757   c-6.764,6.76-6.764,17.727,0,24.485l106.768,106.775c3.381,3.383,7.812,5.072,12.242,5.072c4.43,0,8.861-1.689,12.242-5.072   c6.764-6.76,6.764-17.726,0-24.484l-77.209-77.218h323.572c9.562,0,17.316-7.753,17.316-17.315   C400.004,190.438,392.251,182.686,382.688,182.686z"/>
                                                                    </g>
                                                            </svg>
                                                        </div>
                                                        <div class="close-cat">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="15px" height="15px" x="0px" y="0px" viewBox="0 0 212.982 212.982"  xml:space="preserve">
                                                                <g id="Close">
                                                                    <path style="fill-rule:evenodd;clip-rule:evenodd;" d="M131.804,106.491l75.936-75.936c6.99-6.99,6.99-18.323,0-25.312   c-6.99-6.99-18.322-6.99-25.312,0l-75.937,75.937L30.554,5.242c-6.99-6.99-18.322-6.99-25.312,0c-6.989,6.99-6.989,18.323,0,25.312   l75.937,75.936L5.242,182.427c-6.989,6.99-6.989,18.323,0,25.312c6.99,6.99,18.322,6.99,25.312,0l75.937-75.937l75.937,75.937   c6.989,6.99,18.322,6.99,25.312,0c6.99-6.99,6.99-18.322,0-25.312L131.804,106.491z"/>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="rd-lvl_title">Мальтол</a>
                                                    <ul class="rd-lvl">
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li  class="nd-lvl-el deep">
                                                <a href="#" class="nd-lvl-el_name">Мальтол</a>
                                                <div class="rd-lvl-block">
                                                    <div class="mob-top-panel">
                                                        <div class="back">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 400.004 400.004" style="enable-background:new 0 0 400.004 400.004;" xml:space="preserve">
                                                                    <g>
                                                                        <path d="M382.688,182.686H59.116l77.209-77.214c6.764-6.76,6.764-17.726,0-24.485c-6.764-6.764-17.73-6.764-24.484,0L5.073,187.757   c-6.764,6.76-6.764,17.727,0,24.485l106.768,106.775c3.381,3.383,7.812,5.072,12.242,5.072c4.43,0,8.861-1.689,12.242-5.072   c6.764-6.76,6.764-17.726,0-24.484l-77.209-77.218h323.572c9.562,0,17.316-7.753,17.316-17.315   C400.004,190.438,392.251,182.686,382.688,182.686z"/>
                                                                    </g>
                                                            </svg>
                                                        </div>
                                                        <div class="close-cat">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="15px" height="15px" x="0px" y="0px" viewBox="0 0 212.982 212.982"  xml:space="preserve">
                                                                <g id="Close">
                                                                    <path style="fill-rule:evenodd;clip-rule:evenodd;" d="M131.804,106.491l75.936-75.936c6.99-6.99,6.99-18.323,0-25.312   c-6.99-6.99-18.322-6.99-25.312,0l-75.937,75.937L30.554,5.242c-6.99-6.99-18.322-6.99-25.312,0c-6.989,6.99-6.989,18.323,0,25.312   l75.937,75.936L5.242,182.427c-6.989,6.99-6.989,18.323,0,25.312c6.99,6.99,18.322,6.99,25.312,0l75.937-75.937l75.937,75.937   c6.989,6.99,18.322,6.99,25.312,0c6.99-6.99,6.99-18.322,0-25.312L131.804,106.491z"/>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="rd-lvl_title">Мальтол</a>
                                                    <ul class="rd-lvl">
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li  class="nd-lvl-el deep">
                                                <a href="#" class="nd-lvl-el_name">Мальтол</a>
                                                <div class="rd-lvl-block">
                                                    <div class="mob-top-panel">
                                                        <div class="back">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 400.004 400.004" style="enable-background:new 0 0 400.004 400.004;" xml:space="preserve">
                                                                    <g>
                                                                        <path d="M382.688,182.686H59.116l77.209-77.214c6.764-6.76,6.764-17.726,0-24.485c-6.764-6.764-17.73-6.764-24.484,0L5.073,187.757   c-6.764,6.76-6.764,17.727,0,24.485l106.768,106.775c3.381,3.383,7.812,5.072,12.242,5.072c4.43,0,8.861-1.689,12.242-5.072   c6.764-6.76,6.764-17.726,0-24.484l-77.209-77.218h323.572c9.562,0,17.316-7.753,17.316-17.315   C400.004,190.438,392.251,182.686,382.688,182.686z"/>
                                                                    </g>
                                                            </svg>
                                                        </div>
                                                        <div class="close-cat">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="15px" height="15px" x="0px" y="0px" viewBox="0 0 212.982 212.982"  xml:space="preserve">
                                                                <g id="Close">
                                                                    <path style="fill-rule:evenodd;clip-rule:evenodd;" d="M131.804,106.491l75.936-75.936c6.99-6.99,6.99-18.323,0-25.312   c-6.99-6.99-18.322-6.99-25.312,0l-75.937,75.937L30.554,5.242c-6.99-6.99-18.322-6.99-25.312,0c-6.989,6.99-6.989,18.323,0,25.312   l75.937,75.936L5.242,182.427c-6.989,6.99-6.989,18.323,0,25.312c6.99,6.99,18.322,6.99,25.312,0l75.937-75.937l75.937,75.937   c6.989,6.99,18.322,6.99,25.312,0c6.99-6.99,6.99-18.322,0-25.312L131.804,106.491z"/>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="rd-lvl_title">Мальтол</a>
                                                    <ul class="rd-lvl">
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li  class="nd-lvl-el deep">
                                                <a href="#" class="nd-lvl-el_name">Мальтол</a>
                                                <div class="rd-lvl-block">
                                                    <div class="mob-top-panel">
                                                        <div class="back">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 400.004 400.004" style="enable-background:new 0 0 400.004 400.004;" xml:space="preserve">
                                                                    <g>
                                                                        <path d="M382.688,182.686H59.116l77.209-77.214c6.764-6.76,6.764-17.726,0-24.485c-6.764-6.764-17.73-6.764-24.484,0L5.073,187.757   c-6.764,6.76-6.764,17.727,0,24.485l106.768,106.775c3.381,3.383,7.812,5.072,12.242,5.072c4.43,0,8.861-1.689,12.242-5.072   c6.764-6.76,6.764-17.726,0-24.484l-77.209-77.218h323.572c9.562,0,17.316-7.753,17.316-17.315   C400.004,190.438,392.251,182.686,382.688,182.686z"/>
                                                                    </g>
                                                            </svg>
                                                        </div>
                                                        <div class="close-cat">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="15px" height="15px" x="0px" y="0px" viewBox="0 0 212.982 212.982"  xml:space="preserve">
                                                                <g id="Close">
                                                                    <path style="fill-rule:evenodd;clip-rule:evenodd;" d="M131.804,106.491l75.936-75.936c6.99-6.99,6.99-18.323,0-25.312   c-6.99-6.99-18.322-6.99-25.312,0l-75.937,75.937L30.554,5.242c-6.99-6.99-18.322-6.99-25.312,0c-6.989,6.99-6.989,18.323,0,25.312   l75.937,75.936L5.242,182.427c-6.989,6.99-6.989,18.323,0,25.312c6.99,6.99,18.322,6.99,25.312,0l75.937-75.937l75.937,75.937   c6.989,6.99,18.322,6.99,25.312,0c6.99-6.99,6.99-18.322,0-25.312L131.804,106.491z"/>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="rd-lvl_title">Мальтол</a>
                                                    <ul class="rd-lvl">
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li  class="nd-lvl-el deep">
                                                <a href="#" class="nd-lvl-el_name">Мальтол</a>
                                                <div class="rd-lvl-block">
                                                    <div class="mob-top-panel">
                                                        <div class="back">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 400.004 400.004" style="enable-background:new 0 0 400.004 400.004;" xml:space="preserve">
                                                                    <g>
                                                                        <path d="M382.688,182.686H59.116l77.209-77.214c6.764-6.76,6.764-17.726,0-24.485c-6.764-6.764-17.73-6.764-24.484,0L5.073,187.757   c-6.764,6.76-6.764,17.727,0,24.485l106.768,106.775c3.381,3.383,7.812,5.072,12.242,5.072c4.43,0,8.861-1.689,12.242-5.072   c6.764-6.76,6.764-17.726,0-24.484l-77.209-77.218h323.572c9.562,0,17.316-7.753,17.316-17.315   C400.004,190.438,392.251,182.686,382.688,182.686z"/>
                                                                    </g>
                                                            </svg>
                                                        </div>
                                                        <div class="close-cat">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="15px" height="15px" x="0px" y="0px" viewBox="0 0 212.982 212.982"  xml:space="preserve">
                                                                <g id="Close">
                                                                    <path style="fill-rule:evenodd;clip-rule:evenodd;" d="M131.804,106.491l75.936-75.936c6.99-6.99,6.99-18.323,0-25.312   c-6.99-6.99-18.322-6.99-25.312,0l-75.937,75.937L30.554,5.242c-6.99-6.99-18.322-6.99-25.312,0c-6.989,6.99-6.989,18.323,0,25.312   l75.937,75.936L5.242,182.427c-6.989,6.99-6.989,18.323,0,25.312c6.99,6.99,18.322,6.99,25.312,0l75.937-75.937l75.937,75.937   c6.989,6.99,18.322,6.99,25.312,0c6.99-6.99,6.99-18.322,0-25.312L131.804,106.491z"/>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="rd-lvl_title">Мальтол</a>
                                                    <ul class="rd-lvl">
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li  class="nd-lvl-el deep">
                                                <a href="#" class="nd-lvl-el_name">Мальтол</a>
                                                <div class="rd-lvl-block">
                                                    <div class="mob-top-panel">
                                                        <div class="back">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 400.004 400.004" style="enable-background:new 0 0 400.004 400.004;" xml:space="preserve">
                                                                    <g>
                                                                        <path d="M382.688,182.686H59.116l77.209-77.214c6.764-6.76,6.764-17.726,0-24.485c-6.764-6.764-17.73-6.764-24.484,0L5.073,187.757   c-6.764,6.76-6.764,17.727,0,24.485l106.768,106.775c3.381,3.383,7.812,5.072,12.242,5.072c4.43,0,8.861-1.689,12.242-5.072   c6.764-6.76,6.764-17.726,0-24.484l-77.209-77.218h323.572c9.562,0,17.316-7.753,17.316-17.315   C400.004,190.438,392.251,182.686,382.688,182.686z"/>
                                                                    </g>
                                                            </svg>
                                                        </div>
                                                        <div class="close-cat">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="15px" height="15px" x="0px" y="0px" viewBox="0 0 212.982 212.982"  xml:space="preserve">
                                                                <g id="Close">
                                                                    <path style="fill-rule:evenodd;clip-rule:evenodd;" d="M131.804,106.491l75.936-75.936c6.99-6.99,6.99-18.323,0-25.312   c-6.99-6.99-18.322-6.99-25.312,0l-75.937,75.937L30.554,5.242c-6.99-6.99-18.322-6.99-25.312,0c-6.989,6.99-6.989,18.323,0,25.312   l75.937,75.936L5.242,182.427c-6.989,6.99-6.989,18.323,0,25.312c6.99,6.99,18.322,6.99,25.312,0l75.937-75.937l75.937,75.937   c6.989,6.99,18.322,6.99,25.312,0c6.99-6.99,6.99-18.322,0-25.312L131.804,106.491z"/>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="rd-lvl_title">Мальтол</a>
                                                    <ul class="rd-lvl">
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li  class="nd-lvl-el deep">
                                                <a href="#" class="nd-lvl-el_name">Мальтол</a>
                                                <div class="rd-lvl-block">
                                                    <div class="mob-top-panel">
                                                        <div class="back">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 400.004 400.004" style="enable-background:new 0 0 400.004 400.004;" xml:space="preserve">
                                                                    <g>
                                                                        <path d="M382.688,182.686H59.116l77.209-77.214c6.764-6.76,6.764-17.726,0-24.485c-6.764-6.764-17.73-6.764-24.484,0L5.073,187.757   c-6.764,6.76-6.764,17.727,0,24.485l106.768,106.775c3.381,3.383,7.812,5.072,12.242,5.072c4.43,0,8.861-1.689,12.242-5.072   c6.764-6.76,6.764-17.726,0-24.484l-77.209-77.218h323.572c9.562,0,17.316-7.753,17.316-17.315   C400.004,190.438,392.251,182.686,382.688,182.686z"/>
                                                                    </g>
                                                            </svg>
                                                        </div>
                                                        <div class="close-cat">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="15px" height="15px" x="0px" y="0px" viewBox="0 0 212.982 212.982"  xml:space="preserve">
                                                                <g id="Close">
                                                                    <path style="fill-rule:evenodd;clip-rule:evenodd;" d="M131.804,106.491l75.936-75.936c6.99-6.99,6.99-18.323,0-25.312   c-6.99-6.99-18.322-6.99-25.312,0l-75.937,75.937L30.554,5.242c-6.99-6.99-18.322-6.99-25.312,0c-6.989,6.99-6.989,18.323,0,25.312   l75.937,75.936L5.242,182.427c-6.989,6.99-6.989,18.323,0,25.312c6.99,6.99,18.322,6.99,25.312,0l75.937-75.937l75.937,75.937   c6.989,6.99,18.322,6.99,25.312,0c6.99-6.99,6.99-18.322,0-25.312L131.804,106.491z"/>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="rd-lvl_title">Мальтол</a>
                                                    <ul class="rd-lvl">
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                    </ul>
                                                </div>
                                            </li>




                                            <li class="nd-lvl-el">
                                                <a href="#" class="nd-lvl-el_name">Глутамат натрия (MSG)</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="st-lvl-el deep">
                                    <a href="#" class="st-lvl-el_name">Загуститель</a>
                                    <div class="nd-lvl-block">
                                        <div class="mob-top-panel">
                                            <div class="back">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 400.004 400.004" style="enable-background:new 0 0 400.004 400.004;" xml:space="preserve">
                                                                    <g>
                                                                        <path d="M382.688,182.686H59.116l77.209-77.214c6.764-6.76,6.764-17.726,0-24.485c-6.764-6.764-17.73-6.764-24.484,0L5.073,187.757   c-6.764,6.76-6.764,17.727,0,24.485l106.768,106.775c3.381,3.383,7.812,5.072,12.242,5.072c4.43,0,8.861-1.689,12.242-5.072   c6.764-6.76,6.764-17.726,0-24.484l-77.209-77.218h323.572c9.562,0,17.316-7.753,17.316-17.315   C400.004,190.438,392.251,182.686,382.688,182.686z"/>
                                                                    </g>
                                                            </svg>
                                            </div>
                                            <div class="close-cat">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="15px" height="15px" x="0px" y="0px" viewBox="0 0 212.982 212.982"  xml:space="preserve">
                                                                <g id="Close">
                                                                    <path style="fill-rule:evenodd;clip-rule:evenodd;" d="M131.804,106.491l75.936-75.936c6.99-6.99,6.99-18.323,0-25.312   c-6.99-6.99-18.322-6.99-25.312,0l-75.937,75.937L30.554,5.242c-6.99-6.99-18.322-6.99-25.312,0c-6.989,6.99-6.989,18.323,0,25.312   l75.937,75.936L5.242,182.427c-6.989,6.99-6.989,18.323,0,25.312c6.99,6.99,18.322,6.99,25.312,0l75.937-75.937l75.937,75.937   c6.989,6.99,18.322,6.99,25.312,0c6.99-6.99,6.99-18.322,0-25.312L131.804,106.491z"/>
                                                                </g>
                                                            </svg>
                                            </div>
                                        </div>
                                        <a href="#"  class="nd-lvl_title ">
                                            Загуститель
                                        </a>
                                        <ul class="nd-lvl">
                                            <li class="nd-lvl-el">
                                                <a href="#" class="nd-lvl-el_name">Глутамат натрия (MSG)</a>
                                            </li>
                                            <li  class="nd-lvl-el deep">
                                                <a href="#" class="nd-lvl-el_name">Мальтол</a>
                                                <div class="rd-lvl-block">
                                                    <div class="mob-top-panel">
                                                        <div class="back">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 400.004 400.004" style="enable-background:new 0 0 400.004 400.004;" xml:space="preserve">
                                                                    <g>
                                                                        <path d="M382.688,182.686H59.116l77.209-77.214c6.764-6.76,6.764-17.726,0-24.485c-6.764-6.764-17.73-6.764-24.484,0L5.073,187.757   c-6.764,6.76-6.764,17.727,0,24.485l106.768,106.775c3.381,3.383,7.812,5.072,12.242,5.072c4.43,0,8.861-1.689,12.242-5.072   c6.764-6.76,6.764-17.726,0-24.484l-77.209-77.218h323.572c9.562,0,17.316-7.753,17.316-17.315   C400.004,190.438,392.251,182.686,382.688,182.686z"/>
                                                                    </g>
                                                            </svg>
                                                        </div>
                                                        <div class="close-cat">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="15px" height="15px" x="0px" y="0px" viewBox="0 0 212.982 212.982"  xml:space="preserve">
                                                                <g id="Close">
                                                                    <path style="fill-rule:evenodd;clip-rule:evenodd;" d="M131.804,106.491l75.936-75.936c6.99-6.99,6.99-18.323,0-25.312   c-6.99-6.99-18.322-6.99-25.312,0l-75.937,75.937L30.554,5.242c-6.99-6.99-18.322-6.99-25.312,0c-6.989,6.99-6.989,18.323,0,25.312   l75.937,75.936L5.242,182.427c-6.989,6.99-6.989,18.323,0,25.312c6.99,6.99,18.322,6.99,25.312,0l75.937-75.937l75.937,75.937   c6.989,6.99,18.322,6.99,25.312,0c6.99-6.99,6.99-18.322,0-25.312L131.804,106.491z"/>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="rd-lvl_title">Мальтол</a>
                                                    <ul class="rd-lvl">
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                        <li class="rd-lvl-el"><a href="#" class="rd-lvl-el_name">Глутамат натрия</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="st-lvl-el"><a href="#" class="st-lvl-el_name">Антиоксиданты</a></li>
                                <li class="st-lvl-el"><a href="#" class="st-lvl-el_name">Подсластители</a></li>
                                <li class="st-lvl-el"><a href="#" class="st-lvl-el_name"> Консерванты</a></li>
                                <li class="st-lvl-el"><a href="#" class="st-lvl-el_name">Подкислитель</a></li>
                            </ul>
                        </div>
                    </transition>

                </div>

                <div class="site-menu">
                    <button class="search-mob_butt">
                        <svg class="open" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 451 451" width="18" height="18" xml:space="preserve">
                                        <g>
                                            <path d="M447.05,428l-109.6-109.6c29.4-33.8,47.2-77.9,47.2-126.1C384.65,86.2,298.35,0,192.35,0C86.25,0,0.05,86.3,0.05,192.3   s86.3,192.3,192.3,192.3c48.2,0,92.3-17.8,126.1-47.2L428.05,447c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4   C452.25,441.8,452.25,433.2,447.05,428z M26.95,192.3c0-91.2,74.2-165.3,165.3-165.3c91.2,0,165.3,74.2,165.3,165.3   s-74.1,165.4-165.3,165.4C101.15,357.7,26.95,283.5,26.95,192.3z"/>
                                        </g>
                </svg>
                        <svg class="close" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="15px" height="15px" x="0px" y="0px" viewBox="0 0 47.971 47.971" xml:space="preserve"><g><path d="M28.228,23.986L47.092,5.122c1.172-1.171,1.172-3.071,0-4.242c-1.172-1.172-3.07-1.172-4.242,0L23.986,19.744L5.121,0.88   c-1.172-1.172-3.07-1.172-4.242,0c-1.172,1.171-1.172,3.071,0,4.242l18.865,18.864L0.879,42.85c-1.172,1.171-1.172,3.071,0,4.242   C1.465,47.677,2.233,47.97,3,47.97s1.535-0.293,2.121-0.879l18.865-18.864L42.85,47.091c0.586,0.586,1.354,0.879,2.121,0.879   s1.535-0.293,2.121-0.879c1.172-1.171,1.172-3.071,0-4.242L28.228,23.986z"></path></g></svg>
                    </button>
                    <div class="header-mob-top">
                        <div class="site-menu-content">
                            <div class="site-menu-content_wrapper">
                                <div class="header-top-lang">
                                    <div class="actual" v-on:click="lang = !lang"><div class="img" style="background-image:url('/img/rus.jpg')"></div><span  :class="{active : lang}">ru</span></div>
                                    <transition name = fadeUp>
                                        <ul class="list" v-if="lang" v-cloak>
                                            <li class="active"><a href="#">
                                                    <div class="img " style="background-image:url('/img/rus.jpg')"></div>
                                                    <span>Русский</span>
                                                </a>
                                            </li>
                                            <li><a href="#">
                                                    <div class="img" style="background-image:url('/img/ro.png')"></div>
                                                    <span>Română</span>
                                                </a>
                                            </li>
                                            <li><a href="#">
                                                    <div class="img" style="background-image:url('/img/en.png')"></div>
                                                    <span>English</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </transition>
                                    <div class="close-menu">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="15px" height="15px" x="0px" y="0px" viewBox="0 0 47.971 47.971" xml:space="preserve" class="close" style="display: block;"><g><path d="M28.228,23.986L47.092,5.122c1.172-1.171,1.172-3.071,0-4.242c-1.172-1.172-3.07-1.172-4.242,0L23.986,19.744L5.121,0.88   c-1.172-1.172-3.07-1.172-4.242,0c-1.172,1.171-1.172,3.071,0,4.242l18.865,18.864L0.879,42.85c-1.172,1.171-1.172,3.071,0,4.242   C1.465,47.677,2.233,47.97,3,47.97s1.535-0.293,2.121-0.879l18.865-18.864L42.85,47.091c0.586,0.586,1.354,0.879,2.121,0.879   s1.535-0.293,2.121-0.879c1.172-1.171,1.172-3.071,0-4.242L28.228,23.986z"></path></g></svg>
                                    </div>
                                </div>
                                <ul class="header-top-info">
                                    <li><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 473.806 473.806" style="enable-background:new 0 0 473.806 473.806;" xml:space="preserve" height="15">
                                    <g>
                                        <g>
                                            <path d="M374.456,293.506c-9.7-10.1-21.4-15.5-33.8-15.5c-12.3,0-24.1,5.3-34.2,15.4l-31.6,31.5c-2.6-1.4-5.2-2.7-7.7-4    c-3.6-1.8-7-3.5-9.9-5.3c-29.6-18.8-56.5-43.3-82.3-75c-12.5-15.8-20.9-29.1-27-42.6c8.2-7.5,15.8-15.3,23.2-22.8    c2.8-2.8,5.6-5.7,8.4-8.5c21-21,21-48.2,0-69.2l-27.3-27.3c-3.1-3.1-6.3-6.3-9.3-9.5c-6-6.2-12.3-12.6-18.8-18.6    c-9.7-9.6-21.3-14.7-33.5-14.7s-24,5.1-34,14.7c-0.1,0.1-0.1,0.1-0.2,0.2l-34,34.3c-12.8,12.8-20.1,28.4-21.7,46.5    c-2.4,29.2,6.2,56.4,12.8,74.2c16.2,43.7,40.4,84.2,76.5,127.6c43.8,52.3,96.5,93.6,156.7,122.7c23,10.9,53.7,23.8,88,26    c2.1,0.1,4.3,0.2,6.3,0.2c23.1,0,42.5-8.3,57.7-24.8c0.1-0.2,0.3-0.3,0.4-0.5c5.2-6.3,11.2-12,17.5-18.1c4.3-4.1,8.7-8.4,13-12.9    c9.9-10.3,15.1-22.3,15.1-34.6c0-12.4-5.3-24.3-15.4-34.3L374.456,293.506z M410.256,398.806    C410.156,398.806,410.156,398.906,410.256,398.806c-3.9,4.2-7.9,8-12.2,12.2c-6.5,6.2-13.1,12.7-19.3,20    c-10.1,10.8-22,15.9-37.6,15.9c-1.5,0-3.1,0-4.6-0.1c-29.7-1.9-57.3-13.5-78-23.4c-56.6-27.4-106.3-66.3-147.6-115.6    c-34.1-41.1-56.9-79.1-72-119.9c-9.3-24.9-12.7-44.3-11.2-62.6c1-11.7,5.5-21.4,13.8-29.7l34.1-34.1c4.9-4.6,10.1-7.1,15.2-7.1    c6.3,0,11.4,3.8,14.6,7c0.1,0.1,0.2,0.2,0.3,0.3c6.1,5.7,11.9,11.6,18,17.9c3.1,3.2,6.3,6.4,9.5,9.7l27.3,27.3    c10.6,10.6,10.6,20.4,0,31c-2.9,2.9-5.7,5.8-8.6,8.6c-8.4,8.6-16.4,16.6-25.1,24.4c-0.2,0.2-0.4,0.3-0.5,0.5    c-8.6,8.6-7,17-5.2,22.7c0.1,0.3,0.2,0.6,0.3,0.9c7.1,17.2,17.1,33.4,32.3,52.7l0.1,0.1c27.6,34,56.7,60.5,88.8,80.8    c4.1,2.6,8.3,4.7,12.3,6.7c3.6,1.8,7,3.5,9.9,5.3c0.4,0.2,0.8,0.5,1.2,0.7c3.4,1.7,6.6,2.5,9.9,2.5c8.3,0,13.5-5.2,15.2-6.9    l34.2-34.2c3.4-3.4,8.8-7.5,15.1-7.5c6.2,0,11.3,3.9,14.4,7.3c0.1,0.1,0.1,0.1,0.2,0.2l55.1,55.1    C420.456,377.706,420.456,388.206,410.256,398.806z"/>
                                            <path d="M256.056,112.706c26.2,4.4,50,16.8,69,35.8s31.3,42.8,35.8,69c1.1,6.6,6.8,11.2,13.3,11.2c0.8,0,1.5-0.1,2.3-0.2    c7.4-1.2,12.3-8.2,11.1-15.6c-5.4-31.7-20.4-60.6-43.3-83.5s-51.8-37.9-83.5-43.3c-7.4-1.2-14.3,3.7-15.6,11    S248.656,111.506,256.056,112.706z"/>
                                            <path d="M473.256,209.006c-8.9-52.2-33.5-99.7-71.3-137.5s-85.3-62.4-137.5-71.3c-7.3-1.3-14.2,3.7-15.5,11    c-1.2,7.4,3.7,14.3,11.1,15.6c46.6,7.9,89.1,30,122.9,63.7c33.8,33.8,55.8,76.3,63.7,122.9c1.1,6.6,6.8,11.2,13.3,11.2    c0.8,0,1.5-0.1,2.3-0.2C469.556,223.306,474.556,216.306,473.256,209.006z"/>
                                        </g>
                                    </g>
                                </svg>

                                        022 <b>00-00-00</b>, 022 <b>00-00-00</b>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 483.3 483.3" height="15" xml:space="preserve">
                                    <g>
                                        <g>
                                            <path d="M424.3,57.75H59.1c-32.6,0-59.1,26.5-59.1,59.1v249.6c0,32.6,26.5,59.1,59.1,59.1h365.1c32.6,0,59.1-26.5,59.1-59.1    v-249.5C483.4,84.35,456.9,57.75,424.3,57.75z M456.4,366.45c0,17.7-14.4,32.1-32.1,32.1H59.1c-17.7,0-32.1-14.4-32.1-32.1v-249.5    c0-17.7,14.4-32.1,32.1-32.1h365.1c17.7,0,32.1,14.4,32.1,32.1v249.5H456.4z"/>
                                            <path d="M304.8,238.55l118.2-106c5.5-5,6-13.5,1-19.1c-5-5.5-13.5-6-19.1-1l-163,146.3l-31.8-28.4c-0.1-0.1-0.2-0.2-0.2-0.3    c-0.7-0.7-1.4-1.3-2.2-1.9L78.3,112.35c-5.6-5-14.1-4.5-19.1,1.1c-5,5.6-4.5,14.1,1.1,19.1l119.6,106.9L60.8,350.95    c-5.4,5.1-5.7,13.6-0.6,19.1c2.7,2.8,6.3,4.3,9.9,4.3c3.3,0,6.6-1.2,9.2-3.6l120.9-113.1l32.8,29.3c2.6,2.3,5.8,3.4,9,3.4    c3.2,0,6.5-1.2,9-3.5l33.7-30.2l120.2,114.2c2.6,2.5,6,3.7,9.3,3.7c3.6,0,7.1-1.4,9.8-4.2c5.1-5.4,4.9-14-0.5-19.1L304.8,238.55z"/>
                                        </g>
                                    </g>
                                </svg>
                                        info@foodchem.md
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 477 477" height="15" xml:space="preserve">
                                        <g>
                                            <g>
                                                <path d="M238.4,0C133,0,47.2,85.8,47.2,191.2c0,12,1.1,24.1,3.4,35.9c0.1,0.7,0.5,2.8,1.3,6.4c2.9,12.9,7.2,25.6,12.8,37.7    c20.6,48.5,65.9,123,165.3,202.8c2.5,2,5.5,3,8.5,3s6-1,8.5-3c99.3-79.8,144.7-154.3,165.3-202.8c5.6-12.1,9.9-24.7,12.8-37.7    c0.8-3.6,1.2-5.7,1.3-6.4c2.2-11.8,3.4-23.9,3.4-35.9C429.6,85.8,343.8,0,238.4,0z M399.6,222.4c0,0.2-0.1,0.4-0.1,0.6    c-0.1,0.5-0.4,2-0.9,4.3c0,0.1,0,0.1,0,0.2c-2.5,11.2-6.2,22.1-11.1,32.6c-0.1,0.1-0.1,0.3-0.2,0.4    c-18.7,44.3-59.7,111.9-148.9,185.6c-89.2-73.7-130.2-141.3-148.9-185.6c-0.1-0.1-0.1-0.3-0.2-0.4c-4.8-10.4-8.5-21.4-11.1-32.6    c0-0.1,0-0.1,0-0.2c-0.6-2.3-0.8-3.8-0.9-4.3c0-0.2-0.1-0.4-0.1-0.7c-2-10.3-3-20.7-3-31.2c0-90.5,73.7-164.2,164.2-164.2    s164.2,73.7,164.2,164.2C402.6,201.7,401.6,212.2,399.6,222.4z"/>
                                                <path d="M238.4,71.9c-66.9,0-121.4,54.5-121.4,121.4s54.5,121.4,121.4,121.4s121.4-54.5,121.4-121.4S305.3,71.9,238.4,71.9z     M238.4,287.7c-52.1,0-94.4-42.4-94.4-94.4s42.4-94.4,94.4-94.4s94.4,42.4,94.4,94.4S290.5,287.7,238.4,287.7z"/>
                                            </g>
                                        </g>
                                </svg>
                                        г. Кишинёв, ул. Узинилор 0/2
                                    </li>
                                </ul>
                                <ul class="site-menu-nav">
                                    <li class="active"><a href="#">Главная</a></li>
                                    <li><a href="#"> О компании</a></li>
                                    <li><a href="#">Лаборатория</a></li>
                                    <li><a href="#">Новости</a></li>
                                    <li><a href="#">Контакты</a></li>
                                </ul>
                            </div>

                        </div>

                    </div>

                    <div class="site-menu-mob_butt">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="content">
    <main>
        @yield('content')
    </main>
</div>
<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="col big">
                <a href="#" class="img logo"></a>
                <div class="phones-cont">
                    <div class="img"></div>
                    <div class="info">
                        <div class="title">Есть вопросы? Мы работаем 24/7!</div>
                        <div class="phones">(022) 00-00-00, (022) 00-00-00</div>
                    </div>
                </div>
                <div class="address-cont">
                    <div class="title">Как нас найти?</div>
                    <div class="text">Republica Moldova, MD-2009, or. Chişinău, Str. Uzinelor 0/2</div>
                </div>
                <ul class="socials">
                    <li><a href="#" class="img"><img src="/img/vk.png" alt=""></a></li>
                    <li><a href="#" class="img"><img src="/img/fb.png" alt=""></a></li>
                    <li><a href="#" class="img"><img src="/img/insta.png" alt=""></a></li>
                    <li><a href="#" class="img"><img src="/img/yt.png" alt=""></a></li>
                    <li><a href="#" class="img"><img src="/img/tw.png" alt=""></a></li>
                    <li><a href="#" class="img"><img src="/img/g+.png" alt=""></a></li>
                </ul>
            </div>
            <div class="col">
                <div class="col-title">О Наc</div>
                <ul class="col-list">
                    <li><a href="#">Дисконтные карты</a></li>
                    <li><a href="#">Контактная информация</a></li>
                    <li><a href="#">Поставщикам</a></li>
                </ul>
            </div>
            <div class="col">
                <div class="col-title">Покупателю</div>
                <ul class="col-list">
                    <li><a href="#">Акции</a></li>
                    <li><a href="#">Доставка</a></li>
                    <li><a href="#">Лаборатория</a></li>
                    <li><a href="#">Информация для потребителя</a></li>
                </ul>
            </div>
            <div class="col">
                <div class="col-title">Контакты</div>
                <ul class="col-list">
                    <li><a href="#">Служба поддержки</a></li>
                    <li><a href="#">Сотрудничество</a></li>
                    <li><a href="#">Оптовые продажи</a></li>
                </ul>
            </div>
        </div>


    </div>
    <div class="footer-bottom">
        <div class="container">
            <span>
                <b>Foodchem International Corporation</b>
                © Copyright 2003-2017.  All rights reserved.
            </span>
            <span>
                <span>
                    <a href="#"><img src="/img/uniweb.png" alt="uniweb"></a>
                </span>
            </span>
        </div>
    </div>
</footer>

<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.6'><\/script>".replace("HOST", location.hostname));
    //]]></script>
<script src="{{asset('js/app.js')}}"></script>
@yield('script')
</body>

</html>
