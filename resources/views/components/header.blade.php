<header id="header" class="header sticky-top">
    <div class="container py-4">
        <nav class="navbar navbar-expand-lg">
            <a href="/" class="navbar-brand">profieltag</a>
            <div id="menuBtn" class="hamburger-lines d-flex d-lg-none">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
            <div class="navbar-nav d-none d-lg-flex">
                <a href="#" class="nav-item nav-link">Over</a>
                <a href="#" class="nav-item nav-link">Hoe het werkt</a>
            </div>
            <div class="navbar-nav ms-auto d-none d-lg-block">
                <a href="{{ route('my-tag') }}" class="tertiary-btn">My Tag</a>
                <a href={{ route('order') }} class="primary-btn">Bestellen</a>
            </div>
        </nav>
    </div>
</header>
