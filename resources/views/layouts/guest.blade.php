<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font cdn link js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <Title>Login | Tosepatu - Anda Untung Kami Berkah</Title>

    <!-- Link eksternal file CSS -->
    {{-- <link rel="stylesheet" href="css/style.css" /> --}}

    <!-- Icon -->
    <link rel="shortcut icon" href="/img/icon-tab.jpg" />

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-slate-50">
    {{-- <h1 class="text-3xl font-bold underline"> --}}
    <div class="w-full flex min-h-screen items-center justify-center">
        @yield('content')
    </div>
    {{-- </h1> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>

</html>
