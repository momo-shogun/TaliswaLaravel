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
                                <a href="#" class="collection-modal-trigger" data-images="{{ json_encode([asset('assets/img/product-images/products/Talisva 1.png')]) }}">
                                    <img src="{{ asset('assets/img/collections/c-1.png') }}" class="img-fluid" alt="" srcset="">
                                </a>
                            </div>
                            <div class="col-3 position-relative">
                                <a href="#" class="collection-modal-trigger" data-images="{{ json_encode([asset('assets/img/product-images/products/Talisva 2.png'), asset('assets/img/product-images/products/Talisva 3.png')]) }}">
                                    <img src="{{ asset('assets/img/collections/c-2.png') }}" class="img-fluid" alt="" srcset="">
                                </a>
                            </div>
                        </div>
                        <div class="row justify-content-center align-item-end mt-15 gap-4">
                            <div class="col-3 position-relative">
                                <a href="#" class="collection-modal-trigger" data-images="{{ json_encode([asset('assets/img/product-images/products/Talisva 4.png')]) }}">
                                    <img src="{{ asset('assets/img/collections/c-3.png') }}" class="img-fluid" alt="" srcset="">
                                </a>
                            </div>
                            <div class="col-3 position-relative">
                                <a href="#" class="collection-modal-trigger" data-images="{{ json_encode([asset('assets/img/product-images/products/Talisva 5.png')]) }}">
                                    <img src="{{ asset('assets/img/collections/c-4.png') }}" class="img-fluid" alt="" srcset="">
                                </a>
                            </div>
                            <div class="col-3 position-relative">
                                <a href="#" class="collection-modal-trigger" data-images="{{ json_encode([asset('assets/img/product-images/products/Talisva 6.png')]) }}">
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
                                <a href="#" class="collection-modal-trigger" data-images="{{ json_encode([asset('assets/img/product-images/products/Nomad 1.png')]) }}">
                                    <img src="{{ asset('assets/img/collections/n-1.png') }}" class="img-fluid" alt="" srcset="">
                                </a>
                            </div>
                            <div class="col-4 position-relative">
                                <a href="#" class="collection-modal-trigger" data-images="{{ json_encode([asset('assets/img/product-images/products/Nomad 2.png'), asset('assets/img/product-images/products/Nomad 3.png')]) }}">
                                    <img src="{{ asset('assets/img/collections/n-2.png') }}" class="img-fluid" alt="" srcset="">
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
        <div class="modal-dialog modal-xl modal-dialog-centered modal-fullscreen-lg-down">
            <div class="modal-content" style="background: transparent; border: none;">
                <div class="modal-header position-absolute border-0 py-2 pe-2" style="z-index: 1056; top: 78px !important; right: 10px !important;">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
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

            document.querySelectorAll('.collection-modal-trigger').forEach(function (a) {
                a.addEventListener('click', function (e) {
                    e.preventDefault();
                    var data = this.getAttribute('data-images');
                    var urls = data ? JSON.parse(data) : [];
                    openModal(urls);
                });
            });

            if (prevBtn) prevBtn.addEventListener('click', function () { showSlide(currentIndex - 1); });
            if (nextBtn) nextBtn.addEventListener('click', function () { showSlide(currentIndex + 1); });
            if (dots) dots.forEach(function (d, i) {
                d.addEventListener('click', function () { showSlide(i); });
            });
        })();
    </script>
@endpush
