@extends('frontEndLayout.index')

@section('content')
<div class="CALL">
    <section class="contact-section">
      <div class="contact-body">
        <div class="contact-form">
          <div class="lines">
            <img src="{{asset('/assetsFrontEnd/ContactAssets/img/contact.png.png')}}" alt="" />
            <h1>@lang('public.Leave us a Message')</h1>
            <!-- <h5>Contact Us</h5> -->

            <br />
            <div class="social-links">
              <a class="fbs" href="https://www.facebook.com "
                ><i class="fb fab fa-facebook-f"></i
              ></a>
              <a class="twits" href=" https://twitter.com/KnockKnockSport"
                ><i class="twit fab fa-twitter"></i
              ></a>
              <a
                class="instagram"
                href=" https://www.instagram.com/knock.sport/"
                ><i class="insta fab fa-instagram"></i
              ></a>
              <a
                class="linked"
                href="https://www.linkedin.com/company/knock-knock-sport"
                ><i class="linkedin fab fa-linkedin-in"></i
              ></a>
            </div>
          </div>
          <form>
            <div>
              <input
                type="text"
                class="form-control"
                placeholder="@lang('public.First Name')"
              />
              <input type="text" class="form-control" placeholder="@lang('public.Last Name')" />
            </div>
            <div>
              <input type="email" class="form-control" placeholder="@lang('public.E-mail')" />
              <input type="text" class="form-control" placeholder="@lang('public.Phone')" />
            </div>
            <textarea
              rows="5"
              placeholder="Message"
              class="text-muted form-control"
            ></textarea>
            <input
              type="submit"
              class="text-center send-btn"
              value="send message"
            />
          </form>
        </div>
      </div>

      <div class="contact-info">
        <div>
          <span class="ico"><i class="fas fa-map-marker-alt"></i></span>
          <span class="small">@lang('public.Address')</span>
          <br />
          <span class="text"
            >2939 Patrick Street, Vicotria TX, United States</span
          >
        </div>
        <div>
          <span class="ico"><i class="fas fa-envelope-open"></i></span>
          <span class="small">@lang('public.E-mail')</span>
          <br />
          <span class="text">@lang('public.mail@company.com')</span>
        </div>
        <div>
          <span class="ico"><i class="fas fa-mobile-alt"></i></span>
          <span class="small">@lang('public.Phone No.')</span>
          <br />
          <span class="text">1-2392-23928-2</span>
        </div>
      </div>
      <div class="map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d223700.1490386933!2d-97.11558670486288!3d28.829485511234168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864266db2e2dac3b%3A0xeee20d566f63267d!2sVictoria%2C%20TX%2C%20USA!5e0!3m2!1sen!2snp!4v1604921178092!5m2!1sen!2snp"
          width="100%"
          height="450"
          frameborder="0"
          style="border: 0"
          allowfullscreen=""
          aria-hidden="false"
          tabindex="0"
        ></iframe>
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
  
  <!-- js file -->
  <script src="{{asset('/assetsFrontEnd/ContactAssetsapp.js')}}"></script>
 
  @endsection