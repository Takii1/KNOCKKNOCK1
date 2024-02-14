@extends('frontEndLayout.index')

@section('content')
    <div class="SSTTOORREE">
    <!-- main-starter -->
    <div class="main-img">
        <img src="{{asset('/assetsFrontEnd/aboutAssets/IMGS/About Us - Animation Concept.gif')}}" alt="">
    </div>

    <div class="intro">
        <h2>
            @lang('public.INTRODUCTION') 
        </h2>
        <p class="text-muted">@lang('public.Knock es una web donde una persona puede alquilar a otra persona o empresa de Renta cualquier material deportivo. La idea es: en lugar de ir personalmente a una empresa de alquiler, podemos cerrar un contrato de alquiler de forma fácil y sencilla a través del sitio web (y la aplicación).')
        </p>

        <strong>
            <p>@lang('public.Sharing is living')</p>
        </strong>
        <p class="text-muted">@lang('public.Welcome to our platform for renting sports equipment between individuals! We are a team passionate about sports and understand how important it is to have the right team to Practice your favorite sport.')</p>
        <p class="text-muted">@lang('public.Select Our mission is to connect people looking to rent sports equipment from Quality with owners who want to make their investment profitable. We offer a wide variety of options For all kinds of sports, from skiing to paddle surfing, cycling and much more.')
        </p>
        <p class="text-muted">@lang('public.Our philosophy is based on providing a quality service, with affordable prices and Customer satisfaction guarantee..')</p>
        <p class="text-muted">@lang('public.Join our sports rental community and discover the convenience of having access to the equipment you need, when you need it, without having to spend a lot of money!')</p>
        <p class="text-muted">@lang('public.Thank you for choosing us as your sports rental platform.')</p>
    </div>

    <div class="bottom">
        <div class="bottom1">
            <img src="{{asset('/assetsFrontEnd/PNGs/Startup managers presenting and analyzing sales growth chart.png')}}" alt="">
            <strong>@lang('public.Make your material profitable')</strong>
            <p class="text-muted">@lang('public.If you have sports equipment that you no longer use, make it available to others!members of our community!')</p>
            <p class="text-muted">@lang('public.With our rental system, you can generate additional income by putting in your Equipment for rent. In addition, you help reduce environmental impact by reusing the material instead of Buy new.')</p>
        </div>
        <div class="bottom2">
            <img src="{{asset('/assetsFrontEnd/PNGs/7532.png')}}" alt="">
            <strong>@lang('public.Enjoy your favorite sport')</strong>
            <p class="text-muted">@lang('public.On our platform, we offer you the possibility to enjoy your favorite sport without having to worry about the cost and maintenance of the equipment. With our rental system,You can access a wide variety of high-quality sports equipment, without having to invest in the purchase.')
                </p>
        </div>
        <div class="bottom3">
            <img src="{{asset('/assetsFrontEnd/PNGs/Human hands holding key to heart with Ukrainian flag [Converted].png')}}" alt="">
            <strong>@lang('public.Plurality is key')</strong>
            <p class="text-muted">@lang('public.We treat all products fairly and impartially, displaying and ordering them equitably. With this, we seek to recognize and enrich the diversity of tastes of our community')
                </p>
        </div>
    </div>
    </div>
    <!-- main-starter ends -->


   

    <!-- back-to-top -->
    <button id="btn-back-to-top" type="button" data-mdb-ripple="true" data-mdb-ripple-color="light"
        class="inline-block p-3 bg-grey-600 text-light font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-black-700 hover:text-white hover:shadow-lg focus:bg-sky-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-sky-800 active:shadow-lg transition duration-150 ease-in-out bottom-5 right-5">
        <svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-4 h-4" role="img"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <path fill="currentColor"
                d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z">
            </path>
        </svg>
    </button>
    <!-- back-to-top -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"
        integrity="sha512-gmwBmiTVER57N3jYS3LinA9eb8aHrJua5iQD7yqYCKa5x6Jjc7VDVaEA0je0Lu0bP9j7tEjV3+1qUm6loO99Kw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js"
        integrity="sha512-tHvUcUQYi35zApvAa5TNR3fNhBQkVtkmWKfacnpxmix4/VTGz1lGjIVyLMp7gLgAvg+aKJjnVKokXJNS5GZ+/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
@endsection