
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
        <title>Log In</title>
        
        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
        <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ url('css/fontawesome-all.min.css') }}" rel="stylesheet">
        <link href="{{ url('css/swiper.css') }}" rel="stylesheet">
        <link href="{{ url('css/styles.css') }}" rel="stylesheet">
        
        <!-- Favicon  -->
        <link rel="icon" href="{{ url('images/favicon.png') }}">
    </head>
    <body>
        
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
                            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                        </li>
                    </ul>
                </div> <!-- end of navbar-collapse -->
            </div> <!-- end of container -->
        </nav> <!-- end of navbar -->
        <!-- end of navigation -->


        <!-- Header -->
        <header class="ex-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 offset-xl-1">
                        <h1 class="text-center">Log In</h1>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </header> <!-- end of ex-header -->
        <!-- end of header -->
        
        
        <!-- Basic -->
        <div class="ex-form-1 pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3">
                        <div class="text-box mt-5 mb-5">
                            <!-- Log In Form -->
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="mb-4 form-floating">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukan email" required>
                                    <label for="email">Email address</label>
                                </div>
                                <div class="mb-4 form-floating">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukan password" required>
                                    <label for="password">Password</label>
                                </div>
                                <button type="submit" class="form-control-submit-button">Log in</button>
                                
                                <p class="mb-4 text-center"> Belum punya akun? Silahkan <a class="blue" href="{{ route('register') }}">Sign Up</a></p>

                            </form>
                            <!-- end of log in form -->

                        </div> <!-- end of text-box -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of ex-basic-1 -->
        <!-- end of basic -->
            
        <!-- Scripts -->
        <script src="{{ url('js/bootstrap.min.js') }}"></script> <!-- Bootstrap framework -->
        <script src="{{ url('js/swiper.min.js') }}"></script> <!-- Swiper for image and text sliders -->
        <script src="{{ url('js/purecounter.min.js') }}"></script> <!-- Purecounter counter for statistics numbers -->
        <script src="{{ url('js/replaceme.min.js') }}"></script> <!-- ReplaceMe for rotating text -->
        <script src="{{ url('js/scripts.js') }}"></script> <!-- Custom scripts -->
    </body>
</html>