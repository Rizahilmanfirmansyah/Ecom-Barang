<header class="main_menu">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="index.html"><b style="color: #2FDBBC;">E</b>-Kantin</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse main-menu-item justify-content-end"
                        id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('userhome')}}">Home</a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="about.html">About</a>
                            </li> --}}
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('menu')}}">Menu</a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="chefs.html">Chefs</a>
                            </li> --}}
                            {{-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Blog
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="blog.html">Blog</a>
                                    <a class="dropdown-item" href="single-blog.html">Single blog</a>
                                    <a class="dropdown-item" href="elements.html">Elements</a>
                                </div>
                            </li> --}}
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li> --}}
                            @if (Route::has('login'))
                            @auth
                               @if (Auth::user()->role === 'seller')
                                   <li class="nav-item dropdown">
                                       <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                           My Account ({{Auth::user()->name}})
                                       </a>
                                       <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                           <a class="dropdown-item" href="#">Dashboard</a>
                                       </div>
                                   </li>
                               @else
                                   <li class="nav-item dropdown">
                                       <a class="nav-link dropdown-toggle countCart" href="blog.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                           My Account ({{Auth::user()->name}})
                                       </a>
                                       <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                           <div class="container">
                                           <a class="dropdown-item" href="{{route('user.dashboard')}}"><span class="btn">My Order</span>
                                            <span class="badge rounded-pill badge-notification text-light" style="background-color: #2FDBBC; width: 34px;">{{$count_menuOrder}}</span>
                                        </a>
                                           <div class="dropdown-item">
                                           <form action="{{route('aksilogout')}}" method="post">
                                               @csrf
                                               <button type="submit" class="btn">Logout</button>
                                             </form>
                                           </div>
                                           </div>
                                       </div>
                                   </li>
                               @endif
                           @else
                           <li class="nav-item"><a href="{{url('login')}}">Login</a></li>
                           <li class="nav-item"><a href="{{url('reg')}}">Register</a></li>  
                           @endif
                           @endif
                           &nbsp;
                           @livewire('cart-count-component')
                           &nbsp;
                        </ul>
                    </div>
                    {{-- <div class="menu_btn">
                        <a href="#" class="single_page_btn d-none d-sm-block">book a tabel</a>
                    </div> --}}   
                </nav>
            </div>
        </div>
    </div>
</header>
<footer class="footer-area">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-3 col-sm-6 col-md-3 col-lg-3">
                <div class="single-footer-widget footer_1">
                    <h4>About Us</h4>
                    <br>
                  <div style="text-decoration: none; color: black;">
                    <a href="https://www.youtube.com/c/SMKN11BANDUNG" ><p class="bi bi-youtube">&nbsp;&nbsp;<span style="color: black">SMKN 11 BANDUNG</span></p><br></a><br> 
                    <a href="tel:028397382763"><p class="bi bi-telephone">&nbsp;&nbsp;<span>028397382763</span></p><br></a><br>
                    <a href="https://www.instagram.com/accounts/login/?next=%2Finfo.smkn11bandung%2F"><p class="bi bi-instagram">&nbsp;&nbsp;<span>info.smkn11bandung</span></p><br></a><br>
                    <a href="#"><p class="bi bi-facebook">&nbsp;&nbsp;<span>SMKN 11 BANDUNG</span></p><br></a><br>
                  </div>
                           
                        
                </div>
            </div>
        
            <div class="col-xl-3 col-sm-6 col-md-2 col-lg-3">
                <div class="single-footer-widget footer_2">
                    <h4>Important Link</h4>
                    <div class="contact_info">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Menu</a></li>
                            <li><a href="#">My Order</a></li>
                            <li><a href="#">Shopping Cart</a></li>
                            {{-- <li><a href="#"> Our Shop</a></li> --}}
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-md-3 col-lg-3">
                <div class="single-footer-widget footer_2">
                    <h4>Contact us</h4>
                    <br>
                    <div class="contact_info">
                        <p><a href="https://goo.gl/maps/vdqHS8KU9S9p9yUq5"><span> Address :</span>  Jl. Budi Jl. Raya Cilember, RT.01/RW.04, Sukaraja, Kec. Cicendo, Kota Bandung, Jawa Barat 40153 </a></p>
                        <p><span> Phone :</span> 022-6652442</p>
                        <p><span> Email : </span>smkn11bdg@gmail.com</p>
                    </div>
                </div>
            </div>
            {{-- <div class="col-xl-3 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-end" >
                <div class="single-footer-widget footer_3">
                    <h4>Newsletter</h4>
                    <br>
                    <p>Heaven fruitful doesn't over lesser in days. Appear creeping seas</p>
                    <form action="#">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder='Email Address'
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'">
                                <div class="input-group-append">
                                    <button class="btn" type="button"><i class="fas fa-paper-plane"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div> --}}
        </div>
        {{-- <div class="copyright_part_text">
            <div class="row">
                <div class="col-lg-8">
                    <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="ti-heart" aria-hidden="true"></i> by <a href="https://e-kantin.com" target="_blank">E-kantin</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
                <div class="col-lg-4">
                    <div class="copyright_social_icon text-right">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="ti-dribbble"></i></a>
                        <a href="#"><i class="fab fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</footer>