@extends('layouts.app')

@section('title', 'Collection - Talisva Website')

@section('body-class', '')

@section('content')
    <!-- FEATURED PRODUCT SECTION  -->
    <section class="collection-section">
        <a href="{{ url('/') }}" class="collection-back-btn" aria-label="Back">
            <img src="{{ asset('assets/img/backbtn.png') }}" alt="Back">
        </a>
        <span class="heading-tag"> <span class="left"></span>our <span class="right"></span></span>
        <h3 class="heading--lg mb-12">Fruit Wines</h3>

        <div class="container">
            <!-- COLLECTION 1 -->
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
                                <a href="{{ route('collection.taliswa1') }}" class="taliswa1-modal-trigger">
                                    <img src="{{ asset('assets/img/collections/c-1.png') }}" class="img-fluid" alt="" srcset="">
                                </a>
                            </div>
                            <div class="col-3 position-relative">
                                <a href="{{ route('collection.taliswa2') }}" class="taliswa2-modal-trigger">
                                    <img src="{{ asset('assets/img/collections/c-2.png') }}" class="img-fluid" alt="" srcset="">
                                </a>
                            </div>
                        </div>
                        <div class="row justify-content-center align-item-end mt-15 gap-4">
                            <div class="col-3 position-relative">
                                <a href="{{ route('collection.taliswa4') }}" class="taliswa4-modal-trigger">
                                    <img src="{{ asset('assets/img/collections/c-3.png') }}" class="img-fluid" alt="" srcset="">
                                </a>
                            </div>
                            <div class="col-3 position-relative">
                                <a href="{{ route('collection.taliswa5') }}" class="taliswa5-modal-trigger">
                                    <img src="{{ asset('assets/img/collections/c-4.png') }}" class="img-fluid" alt="" srcset="">
                                </a>
                            </div>
                            <div class="col-3 position-relative">
                                <a href="{{ route('collection.taliswa6') }}">
                                    <img src="{{ asset('assets/img/collections/c-5.png') }}" class="img-fluid" alt="" srcset="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- COLLECTION 2 -->
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
                                <a href="{{ route('collection.nomad1') }}">
                                    <img src="{{ asset('assets/img/collections/n-1.png') }}" class="img-fluid" alt="" srcset="">
                                </a>
                            </div>
                            <div class="col-4 position-relative">
                                <a href="{{ route('collection.nomad2') }}">
                                    <img src="{{ asset('assets/img/collections/n-2.png') }}" class="img-fluid" alt="" srcset="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Taliswa1 modal -->
    <div class="modal fade" id="taliswa1Modal" tabindex="-1" aria-labelledby="taliswa1ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-fullscreen-lg-down">
            <div class="modal-content taliswa1-modal-content">
                <div class="modal-header taliswa1-modal-header">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0 taliswa1-modal-body">
                    <iframe id="taliswa1ModalFrame" src="" title="Talisva – Forest Piper" class="taliswa1-modal-iframe"></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- Taliswa2 modal (carousel) -->
    <div class="modal fade" id="taliswa2Modal" tabindex="-1" aria-labelledby="taliswa2ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-fullscreen-lg-down">
            <div class="modal-content taliswa2-modal-content">
                <div class="modal-header taliswa2-modal-header">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
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

    <!-- Taliswa4 modal -->
    <div class="modal fade" id="taliswa4Modal" tabindex="-1" aria-labelledby="taliswa4ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-fullscreen-lg-down">
            <div class="modal-content taliswa4-modal-content">
                <div class="modal-header taliswa4-modal-header">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0 taliswa4-modal-body">
                    <iframe id="taliswa4ModalFrame" src="" title="Talisva – Rosea Petroica" class="taliswa4-modal-iframe"></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- Taliswa5 modal -->
    <div class="modal fade" id="taliswa5Modal" tabindex="-1" aria-labelledby="taliswa5ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-fullscreen-lg-down">
            <div class="modal-content taliswa5-modal-content">
                <div class="modal-header taliswa5-modal-header">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0 taliswa5-modal-body">
                    <iframe id="taliswa5ModalFrame" src="" title="Talisva – Pineapple Plover" class="taliswa5-modal-iframe"></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- Taliswa6 modal -->
    <div class="modal fade" id="taliswa6Modal" tabindex="-1" aria-labelledby="taliswa6ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-fullscreen-lg-down">
            <div class="modal-content taliswa6-modal-content">
                <div class="modal-header taliswa6-modal-header">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0 taliswa6-modal-body">
                    <iframe id="taliswa6ModalFrame" src="" title="Talisva – Plum N Roll" class="taliswa6-modal-iframe"></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- Nomad1 modal -->
    <div class="modal fade" id="nomad1Modal" tabindex="-1" aria-labelledby="nomad1ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-fullscreen-lg-down">
            <div class="modal-content nomad1-modal-content">
                <div class="modal-header nomad1-modal-header">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0 nomad1-modal-body">
                    <iframe id="nomad1ModalFrame" src="" title="Nomad – Wild Pint" class="nomad1-modal-iframe"></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- Nomad2 modal (carousel) -->
    <div class="modal fade" id="nomad2Modal" tabindex="-1" aria-labelledby="nomad2ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-fullscreen-lg-down">
            <div class="modal-content nomad2-modal-content">
                <div class="modal-header nomad2-modal-header">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
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
            var baseUrl = '{{ url("/") }}';
            var routes = {
                taliswa1: '{{ route("collection.taliswa1") }}',
                taliswa2: '{{ route("collection.taliswa2") }}',
                taliswa3: '{{ route("collection.taliswa3") }}',
                taliswa4: '{{ route("collection.taliswa4") }}',
                taliswa5: '{{ route("collection.taliswa5") }}',
                taliswa6: '{{ route("collection.taliswa6") }}',
                nomad1: '{{ route("collection.nomad1") }}',
                nomad2: '{{ route("collection.nomad2") }}',
                nomad3: '{{ route("collection.nomad3") }}'
            };
            function initModals() {
                var modal1 = document.getElementById('taliswa1Modal');
                var frame1 = document.getElementById('taliswa1ModalFrame');
                if (modal1 && frame1) {
                    document.querySelectorAll('a[href*="taliswa1"]').forEach(function (a) {
                        a.addEventListener('click', function (e) {
                            e.preventDefault();
                            frame1.src = routes.taliswa1;
                            new bootstrap.Modal(modal1).show();
                        });
                    });
                    modal1.addEventListener('hidden.bs.modal', function () { frame1.src = ''; });
                }
                var modal2 = document.getElementById('taliswa2Modal');
                var track2 = document.querySelector('.taliswa2-modal-track');
                var slides2 = document.querySelectorAll('.taliswa2-modal-slide');
                var dots2 = document.querySelectorAll('.taliswa2-modal-dot');
                var frame2a = document.getElementById('taliswa2ModalFrame1');
                var frame2b = document.getElementById('taliswa2ModalFrame2');
                var btnLeft2 = document.querySelector('.taliswa2-modal-nav-left');
                var btnRight2 = document.querySelector('.taliswa2-modal-nav-right');
                if (modal2 && track2 && slides2.length === 2) {
                    var currentSlide = 0;
                    function goToSlide(i) {
                        currentSlide = Math.max(0, Math.min(i, 1));
                        track2.style.transform = 'translateX(-' + currentSlide * 100 + '%)';
                        dots2.forEach(function (d, j) { d.classList.toggle('active', j === currentSlide); });
                    }
                    if (btnLeft2) btnLeft2.addEventListener('click', function () { goToSlide(currentSlide - 1); });
                    if (btnRight2) btnRight2.addEventListener('click', function () { goToSlide(currentSlide + 1); });
                    dots2.forEach(function (d, i) { d.addEventListener('click', function () { goToSlide(i); }); });
                    document.querySelectorAll('a[href*="taliswa2"]').forEach(function (a) {
                        a.addEventListener('click', function (e) {
                            e.preventDefault();
                            if (frame2a) frame2a.src = routes.taliswa2;
                            if (frame2b) frame2b.src = routes.taliswa3;
                            goToSlide(0);
                            new bootstrap.Modal(modal2).show();
                        });
                    });
                    modal2.addEventListener('hidden.bs.modal', function () {
                        if (frame2a) frame2a.src = '';
                        if (frame2b) frame2b.src = '';
                    });
                }
                var modal4 = document.getElementById('taliswa4Modal');
                var frame4 = document.getElementById('taliswa4ModalFrame');
                if (modal4 && frame4) {
                    document.querySelectorAll('a[href*="taliswa4"]').forEach(function (a) {
                        a.addEventListener('click', function (e) {
                            e.preventDefault();
                            frame4.src = routes.taliswa4;
                            new bootstrap.Modal(modal4).show();
                        });
                    });
                    modal4.addEventListener('hidden.bs.modal', function () { frame4.src = ''; });
                }
                var modal5 = document.getElementById('taliswa5Modal');
                var frame5 = document.getElementById('taliswa5ModalFrame');
                if (modal5 && frame5) {
                    document.querySelectorAll('a[href*="taliswa5"]').forEach(function (a) {
                        a.addEventListener('click', function (e) {
                            e.preventDefault();
                            frame5.src = routes.taliswa5;
                            new bootstrap.Modal(modal5).show();
                        });
                    });
                    modal5.addEventListener('hidden.bs.modal', function () { frame5.src = ''; });
                }
                var modal6 = document.getElementById('taliswa6Modal');
                var frame6 = document.getElementById('taliswa6ModalFrame');
                if (modal6 && frame6) {
                    document.querySelectorAll('a[href*="taliswa6"]').forEach(function (a) {
                        a.addEventListener('click', function (e) {
                            e.preventDefault();
                            frame6.src = routes.taliswa6;
                            new bootstrap.Modal(modal6).show();
                        });
                    });
                    modal6.addEventListener('hidden.bs.modal', function () { frame6.src = ''; });
                }
                var modalNomad1 = document.getElementById('nomad1Modal');
                var frameNomad1 = document.getElementById('nomad1ModalFrame');
                if (modalNomad1 && frameNomad1) {
                    document.querySelectorAll('a[href*="nomad1"]').forEach(function (a) {
                        a.addEventListener('click', function (e) {
                            e.preventDefault();
                            frameNomad1.src = routes.nomad1;
                            new bootstrap.Modal(modalNomad1).show();
                        });
                    });
                    modalNomad1.addEventListener('hidden.bs.modal', function () { frameNomad1.src = ''; });
                }
                var modalNomad2 = document.getElementById('nomad2Modal');
                var trackNomad2 = document.querySelector('.nomad2-modal-track');
                var slidesNomad2 = document.querySelectorAll('.nomad2-modal-slide');
                var dotsNomad2 = document.querySelectorAll('.nomad2-modal-dot');
                var frameNomad2a = document.getElementById('nomad2ModalFrame1');
                var frameNomad2b = document.getElementById('nomad2ModalFrame2');
                var btnLeftNomad2 = document.querySelector('.nomad2-modal-nav-left');
                var btnRightNomad2 = document.querySelector('.nomad2-modal-nav-right');
                if (modalNomad2 && trackNomad2 && slidesNomad2.length === 2) {
                    var currentSlideNomad2 = 0;
                    function goToSlideNomad2(i) {
                        currentSlideNomad2 = Math.max(0, Math.min(i, 1));
                        trackNomad2.style.transform = 'translateX(-' + currentSlideNomad2 * 100 + '%)';
                        dotsNomad2.forEach(function (d, j) { d.classList.toggle('active', j === currentSlideNomad2); });
                    }
                    if (btnLeftNomad2) btnLeftNomad2.addEventListener('click', function () { goToSlideNomad2(currentSlideNomad2 - 1); });
                    if (btnRightNomad2) btnRightNomad2.addEventListener('click', function () { goToSlideNomad2(currentSlideNomad2 + 1); });
                    dotsNomad2.forEach(function (d, i) { d.addEventListener('click', function () { goToSlideNomad2(i); }); });
                    document.querySelectorAll('a[href*="nomad2"]').forEach(function (a) {
                        a.addEventListener('click', function (e) {
                            e.preventDefault();
                            if (frameNomad2a) frameNomad2a.src = routes.nomad2;
                            if (frameNomad2b) frameNomad2b.src = routes.nomad3;
                            goToSlideNomad2(0);
                            new bootstrap.Modal(modalNomad2).show();
                        });
                    });
                    modalNomad2.addEventListener('hidden.bs.modal', function () {
                        if (frameNomad2a) frameNomad2a.src = '';
                        if (frameNomad2b) frameNomad2b.src = '';
                    });
                }
            }
            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', initModals);
            } else {
                initModals();
            }
        })();
    </script>
@endpush
