@extends('frontEndLayout.index')
@section('content')
<div class="HHIIWw">
    <section id="hiw">
      <div class="f-img">
        <img src="{{asset('/assetsFrontEnd/HowIwAssets/img/Teamwork.gif')}}" alt="" />
      </div>

      <div class="heading">
      <h1>@lang('public.How does the rental work?')</h1>
        <h3>@lang('public.Thousands of new experiences await you!')</h3>
      </div>

      <div class="hiw-content">
        <div class="contents 1">
          <img src="{{asset('/assetsFrontEnd/HowIwAssets/img/5064258.png')}}" alt="" />
          <p>
            @lang('public.Think about the material you need, what do you plan to do? What do you need?')
           
          </p>
        </div>
        <div class="contents 2">
          <p>
            @lang('public.Find what you need Find what you are looking for wherever you want. We have several options depending on your needs.')
          </p>
          <img src="{{asset('/assetsFrontEnd/HowIwAssets/img/Na_Nov_11 [Converted].png')}}" alt="" />
        </div>
        <div class="contents 3">
          <img src="{{asset('/assetsFrontEnd/HowIwAssets/img/Checklist [Converted].png')}}" alt="" />
          <p>
            @lang('public.Book it Send a request to the owner of the sports equipment. You must verify the account with your ID for this step.')
          </p>
        </div>
        <div class="contents 4">
          <p>@lang('public.Stay with the owner Check the material before picking it up.')</p>
          <img src="{{asset('/assetsFrontEnd/HowIwAssets/img/handshake_men_01 [Converted].png')}}" alt="" />
        </div>
        <div class="contents 5">
          <img src="{{asset('/assetsFrontEnd/HowIwAssets/img/10820.png')}}" alt="" />
          <p>@lang('public.Start your experience Enjoy your experience to the fullest')</p>
        </div>
        <div class="contents 6">
          <p>
            @lang('public.Return the material Returns the material in the same state you collected it. Treat it as if it were your own.')
          </p>
          <img src="{{asset('/assetsFrontEnd/HowIwAssets/img/4739147.png')}}" alt="" />
        </div>
        <div class="contents 7">
          <img src="{{asset('/assetsFrontEnd/HowIwAssets/img/Jan-Survey_1 [Converted].png')}}" alt="" />
          <p>
            @lang('public.Put a review Tell us about your experience. It would help us a lot!')
            
          </p>
        </div>
      </div>
    </section>

    <section class="FAQS">
      <div class="h1">
        <h1>@lang('public.Frequently Asked Questions')</h1>
      </div>

      <div class="asked">
        <strong>
          <p>@lang('public.How do I rent the material?')</p>
        </strong>
        <p>@lang('public.Once the reservation request has been sent, the owner will accept it and
          You will stay at the location point to lend you the material.
          You will enjoy your experience and return the material in it
          state you picked it up.')
          
        </p>
        <br />
        <strong>
          <p>@lang('public.What do I need to rent?')</p>
        </strong>
        <p>@lang('public.You will need to verify your identity and the owner will need to verify that identity.identity before lending the material.')
        
        </p>
        <br />
        <strong>
          <p>@lang('public.What happens if something happens during the rental?')</p>
        </strong>
        <p>@lang('public.If a problem occurs with the vehicle during the rental,the Renter must contact the landlord or the support from Knock Knock. Conditions and Terms.')
     
        </p>
        <br />
        <strong>
          <p>@lang('public.How does the payment work?')</p>
        </strong>
        <p>@lang('public.All payments are made online. The owner receives his Money 24 hours after the rental ends.')
   
        </p>
      </div>
    </section>
</div>
 

    <!-- back-to-top -->
    <button
      type="button"
      data-mdb-ripple="true"
      data-mdb-ripple-color="light"
      class="inline-block p-3 bg-grey-600 text-light font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-black-700 hover:text-white hover:shadow-lg focus:bg-sky-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-sky-800 active:shadow-lg transition duration-150 ease-in-out bottom-5 right-5"
      id="btn-back-to-top"
    >
      <svg
        aria-hidden="true"
        focusable="false"
        data-prefix="fas"
        class="w-4 h-4"
        role="img"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 448 512"
      >
        <path
          fill="currentColor"
          d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z"
        ></path>
      </svg>
    </button>
    <!-- back-to-top -->
    <!-- jquery -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
      integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <!-- OwlCarousel -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
      integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <!-- js file ends -->
    <!-- <script src="./assets/js/bootstrap.min.js"></script> -->
    <!-- ionicons -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
    <!-- tailwind -->
    <!-- <script src="./TW-ELEMENTS-PATH/dist/js/index.min.js"></script> -->
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  
  <script src="{{asset('/assetsFrontEnd/HowIwAssets/app.js')}}"></script>
  <!-- <script src="./assets/js/script.js"></script> -->
@endsection
