<div class="modal fade age-verify-modal" id="ageVerificationModal" tabindex="-1" aria-labelledby="ageVerificationModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content age-verify-modal__content border-0">
            <div class="modal-body age-verify-modal__body text-center">
                <a href="{{ url('/') }}" class="age-verify-modal__logo-link d-inline-block mb-4">
                    <img src="{{ asset('assets/img/logos/main-logo.png') }}" class="img-fluid age-verify-modal__logo" alt="Talisva logo">
                </a>
                <h2 id="ageVerificationModalLabel" class="age-verify-modal__title">
                    Are you of legal drinking age in your country or state?
                </h2>
                <div class="d-flex gap-3 justify-content-center flex-wrap mt-4">
                    <button type="button" class="btn age-verify-modal__btn" data-age-verify-yes>
                        Yes
                    </button>
                    <button type="button" class="btn age-verify-modal__btn" data-age-verify-no>
                        No
                    </button>
                </div>
                <p class="age-verify-modal__legal mt-4 mb-0">
                    By entering this site you are agreeing to the Terms of Use and Privacy Policy.
                </p>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        (function () {
            if (window.self !== window.top) {
                return;
            }

            var storageKey = 'talisva_age_verified';

            if (localStorage.getItem(storageKey) === '1') {
                return;
            }

            document.addEventListener('DOMContentLoaded', function () {
                var modalEl = document.getElementById('ageVerificationModal');
                if (!modalEl || typeof bootstrap === 'undefined' || !bootstrap.Modal) {
                    return;
                }

                var modal = new bootstrap.Modal(modalEl, { backdrop: 'static', keyboard: false });
                modal.show();

                var yesBtn = modalEl.querySelector('[data-age-verify-yes]');
                var noBtn = modalEl.querySelector('[data-age-verify-no]');

                if (yesBtn) {
                    yesBtn.addEventListener('click', function () {
                        localStorage.setItem(storageKey, '1');
                        modal.hide();
                    });
                }

                if (noBtn) {
                    noBtn.addEventListener('click', function () {
                        window.location.href = 'https://www.google.com';
                    });
                }
            });
        })();
    </script>
@endpush
