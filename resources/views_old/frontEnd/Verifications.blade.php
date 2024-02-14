@extends('frontEndLayout.index')
@section('content')
<div class="Vverfications">
  <div class="w55-sidebar w3-bar-block">
    <a href="{{route('EditProfile')}}" class="w3-bar-item w3-button"><i class="fa-regular fa-user"></i> Edit Profile</a>
    <a href="{{route('popup')}}" class="w3-bar-item w3-button"><i class="fa-regular fa-credit-card"></i> Payment Cards</a>
    <a href="{{route('EditProfile')}}" class="w3-bar-item w3-button"><i class="fa-regular fa-bell"></i> Notification</a>
    <a href="{{route('setting')}}" class="w3-bar-item w3-button"><i class="fa-solid fa-gear"></i> Settings</a>
    <a href="{{route('verifications')}}" class="w3-bar-item w3-button"><i class="fa-solid fa-user-shield"></i> Verification</a>
  </div>
  <div class="container">
<div class="can">
      <div class="Verification">
        <h1 class="main3">@lang('public.Verification')</h1>

      </div>
      <hr />
      <div class="mobile">
        <h3 class="main_h4">@lang('public.Email')</h3>
        @if($email == "notverified")
        <h6 class="main_h6 text-muted">
            @lang('public.Your Email is not yet verified')
          </h6>
        @else
            <h6 class="main_h6 text-muted">
                @lang('public.Your Email has been verified')
            </h6>
        @endif

      </div>
      <hr id="hr" />
      <div class="Renter">
        <h2 id="main_h2">@lang('public.Renter Approval')</h2>
        @if ($profile == "notverified")
            <h6 class="main_h6 text-muted">
                @lang('public.Your Account is not approved for car rental')
            </h6>
        @else
            <h6 class="main_h6 text-muted">
                @lang('public.Your Account has been approved for car rental')
            </h6>
        @endif
        <div class="main_button">
          <a href="{{route('steptwo')}}" id="button_2">@lang('public.Add Documents')</a>
        </div>
      </div>
    </div>
    </div>
    </div>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
  ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js"></script>

  @endsection
