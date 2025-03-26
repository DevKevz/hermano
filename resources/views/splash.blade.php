<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hermano - Splash</title>
    <link rel="stylesheet" href="{{ asset('css/splash.css') }}">
</head>
<body>
    <div class="splash-container">
        <img src="{{ asset('assets/images/logo.png') }}" alt="Hermano Logo" class="fade-in">
    </div>

    <script>
        setTimeout(() => {
            window.location.href = "{{ url('/home') }}"; 
        }, 3000);
    </script>
</body>
</html>
