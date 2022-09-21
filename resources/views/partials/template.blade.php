<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marcella</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/css/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>

</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg shadow-sm py-3 fixed-top" id="navbar">
        @include('partials.navbar')
    </nav>
    <!-- end-navbar -->

    @yield('content')

    <div class="container-fluid d-flex justify-content-end fixed-bottom p-4 whatsapp" data-aos="fade-up" data-aos-delay="250">
        <button onclick="topFunction()" class="btn btn-secondary py-2"><i class="fa-solid fa-arrow-up"></i></button>
    </div>

    @include('partials.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://unpkg.com/popper.js@1.12.8/dist/umd/popper.min.js"></script>
    <script src="https://unpkg.com/tooltip.js@1.3.1/dist/umd/tooltip.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="css/js/particles.js"></script>
    <script src="css/js/app.js"></script>
    <script src="css/js/lib/stats.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        new Typed('#typed',{
            strings : ['Start', 'Marcella'],
            typeSpeed : 250,
            delaySpeed : 250,
            loop : true
        });
        function topFunction(){
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }


    </script>
    <script>
        $( window ).on( "load", function() {
            mainNav();
            $(window).scroll(function() {
                if ( $(window).scrollTop() > 10 ) {
                    $('.navbar').css('background-color', '#fff');
                } else {
                    $('.navbar').css('background', 'transparent');
                }
                mainNav();
            });
            function mainNav() {
                var top = (document.documentElement && document.documentElement.scrollTop) || document.body.scrollTop;
                console.log(top)
                if (top > 40) $('#navbar').stop().animate({
                    "opacity": '1',
                    "top": '0'
                });
                else $('#navbar').stop().animate({
                    "top": '-70',
                    "opacity": '0'
                });

            }
             });
    </script>

</body>
</html>
