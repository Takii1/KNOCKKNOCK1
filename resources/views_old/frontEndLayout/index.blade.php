<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favi con -->
    <link rel="shortcut icon" type="image/png" href="{{asset('/assetsFrontEnd/PNGs/knock_mini.png')}}">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <!-- landing page css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="{{asset('/assetsFrontEnd/Product/daterangepicker.css')}}" />

    <link rel="stylesheet" href="{{asset('/assetsFrontEnd/style.css')}}">
    <link rel="stylesheet" href="{{asset('/assetsFrontEnd/vendors.css')}}">

    <link rel="stylesheet" href="{{asset('/assetsFrontEnd/Product/Products/style.css')}}" />

    <!-- OwlCarousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset('/assetsFrontEnd/css/bootstrap.min.css')}}">
    <!-- slider link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <!-- tailwind  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>

    <title>Knock Knock</title>
</head>

<body>
    <!-- navbar starter -->
    <section id="header">
        <a id="logo" href="/">
            <img src="{{asset('/assetsFrontEnd/PNGs/Logo.png.png')}}" alt="" class="logo">
        </a>
        <nav class="navbar">
            <ul>
            <li><a href="{{route('About')}}">@lang('public.About')</a></li>
                <li><a href=" {{route('HowItWorks')}}">@lang('public.How its work')</a></li>
                <li><a href="{{route('Contact')}}">@lang('public.Contact')</a></li>


    <div class="dropdown">
    <button class="dropbtn">@lang('public.Language')</button>
    <div class="dropdown-content">
    <a href="locale/spanish">Spanish</a>
    <a href="locale/en ">English</a>


  </div>
</div>
            </ul>
        </nav>
        <div class="btn-grp">
            <form action="{{route('getsearch')}}">
          <div class="search-box">
              <input type="search" name="search" placeholder="Search..." value="" >
              <a href="" class="col-lg-12">
                  <button>
                  <i class="fa-sharp fa-solid fa-person-biking"></i>
              </button>
              </a>
          </div>
            </form>
            </div>
            <div>
                <a href="{{route('Uploadproduct')}}" class="upload-btn">@lang('public.Upload Product')</a>
            </div>

            @if(Auth::user() == null)
            <a href="{{ route('login') }}" class="login-btn">@lang('public.Login')</a>
            @else
            <div class="dropdown">
                <button class="dropbtn">{{ Auth::user()->name }}</button>
                <div class="dropdown-content">
                    <span>
                        <a href="{{route('myrentals')}}">My Rentals</a>
                    </span>
                <span>
                    <a href="{{route('EditProfile')}}">Account</a>
                </span>
                <span>
                <form method="POST" action="{{route('logout')}}">
                    @csrf
                     <button type="submit" class="login-btn">@lang('public.Logout')</button>
                </form>
            </span>
            </div>
            @endif

        </div>
        <div id="menu-btn" class="fas fa-bars">
        </div>

    </section>
    <!-- navbar starter -->

   @yield('content')


    <footer class="footer text-center col-md-12 ">
        <div class="container ">
            <div class="row col-md-12 ">
                <div class="footer-col ">
                    <h4>@lang('public.Company')</h4>
                    <ul>
                        <li><a href="{{route('Home')}}">@lang('public.Home')</a></li>
                        <li><a href="{{route('About')}}">@lang('public.About')</a></li>
                        <li><a href="{{route('Contact')}}">@lang('public.Contact')</a></li>
                        <li><a href="{{route('HowItWorks')}}">@lang('public.How its work')</a></li>
                    </ul>
                </div>
                <div class="footer-col ">
                    <h4>@lang('public.Online shop')</h4>
                    <ul>
                        <li><a href="# ">@lang('public.Bicycle')</a></li>
                        <li><a href="# ">@lang('public.Wind Surfing')</a></li>
                        <li><a href="# ">@lang('public.Ski')</a></li>
                        <li><a href="# ">@lang('public.Snowboard')</a></li>
                        <li><a href="# ">@lang('public.Skateboard')</a></li>
                        <li><a href="# ">@lang('public.Tennis')</a></li>
                        <li><a href="# ">@lang('public.Skates')</a></li>
                    </ul>
                </div>
                <div class="footer-col ">
                    <h4>@lang('public.Get help')</h4>
                    <ul>
                        <li><a href="# ">@lang('public.FAQ')</a></li>
                        <li><a href="# ">@lang('public.follow us')</a></li>
                        <li><a href="{{route('PrivacyPolicy')}}">@lang('public.Privacy Policy')</a></li>
                        <li><a href="{{route('HowItWorks')}} ">@lang('public.Terms & Conditions')</a></li>
                    </ul>
                </div>
                <div class="footer-col ">
                    <h4>@lang('public.follow us')</h4>
                    <div class="social-links ">
                        <a class="fbs " href="https://www.facebook.com "><i class="fb fab fa-facebook-f "></i></a>
                        <a class="twits " href=" https://twitter.com/KnockKnockSport"><i class="twit fab fa-twitter "></i></a>
                        <a class="instagram " href=" https://www.instagram.com/knock.sport/"><i
                                class="insta fab fa-instagram "></i></a>
                        <a class="linked " href="https://www.linkedin.com/company/knock-knock-sport"><i
                                class="linkedin fab fa-linkedin-in "></i></a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </footer>

    <!-- Footer ends -->

    <!-- back-to-top -->
    <button id="btn-back-to-top" type="button " data-mdb-ripple="true " data-mdb-ripple-color="light "
        class="inline-block p-3 bg-grey-600 text-light font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-black-700 hover:text-white hover:shadow-lg focus:bg-sky-700
                focus:shadow-lg focus:outline-none focus:ring-0 active:bg-sky-800 active:shadow-lg transition duration-150 ease-in-out bottom-5 right-5 ">
        <svg aria-hidden="true " focusable="false " data-prefix="fas " class="w-4 h-4 " role="img "
            xmlns="http://www.w3.org/2000/svg " viewBox="0 0 448 512 ">
            <path fill="currentColor " d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3
                9.8-24.8 10-34.3.4z ">
            </path>
        </svg>
    </button>
    <!-- back-to-top -->
    <!-- ionicons -->
    <script type="module " src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js "></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js "></script>
    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js "
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin=" anonymous " referrerpolicy="no-referrer "></script>
    <!-- OwlCarousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js "
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin=" anonymous " referrerpolicy="no-referrer "></script>

    <!-- js file ends -->
    <script src="{{asset('/assetsFrontEnd/js/bootstrap.min.js')}}"></script>
    {{-- bootstrap 4.3.1 --}}
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <!-- js file -->
    <script src="{{asset('/assetsFrontEnd/Profileopts/popup.js')}}"></script>
    <script src="{{asset('/assetsFrontEnd/Product/daterangepicker.js')}}"></script>
    <!-- <script src="{{asset('/assetsFrontEnd/Product/Products/script.js')}}"></script> -->
    <script src="{{asset('/assetsFrontEnd/js/script.js')}}"></script>
</body>
<!-- tailwind -->
<script src="https://kit.fontawesome.com/a81368914c.js "></script>
<!-- swiper cdn -->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js "></script>
<!-- js file start aboutus -->
<script src="{{asset('/assetsFrontEnd/aboutAssets/app.js')}}"></script>
</html>
