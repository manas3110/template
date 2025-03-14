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
        <title>Article Details - Ioniq</title>
        
        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
        <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
        
        <link href="{{ asset('assets/css/fontawesome-all.min.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/css/swiper.css')}}" rel="stylesheet">
        
        <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
        
        <!-- Favicon  -->
        <link rel="icon" href="{{asset('/assets/images/favicon.png')}}">
    </head>
    <body data-bs-spy="scroll" data-bs-target="#navbarExample">
        
        <!-- Navigation -->
        <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation">
            <div class="container">

                <!-- Image Logo -->
                <a class="navbar-brand logo-image" href="{{route('index')}}"><img src="{{asset('/assets/images/logo.svg')}}" alt="alternative"></a> 

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
                        <li class="nav-item">
                            <a class="nav-link" href="#features">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#details">Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#pricing">Pricing</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Drop</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown01">
                                <li><a class="dropdown-item" href="{{route('article')}}">Article Details</a></li>
                                <li><div class="dropdown-divider"></div></li>
                                <li><a class="dropdown-item" href="{{route('terms')}}">Terms Conditions</a></li>
                                <li><div class="dropdown-divider"></div></li>
                                <li><a class="dropdown-item" href="{{route('privacy')}}">Privacy Policy</a></li>
                            </ul>
                        </li>
                    </ul>
                    <span class="nav-item">
                        <a class="btn-outline-sm" href="{{route('login')}}">Log in</a>
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
                            <h1 class="h1-large">The #1 CRM app for <span class="replace-me">small business, young startups, bootstrappers</span></h1>
                            <p class="p-large">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dignissim, neque ut vanic barem ultrices sollicitudin</p>
                            <a class="btn-solid-lg" href="{{route('signup')}}">Sign up for free</a>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img class="img-fluid" src="{{asset('assets/images/header-illustration.svg')}}" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </header> <!-- end of header -->
        <!-- end of header -->


        <!-- Features -->
        <div id="features" class="cards-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="h2-heading">Ioniq CRM application is packed with <span>awesome features</span></h2>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
                <div class="row">
                    <div class="col-lg-12">
                        
                        <!-- Card -->
                        <div class="card">
                            <div class="card-icon">
                                <span class="fas fa-headphones-alt"></span>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Customer Lists</h4>
                                <p>Et blandit nisl libero at arcu. Donec ac lectus sed tellus mollis viverra. Nullam pharetra ante at nunc elementum</p>
                            </div>
                        </div>
                        <!-- end of card -->

                        <!-- Card -->
                        <div class="card">
                            <div class="card-icon green">
                                <span class="far fa-clipboard"></span>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Sales Tracking</h4>
                                <p>Vulputate nibh feugiat. Morbi pellent diam nec libero lacinia, sed ultrices velit scelerisque. Nunc placerat justo sem</p>
                            </div>
                        </div>
                        <!-- end of card -->

                        <!-- Card -->
                        <div class="card">
                            <div class="card-icon blue">
                                <span class="far fa-comments"></span>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Reporting Tool</h4>
                                <p>Ety suscipit metus sollicitudin euqu isq imperdiet nibh nec magna tincidunt, nec pala vehicula neque sodales verum</p>
                            </div>
                        </div>
                        <!-- end of card -->

                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of cards-1 -->
        <!-- end of services -->


        <!-- Details 1 -->
        <div id="details" class="basic-1 bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-5">
                        <div class="text-container">
                            <h2>Manage your customer’s expectations and get them to trust you</h2>
                            <p>Vestibulum ullamcorper augue ex, imperdiet tincidunt tellus bibendum inconsectetur rutrum mauris orbi scelerisque cursus augue, ac suscipit sem mattis at ut suscipit</p>
                            <a class="btn-solid-reg" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Modal</a>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6 col-xl-7">
                        <div class="image-container">
                            <img class="img-fluid" src="{{asset('assets/images/details-1.svg')}}" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of basic-1 -->
        <!-- end of details 1 -->


        <!-- Details Modal -->
        <div id="staticBackdrop" class="modal fade" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="row">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="col-lg-8">
                            <div class="image-container">
                                <img class="img-fluid" src="{{asset('assets/images/details-modal.jpg')}}" alt="alternative">
                            </div> <!-- end of image-container -->
                        </div> <!-- end of col -->
                        <div class="col-lg-4">
                            <h3>Goals Setting</h3>
                            <hr>
                            <p>In gravida at nunc sodales pretium. Vivamus semper, odio vitae mattis auctor, elit elit semper magna ac tum nico vela spider</p>
                            <h4>User Feedback</h4>
                            <p>Sapien vitae eros. Praesent ut erat a tellus posuere nisi more thico cursus pharetra finibus posuere nisi. Vivamus feugiat</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="d-flex">
                                    <i class="fas fa-chevron-right"></i>
                                    <div class="flex-grow-1">Tincidunt sem vel brita bet mala</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-chevron-right"></i>
                                    <div class="flex-grow-1">Sapien condimentum sacoz sil necr</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-chevron-right"></i>
                                    <div class="flex-grow-1">Fusce interdum nec ravon fro urna</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-chevron-right"></i>
                                    <div class="flex-grow-1">Integer pulvinar biolot bat tortor</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-chevron-right"></i>
                                    <div class="flex-grow-1">Id ultricies fringilla fangor raq trinit</div>
                                </li>
                            </ul>
                            <a id="modalCtaBtn" class="btn-solid-reg" href="#your-link">Details</a>
                            <button type="button" class="btn-outline-reg" data-bs-dismiss="modal">Close</button>
                        </div> <!-- end of col -->
                    </div> <!-- end of row -->
                </div> <!-- end of modal-content -->
            </div> <!-- end of modal-dialog -->
        </div> <!-- end of modal -->
        <!-- end of details modal -->


        <!-- Details 2 -->
        <div class="basic-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img class="img-fluid" src="{{asset('assets/images/details-2.png')}}" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h2>Anyone can start using the app with minimum skills</h2>
                            <p>Velit dictum non proin egestas convallis nunc, eu auctor massa. Nam hendrerit, eros ut viverra lobortis, mauris nisi porta risus, placerat dignissim tellus auctor masse</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="d-flex">
                                    <i class="fas fa-square"></i>
                                    <div class="flex-grow-1">Fusce ipsum augue, ultrices rutrum est accel, pulvin</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-square"></i>
                                    <div class="flex-grow-1">Fermentum elit. Vestibulum cursuso bibendum viverra</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-square"></i>
                                    <div class="flex-grow-1">Quisque blandit pulvinar metus, eu sta malesuada</div>
                                </li>
                            </ul>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of basic-2 -->
        <!-- end of details 2 -->


        <!-- Testimonials -->
        <div class="slider-1 bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="h2-heading">Few words from our clients</h2>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
                <div class="row">
                    <div class="col-lg-12">

                        <!-- Card Slider -->
                        <div class="slider-container">
                            <div class="swiper-container card-slider">
                                <div class="swiper-wrapper">
                                    
                                    <!-- Slide -->
                                    <div class="swiper-slide">
                                        <div class="card">
                                            <img class="card-image" src="{{asset('assets/images/testimonial-1.jpg')}}" alt="alternative">
                                            <div class="card-body">
                                                <p class="testimonial-text">Tortor sodales eget. Vivamus imperdiet leo eu risus tincidunt uris. Proin placerat, urna hendrerit placerat erase convallis</p>
                                                <p class="testimonial-author">Jude Thorn - Designer</p>
                                            </div>
                                        </div>
                                    </div> <!-- end of swiper-slide -->
                                    <!-- end of slide -->
            
                                    <!-- Slide -->
                                    <div class="swiper-slide">
                                        <div class="card">
                                            <img class="card-image" src="{{asset('assets/images/testimonial-2.jpg')}}" alt="alternative">
                                            <div class="card-body">
                                                <p class="testimonial-text">Eros volutpat ante mauris euismod sem, ut varius nisi lectus in urna. Integer luctus, nunc eget maximus intem, orci risus</p>
                                                <p class="testimonial-author">Roy Smith - Developer</p>
                                            </div>
                                        </div>        
                                    </div> <!-- end of swiper-slide -->
                                    <!-- end of slide -->
            
                                    <!-- Slide -->
                                    <div class="swiper-slide">
                                        <div class="card">
                                            <img class="card-image" src="{{asset('assets/images/testimonial-3.jpg')}}" alt="alternative">
                                            <div class="card-body">
                                                <p class="testimonial-text">Sed congue ex quam, sit amet venenatis dolor lacinia vulputate. Nunc pulvinar ex ex, sit amet scelerisque tellus pretium semper</p>
                                                <p class="testimonial-author">Marsha Singer - Marketer</p>
                                            </div>
                                        </div>        
                                    </div> <!-- end of swiper-slide -->
                                    <!-- end of slide -->
            
                                    <!-- Slide -->
                                    <div class="swiper-slide">
                                        <div class="card">
                                            <img class="card-image" src="{{asset('assets/images/testimonial-4.jpg')}}" alt="alternative">
                                            <div class="card-body">
                                                <p class="testimonial-text">Etiam est lorem, interdum non semper ut, bibendum vitae ante. Pellente sollicitun sagittis lectus. Aenean in comod</p>
                                                <p class="testimonial-author">Tim Shaw - Designer</p>
                                            </div>
                                        </div>
                                    </div> <!-- end of swiper-slide -->
                                    <!-- end of slide -->
            
                                    <!-- Slide -->
                                    <div class="swiper-slide">
                                        <div class="card">
                                            <img class="card-image" src="{{asset('assets/images/testimonial-5.jpg')}}" alt="alternative">
                                            <div class="card-body">
                                                <p class="testimonial-text">Quisque nec turpis placerat, accumsan lorem lobortis, vestibulum elit. Fusce finibus nisl varius semper elementum vivamus</p>
                                                <p class="testimonial-author">Lindsay Spice - Marketer</p>
                                            </div>
                                        </div>        
                                    </div> <!-- end of swiper-slide -->
                                    <!-- end of slide -->
            
                                    <!-- Slide -->
                                    <div class="swiper-slide">
                                        <div class="card">
                                            <img class="card-image" src="{{asset('assets/images/testimonial-6.jpg')}}" alt="alternative">
                                            <div class="card-body">
                                                <p class="testimonial-text">Vulputate sed tellus nec, imperdiet luctus purus. Morbi lobortis massa a mi interdum condimentum. Integer non gravida nisi</p>
                                                <p class="testimonial-author">Ann Blake - Developer</p>
                                            </div>
                                        </div>        
                                    </div> <!-- end of swiper-slide -->
                                    <!-- end of slide -->
                                
                                </div> <!-- end of swiper-wrapper -->
            
                                <!-- Add Arrows -->
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <!-- end of add arrows -->
            
                            </div> <!-- end of swiper-container -->
                        </div> <!-- end of slider-container -->
                        <!-- end of card slider -->

                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of slider-1 -->
        <!-- end of testimonials -->


        <!-- Invitation -->
        <div class="basic-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h4>Ioniq will change the way you think about CRM solutions due to it’s advanced tools and integrated functionalities</h4>
                        <a class="btn-outline-lg page-scroll" href="{{route('signup')}}">Sign up for free</a>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of basic-3 -->
        <!-- end of invitation -->


        <!-- Pricing -->
        <div id="pricing" class="cards-2 bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="h2-heading">Free forever tier and 2 pro plans</h2>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
                <div class="row">
                    <div class="col-lg-12">
                        
                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <img class="decoration-lines" src="{{asset('assets/images/decoration-lines.svg')}}" alt="alternative"><span>Free tier</span><img class="decoration-lines flipped" src="{{asset('assets/images/decoration-lines.svg')}}" alt="alternative">
                                </div>
                                <ul class="list-unstyled li-space-lg">
                                    <li>Fusce pulvinar eu mi acm</li>
                                    <li>Curabitur consequat nisl bro</li>
                                    <li>Reget facilisis molestie</li>
                                    <li>Vivamus vitae sem in tortor</li>
                                    <li>Pharetra vehicula ornares</li>
                                    <li>Vivamus dignissim sit amet</li>
                                    <li>Ut convallis aliquama set</li>
                                </ul>
                                <div class="price">Free</div>
                                <a href="{{route('signup')}}" class="btn-solid-reg">Sign up</a>
                            </div>
                        </div>
                        <!-- end of card -->

                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <img class="decoration-lines" src="{{asset('assets/images/decoration-lines.svg')}}" alt="alternative"><span>Advanced</span><img class="decoration-lines flipped" src="{{asset('assets/images/decoration-lines.svg')}}" alt="alternative">
                                </div>
                                <ul class="list-unstyled li-space-lg">
                                    <li>Nunc commodo magna quis</li>
                                    <li>Lacus fermentum tincidunt</li>
                                    <li>Nullam lobortis porta diam</li>
                                    <li>Announcing of invita mro</li>
                                    <li>Dictum metus placerat luctus</li>
                                    <li>Sed laoreet blandit mollis</li>
                                    <li>Mauris non luctus est</li>
                                </ul>
                                <div class="price">$19<span>/month</span></div>
                                <a href="{{route('signup')}}" class="btn-solid-reg">Sign up</a>
                            </div>
                        </div>
                        <!-- end of card -->

                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <img class="decoration-lines" src="{{asset('assets/images/decoration-lines.svg')}}" alt="alternative"><span>Professional</span><img class="decoration-lines flipped" src="{{asset('assets/images/decoration-lines.svg')}}" alt="alternative">
                                </div>
                                <ul class="list-unstyled li-space-lg">
                                    <li>Quisque rutrum mattis</li>
                                    <li>Quisque tristique cursus lacus</li>
                                    <li>Interdum sollicitudin maec</li>
                                    <li>Quam posuerei pellentesque</li>
                                    <li>Est neco gravida turpis integer</li>
                                    <li>Mollis felis. Integer id quam</li>
                                    <li>Id tellus hendrerit lacinia</li>
                                </ul>
                                <div class="price">$29<span>/month</span></div>
                                <a href="{{route('signup')}}" class="btn-solid-reg">Sign up</a>
                            </div>
                        </div>
                        <!-- end of card -->

                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of cards-2 -->
        <!-- end of pricing -->


        <!-- Questions -->
        <div class="accordion-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="h2-heading">Frequent questions</h2>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->   
                <div class="row">
                    <div class="col-lg-12">
                        <div class="accordion" id="accordionExample">
                            
                            <!-- Accordion Item -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">How can I contact you quickly and get a reasonable quote more for my project?</button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">Sed lacinia cursus viverra. Nunc sed libero euismod, congue dui a, vulputate quam. Pellentesque neque nisi, ultrices ut ipsum ac, mattis sollicitudin neque. Ut ac nunc sem. Etiam id erat facilisis magna sagittis porta. Donec eu dolor eu dolor finibus sodales consectetur, et condimentum elit tincidunt</div>
                                </div>
                            </div>
                            <!-- end of accordion-item -->

                            <!-- Accordion Item -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Is the Free Tier available for unlimited time or it will end more words after a while?</button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">Mauris faucibus placerat nisl. Sed eros odio, posuere at felis quis, tincidunt facilisis nibh. Nulla in ante sem. Nam aliquam urna nisi, cursus semper dolor convallis at. Duis vulputate est in consectetur, et condimentum elit tincidunt libero consectetur, et condimentum suis vulputate est in libero</div>
                                </div>
                            </div>
                            <!-- end of accordion-item -->

                            <!-- Accordion Item -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Can I use the app on mobile devices or it’s limited more words to desktop use?</button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">Nullam at diam at mi facilisis consectetur at non turpis. Proin a felis nisi. Sed at orci rutrum, tincidunt magna vel, pharetra libero. Proin mauris orci, faucibus eget malesuada vel, consectetur, et condimentum elit tincidunt pellentesque vitae ligula. Pellentesque euismod tincidun</div>
                                </div>
                            </div>
                            <!-- end of accordion-item -->

                        </div> <!-- end of accordion -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of accordion-1 -->
        <!-- end of questions -->


        <!-- Footer -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-col first">
                            <h6>About Website</h6>
                            <p class="p-small">Proin ut felis purus vestibulum in orci molestie, efficitur lacus ac pellentesque elit. Fusce mollis laoreet lobortis nulla ac efficitur lacus ac </p>
                        </div> <!-- end of footer-col -->
                        <div class="footer-col second">
                            <h6>Links</h6>
                            <ul class="list-unstyled li-space-lg p-small">
                                <li>Important: <a href="{{route('terms')}}">Terms & Conditions</a>, <a href="privacy.html">Privacy Policy</a></li>
                                <li>Useful: <a href="#">Colorpicker</a>, <a href="#">Icon Library</a>, <a href="#">Illustrations</a></li>
                                <li>Menu: <a href="#header">Home</a>, <a href="#features">Features</a>, <a href="#details">Details</a>, <a href="#pricing">Pricing</a></li>
                            </ul>
                        </div> <!-- end of footer-col -->
                        <div class="footer-col third">
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-pinterest-p fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-instagram fa-stack-1x"></i>
                                </a>
                            </span>
                            <p class="p-small">Quam posuerei pellent esque vam <a href="mailto:contact@site.com"><strong>contact@site.com</strong></a></p>
                        </div> <!-- end of footer-col -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of footer -->  
        <!-- end of footer -->

   
        <!-- Copyright -->
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p class="p-small">Copyright © <a href="#your-link">Your name</a></p>
                    </div> <!-- end of col -->

                    <div class="col-lg-6">
                        <p class="p-small">Distributed By<a href="https://themewagon.com/"> Themewagon</a></p>    
                    </div> <!-- end of col -->
                </div> <!-- enf of row -->
            </div> <!-- end of container -->
        </div> <!-- end of copyright --> 
        <!-- end of copyright -->
        

        <!-- Back To Top Button -->
        <button onclick="topFunction()" id="myBtn">
            <img src="{{asset('assets/images/up-arrow.png')}}" alt="alternative">
        </button>
        <!-- end of back to top button -->
            
        <!-- Scripts -->
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script> <!-- Bootstrap framework -->
        <script src="{{asset('assets/js/swiper.min.js')}}"></script> <!-- Swiper for image and text sliders -->
        <script src="{{asset('assets/js/purecounter.min.js')}}"></script> <!-- Purecounter counter for statistics numbers -->
        <script src="{{asset('assets/js/replaceme.min.js')}}"></script> <!-- ReplaceMe for rotating text -->
        <script src="{{asset('assets/js/scripts.js')}}"></script> <!-- Custom scripts -->
    </body>
</html>