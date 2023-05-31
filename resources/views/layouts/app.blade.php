<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font cdn link js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <Title>@yield('title') | Tosepatu - Anda Untung Kami Berkah</Title>

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
    @include('sweetalert::alert')

    @include('partials.navbar-sign')
    @include('partials.sidebar')
    {{-- <h1 class="text-3xl font-bold underline"> --}}
    @yield('content')
    {{-- </h1> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/6.0.6/highcharts.js" charset="utf-8"></script>
    
</body>

</html>
