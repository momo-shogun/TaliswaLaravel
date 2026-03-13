@extends('layouts.app')

@section('title', 'Talisva Website')

@section('body-class', '')

@section('content')
    <!--  NAVBAR (Bootstrap: logo centered on mobile, hamburger right) -->
    <nav class="navbar navbar-expand-lg navbar--custom">
        <div class="container-fluid">
            <!-- Mobile row: spacer + centered logo + toggler -->
            <div class="navbar--mobile-header d-flex d-lg-none align-items-center w-100">
                <span class="navbar-toggler-spacer" aria-hidden="true"></span>
                <a href="{{ url('/') }}" class="navbar-brand navbar--logo navbar--logo-mobile flex-grow-1 text-center p-0">
                    <img src="{{ asset('assets/img/logos/main-logo.png') }}" class="img-fluid" alt="Talisva logo">
                </a>
                <button class="navbar-toggler navbar-toggler--custom" type="button" data-bs-toggle="collapse" data-bs-target="#homeNavbar" aria-controls="homeNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <!-- Collapse: nav links (desktop + mobile menu) -->
            <div class="collapse navbar-collapse navbar-collapse--custom" id="homeNavbar">
                <ul class="navbar-nav navbar-nav--left me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="{{ route('winery-experience') }}" class="nav-link navbar--link" style="position: relative; right: 30px;">Winery Experience</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('collection') }}" class="nav-link navbar--link">Products</a>
                    </li>
                </ul>
                <a href="{{ url('/') }}" class="navbar--logo d-none d-lg-block navbar--logo-center">
                    <img src="{{ asset('assets/img/logos/main-logo.png') }}" class="img-fluid" alt="Talisva logo">
                </a>
                <ul class="navbar-nav navbar-nav--right mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="{{ url('/tanoma-club') }}" class="nav-link navbar--link">Tanoma Club</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('about-us') }}" class="nav-link navbar--link">About US</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--  HERO SECTION  -->
    <header class="hero-banner">
        <img src="{{ asset('assets/img/left-flower.png') }}" alt="" class="img-fluid hero-banner--left-img">
        <img src="{{ asset('assets/img/right-flower.png') }}" alt="" class="img-fluid hero-banner--right-img">
        <img src="{{ asset('assets/img/header-bottom.png') }}" alt="" class="img-fluid hero-banner--bottom-img">
        <img src="{{ asset('assets/img/header-bg.png') }}" alt="" class="img-fluid hero-banner--bg">
        <h1 class="hero-banner-title">Where fruit becomes  <br>
            a journey</h1>
        <p class="hero-banner-desc">From tropical fruit to handcrafted wine</p>
        <img src="{{ asset('assets/img/left-bee-1.png') }}" id="HEADER_BEE_1" alt="" class="hero-banner--left-bee1">
        <img src="{{ asset('assets/img/left-bee-2.png') }}" id="HEADER_BEE_2" alt="" class="hero-banner--left-bee2">
        <img src="{{ asset('assets/img/bird.png') }}" id="HEADER_BIRD" alt="" class="hero-banner--bird">
    </header>

    <!-- FEATURED PRODUCT SECTION  -->
    <section class="feature-section">
        <span class="heading-tag"> <span class="left"></span>our <span class="right"></span></span>
        <h3 class="heading--lg mb-12">Fruit Wines</h3>

        <a href="{{ route('collection') }}#fruit-wines-collection" class="f-card f-card--link mb-10 text-decoration-none">
            <div class="f-card--img">
                <img src="{{ asset('assets/img/product-images/product-1.png') }}" class="img-fluid" alt="">
            </div>
            <div class="f-card--content bg-1">
                <img src="{{ asset('assets/img/logos/golden-logo.png') }}" class="img-fluid f-card--logo" alt="">
                <p>Our wines and melomels are handcrafted adventures- where tradition dances with innovation to awaken
                    your senses and spark your curiosity</p>
                <img src="{{ asset('assets/img/khaki-border.png') }}" class="img-fluid f-card--border" alt="">
            </div>
        </a>

        <a href="{{ route('collection') }}#nomad-collection" class="f-card f-card--link text-decoration-none">
            <div class="f-card--content bg-2">
                <img src="{{ asset('assets/img/logos/nomad-logo.png') }}" class="img-fluid f-card--logo" alt="">
                <p>A delicious category of honey wines (meads) made by fermenting honey with fruit, adding vibrant
                    flavors, sugars, and complexity.</p>
                <img src="{{ asset('assets/img/white-border.png') }}" class="img-fluid f-card--border" alt="">
            </div>
            <div class="f-card--img">
                <img src="{{ asset('assets/img/product-images/product-2.png') }}" class="img-fluid" alt="">
            </div>
        </a>
    </section>

    <!-- ABOUT SECTION  -->
    <section class="about-section">
        <a href="{{ route('brand-experience') }}" style="text-align: center;">
            <img src="{{ asset('assets/img/brand-label.png') }}" class="img-fluid about-section--label" alt="">
        </a>
        <p class="desc">Our wines and melomels are handcrafted adventures- where tradition dances with innovation to
            awaken your senses and spark your curiosity</p>
        <img src="{{ asset('assets/img/green-bg.png') }}" class="img-fluid about-section--bg" alt="">
        <img src="{{ asset('assets/img/brand-bg.png') }}" class="img-fluid about-section--creative" alt="">
    </section>

    <!-- CONTENT & BANNERS SECTIONS  -->
    <section class="info-boxes info-boxes-bg-1">
        //infinite marquee loop 
        <marquee behavior="" direction="" style="animation-duration: 10s; animation-iteration-count: infinite;">
            <div>
                <p><span></span>From Kikkeri Farms, Authentic wines with a wild spirit</p>
                <p><span></span>From Kikkeri Farms, Authentic wines with a wild spirit</p>
                <p><span></span>From Kikkeri Farms, Authentic wines with a wild spirit</p>
                <p><span></span>From Kikkeri Farms, Authentic wines with a wild spirit</p>
                <p><span></span>From Kikkeri Farms, Authentic wines with a wild spirit</p>
            </div>
        </marquee>

        <div class="info-boxes--content-box" style="background-color: var(--orange-1);">
            <h4>Winery Experience</h4>
            <p>At Talisva, wine goes beyond the glass—it becomes an experience. Whether you’re
newly curious about fruit wines or a devoted connoisseur, we offer something truly
memorable. Enjoy a guided tasting, wander through our areca farm and winery to
witness the craft behind each bottle, or simply relax in nature with a glass by your
side. Every visit invites you into a world of Alavor, artistry, and exploration.</p>
            <a href="{{ route('winery-experience') }}" class="primary-btn">Explore</a>
        </div>
    </section>

    <section class="info-boxes info-boxes-bg-2">
        <div class="info-boxes--content-box">
            <h4><a href="{{ route('tanoma-club') }}" class="info-boxes--content-box--title-link">Tanoma Club</a></h4>
            <p class="info-boxes--content-box--title-desc">
            Deals, Subscriptions, Rewards and much more!
            </p>
            <img src="{{ asset('assets/img/house.png') }}" class="img-fluid info-boxes--content-box--img" alt="">
            <button type="button" class="primary-btn" id="tanoma-join-now-btn">Join Now</button>
        </div>
    </section>

    <!-- FOOTER  -->
    <footer class="m-footer">
        <section class="container">
            <div class="row">
                <div class="col-4">
                    <img src="{{ asset('assets/img/logos/footer-logo.png') }}" class="img-fluid m-footer--logo" alt="">
                    <p>
                        <span style="text-transform: uppercase;display: block;">
                            Kikkeri Farm Food &amp; Beverages Pvt. Ltd.
                        </span>
                        Talisva Winery, Thirthahalli, Karnataka India</br>
                        info@talisva.com</br>
                        <a href="https://wa.me/919686369899" class="m-footer--link" aria-label="WhatsApp Talisva Winery">
                            Talisva Winery - +91 96863 69899 (WhatsApp)
                        </a>
                    </p>

                    <ul class="m-footer--social-links mt-3">
                        <li><a href="https://www.facebook.com/talisvawinery?mibextid=wwXIfr" class="m-footer--social-link" target="_blank" rel="noopener noreferrer" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="https://www.instagram.com/talisva_winery?igsh=M2NsOHNqbGtpc3Vy" class="m-footer--social-link" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/talisva-winery/" class="m-footer--social-link" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
                <div class="col-8">
                    <div class="row">
                        <div class="col-3">
                            <h5 class="m-footer--title">Wines <span></span></h5>
                            <ul class="m-footer--links">
                                <li><a href="{{ route('collection') }}#fruit-wines-collection" class="m-footer--link" style="text-transform: uppercase;">Talisva Fruit wines</a></li>
                                <li><a href="{{ route('collection') }}#nomad-collection" class="m-footer--link" style="text-transform: uppercase;">Nomad</a></li>
                            </ul>
                        </div>
                        <div class="col-3">
                            <h5 class="m-footer--title">About<span></span></h5>
                            <ul class="m-footer--links">
                                <li><a href="{{ route('about-us') }}" class="m-footer--link">Our Family</a></li>
                                <li><a href="{{ route('about-us') }}" class="m-footer--link">Practice</a></li>
                                <li><a href="{{ route('about-us') }}" class="m-footer--link">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-3">
                            <h5 class="m-footer--title">Experience<span></span></h5>
                            <ul class="m-footer--links">
                                <li><a href="{{ route('winery-experience') }}" class="m-footer--link">Tours</a></li>
                            </ul>
                        </div>
                        <div class="col-3">
                            <h5 class="m-footer--title">Tanoma Club<span></span></h5>
                            <ul class="m-footer--links">
                                <li><a href="{{ route('tanoma-club') }}" class="m-footer--link">Subcriptions</a></li>
                                <li><a href="{{ route('tanoma-club') }}" class="m-footer--link">Rewards</a></li>
                                <li><a href="{{ route('tanoma-club') }}" class="m-footer--link">Benefits</a></li>
                            </ul>
                        </div>
                        <div class="col-12">
                            <label class="mt-10">Join our list and get notified when its wine o'clock</label>
                            <p id="subscribe-message" class="mt-2 small" style="display: none;"></p>
                            <form id="subscribe-form" action="{{ route('subscribe') }}" method="POST" class="m-footer--input-box mt-2">
                                @csrf
                                <input type="email" name="email" id="subscribe-email" placeholder="Enter your email" required>
                                <button type="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>

    <!-- Subscribe success modal -->
    <div id="subscribe-success-modal" class="subscribe-modal" role="dialog" aria-modal="true" aria-labelledby="subscribe-success-title" style="display: none;">
        <div class="subscribe-modal__backdrop"></div>
        <div class="subscribe-modal__box">
            <h3 id="subscribe-success-title" class="subscribe-modal__title">Subscribed</h3>
            <p class="subscribe-modal__text">Thanks! You are subscribed.</p>
            <button type="button" class="subscribe-modal__close" aria-label="Close">OK</button>
        </div>
    </div>

    <!-- Tanoma Club Join modal -->
    <div id="tanoma-join-modal" class="subscribe-modal tanoma-modal" role="dialog" aria-modal="true" aria-labelledby="tanoma-join-title" style="display: none;">
        <div class="subscribe-modal__backdrop" data-close="tanoma-join-modal"></div>
        <div class="tanoma-modal__box">
            <div class="tanoma-modal__header">
                <h3 id="tanoma-join-title" class="tanoma-modal__title">Join Tanoma Club</h3>
                <p class="tanoma-modal__subtitle">Be the first to know about events, offers and more.</p>
            </div>
            <p id="tanoma-join-message" class="tanoma-modal__message" style="display: none;"></p>
            <form id="tanoma-join-form" class="tanoma-modal__form">
                @csrf
                <div class="tanoma-modal__field">
                    <input type="text" name="name" id="tanoma-join-name" placeholder="Your name" required class="tanoma-modal__input">
                </div>
                <div class="tanoma-modal__field">
                    <input type="email" name="email" id="tanoma-join-email" placeholder="Your email" required class="tanoma-modal__input">
                </div>
                <div class="tanoma-modal__actions">
                    <button type="submit" class="tanoma-modal__btn tanoma-modal__btn--primary">Join</button>
                    <button type="button" class="tanoma-modal__btn tanoma-modal__btn--secondary" data-close="tanoma-join-modal" aria-label="Close">Cancel</button>
                </div>
            </form>
        </div>
    </div>
    <style>
        .subscribe-modal { position: fixed; inset: 0; z-index: 9999; align-items: center; justify-content: center; padding: 1rem; }
        .subscribe-modal__backdrop { position: absolute; inset: 0; background: rgba(0,0,0,0.4); }
        .subscribe-modal__box { position: relative; background: #fff; padding: 1.5rem 2rem; border-radius: 8px; max-width: 360px; width: 100%; box-shadow: 0 10px 40px rgba(0,0,0,0.2); text-align: center; }
        .subscribe-modal__box--form { text-align: left; }
        .subscribe-modal__title { margin: 0 0 0.5rem; font-size: 1.25rem; }
        .subscribe-modal__text { margin: 0 0 1.25rem; color: #333; }
        .subscribe-modal__input { width: 100%; padding: 0.5rem 0.75rem; border: 1px solid #ccc; border-radius: 4px; font-size: 1rem; }
        .subscribe-modal__close { padding: 0.5rem 1.5rem; background: #2D5016; color: #fff; border: none; border-radius: 4px; cursor: pointer; font-size: 1rem; }
        .subscribe-modal__close:hover { opacity: 0.9; }
        .subscribe-modal__close--outline { background: transparent; color: #333; border: 1px solid #ccc; }
        /* Tanoma Club modal – improved UI */
        .tanoma-modal__box { position: relative; background: #fff; max-width: 400px; width: 100%; border-radius: 16px; box-shadow: 0 24px 48px rgba(0,0,0,0.18), 0 0 0 1px rgba(0,0,0,0.04); overflow: hidden; text-align: center; }
        .tanoma-modal__header { background: #365b49; padding: 1.75rem 1.5rem; color: #fff; }
        .tanoma-modal__title { margin: 0; font-family: 'Marcellus', serif; font-size: 1.5rem; font-weight: 500; letter-spacing: 0.02em; }
        .tanoma-modal__subtitle { margin: 0.35rem 0 0; font-size: 0.875rem; opacity: 0.92; }
        .tanoma-modal__message { margin: 0 0 1rem; padding: 0.5rem 0.75rem; border-radius: 8px; font-size: 0.875rem; }
        .tanoma-modal__message.text-success { background: #e8f5e9; color: #2e7d32; }
        .tanoma-modal__message.text-danger { background: #ffebee; color: #c62828; }
        .tanoma-modal__form { padding: 1.5rem 1.5rem 1.75rem; text-align: left; }
        .tanoma-modal__field { margin-bottom: 1rem; }
        .tanoma-modal__input { width: 100%; padding: 0.75rem 1rem; border: 2px solid #e8e8e8; border-radius: 10px; font-size: 1rem; transition: border-color 0.2s, box-shadow 0.2s; }
        .tanoma-modal__input::placeholder { color: #9e9e9e; }
        .tanoma-modal__input:focus { outline: none; border-color: #365b49; box-shadow: 0 0 0 3px rgba(54, 91, 73, 0.2); }
        .tanoma-modal__actions { display: flex; gap: 0.75rem; margin-top: 1.25rem; }
        .tanoma-modal__btn { flex: 1; padding: 0.75rem 1.25rem; border: none; border-radius: 10px; font-size: 1rem; font-weight: 500; cursor: pointer; transition: transform 0.15s, box-shadow 0.15s; }
        .tanoma-modal__btn--primary { background: #365b49; background-image: none; color: #fff; }
        .tanoma-modal__btn--primary:hover { transform: translateY(-1px); box-shadow: 0 4px 12px rgba(54, 91, 73, 0.4); }
        .tanoma-modal__btn--secondary { background: #fff; color: #555; border: 2px solid #e0e0e0; }
        .tanoma-modal__btn--secondary:hover { border-color: #bdbdbd; background: #fafafa; }
    </style>
@endsection

@push('scripts')
    <!-- Extra JS used only on home page -->
    <script src="{{ asset('assets/js/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
    <script type="module" src="{{ asset('assets/js/animate.js') }}"></script>
    <script>
        document.getElementById('subscribe-form')?.addEventListener('submit', function (e) {
            e.preventDefault();
            var form = this;
            var messageEl = document.getElementById('subscribe-message');
            var emailInput = document.getElementById('subscribe-email');
            var submitBtn = form.querySelector('button[type="submit"]');

            messageEl.style.display = 'none';
            messageEl.textContent = '';
            if (submitBtn) submitBtn.disabled = true;

            var body = new FormData(form);

            fetch(form.action, {
                method: 'POST',
                body: body,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json'
                }
            })
            .then(function (res) { return res.json().then(function (data) { return { ok: res.ok, status: res.status, data: data }; }); })
            .then(function (result) {
                if (result.ok) {
                    emailInput.value = '';
                    var modal = document.getElementById('subscribe-success-modal');
                    if (modal) {
                        modal.style.display = 'flex';
                    }
                } else {
                    messageEl.style.display = 'block';
                    var msg = result.data && result.data.errors && result.data.errors.email ? result.data.errors.email[0] : (result.data.message || 'Something went wrong.');
                    messageEl.textContent = msg;
                    messageEl.classList.remove('text-success');
                    messageEl.classList.add('text-danger');
                    messageEl.style.color = '';
                }
            })
            .catch(function () {
                messageEl.style.display = 'block';
                messageEl.textContent = 'Something went wrong. Please try again.';
                messageEl.classList.remove('text-success');
                messageEl.classList.add('text-danger');
            })
            .finally(function () {
                if (submitBtn) submitBtn.disabled = false;
            });
        });

        (function () {
            var modal = document.getElementById('subscribe-success-modal');
            if (!modal) return;
            function closeModal() { modal.style.display = 'none'; }
            modal.querySelector('.subscribe-modal__backdrop').addEventListener('click', closeModal);
            modal.querySelector('.subscribe-modal__close').addEventListener('click', closeModal);
        })();

        (function () {
            var openBtn = document.getElementById('tanoma-join-now-btn');
            var modal = document.getElementById('tanoma-join-modal');
            var form = document.getElementById('tanoma-join-form');
            var messageEl = document.getElementById('tanoma-join-message');
            if (!openBtn || !modal || !form) return;

            openBtn.addEventListener('click', function () {
                messageEl.style.display = 'none';
                messageEl.textContent = '';
                messageEl.classList.remove('text-success', 'text-danger');
                form.reset();
                modal.style.display = 'flex';
            });

            modal.querySelectorAll('[data-close="tanoma-join-modal"]').forEach(function (el) {
                el.addEventListener('click', function () { modal.style.display = 'none'; });
            });

            form.addEventListener('submit', function (e) {
                e.preventDefault();
                var submitBtn = form.querySelector('button[type="submit"]');
                if (submitBtn) submitBtn.disabled = true;
                messageEl.style.display = 'none';
                messageEl.textContent = '';

                var body = new FormData(form);
                fetch('{{ route("tanoma-club.join") }}', {
                    method: 'POST',
                    body: body,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json'
                    }
                })
                .then(function (res) { return res.json().then(function (data) { return { ok: res.ok, status: res.status, data: data }; }); })
                .then(function (result) {
                    messageEl.style.display = 'block';
                    if (result.ok) {
                        messageEl.textContent = result.data.message || 'Thanks! You have joined the Tanoma Club.';
                        messageEl.classList.remove('text-danger');
                        messageEl.classList.add('text-success');
                        form.reset();
                        setTimeout(function () { modal.style.display = 'none'; }, 2000);
                    } else {
                        var msg = result.data && result.data.errors && result.data.errors.email ? result.data.errors.email[0] : (result.data && result.data.errors && result.data.errors.name ? result.data.errors.name[0] : (result.data.message || 'Something went wrong.'));
                        messageEl.textContent = msg;
                        messageEl.classList.remove('text-success');
                        messageEl.classList.add('text-danger');
                    }
                })
                .catch(function () {
                    messageEl.style.display = 'block';
                    messageEl.textContent = 'Something went wrong. Please try again.';
                    messageEl.classList.remove('text-success');
                    messageEl.classList.add('text-danger');
                })
                .finally(function () {
                    if (submitBtn) submitBtn.disabled = false;
                });
            });
        })();
    </script>
@endpush

