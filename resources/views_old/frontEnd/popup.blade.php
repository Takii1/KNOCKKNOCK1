@extends('frontEndLayout.index')
@section('content')
<div class="Nnotifiction">
  <div class="w55-sidebar w3-bar-block">
    <a href="{{route('EditProfile')}}" class="w3-bar-item w3-button"><i class="fa-regular fa-user"></i> @lang('public.Edit Profile')</a>
  <a href="{{route('popup')}}" class="w3-bar-item w3-button"><i class="fa-regular fa-credit-card"></i>@lang('public.Payment Cards')</a>
  <a href="{{route('EditProfile')}}" class="w3-bar-item w3-button"><i class="fa-regular fa-bell"></i> @lang('public.Notification')</a>
  <a href="{{route('setting')}}" class="w3-bar-item w3-button"><i class="fa-solid fa-gear"></i> @lang('public.Settings')</a>
  <a href="{{route('verifications')}}" class="w3-bar-item w3-button"><i class="fa-solid fa-user-shield"></i> @lang('public.Verification')</a>
</div>
<div class="container">
      <div class="Main">
        <h1>@lang('public.Payment Cards')</h1>
        <h5 class="head_m text-muted">@lang('public.Manage Your Payment Cards')</h5>

        <!-- Open The Modal -->
      </div>
      <button id="myBtn">@lang('public.Add New Cards')</button>
      <!-- The Modal -->
      <div id="myModal" class="modal">
        <span class="close">×</span>
        <!-- Modal content -->
        <div class="container">
          <div class="card-container">
            <div class="front">
              <div class="image">
                <img src="{{asset('/assetsFrontEnd/Profileopts/images/chip.png')}}" alt="" />
                <!-- <img src="{{asset('/assetsFrontEnd/Profileopts/images/visa.png')}}" alt="" /> -->
              </div>
              <div class="card-number-box">################</div>
              <div class="flexbox">
                <div class="box">
                  <span>Card Holder</span>
                  <div class="card-holder-name">_____________</div>
                </div>
                <div class="box">
                  <span>Expires</span>
                  <div class="expiration">
                    <span class="exp-month">--</span>
                    <span class="exp-year"> -- </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="back">
              <div class="stripe"></div>
              <div class="box">
                <span>cvv</span>
                <div class="cvv-box"></div>
                <img src="/images/visa.png" alt="" />
              </div>
            </div>
          </div>

          <form action="">
            <div class="inputBox">
              <span>@lang('public.Card Number')</span>
              <input type="text" maxlength="16" class="card-number-input" />
            </div>
            <div class="inputBox">
              <span>@lang('public.Card Holder')</span>
              <input type="text" class="card-holder-input" />
            </div>
            <div class="flexbox">
              <div class="inputBox">
                <span>Expiration</span>
                <select name="" id="" class="month-input text-muted">
                  <option value="month" selected disabled>@lang('public.Month')</option>
                  <option value="01">01</option>
                  <option value="02">02</option>
                  <option value="03">03</option>
                  <option value="04">04</option>
                  <option value="05">05</option>
                  <option value="06">06</option>
                  <option value="07">07</option>
                  <option value="08">08</option>
                  <option value="09">09</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                </select>
              </div>
              <div class="inputBox">
                <span>@lang('public.Expiration')</span>
                <select name="" id="" class="year-input text-muted">
                  <option value="year" selected disabled>@lang('public.Year')</option>
                  <option value="2021">2021</option>
                  <option value="2022">2022</option>
                  <option value="2023">2023</option>
                  <option value="2024">2024</option>
                  <option value="2025">2025</option>
                  <option value="2026">2026</option>
                  <option value="2027">2027</option>
                  <option value="2028">2028</option>
                  <option value="2029">2029</option>
                  <option value="2030">2030</option>
                </select>
              </div>
              <div class="inputBox">
                <span>Cvv</span>
                <input type="text" maxlength="4" class="cvv-input" />
              </div>
            </div>
            <input type="submit" value="Submit" class="submit-btn" />
          </form>
        </div>
      </div>
    </div>
    </div>
  <script src="popup.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
  ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js"></script>
@endsection
