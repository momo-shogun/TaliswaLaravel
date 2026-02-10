// Winery Experience Carousel – left/right buttons + dots, same UI

(function () {
    function init() {
        var track = document.querySelector('.winery-experience--track');
        var slides = document.querySelectorAll('.winery-experience--slide');
        var dots = document.querySelectorAll('.winery-pagination--dot');
        var btnLeft = document.querySelector('.winery-experience--nav-btn-left');
        var btnRight = document.querySelector('.winery-experience--nav-btn-right');

        if (!track || !slides.length || !dots.length) return;

        var total = slides.length;
        var currentIndex = 0;

        function goToSlide(index) {
            currentIndex = Math.max(0, Math.min(index, total - 1));
            track.style.transform = 'translateX(-' + currentIndex * 100 + '%)';

            dots.forEach(function (dot, i) {
                dot.classList.toggle('active', i === currentIndex);
            });
        }

        if (btnLeft) {
            btnLeft.addEventListener('click', function () {
                goToSlide(currentIndex - 1);
            });
        }
        if (btnRight) {
            btnRight.addEventListener('click', function () {
                goToSlide(currentIndex + 1);
            });
        }

        dots.forEach(function (dot, i) {
            dot.addEventListener('click', function () {
                goToSlide(i);
            });
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
