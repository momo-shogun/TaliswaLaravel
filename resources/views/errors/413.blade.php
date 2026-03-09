<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>413 - File Too Large</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <style>
        body { font-family: system-ui, sans-serif; background: #f8f9fa; min-height: 100vh; display: flex; align-items: center; justify-content: center; margin: 0; }
        .error-box { max-width: 480px; padding: 2rem; background: #fff; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); text-align: center; }
        .error-code { font-size: 3rem; font-weight: 700; color: #2E473D; margin-bottom: 0.5rem; }
        .error-title { font-size: 1.25rem; color: #333; margin-bottom: 1rem; }
        .error-message { color: #666; line-height: 1.6; margin-bottom: 1.5rem; }
        .error-hint { font-size: 0.875rem; color: #888; margin-bottom: 1.5rem; }
        .btn-back { display: inline-block; padding: 0.6rem 1.5rem; background: #2E473D; color: #fff; text-decoration: none; border-radius: 8px; font-weight: 500; }
        .btn-back:hover { background: #243830; color: #fff; }
    </style>
</head>
<body>
    <div class="error-box">
        <div class="error-code">413</div>
        <h1 class="error-title">Request Entity Too Large</h1>
        <p class="error-message">{{ $message ?? 'The file or data you are uploading is too large.' }}</p>
        <p class="error-hint">Please use an image under 2MB. You can compress images using free tools online before uploading.</p>
        <a href="{{ url()->previous('/') }}" class="btn-back">Go Back</a>
    </div>
</body>
</html>
