<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- All CSS Links -->
        <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css">
        <link rel="stylesheet" href="../assets/css/odometer.min.css">
        <link rel="stylesheet" href="../assets/css/meanmenu.min.css">
        <link rel="stylesheet" href="../assets/css/animate.min.css">
        <link rel="stylesheet" href="../assets/dist/output.css">

        <title>Togy - Tailwind Technology Startup Template</title>
        <link rel="icon" type="image/png" href="../../assets/img/favicon.png">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    </head>
    <body>

            <x-posts.post-navigation />
            @include('components.layouts._main-mobile-navigation')


        {{ $slot }}


            <!-- Footer Area -->
            {{-- <x-footer.footer-index /> --}}

            <!-- Copyright Area -->
            <x-footer.copyright-area />

            <!-- Go Top Button-->
            <x-go-top />

        <!-- All JS Links -->
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/swiper-bundle.min.js"></script>
        <script src="../assets/js/appear.min.js"></script>
        <script src="../assets/js/odometer.min.js"></script>
        <script src="../assets/js/magnific-popup.min.js"></script>
        <script src="../assets/js/meanmenu.min.js"></script>
        <script src="../assets/js/wow.min.js"></script>
        <script src="../assets/js/main.js"></script>
    </body>
</html>