@extends('layouts.app')

@section('title', 'Collection - Talisva Website')

@section('body-class', '')

@section('content')
    <section class="collection-section">
        <a href="{{ url('/') }}" class="collection-back-btn" aria-label="Back">
            <img src="{{ asset('assets/img/backbtn.png') }}" alt="Back">
        </a>
        <span class="heading-tag"> <span class="left"></span>our <span class="right"></span></span>
        <h3 class="heading--lg mb-12">Fruit Wines</h3>

        <div class="container">
            <div class="row" id="fruit-wines-collection">
                <div class="col-12">
                    <div class="collection-card--1">
                        <div class="row">
                            <div class="col-4 mx-auto">
                                <img src="{{ asset('assets/img/logos/golden-logo.png') }}" class="img-fluid" alt="" srcset="">
                            </div>
                        </div>
                        <div class="row justify-content-center align-item-end mt-15 gap-4">
                            <div class="col-3 position-relative">
                                <a href="#" class="collection-modal-trigger" data-images="{{ json_encode([asset('assets/img/product-images/products/Talisva 1.png')]) }}" data-mobile-modal="taliswa1Modal" data-mobile-route="{{ route('collection.taliswa1') }}">
                                    <img src="{{ asset('assets/img/collections/c-1.png') }}" class="img-fluid" alt="" srcset="">
                                </a>
                            </div>
                            <div class="col-3 position-relative">
                                <a href="#" class="collection-modal-trigger" data-images="{{ json_encode([asset('assets/img/product-images/products/Talisva 2.png'), asset('assets/img/product-images/products/Talisva 3.png')]) }}" data-mobile-modal="taliswa2Modal" data-mobile-routes="{{ json_encode([route('collection.taliswa2'), route('collection.taliswa3')]) }}">
                                    <img src="{{ asset('assets/img/collections/c-2.png') }}" class="img-fluid" alt="" srcset="">
                                </a>
                            </div>
                        </div>
                        <div class="row justify-content-center align-item-end mt-15 gap-4">
                            <div class="col-3 position-relative">
                                <a href="#" class="collection-modal-trigger" data-images="{{ json_encode([asset('assets/img/product-images/products/Talisva 4.png')]) }}" data-mobile-modal="taliswa4Modal" data-mobile-route="{{ route('collection.taliswa4') }}">
                                    <img src="{{ asset('assets/img/collections/c-3.png') }}" class="img-fluid" alt="" srcset="">
                                </a>
                            </div>
                            <div class="col-3 position-relative">
                                <a href="#" class="collection-modal-trigger" data-images="{{ json_encode([asset('assets/img/product-images/products/Talisva 5.png')]) }}" data-mobile-modal="taliswa5Modal" data-mobile-route="{{ route('collection.taliswa5') }}">
                                    <img src="{{ asset('assets/img/collections/c-4.png') }}" class="img-fluid" alt="" srcset="">
                                </a>
                            </div>
                            <div class="col-3 position-relative">
                                <a href="#" class="collection-modal-trigger" data-images="{{ json_encode([asset('assets/img/product-images/products/Talisva 6.png')]) }}" data-mobile-modal="taliswa6Modal" data-mobile-route="{{ route('collection.taliswa6') }}">
                                    <img src="{{ asset('assets/img/collections/c-5.png') }}" class="img-fluid" alt="" srcset="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-20" id="nomad-collection">
                <div class="col-12">
                    <div class="collection-card--2">
                        <img src="{{ asset('assets/img/border-shape.png') }}" class="img-fluid collection-card--2--leftTop" alt="" srcset="">
                        <img src="{{ asset('assets/img/border-shape.png') }}" class="img-fluid collection-card--2--rightTop" alt="" srcset="">
                        <img src="{{ asset('assets/img/border-shape.png') }}" class="img-fluid collection-card--2--rightBottom" alt="" srcset="">
                        <img src="{{ asset('assets/img/border-shape.png') }}" class="img-fluid collection-card--2--leftBottom" alt="" srcset="">

                        <div class="row">
                            <div class="col-4 mx-auto">
                                <img src="{{ asset('assets/img/logos/nomad-logo-2.png') }}" class="img-fluid" alt="" srcset="">
                            </div>
                        </div>
                        <div class="row justify-content-center align-item-end mt-15 gap-4">
                            <div class="col-4 position-relative">
                                <a href="#" class="collection-modal-trigger" data-images="{{ json_encode([asset('assets/img/product-images/products/Nomad 1.png')]) }}" data-mobile-modal="nomad1Modal" data-mobile-route="{{ route('collection.nomad1') }}">
                                    <img src="{{ asset('assets/img/collections/n-1.png') }}" class="img-fluid" alt="" srcset="">
                                </a>
                            </div>
                            <div class="col-4 position-relative">
                                <a href="#" class="collection-modal-trigger" data-images="{{ json_encode([asset('assets/img/product-images/products/Nomad 2.png'), asset('assets/img/product-images/products/Nomad 3.png')]) }}" data-mobile-modal="nomad2Modal" data-mobile-routes="{{ json_encode([route('collection.nomad2'), route('collection.nomad3')]) }}">
                                    <img src="{{ asset('assets/img/collections/n-2.png') }}" class="img-fluid" alt="" srcset="" style="position: relative; top: 6px;">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Single image modal (1 or 2 images; nav + dots only when 2) -->
    <div class="modal fade" id="collectionImageModal" tabindex="-1" aria-hidden="true">
        <div class="collection-image-modal-header">
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-dialog modal-xl modal-dialog-centered modal-fullscreen-lg-down">
            <div class="modal-content" style="background: transparent; border: none;">
                <div class="modal-body p-0 position-relative d-flex align-items-center justify-content-center" style="min-height: 85vh;">
                    <button type="button" class="taliswa2-modal-nav taliswa2-modal-nav-left collection-modal-prev" style="display: none;" aria-label="Previous">
                        <img src="{{ asset('assets/img/backbtn.png') }}" alt="Previous">
                    </button>
                    <button type="button" class="taliswa2-modal-nav taliswa2-modal-nav-right collection-modal-next" style="display: none;" aria-label="Next">
                        <img src="{{ asset('assets/img/rightbtn.png') }}" alt="Next">
                    </button>
                    <div class="collection-modal-single text-center w-100" style="display: none;">
                        <img src="" alt="" class="img-fluid" style="max-height: 85vh; width: auto; object-fit: contain;">
                    </div>
                    <div class="taliswa2-modal-carousel collection-modal-carousel overflow-hidden position-relative w-100" style="display: none;">
                        <div class="taliswa2-modal-track collection-modal-track d-flex" style="transition: transform 0.3s ease;">
                            <div class="taliswa2-modal-slide collection-modal-slide flex-shrink-0 w-100 text-center">
                                <img src="" alt="" class="img-fluid" style="max-height: 85vh; width: auto; object-fit: contain;">
                            </div>
                            <div class="taliswa2-modal-slide collection-modal-slide flex-shrink-0 w-100 text-center">
                                <img src="" alt="" class="img-fluid" style="max-height: 85vh; width: auto; object-fit: contain;">
                            </div>
                        </div>
                    </div>
                    <div class="taliswa2-modal-pagination collection-modal-dots" style="display: none;">
                        <span class="taliswa2-modal-dot active" data-index="0" aria-label="Slide 1"></span>
                        <span class="taliswa2-modal-dot" data-index="1" aria-label="Slide 2"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile-only iframe modals (opened when viewport < 992px) -->
    <div class="modal fade" id="taliswa1Modal" tabindex="-1" aria-hidden="true">
        <div class="collection-iframe-modal-close">
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-dialog modal-xl modal-dialog-centered modal-fullscreen-lg-down">
            <div class="modal-content taliswa1-modal-content">
                <div class="modal-body p-0 taliswa1-modal-body">
                    <iframe id="taliswa1ModalFrame" src="" title="Talisva – Forest Piper" class="taliswa1-modal-iframe"></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="taliswa2Modal" tabindex="-1" aria-hidden="true">
        <div class="collection-iframe-modal-close">
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-dialog modal-xl modal-dialog-centered modal-fullscreen-lg-down">
            <div class="modal-content taliswa2-modal-content">
                <div class="modal-body p-0 taliswa2-modal-body">
                    <button type="button" class="taliswa2-modal-nav taliswa2-modal-nav-left" aria-label="Previous">
                        <img src="{{ asset('assets/img/backbtn.png') }}" alt="Previous">
                    </button>
                    <button type="button" class="taliswa2-modal-nav taliswa2-modal-nav-right" aria-label="Next">
                        <img src="{{ asset('assets/img/rightbtn.png') }}" alt="Next">
                    </button>
                    <div class="taliswa2-modal-carousel">
                        <div class="taliswa2-modal-track">
                            <div class="taliswa2-modal-slide">
                                <iframe id="taliswa2ModalFrame1" src="" title="Talisva 2" class="taliswa2-modal-iframe"></iframe>
                            </div>
                            <div class="taliswa2-modal-slide">
                                <iframe id="taliswa2ModalFrame2" src="" title="Talisva 3" class="taliswa2-modal-iframe"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="taliswa2-modal-pagination">
                        <span class="taliswa2-modal-dot active" data-slide="0" aria-label="Slide 1"></span>
                        <span class="taliswa2-modal-dot" data-slide="1" aria-label="Slide 2"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="taliswa4Modal" tabindex="-1" aria-hidden="true">
        <div class="collection-iframe-modal-close">
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-dialog modal-xl modal-dialog-centered modal-fullscreen-lg-down">
            <div class="modal-content taliswa4-modal-content">
                <div class="modal-body p-0 taliswa4-modal-body">
                    <iframe id="taliswa4ModalFrame" src="" title="Talisva – Rosea Petroica" class="taliswa4-modal-iframe"></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="taliswa5Modal" tabindex="-1" aria-hidden="true">
        <div class="collection-iframe-modal-close">
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-dialog modal-xl modal-dialog-centered modal-fullscreen-lg-down">
            <div class="modal-content taliswa5-modal-content">
                <div class="modal-body p-0 taliswa5-modal-body">
                    <iframe id="taliswa5ModalFrame" src="" title="Talisva – Pineapple Plover" class="taliswa5-modal-iframe"></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="taliswa6Modal" tabindex="-1" aria-hidden="true">
        <div class="collection-iframe-modal-close">
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-dialog modal-xl modal-dialog-centered modal-fullscreen-lg-down">
            <div class="modal-content taliswa6-modal-content">
                <div class="modal-body p-0 taliswa6-modal-body">
                    <iframe id="taliswa6ModalFrame" src="" title="Talisva – Plum N Roll" class="taliswa6-modal-iframe"></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="nomad1Modal" tabindex="-1" aria-hidden="true">
        <div class="collection-iframe-modal-close">
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-dialog modal-xl modal-dialog-centered modal-fullscreen-lg-down">
            <div class="modal-content nomad1-modal-content">
                <div class="modal-body p-0 nomad1-modal-body">
                    <iframe id="nomad1ModalFrame" src="" title="Nomad – Wild Pint" class="nomad1-modal-iframe"></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="nomad2Modal" tabindex="-1" aria-hidden="true">
        <div class="collection-iframe-modal-close">
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-dialog modal-xl modal-dialog-centered modal-fullscreen-lg-down">
            <div class="modal-content nomad2-modal-content">
                <div class="modal-body p-0 nomad2-modal-body">
                    <button type="button" class="nomad2-modal-nav nomad2-modal-nav-left" aria-label="Previous">
                        <img src="{{ asset('assets/img/backbtn.png') }}" alt="Previous">
                    </button>
                    <button type="button" class="nomad2-modal-nav nomad2-modal-nav-right" aria-label="Next">
                        <img src="{{ asset('assets/img/rightbtn.png') }}" alt="Next">
                    </button>
                    <div class="nomad2-modal-carousel">
                        <div class="nomad2-modal-track">
                            <div class="nomad2-modal-slide">
                                <iframe id="nomad2ModalFrame1" src="" title="Nomad 2" class="nomad2-modal-iframe"></iframe>
                            </div>
                            <div class="nomad2-modal-slide">
                                <iframe id="nomad2ModalFrame2" src="" title="Nomad 3" class="nomad2-modal-iframe"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="nomad2-modal-pagination">
                        <span class="nomad2-modal-dot active" data-slide="0" aria-label="Slide 1"></span>
                        <span class="nomad2-modal-dot" data-slide="1" aria-label="Slide 2"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
    <script type="module" src="{{ asset('assets/js/animate.js') }}"></script>
    <script>
        (function () {
            var modal = document.getElementById('collectionImageModal');
            var singleWrap = document.querySelector('.collection-modal-single');
            var singleImg = singleWrap ? singleWrap.querySelector('img') : null;
            var carouselWrap = document.querySelector('.collection-modal-carousel');
            var track = document.querySelector('.collection-modal-track');
            var slides = document.querySelectorAll('.collection-modal-slide');
            var prevBtn = document.querySelector('.collection-modal-prev');
            var nextBtn = document.querySelector('.collection-modal-next');
            var dotsWrap = document.querySelector('.collection-modal-dots');
            var dots = document.querySelectorAll('.collection-modal-dot');

            var currentIndex = 0;
            var images = [];

            function showSlide(i) {
                if (images.length <= 1) return;
                currentIndex = Math.max(0, Math.min(i, images.length - 1));
                if (track) track.style.transform = 'translateX(-' + currentIndex * 100 + '%)';
                if (dots) dots.forEach(function (d, j) { d.classList.toggle('active', j === currentIndex); });
            }

            function openModal(urls) {
                images = Array.isArray(urls) ? urls : [urls];
                if (images.length === 0) return;

                if (images.length === 1) {
                    if (singleWrap) singleWrap.style.display = 'block';
                    if (singleImg) { singleImg.src = images[0]; singleImg.alt = 'Product'; }
                    if (carouselWrap) carouselWrap.style.display = 'none';
                    if (prevBtn) prevBtn.style.display = 'none';
                    if (nextBtn) nextBtn.style.display = 'none';
                    if (dotsWrap) dotsWrap.style.display = 'none';
                } else {
                    if (singleWrap) singleWrap.style.display = 'none';
                    if (carouselWrap) carouselWrap.style.display = 'block';
                    if (prevBtn) prevBtn.style.display = 'block';
                    if (nextBtn) nextBtn.style.display = 'block';
                    if (dotsWrap) dotsWrap.style.display = 'flex';
                    if (slides && slides[0] && slides[1]) {
                        slides[0].querySelector('img').src = images[0];
                        slides[1].querySelector('img').src = images[1];
                    }
                    currentIndex = 0;
                    showSlide(0);
                }

                if (modal) new bootstrap.Modal(modal).show();
            }

            var isDesktop = function () { return window.matchMedia('(min-width: 992px)').matches; };

            document.querySelectorAll('.collection-modal-trigger').forEach(function (a) {
                a.addEventListener('click', function (e) {
                    e.preventDefault();
                    if (isDesktop()) {
                        var data = this.getAttribute('data-images');
                        var urls = data ? JSON.parse(data) : [];
                        openModal(urls);
                        return;
                    }
                    var modalId = this.getAttribute('data-mobile-modal');
                    var route = this.getAttribute('data-mobile-route');
                    var routesJson = this.getAttribute('data-mobile-routes');
                    var modalEl = modalId ? document.getElementById(modalId) : null;
                    if (!modalEl) return;
                    if (route) {
                        var frame = modalEl.querySelector('iframe');
                        if (frame) frame.src = route;
                    } else if (routesJson) {
                        var routes = JSON.parse(routesJson);
                        var frames = modalEl.querySelectorAll('.modal-body iframe');
                        if (frames.length >= 2) {
                            frames[0].src = routes[0];
                            frames[1].src = routes[1];
                        }
                        var track = modalEl.querySelector('.taliswa2-modal-track, .nomad2-modal-track');
                        if (track) track.style.transform = 'translateX(0)';
                        var dots = modalEl.querySelectorAll('.taliswa2-modal-dot, .nomad2-modal-dot');
                        dots.forEach(function (d, j) { d.classList.toggle('active', j === 0); });
                    }
                    new bootstrap.Modal(modalEl).show();
                });
            });

            [['taliswa1Modal', 'taliswa1ModalFrame'], ['taliswa4Modal', 'taliswa4ModalFrame'], ['taliswa5Modal', 'taliswa5ModalFrame'], ['taliswa6Modal', 'taliswa6ModalFrame'], ['nomad1Modal', 'nomad1ModalFrame']].forEach(function (pair) {
                var m = document.getElementById(pair[0]);
                var f = document.getElementById(pair[1]);
                if (m && f) m.addEventListener('hidden.bs.modal', function () { f.src = ''; });
            });
            var taliswa2Modal = document.getElementById('taliswa2Modal');
            if (taliswa2Modal) {
                taliswa2Modal.addEventListener('hidden.bs.modal', function () {
                    var fa = document.getElementById('taliswa2ModalFrame1');
                    var fb = document.getElementById('taliswa2ModalFrame2');
                    if (fa) fa.src = '';
                    if (fb) fb.src = '';
                });
                var track2 = taliswa2Modal.querySelector('.taliswa2-modal-track');
                var dots2 = taliswa2Modal.querySelectorAll('.taliswa2-modal-dot');
                var goTo2 = function (i) {
                    var idx = Math.max(0, Math.min(i, 1));
                    if (track2) track2.style.transform = 'translateX(-' + idx * 100 + '%)';
                    dots2.forEach(function (d, j) { d.classList.toggle('active', j === idx); });
                    return idx;
                };
                var cur2 = 0;
                taliswa2Modal.querySelector('.taliswa2-modal-nav-left') && taliswa2Modal.querySelector('.taliswa2-modal-nav-left').addEventListener('click', function () { cur2 = goTo2(cur2 - 1); });
                taliswa2Modal.querySelector('.taliswa2-modal-nav-right') && taliswa2Modal.querySelector('.taliswa2-modal-nav-right').addEventListener('click', function () { cur2 = goTo2(cur2 + 1); });
                dots2.forEach(function (d, i) { d.addEventListener('click', function () { cur2 = goTo2(i); }); });
                var body2 = taliswa2Modal.querySelector('.modal-body');
                if (body2) {
                    var tsX2 = 0, teX2 = 0, minSwipe = 50;
                    body2.addEventListener('touchstart', function (e) { tsX2 = e.changedTouches ? e.changedTouches[0].screenX : e.screenX; }, { passive: true });
                    body2.addEventListener('touchend', function (e) {
                        teX2 = e.changedTouches ? e.changedTouches[0].screenX : e.screenX;
                        var d = tsX2 - teX2;
                        if (d > minSwipe) cur2 = goTo2(cur2 + 1);
                        else if (d < -minSwipe) cur2 = goTo2(cur2 - 1);
                    }, { passive: true });
                }
            }
            var nomad2Modal = document.getElementById('nomad2Modal');
            if (nomad2Modal) {
                nomad2Modal.addEventListener('hidden.bs.modal', function () {
                    var fa = document.getElementById('nomad2ModalFrame1');
                    var fb = document.getElementById('nomad2ModalFrame2');
                    if (fa) fa.src = '';
                    if (fb) fb.src = '';
                });
                var trackN2 = nomad2Modal.querySelector('.nomad2-modal-track');
                var dotsN2 = nomad2Modal.querySelectorAll('.nomad2-modal-dot');
                var goToN2 = function (i) {
                    var idx = Math.max(0, Math.min(i, 1));
                    if (trackN2) trackN2.style.transform = 'translateX(-' + idx * 100 + '%)';
                    dotsN2.forEach(function (d, j) { d.classList.toggle('active', j === idx); });
                    return idx;
                };
                var curN2 = 0;
                nomad2Modal.querySelector('.nomad2-modal-nav-left') && nomad2Modal.querySelector('.nomad2-modal-nav-left').addEventListener('click', function () { curN2 = goToN2(curN2 - 1); });
                nomad2Modal.querySelector('.nomad2-modal-nav-right') && nomad2Modal.querySelector('.nomad2-modal-nav-right').addEventListener('click', function () { curN2 = goToN2(curN2 + 1); });
                dotsN2.forEach(function (d, i) { d.addEventListener('click', function () { curN2 = goToN2(i); }); });
                var bodyN2 = nomad2Modal.querySelector('.modal-body');
                if (bodyN2) {
                    var tsXN2 = 0, teXN2 = 0, minSwipeN2 = 50;
                    bodyN2.addEventListener('touchstart', function (e) { tsXN2 = e.changedTouches ? e.changedTouches[0].screenX : e.screenX; }, { passive: true });
                    bodyN2.addEventListener('touchend', function (e) {
                        teXN2 = e.changedTouches ? e.changedTouches[0].screenX : e.screenX;
                        var d = tsXN2 - teXN2;
                        if (d > minSwipeN2) curN2 = goToN2(curN2 + 1);
                        else if (d < -minSwipeN2) curN2 = goToN2(curN2 - 1);
                    }, { passive: true });
                }
            }

            if (prevBtn) prevBtn.addEventListener('click', function () { showSlide(currentIndex - 1); });
            if (nextBtn) nextBtn.addEventListener('click', function () { showSlide(currentIndex + 1); });
            if (dots) dots.forEach(function (d, i) {
                d.addEventListener('click', function () { showSlide(i); });
            });

            /* Swipe / touch: slide left = next, slide right = prev (when carousel has >1 image) */
            var touchStartX = 0;
            var touchEndX = 0;
            var minSwipe = 50;
            var swipeTarget = carouselWrap || (modal ? modal.querySelector('.modal-body') : null);
            if (swipeTarget) {
                swipeTarget.addEventListener('touchstart', function (e) {
                    touchStartX = e.changedTouches ? e.changedTouches[0].screenX : e.screenX;
                }, { passive: true });
                swipeTarget.addEventListener('touchend', function (e) {
                    if (images.length <= 1) return;
                    touchEndX = e.changedTouches ? e.changedTouches[0].screenX : e.screenX;
                    var diff = touchStartX - touchEndX;
                    if (diff > minSwipe) showSlide(currentIndex + 1);
                    else if (diff < -minSwipe) showSlide(currentIndex - 1);
                }, { passive: true });
            }
        })();
    </script>
@endpush
