
<!doctype html>
<html lang="en">
<head>
  
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
   <meta name="csrf-token" content="{{ csrf_token() }}"> 

    <title>Stowaa -  Ecommerce HTML Template</title>
    <link rel="shortcut icon" href="{{ asset('frontend') }}/assets/images/logo/favourite_icon_1.png">

    <!-- fraimwork - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/bootstrap.min.css">

    <!-- icon font - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/stroke-gap-icons.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/icofont.css">

    <!-- animation - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/animate.css">

    <!-- carousel - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/slick-theme.css">

    <!-- popup - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/magnific-popup.css">

    <!-- jquery-ui - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/jquery-ui.css">

    <!-- select option - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/nice-select.css">

    <!-- woocommercen - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/woocommerce.css">

    <!-- custom - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/style.css">
</head>

<body>

    <!-- body_wrap - start -->
    <div class="body_wrap">
        
        <!-- backtotop - start -->
        <div class="backtotop">
            <a href="#" class="scroll">
                <i class="far fa-arrow-up"></i>
            </a>
        </div>
        <!-- backtotop - end -->

        <!-- preloader - start -->
        {{-- <div id="preloader"></div> --}}
        <!-- preloader - end -->

        
        <!-- header_section - start
        ================================================== -->
        <header class="header_section header-style-no-collapse">
            <div class="header_top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col col-md-6">
                            <ul class="header_select_options ul_li">
                                <li>
                                    <div class="select_option">
                                        <div class="flug_wrap">
                                            <img src="{{ asset('frontend') }}/assets/images/flug/flug_uk.png" alt="image_not_found">
                                        </div>
                                        <select>
                                            <option data-display="Select Option">Select Your Language</option>
                                            <option value="1" selected>English</option>
                                            <option value="2">Bangla</option>
                                            <option value="3" disabled>Arabic</option>
                                            <option value="4">Hebrew</option>
                                        </select>
                                    </div>
                                </li>
                                
                            </ul>
                        </div>
                        <div class="col col-md-6">
                            <p class="header_hotline">Call us toll free: <strong>+1888 234 5678</strong></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header_middle">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col col-lg-3 col-md-3 col-sm-12">
                            <div class="brand_logo">
                                <a class="brand_link" href="{{ route('frontend') }}">
                                    <img src="{{ asset('frontend') }}/assets/images/logo/logo_1x.png" srcset="{{ asset('frontend') }}/assets/images/logo/logo_2x.png 2x" alt>
                                </a>
                            </div>
                        </div>
                        <div class="col col-lg-6 col-md-6 col-sm-12">
                            <form action="" method="POST">
                                <div class="advance_serach">
                                    <div class="select_option mb-0 clearfix">

                                   
                                        <select class="serarchId">
                                            <option selected  data-display="All Categories">Select A Category</option>
                                            @foreach ( categories() as $category )
                                               <option value="{{ $category->id}}">{{ $category->category_name }}</option>
                                            @endforeach
                                          
                                           
                                        </select>
                                    </div>
                                    <div class="form_item">
                                        <input type="search" name="search" placeholder="Search Prudcts...">
                                        <button type="submit" class="search_btn"><i class="far fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col col-lg-3 col-md-3 col-sm-12">
                            <button class="mobile_menu_btn2 navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_menu_dropdown" aria-controls="main_menu_dropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fal fa-bars"></i>
                            </button>
                            <button type="button" class="cart_btn">
                               <ul class="header_icons_group ul_li_right">
                                    <li>
                                        <a href="wishlist.html">
                                            <svg role="img" xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 24 24" stroke="#051d43" stroke-width="1" stroke-linecap="square" stroke-linejoin="miter" fill="none" color="#2329D6"> <title>Favourite</title> <path d="M12,21 L10.55,19.7051771 C5.4,15.1242507 2,12.1029973 2,8.39509537 C2,5.37384196 4.42,3 7.5,3 C9.24,3 10.91,3.79455041 12,5.05013624 C13.09,3.79455041 14.76,3 16.5,3 C19.58,3 22,5.37384196 22,8.39509537 C22,12.1029973 18.6,15.1242507 13.45,19.7149864 L12,21 Z"/> </svg>
                                            <span class="wishlist_counter">3</span>
                                        </a>
                                    </li>
                                    <li>
                                        <span class="cart_icon">
                                            <i class="icon icon-ShoppingCart"></i>
                                            @if (isset(Auth()->user()->id))
                                            <small class="cart_counter">{{  cartItem()->count() }}</small>
                                            @endif
                                        </span>
                                        
                                    </li>
                               </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header_bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col col-md-3">
                            <div class="allcategories_dropdown">
                                <button class="allcategories_btn" type="button" data-bs-toggle="collapse" data-bs-target="#allcategories_collapse" aria-expanded="false" aria-controls="allcategories_collapse">
                                    <svg role="img" xmlns="http://www.w3.org/2000/svg" width="32px" height="32px" viewBox="0 0 24 24" aria-labelledby="statsIconTitle" stroke="#000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none" color="#000"> <title id="statsIconTitle">Stats</title> <path d="M6 7L15 7M6 12L18 12M6 17L12 17"/> </svg>
                                    Browse categories
                                </button>
                                <div class="{{ Request()->routeIs('frontend') ? "show" : "collapse" }}" id="allcategories_collapse">
                                    <div class="card card-body">
                                        <ul class="allcategories_list ul_li_block">

                                         

                                          @foreach( categories() as $category)
                                            <li><a href="{{ route('category',["id" =>$category->id]) }}"><i class="icon"><img src="{{ asset('storage/category/'.$category->cat_img) }}" alt=""></i>{{ $category->category_name }}</a></li>
                                          @endforeach
                                          
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col col-md-6">
                            <nav class="main_menu navbar navbar-expand-lg">
                                <div class="main_menu_inner collapse navbar-collapse" id="main_menu_dropdown">
                                    <button type="button" class="offcanvas_close">
                                        <i class="fal fa-times"></i>
                                    </button>
                                    <ul class="main_menu_list ul_li">
                                        <li><a class="nav-link" href="{{ route('frontend') }}">Home</a></li>
                                        <li><a class="nav-link" href="#">About us</a></li>
                                        <li><a class="nav-link" href="{{ route('shop') }}">Shop</a></li>
                                        <li><a class="nav-link" href="#">Contact Us</a></li>
                                    </ul>
                                </div>
                            </nav>
                            <div class="offcanvas_overlay"></div>
                        </div>

                        <div class="col col-md-3">
                            <ul class="header_icons_group ul_li_right">
                                @auth
                                <li>
                                    <a href="{{ route('user.dashboard') }}">{{ Auth::user()->name }}</a>
                                </li>
                                
                                <li>
                                    <a href="{{ route('user.dashboard') }}">
                                        <svg role="img" xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 24 24" stroke="#051d43" stroke-width="1" stroke-linecap="square" stroke-linejoin="miter" fill="none" color="#2329D6"> <title id="personIconTitle">Person</title> <path d="M4,20 C4,17 8,17 10,15 C11,14 8,14 8,9 C8,5.667 9.333,4 12,4 C14.667,4 16,5.667 16,9 C16,14 13,14 14,15 C16,17 20,17 20,20"/> </svg>
                                    </a>
                                </li>
                                @endauth
                                @guest
                                <li>
                                    <a href="{{ route('user.register') }}">Register/Login</a>
                                </li>
                                @endguest
                            </ul>
                        </div> 
                    </div>
                </div>
            </div>
        </header>
        <!-- header_section - end
        ================================================== -->
        
        <!-- main body - start
        ================================================== -->
        <main>
            
            <!-- sidebar cart - start
            ================================================== -->
            <div class="sidebar-menu-wrapper">
                <div class="cart_sidebar">
                    <button type="button" class="close_btn"><i class="fal fa-times"></i></button>
                    <ul class="cart_items_list ul_li_block mb_30 clearfix">

                        @if (isset(auth()->user()->id))
                              @forelse (cartItem() as $cart_data)
                            <li>
                                <div class="item_image">
                                    <img src="{{ asset('storage/product/'.$cart_data->product->product_image) }}" alt="{{ $cart_data->product->product_title }}">
                                </div>
                                <div class="item_content">
                                    <h4 class="item_title">{{ $cart_data->product->product_title }}</h4>
                                    @if ($cart_data->sale_price)
                                    <span class="price_text">${{ $cart_data->sale_price }}</span>
                                    @else
                                    <span class="price_text">${{ $cart_data->price }}</span>
                                    @endif
                                </div>
                                <button type="button" class="remove_btn"><i class="fal fa-trash-alt"></i></button>
                            </li>
                        @empty
                            <li class="text-danger">Empty Cart</li>
                        @endforelse 
                        
                        @endif
                     


                       

                    </ul>

                    <ul class="total_price ul_li_block mb_30 clearfix">
                        <li>
                            <span>Subtotal:</span>
                            <span>$90</span>
                        </li>
                        <li>
                            <span>Vat 5%:</span>
                            <span>$4.5</span>
                        </li>
                        <li>
                            <span>Discount 20%:</span>
                            <span>- $18.9</span>
                        </li>
                        <li>
                            <span>Total:</span>
                            <span>$75.6</span>
                        </li>
                    </ul>

                    <ul class="btns_group ul_li_block clearfix">
                        <li><a class="btn btn_primary" href="{{ route('view.card') }}">View Cart</a></li>
                        <li><a class="btn btn_secondary" href="checkout.html">Checkout</a></li>
                    </ul>
                </div>

                <div class="cart_overlay"></div>
            </div>
            <!-- sidebar cart - end
            ================================================== -->

           

            
            @yield('frontend')
            
            <!-- newsletter_section - start
            ================================================== -->
            <section class="newsletter_section">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col col-lg-6">
                            <h2 class="newsletter_title text-white">Sign Up for Newsletter </h2>
                            <p>Get E-mail updates about our latest products and special offers.</p>
                        </div>
                        <div class="col col-lg-6">
                            <form action="#!">
                                <div class="newsletter_form">
                                    <input type="email" name="email" placeholder="Enter your email address">
                                    <button type="submit" class="btn btn_secondary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- newsletter_section - end
            ================================================== -->
        
        </main>
        <!-- main body - end
        ================================================== -->
        
        <!-- footer_section - start
        ================================================== -->
        <footer class="footer_section">
            <div class="footer_widget_area">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-4 col-md-6 col-sm-6">
                            <div class="footer_widget footer_about">
                                <div class="brand_logo">
                                    <a class="brand_link" href="index.html">
                                        <img src="{{ asset('frontend') }}/assets/images/logo/logo_1x.png" srcset="{{ asset('frontend') }}/assets/images/logo/logo_2x.png 2x" alt="logo_not_found">
                                    </a>
                                </div>
                                <ul class="social_round ul_li">
                                    <li><a href="#!"><i class="icofont-youtube-play"></i></a></li>
                                    <li><a href="#!"><i class="icofont-instagram"></i></a></li>
                                    <li><a href="#!"><i class="icofont-twitter"></i></a></li>
                                    <li><a href="#!"><i class="icofont-facebook"></i></a></li>
                                    <li><a href="#!"><i class="icofont-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col col-lg-2 col-md-3 col-sm-6">
                            <div class="footer_widget footer_useful_links">
                                <h3 class="footer_widget_title text-uppercase">Quick Links</h3>
                                <ul class="ul_li_block">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="shop.html">Products</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Sign Up</a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col col-lg-2 col-md-3 col-sm-6">
                            <div class="footer_widget footer_useful_links">
                                <h3 class="footer_widget_title text-uppercase">Custom area</h3>
                                <ul class="ul_li_block">
                                    <li><a href="#!">My Account</a></li>
                                    <li><a href="#!">Orders</a></li>
                                    <li><a href="#!">Team</a></li>
                                    <li><a href="#!">Privacy Policy</a></li>
                                    <li><a href="#!">My Cart</a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col col-lg-4 col-md-6 col-sm-6">
                            <div class="footer_widget footer_contact">
                                <h3 class="footer_widget_title text-uppercase">Contact Onfo</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                                </p>
                                <div class="hotline_wrap">
                                    <div class="footer_hotline">
                                        <div class="item_icon">
                                            <i class="icofont-headphone-alt"></i>
                                        </div>
                                        <div class="item_content">
                                            <h4 class="item_title">Have any question?</h4>
                                            <span class="hotline_number">+ 123 456 7890</span>
                                        </div>
                                    </div>
                                    <div class="livechat_btn clearfix">
                                        <a class="btn border_primary" href="#!">Live Chat</a>
                                    </div>
                                </div>
                                <ul class="store_btns_group ul_li">
                                    <li><a href="#!"><img src="{{ asset('frontend') }}/assets/images/app_store.png" alt="app_store"></a></li>
                                    <li><a href="#!"><img src="{{ asset('frontend') }}/assets/images/play_store.png" alt="play_store"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="footer_bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col col-md-6">
                            <p class="copyright_text">
                                ©2021 <a href="#!">stowaa</a>. All Rights Reserved.
                            </p>
                        </div>
                        
                        <div class="col col-md-6">
                            <div class="payment_method">
                                <h4>Payment:</h4>
                                <img src="{{ asset('frontend') }}/assets/images/payments_icon.png" alt="image_not_found">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer_section - end
        ================================================== -->

    </div>
    <!-- body_wrap - end -->

    <script src="https://code.jquery.com/jquery-1.12.4.min.js" ></script>

    <!-- fraimwork - jquery include -->
    <script src="{{ asset('frontend') }}/assets/js/jquery.min.js"></script>

     <!-- carousel - jquery plugins collection -->
     <script src="{{ asset('frontend') }}/assets/js/jquery-plugins-collection.js"></script>

     <!-- google map  -->
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M&ver=2.1.6"></script>
     <script src="{{ asset('frontend') }}/assets/js/gmaps.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/popper.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/bootstrap.min.js"></script>

   

    <!-- custom - main-js -->
    <script src="{{ asset('frontend') }}/assets/js/main.js"></script>



      @yield('frontend_js')




</body>
</html>