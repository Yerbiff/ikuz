<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>

        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/app.css" rel="stylesheet" />
    </head>
    <body class="antialiased" id="page-top">
{{--        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">--}}

            <!-- Navigation-->
                <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
                    <div class="container px-4 px-lg-5">
                        <div class="flex justify-center md:justify-start pt-12 md:pl-12 md:-mb-24">
                            <a href="#" class="bg-gray-800 text-white font-bold text-xl p-4">Inkuz</a>
                        </div>
                        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                            Menu
                            <i class="fas fa-bars"></i>
                        </button>

                            <div class="collapse navbar-collapse" id="navbarResponsive">
                                <ul class="navbar-nav ms-auto">

                                        <li class="nav-item"><a class="nav-link" href="#about">O nas</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#projects">Asortyment</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#signup">Kontakt</a></li>
                                </ul>

                            <ul class="navbar-nav ms-auto">
                                @if (Route::has('login'))
                            @auth
                                <li class="nav-item"><a href="{{ url('/dashboard') }}" class="nav-link">Panel Główny</a></li>
                            @else
                                <li><a href="{{ route('login') }}" class="nav-link">Zaloguj się</a></li>

                                @if (Route::has('register'))
                                    <li><a href="{{ route('register') }}" class="nav-link">Rejestracja</a></li>
                                @endif
                            @endauth

                            </ul>
                            </div>
                    @endif
                    </div>
                </nav>
                <!-- Masthead-->
                <header class="masthead">
                    <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                        <div class="d-flex justify-content-center">
                            <div class="text-center">
                                <h1 class="mx-auto my-0 text-uppercase">Inkuz</h1>
                                <h2 class="text-white-50 mx-auto mt-2 mb-5">Powstało by ułatwić życie rolnikom. Dołącz do nas już dziś</h2>
                                <a class="btn btn-dark" href="#about">Zaczynajmy</a>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- About-->
                <section class="about-section text-center" id="about">
                    <div class="container px-4 px-lg-5">
                        <div class="row gx-4 gx-lg-5 justify-content-center">
                            <div class="col-lg-8">
                                <h2 class="text-white mb-4">Witaj w Inkuz</h2>
                                <p class="text-white-50">
                                    Działalność firmy Inkuz w Niesłabinie to między innymi efekt prężnie rozwijającej się stosunkowo młodej dziedziny nauki – genetyki. W branży pojawiliśmy się w 2014 roku. Prowadzimy licencjonowany bank nasienia krów i loch, a dodatkowo posiadamy uprawnienia do handlowania nim na terenie całej Polski. Sięgając po naszą genetykę, pozwalacie sobie drodzy klienci na odpowiedni kierunek w selekcji, który z pewnością wpłynie pozytywnie na polepszenie wydajności Waszych stad oraz na pewno przyniesie oczekiwane efekty. Wiemy doskonale, że zaufaniu, którym nas obdarzycie, będziemy musieli sprostać.
                                    Jesteśmy gotowi, aby w jak najbardziej rzetelny sposób zagwarantować wspólną mleczną przyszłość Zapraszamy do korzystania z naszych usług!
                                </p>
                            </div>
                        </div>
                        <img class="img-fluid" src="assets/img/ipad.png" alt="..." />
                    </div>
                </section>
                <!-- Projects-->
                <section class="projects-section bg-light" id="projects">
                    <div class="container px-4 px-lg-5">
                        <!-- Featured Project Row-->
                        <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                            <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/bg-masthead.jpg" alt="..." /></div>
                            <div class="col-xl-4 col-lg-5">
                                <div class="featured-text text-center text-lg-left">
                                    <h4>Witamy</h4>
                                    <p class="text-black-50 mb-0">Dzięki postępowi technologicznemu mamy możliwość ułatwiania i ulepszania wielu aspektów naszego życia. Zmiany dotyczą także kwestii związanej z genetyką zwierząt. Firma Inkuz w Niesłabinie posiada licencjonowany bank nasienia (i uprawnienia niezbędne do jego obrotu na terenie całego kraju), a zajmuje się inseminacją krów i loch.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Project One Row-->
                        <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                            <div class="col-lg-6"><img class="img-fluid" src="assets/img/demo-image-01.jpg" alt="..." /></div>
                            <div class="col-lg-6">
                                <div class="bg-black text-center h-100 project">
                                    <div class="d-flex h-100">
                                        <div class="project-text w-100 my-auto text-center text-lg-left">
                                            <h4 class="text-white">Krowy</h4>
                                            <p class="mb-0 text-white-50">Krowa robi </p>
                                            <hr class="d-none d-lg-block mb-0 ms-0" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Project Two Row-->
                        <div class="row gx-0 justify-content-center">
                            <div class="col-lg-6"><img class="img-fluid" src="assets/img/demo-image-02.jpg" alt="..." /></div>
                            <div class="col-lg-6 order-lg-first">
                                <div class="bg-black text-center h-100 project">
                                    <div class="d-flex h-100">
                                        <div class="project-text w-100 my-auto text-center text-lg-right">
                                            <h4 class="text-white">Lochy</h4>
                                            <p class="mb-0 text-white-50">Swinia robi</p>
                                            <hr class="d-none d-lg-block mb-0 me-0" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Signup-->
                <section class="signup-section" id="signup">
                    <div class="container px-4 px-lg-5">
                        <div class="row gx-4 gx-lg-5">
                            <div class="col-md-10 col-lg-8 mx-auto text-center">
                                <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                                <h2 class="text-white mb-5">Zasubskrybuj by być na bierząco</h2>
                                <!-- * * * * * * * * * * * * * * *-->
                                <!-- * * SB Forms Contact Form * *-->
                                <!-- * * * * * * * * * * * * * * *-->
                                <!-- This form is pre-integrated with SB Forms.-->
                                <!-- To make this form functional, sign up at-->
                                <!-- https://startbootstrap.com/solution/contact-forms-->
                                <!-- to get an API token!-->
                                <form class="form-signup" id="contactForm" data-sb-form-api-token="API_TOKEN">
                                    <!-- Email address input-->
                                    <div class="row input-group-newsletter">
                                        <div class="col"><input class="form-control" id="emailAddress" type="email" placeholder="Wpisz adres email" aria-label="Enter email address..." data-sb-validations="required,email" /></div>
                                        <div class="col-auto"><button class="bg-gray-800 btn text-white disabled" id="submitButton" type="submit">Powiadom mnie</button></div>
                                    </div>
                                    <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:required">An email is required.</div>
                                    <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:email">Email is not valid.</div>
                                    <!-- Submit success message-->
                                    <!---->
                                    <!-- This is what your users will see when the form-->
                                    <!-- has successfully submitted-->
                                    <div class="d-none" id="submitSuccessMessage">
                                        <div class="text-center mb-3 mt-2 text-white">
                                            <div class="fw-bolder">Sukces</div>
                                            Twój adres email zosatł dodany do newslettera
                                        </div>
                                    </div>
                                    <!-- Submit error message-->
                                    <!---->
                                    <!-- This is what your users will see when there is-->
                                    <!-- an error submitting the form-->
                                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3 mt-2">Error sending message!</div></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Contact-->
                <section class="contact-section bg-black">
                    <div class="container px-4 px-lg-5">
                        <div class="row gx-4 gx-lg-5">
                            <div class="col-md-4 mb-3 mb-md-0">
                                <div class="card py-4 h-100">
                                    <div class="card-body text-center">
                                        <i class="fas fa-map-marked-alt text-gray-800 mb-2"></i>
                                        <h4 class="text-uppercase m-0">Adres</h4>
                                        <hr class="my-4 mx-auto" />
                                        <div class="small text-black-50">ul. Jeziorna 12
                                            63-100 Niesłabin</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3 mb-md-0">
                                <div class="card py-4 h-100">
                                    <div class="card-body text-center">
                                        <i class="fas fa-envelope text-gray-800 mb-2"></i>
                                        <h4 class="text-uppercase m-0">Email</h4>
                                        <hr class="my-4 mx-auto" />
                                        <div class="small text-black-50"><a href="#!">teamaned@gmail.pl</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3 mb-md-0">
                                <div class="card py-4 h-100">
                                    <div class="card-body text-center">
                                        <i class="fas fa-mobile-alt text-gray-800 mb-2"></i>
                                        <h4 class="text-uppercase m-0">Telefon</h4>
                                        <hr class="my-4 mx-auto" />
                                        <div class="small text-black-50">697 294 065</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="social d-flex justify-content-center">
                            <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="mx-2" href="#!"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </section>
                <!-- Footer-->
                <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; Inkuz 2021</div></footer>
                <!-- Bootstrap core JS-->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
                <!-- Core theme JS-->
                <script src="js/scripts.js"></script>
                <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
                <!-- * *                               SB Forms JS                               * *-->
                <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
                <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
                <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

{{--        </div>--}}
    </body>
</html>
