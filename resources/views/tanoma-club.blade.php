@extends('layouts.app')

@section('title', 'Tanoma Club - Talisva Website')

@section('body-class', 'tanoma-club-page')

@section('content')
    <!-- Tanoma Club Section -->
    <section class="tanoma-club-section tanoma-club-bg">
        <!-- Back button -->
        <a href="{{ url('/') }}" class="tanoma-club--back-btn">
            <img src="{{ asset('assets/img/backbtn.png') }}" alt="Back">
        </a>

        <div class="tanoma-club--content-box">
            <h4 class="tanoma-club--title">Tanoma Club</h4>
            <p class="info-boxes--content-box--title-desc" style="color: var(--light-white-color);">
            Deals, Subscriptions, Rewards and much more!
            </p>
            <img src="{{ asset('assets/img/house.png') }}" class="img-fluid tanoma-club--img" alt="" srcset="">

            <button type="button" class="tanoma-club--btn primary-btn" id="tanoma-join-now-btn">Join Now</button>
        </div>

    </section>

    <!-- Description section (same style as Winery Experience) – content from admin Tanoma Club Rewards -->
    <section class="tanoma-club-description">
        <div class="container">
            <h3 class="winery-experience--title">{{ $reward->title }}</h3>
            <div class="winery-experience--text">
                @if ($reward->description)
                    @foreach (array_filter(explode("\n", $reward->description)) as $para)
                        <p>{{ $para }}</p>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

    <!-- Tanoma Club Join modal (same as home) -->
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
@endsection

@push('head')
    <style>
        .subscribe-modal { position: fixed; inset: 0; z-index: 9999; align-items: center; justify-content: center; padding: 1rem; }
        .subscribe-modal__backdrop { position: absolute; inset: 0; background: rgba(0,0,0,0.4); }
        .tanoma-modal__box { position: relative; background: #fff; max-width: 400px; width: 100%; border-radius: 16px; box-shadow: 0 24px 48px rgba(0,0,0,0.18), 0 0 0 1px rgba(0,0,0,0.04); overflow: hidden; text-align: center; }
        .tanoma-modal__header { background: #365b49; background-image: none; padding: 1.75rem 1.5rem; color: #fff; }
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
@endpush

@push('scripts')
    <script>
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
