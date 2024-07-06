
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- SEO Meta Tags -->
        <meta name="description" content="Your description">
        <meta name="author" content="Your name">

        <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
        <meta property="og:site_name" content="" /> <!-- website name -->
        <meta property="og:site" content="" /> <!-- website link -->
        <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
        <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
        <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
        <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
        <meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

        <!-- Webpage Title -->
        <title>BengkelMotor Papazola</title>
        
        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
        <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ url('css/fontawesome-all.min.css') }}" rel="stylesheet">
        <link href="{{ url('css/swiper.css') }}" rel="stylesheet">
        <link href="{{ url('css/styles.css') }}" rel="stylesheet">
        
        <!-- Favicon  -->
        <link rel="icon" href="{{ url('images/favicon.png') }}">
    </head>
    <body data-bs-spy="scroll" data-bs-target="#navbarExample">
        
        <!-- Navigation -->
        <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation">
            <div class="container">

                {{-- <!-- Image Logo -->
                <a class="navbar-brand logo-image" href="index.html"><img src="images/logo.svg" alt="alternative"></a>  --}}

                <!-- Text Logo - Use this if you don't have a graphic logo -->
                <!-- <a class="navbar-brand logo-text" href="index.html">Ioniq</a> -->

                <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav ms-auto navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#header">Home</a>
                        </li>
                    </ul>
                    <span class="nav-item">
                        <a class="btn-outline-sm" href="{{ route('login') }}">Log in</a>
                    </span>
                </div> <!-- end of navbar-collapse -->
            </div> <!-- end of container -->
        </nav> <!-- end of navbar -->
        <!-- end of navigation -->

        
        <!-- Header -->
        <header id="header" class="header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h1 class="h1-large">Aplikasi Bengkel Motor Papazola</h1>
                            <p class="p-large">Penjualan Sparepart Motor</p>
                            <a class="btn-solid-lg" href="{{ route('register') }}">Sign up for free</a>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img class="img-fluid" src="images/header-illustration.svg" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </header> <!-- end of header -->
        <!-- end of header -->

        <!-- Back To Top Button -->
        <button onclick="topFunction()" id="myBtn">
            <img src="{{ url('images/up-arrow.png') }}" alt="alternative">
        </button>
        <!-- end of back to top button -->
            
        <!-- Scripts -->
        <script src="{{ url('js/bootstrap.min.js') }}"></script> <!-- Bootstrap framework -->
        <script src="{{ url('js/swiper.min.js') }}"></script> <!-- Swiper for image and text sliders -->
        <script src="{{ url('js/purecounter.min.js') }}"></script> <!-- Purecounter counter for statistics numbers -->
        <script src="{{ url('js/replaceme.min.js') }}"></script> <!-- ReplaceMe for rotating text -->
        <script src="{{ url('js/scripts.js') }}"></script> <!-- Custom scripts -->
    </body>
</html>