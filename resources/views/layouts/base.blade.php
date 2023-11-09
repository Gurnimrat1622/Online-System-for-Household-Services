<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>ServiceProviders - Online Service Provider for your House Needs</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('assets/img/logo.jpg')}}">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" media="screen">
    <link href="{{asset('assets/css/chblue.css')}}" rel="stylesheet" media="screen">
    <link href="{{asset('assets/css/theme-responsive.css')}}" rel="stylesheet" media="screen">
    <link href="{{asset('assets/css/dtb/jquery.dataTables.min.css')}}" rel="stylesheet" media="screen">
    <link href="{{asset('assets/css/select2.min.css')}}" rel="stylesheet" media="screen">
    <link href="{{asset('assets/css/toastr.min.css')}}" rel="stylesheet" media="screen">        
    <script type="text/javascript" src="{{asset('assets/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery-ui.1.10.4.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/toastr.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/modernizr.js')}}"></script>
    @livewireStyles
</head>
<body>
    <div id="layout">
        <div class="info-head">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="visible-md visible-lg text-left">
                            <li><a href="tel:+911234567890"><i class="fa fa-phone"></i> +91-1234567890</a></li>
                            <li><a href="mailto:contact@surfsidemedia.in"><i class="fa fa-envelope"></i>
                                    contact@serviceProviders.in</a></li>
                        </ul>
                        <ul class="visible-xs visible-sm">
                            <li class="text-left"><a href="tel:+911234567890"><i class="fa fa-phone"></i>
                                    +91-1234567890</a></li>
                            <li class="text-right"><a href="index.php/changelocation.html"><i
                                        class="fa fa-map-marker"></i> Jalandhar, Punjab</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="visible-md visible-lg text-right">
                            
                            <li><a href="index.php/changelocation.html"><i class="fa fa-map-marker"></i> Jalandhar,
                                    Punjab</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <header id="header" class="header-v3">
            <nav class="flat-mega-menu">
                <label for="mobile-button"> <i class="fa fa-bars"></i></label>
                <input id="mobile-button" type="checkbox">

                <ul class="collapse">
                    <li class="title">
                       <div style="margin-top:5px;margin-left:-100px;"> <a href="/"><img src="{{asset('images/logo2.png')}}" ></a></div>
                    </li>
                    <li> <a href="{{ route('home.service_categories') }}">Service Categories</a></li>
                    <li> <a href="#">Appliances</a>
                        <ul class="drop-down one-column hover-fade">
                            <li><a href="#">Computer Repair</a></li>
                            <li><a href="#">TV</a></li>
                            <li><a href="#">AC</a></li>
                            <li><a href="#">Geyser</a></li>
                            <li><a href="#">Washing Machine</a></li>
                            <li><a href="#">Microwave Oven</a></li>
                            <li><a href="#">Chimney and Hob</a></li>
                            <li><a href="#">Water Purifier</a></li>
                            <li><a href="#">Refrigerator</a></li>
                        </ul>
                    </li>
                    <li> <a href="#">Home Needs</a>
                        <ul class="drop-down one-column hover-fade">
                            <li><a href="#">Laundry</a></li>
                            <li><a href="#">Electrical</a></li>
                            <li><a href="#">Pest Control</a></li>
                            <li><a href="#">Carpentry</a></li>
                            <li><a href="#">Plumbing </a></li>
                            <li><a href="#">Painting</a></li>
                            <li><a href="#">Movers &amp; Packers</a></li>
                            <li><a href="#">Shower Filters </a></li>
                        </ul>
                    </li>
                    <li> <a href="#">Home Cleaning</a>
                        <ul class="drop-down one-column hover-fade">
                            <li><a href="#">Bedroom Deep Cleaning</a></li>
                            <li><a href="#">Overhead Water Storage </a></li>
                            <li><a href="#">Tank Cleaning</a></li>
                            <li><a href="#">Underground Sump Cleaning</a></li>
                            <li><a href="#">Dining Chair Shampooing </a></li>
                            <li><a href="#">Office Chair Shampooing</a></li>
                            <li><a href="#">Home Deep Cleaning </a></li>
                            <li><a href="#">Carpet Shampooing </a></li>
                            <li><a href="#">Fabric Sofa Shampooing</a></li>
                            <li><a href="#">Bathroom Deep Cleaning</a></li>
                            <li><a href="#">Floor Scrubbing &amp; Polishing</a></li>
                            <li><a href="#">Mattress Shampooing </a></li>
                            <li><a href="#">Kitchen Deep Cleaning </a></li>
                        </ul>
                    </li>
                    <li> <a href="#">Special Services</a>
                        <ul class="drop-down one-column hover-fade">
                            <li><a href="#">Document Services</a></li>
                            <li><a href="#">Cars &amp; Bikes</a></li>
                            <li><a href="#">Movers &amp; Packers </a></li>
                            <li><a href="#">Home Automation</a></li>
                        </ul>
                    </li>
                    @if(Route::has('login'))
                        @auth
                            @if(Auth::user()->utype==='ADM')
                            <li class="login-form"> <a href="#" title="Register">My Account (Admin)</a>
                            <ul class="drop-down one-column hover-fade">
                            <!-- <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li> -->
                            <li><a href="{{route('admin.service_categories')}}">Service Categories</a></li>
                            <li><a href="{{route('admin.all_services')}}">All Service</a></li>
                            <li><a href="{{route('admin.contacts')}}">All Contacts</a></li>
                            <li><a href="{{route('admin.service_providers')}}">All Service Providers</a></li>
                            <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                            </ul>
                            </li>
                            @elseif(Auth::user()->utype==='SVP')
                            <li class="login-form"> <a href="#" title="Register">My Account (S Provider)</a>
                            <ul class="drop-down one-column hover-fade">
                            <!-- <li><a href="{{route('sprovider.dashboard')}}">Dashboard</a></li> -->
                            <li><a href="{{route('sprovider.profile')}}">Profile</a></li>
                            <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                            </ul>
                            </li>        
                            @else
                            <li class="login-form"> <a href="#" title="Register">My Account (Customer)</a>
                            <ul class="drop-down one-column hover-fade">
                            <!-- <li><a href="{{route('customer.dashboard')}}">Dashboard</a></li> -->
                            <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                            </ul>
                            </li>
                            @endif 
                            <form id="logout-form" method="POST" action="{{route('logout')}}" style="display: none">
                                @csrf
                            </form>    
                        @else       
                        <li class="login-form"> <a href="{{route('register')}}" title="Register">Register</a></li>
                        <li class="login-form"> <a href="{{route('login')}}" title="Login">Login</a></li>
                        @endif
                    @endif
                    
                    <li class="search-bar">
                    </li>
                </ul>
            </nav>
        </header>
       {{$slot}}
        <footer id="footer" class="footer-v1">
            <div class="container">
                <div class="row visible-md visible-lg">
                    <div class="col-md-3 col-xs-6 col-sm-6">
                        <h3>APPLIANCE SERVICES </h3>
                        <ul>
                            <li><i class="fa fa-check"></i> <a href="#">TV</a></li>
                            <li><i class="fa fa-check"></i> <a href="#">Geyser</a></li>
                            <li><i class="fa fa-check"></i> <a href="#">Refrigerator</a></li>
                            <li><i class="fa fa-check"></i> <a href="#">Washing Machine</a></li>
                            
                            <li><i class="fa fa-check"></i> <a href="#">Microwave Oven</a></li>
                            <li><i class="fa fa-check"></i> <a href="#">Water Purifier</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-xs-6 col-sm-6">
                        <h3>AC SERVICES </h3>
                        <ul>
                            <li><i class="fa fa-check"></i> <a href="#">Installation</a></li>
                            <li><i class="fa fa-check"></i> <a href="#">Uninstallation</a></li>       
                            <li><i class="fa fa-check"></i> <a href="#">AC Repair</a></li>
                            <li><i class="fa fa-check"></i> <a href="#">Gas Refill</a></li>
                            <li><i class="fa fa-check"></i> <a href="#">Wet Servicing</a></li>    
                            <li><i class="fa fa-check"></i> <a href="#">Dry Servicing </a></li>       
                        </ul>
                    </div>
                    <div class="col-md-3 col-xs-6 col-sm-6">
                        <h3>HOME NEEDS </h3>
                        <ul>
                            <li><i class="fa fa-check"></i> <a href="#">Laundry </a></li>
                            <li><i class="fa fa-check"></i> <a href="#">Electrical</a></li>
                            <li><i class="fa fa-check"></i> <a href="#">Pest Control </a></li>
                            <li><i class="fa fa-check"></i> <a href="#">Carpentry </a></li>
                            <li><i class="fa fa-check"></i> <a href="#">Plumbing </a></li>
                            <li><i class="fa fa-check"></i> <a href="#">Painting </a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-xs-6 col-sm-6">
                        <h3>CONTACT US</h3>
                        <ul class="contact_footer">
                            <li class="location">
                                <i class="fa fa-map-marker"></i> <a href="#"> Jalandhar, Punjab, India</a>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i> <a href="mailto:contact@serviceProviders.in">contact@serviceProviders.in</a>
                                    
                            </li>
                            <li>
                                <i class="fa fa-headphones"></i> <a href="tel:+91-1234567890">+91-1234567890</a>
                            </li>
                        </ul>
                        <h3 style="margin-top: 10px">FOLLOW US</h3>
                        <ul class="social">
                            <li class="facebook"><span><i class="fa fa-facebook"></i></span><a href="#"></a></li>
                            <li class="twitter"><span><i class="fa fa-twitter"></i></span><a href="#"></a></li>
                            <li class="github"><span><i class="fa fa-instagram"></i></span><a href="#"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="row visible-sm visible-xs">
                    <div class="col-md-6">
                        <h3 class="mlist-h">CONTACT US</h3>
                        <ul class="contact_footer mlist">
                            <li class="location">
                                <i class="fa fa-map-marker"></i> <a href="#"> Jalandhar, Punjab, India</a>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i> <a
                                    href="mailto:contact@serviceProviders.in">contact@serviceProviders.in</a>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i> <a href="tel:+911234567890">+91-1234567890</a>
                            </li>
                        </ul>
                        <ul class="social mlist-h">
                            <li class="facebook"><span><i class="fa fa-facebook"></i></span><a href="#"></a></li>
                            <li class="twitter"><span><i class="fa fa-twitter"></i></span><a href="#"></a></li>
                            <li class="github"><span><i class="fa fa-instagram"></i></span><a href="#"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-down">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="nav-footer">
                                <li><a href="#">About Us</a> </li>
                                <li><a href="{{route('home.contact')}}">Contact Us</a></li> 
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Privacy</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <p class="text-xs-center crtext">&copy; 2023 ServiceProviders. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>                
            </div>            
        </footer>
    </div>
    <script type="text/javascript" src="{{asset('assets/js/nav/jquery.sticky.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/totop/jquery.ui.totop.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/accordion/accordion.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/maps/gmap3.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/fancybox/jquery.fancybox.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/carousel/carousel.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/filters/jquery.isotope.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/twitter/jquery.tweet.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/flickr/jflickrfeed.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/theme-options/theme-options.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/theme-options/jquery.cookies.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/bootstrap/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/bootstrap/bootstrap-slider.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/dtb/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/dtb/jquery.table2excel.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/dtb/script.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/select2.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/validation-rule.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/bootstrap3-typeahead.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/main.js')}}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery('.tp-banner').show().revolution({
                dottedOverlay: "none",
                delay: 5000,
                startwidth: 1170,
                startheight: 480,
                minHeight: 250,
                navigationType: "none",
                navigationArrows: "solo",
                navigationStyle: "preview1"
            });
        });
    </script>
    @stack('scripts')
    @livewireScripts
</body>
</html>