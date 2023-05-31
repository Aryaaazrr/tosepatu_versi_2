<!DOCTYPE html>
<html lang="en" id="#">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>Tosepatu - Anda Untung Kami Berkah</title>


    <!-- Font cdn link js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!-- Link eksternal file CSS -->
    {{-- <link rel="stylesheet" href="css/style.css" /> --}}

    <!-- Icon -->
    <link rel="shortcut icon" href="img/icon-tab.jpg" />

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    @include('partials.navbar')
    
    @yield('content')

    @include('partials.footer')

    <script src="js/script.js"></script>
</body>

</html>