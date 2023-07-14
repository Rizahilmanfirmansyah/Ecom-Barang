<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div>
        {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Belanjaku</title>
        <link rel="icon" href="img/favicon.png">
         <!-- Bootstrap CSS -->
         <link rel="stylesheet" href="{{ asset('belanja/css/bootstrap.min.css')}}">
         <!-- animate CSS -->
         <link rel="stylesheet" href="{{ asset('belanja/css/animate.css')}}">
         <!-- owl carousel CSS -->
         <link rel="stylesheet" href="{{ asset('belanja/css/owl.carousel.min.css')}}">
         <!-- themify CSS -->
         <link rel="stylesheet" href="{{ asset('belanja/css/themify-icons.css')}}">
         <!-- flaticon CSS -->
         <link rel="stylesheet" href="{{ asset('belanja/css/flaticon.css')}}">
         <!-- font awesome CSS -->
         <link rel="stylesheet" href="{{ asset('belanja/css/magnific-popup.css')}}">
         <!-- swiper CSS -->
         <link rel="stylesheet" href="{{ asset('belanja/css/slick.css')}}">
         <link rel="stylesheet" href="{{ asset('belanja/css/gijgo.min.css')}}">
         <link rel="stylesheet" href="{{ asset('belanja/css/nice-select.css')}}">
         <link rel="stylesheet" href="{{ asset('belanja/css/all.css')}}">
         <!-- style CSS -->
         <link rel="stylesheet" href="{{ asset('belanja/css/style.css')}}">
         <!-- Icon ya -->
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
         <style>
            .countCart{
                position: relative;
            }
            .countCart span{
                position: absolute;
                top: -8px;
                right: 5px;
                display: block;
            }
        </style>
         @livewireStyles
    </head>
    
    <body>
        <!--::header part start::-->
        
        <!-- Header part end-->
    
        <!-- breadcrumb start-->
        <section class="breadcrumb breadcrumb_bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb_iner text-center">
                            <div class="breadcrumb_iner_item">
                                <h2>Menu Makanan</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb start-->
    
        <!--::chefs_part start::-->
        <!-- food_menu start-->
        <section class="food_menu gray_bg">
            <div class="container">
                <div class="col-lg-6">
                    <div class="section_tittle">
                        <h3><b style="color: #2FDBBC;">B</b>elanja</a></h3>
                        <h2>Peralatan</h2>
                        <div class="">
                            {{-- @livewire('header-search-component') --}}
                        </div>
                    </div>
                </div>
                <div class="justify-content-between">
                    {{-- <div class="col-lg-5">
                        <div class="section_tittle">
                            <p>Menu</p>
                            <h2>Delicious Food Menu</h2>
                            @livewire('search-component')
                        </div>
                    </div> --}}
                    {{-- <div class="col-lg-6">
                        <div class="nav nav-tabs food_menu_nav" id="myTab" role="tablist">
                            <a class="active" id="Special-tab" data-toggle="tab" href="#Special" role="tab"
                                aria-controls="Special" aria-selected="false">Special <img src="{{ asset('ekantin/img/icon/play.svg')}}"
                                    alt="play"></a>
                            <a id="Breakfast-tab" data-toggle="tab" href="#Breakfast" role="tab" aria-controls="Breakfast"
                                aria-selected="false">Breakfast <img src="img/icon/play.svg" alt="play"></a>
                            <a id="Launch-tab" data-toggle="tab" href="#Launch" role="tab" aria-controls="Launch"
                                aria-selected="false">Launch <img src="img/icon/play.svg" alt="play"></a>
                            <a id="Dinner-tab" data-toggle="tab" href="#Dinner" role="tab" aria-controls="Dinner"
                                aria-selected="false">Dinner <img src="img/icon/play.svg" alt="play"> </a>
                            <a id="Sneaks-tab" data-toggle="tab" href="#Sneaks" role="tab" aria-controls="Sneaks"
                                aria-selected="false">Sneaks <img src="img/icon/play.svg" alt="play"></a>
                        </div>
                    </div> --}}
                    {{-- <div class="col-lg-12">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active single-member" id="Special" role="tabpanel"
                                aria-labelledby="Special-tab">
                                <div class="row">
                                    <div class="">
                                         {{$slot}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{$slot}}
                </div>
            </div>
        </section>
        <!-- food_menu part end-->
        <!--::chefs_part end::-->
    
        <!-- intro_video_bg start-->
        <section class="breadcrumb breadcrumb_bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb_iner text-center">
                            <div class="breadcrumb_iner_item">
                                {{-- <h2>Segera Checkout</h2> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- <section class="intro_video_bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="intro_video_iner text-center">
                            <h2>Expect The Best</h2>
                            <div class="intro_video_icon">
                                <a id="play-video_1" class="video-play-button popup-youtube"
                                    href="https://www.youtube.com/watch?v=pBFQdxA-apI">
                                    <span class="ti-control-play"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- intro_video_bg part start-->
    
        <!-- footer part start-->
        
       <!-- footer part end-->
    
        <!-- jquery plugins here-->
        <!-- jquery -->
        <script src="{{ asset('belanja/js/jquery-1.12.1.min.js')}}"></script>
        <!-- popper js -->
        <script src="{{ asset('belanja/js/popper.min.js')}}"></script>
        <!-- bootstrap js -->
        <script src="{{ asset('belanja/js/bootstrap.min.js')}}"></script>
        <!-- easing js -->
        <script src="{{ asset('belanja/js/jquery.magnific-popup.js')}}"></script>
        <!-- swiper js -->
        <script src="{{ asset('belanja/js/swiper.min.js')}}"></script>
        <!-- swiper js -->
        <script src="{{ asset('belanja/js/masonry.pkgd.js')}}"></script>
        <!-- particles js -->
        <script src="{{ asset('belanja/js/owl.carousel.min.js')}}"></script>
        <!-- swiper js -->
        <script src="{{ asset('belanja/js/slick.min.js')}}"></script>
        <script src="{{ asset('belanja/js/gijgo.min.js')}}"></script>
        <script src="{{ asset('belanja/js/jquery.nice-select.min.js')}}"></script>
        <!-- custom js -->
        <script src="{{ asset('belanja/js/custom.js')}}"></script>
        @livewireScripts
    </body>
    </html>
    </div>
</div>
