<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profieltag - @yield('title')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@100;400;900&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <script src="https://js.stripe.com/v3/" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/kute.js@2.1.2/dist/kute.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    @include('components.header')

    <main class="container">
        @yield('content')
    </main>

    @include('components.footer')

    <div class="background">
        <div class="svg-wrapper">
            <svg viewBox="0 0 574 643">
                <g>
                    <path id="wave1"
                        d="M72.6807 0C72.6807 0 62.6807 10 72.6807 29C82.6807 48 121.681 69 124.181 99.5C126.681 130 81.1807 147.5 67.6807 170C54.1807 192.5 69.1807 223.5 78.6807 239C88.1807 254.5 104.181 261 112.681 290C121.181 319 118.181 340 121.181 357.5C124.181 375 151.681 397.5 140.181 430C128.681 462.5 82.6807 474 51.6807 501.5C20.6807 529 -13.8193 536.5 5.68071 571C25.1807 605.5 53.1806 582 96.6807 592C140.181 602 154.181 640 207.181 642C260.181 644 338.181 574.5 394.681 562C451.181 549.5 574.181 596.5 574.181 596.5V0H72.6807Z"
                        fill="#ECF022" />
                    <path id="wave2" style="visibility: hidden"
                        d="M109.616 41.5C119.731 15.3394 72.68 0 72.68 0L574.18 0.497505V593.523C574.18 593.523 536.397 638.796 477.861 639.293C419.325 639.791 377.286 594.02 295.867 593.025C214.448 592.03 180.924 632.328 120.791 639.791C60.658 647.253 39.9045 636.806 5.31494 598.498C-29.2746 560.19 116.001 486.559 123.452 441.287C130.902 396.014 79.8155 362.183 69.7047 340.293C59.5939 318.403 55.8689 271.14 63.8511 241.787C71.8333 212.434 105.891 204.972 109.616 170.147C113.341 135.321 73.8571 117.368 84.5 91C95.1429 64.6323 99.5 67.6606 109.616 41.5Z"
                        fill="#ECF022" />
                </g>
            </svg>
        </div>
    </div>

    <nav id="mobileNav" class="mobilenav" style="display: none; opacity: 0;">
        <ul class="mobilenav__list">
            <li class="mobilenav__list__item"><a href="#">Over</a></li>
            <li class="mobilenav__list__item"><a href="#">Hoe het werkt</a></li>
            <li class="mobilenav__list__item">
                <a href="{{ route('my-tag') }}">My Tag</a>
            </li>
            <li class="mobilenav__list__item">
                <button class="secondary-btn" type="button">Bestellen</button>
            </li>
        </ul>
    </nav>

    <script>
        const tween = KUTE.fromTo(
            '#wave1', {
                path: '#wave1'
            }, {
                path: '#wave2'
            }, {
                repeat: 999,
                duration: 15000,
                yoyo: true
            }
        ).start();
    </script>
</body>

</html>
