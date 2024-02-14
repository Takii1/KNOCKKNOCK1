@extends('frontEndLayout.index')
@section('content')
<!-- Prrofile Page -->
<!-- <div class="container"> -->
  <div class="Prrofile">
<div class="w55-sidebar w3-bar-block">
    <a href="{{route('EditProfile')}}" class="w3-bar-item w3-button"><i class="fa-regular fa-user"></i>@lang('public.Edit Profile')</a>
    <a href="{{route('popup')}}" class="w3-bar-item w3-button"><i class="fa-regular fa-credit-card"></i>@lang('public.Payment Cards')</a>
  <a href="{{route('EditProfile')}}" class="w3-bar-item w3-button"><i class="fa-regular fa-bell"></i>@lang('public.Notification')</a>
  <a href="{{route('setting')}}" class="w3-bar-item w3-button"><i class="fa-solid fa-gear"></i>@lang('public.Settings')</a>
  <a href="{{route('verifications')}}" class="w3-bar-item w3-button"><i class="fa-solid fa-user-shield"></i>@lang('public.Verification')</a>
</div>
    <!-- <div class="container"> -->
      <div class=" _444" style="margin-top: 50px;" >
        <div style="margin-right: 35px;"><!--left col-->
            <form class="form" action="{{route('saveprofile')}}" method="post" id="registrationForm" enctype="multipart/form-data">
        <div class="text-center">
          <img src="{{asset('ProfilePics/'.$usr->profilePicture)}}" class="avatar img-circle img-thumbnail"
          alt="avatar" style="height: 134px;">
          <h4 style="font-size:1.5rem; font-weight: bold; margin-bottom: 0;">{{$usr->name}}</h4>
          <p class="mb-3" style="font-weight: lighter; font-size: 14px;" >{{$usr->email}}</p>
          <br>
          <div class="upload">
            <button type="button" class="warning">
                @lang('public.Edit Image')<input type="file" name="profilePicture">
              <!-- <i class="fa-solid fa-upload"></i> -->
            </button>
          </div>
        </div>

      </div><!--/col-3-->
      <div class="col-md-10" style="Font-size: 2rem;">
        <ul class="nav nav-tabs" style="    border-bottom: 29px solid #dee2e6;">
          <li class="active" ata-toggle="tab"  style="font-weight: 500; color: #000; font-size: 25px;">
            @lang('public.Profile Setting')</li>
        </ul>


        <div class="tab-content">
          <div class="tab-pane active" id="home">
            <hr>

              <div class="form-group">

                <div class="col-xs-6">
                  <label for="first_name">
                    <h4>@lang('public.First name')</h4>
                  </label>
                  <input type="text" class="form-control" name="name" id="first_name" placeholder="@lang('public.First Name')"
                  value="{{$usr->name}}" required>
                </div>
              </div>
              {{-- <div class="form-group">
                <div class="col-xs-6">
                  <label for="last_name">
                    <h4>@lang('public.Last name')</h4>
                  </label>
                  <input type="text" class="form-control" name="last_name" id="last_name" placeholder="@lang('public.Last Name')"
                  value="{{$usr->name}}" required>
                </div>
              </div> --}}

              <!-- <div class="form-group"> -->

              <div class="form-group">
                <div class="col-xs-6">
                  <label for="mobile">
                    <h4>@lang('public.Mobile')</h4>
                  </label>
                  <input type="text" class="form-control" name="mobile" id="mobile" placeholder="@lang('public.Enter Mobile Number')"
                  value="{{$usr->mobilePhone}}" required>
                </div>
              </div>
              <div class="form-group">
                <div class="col-xs-6">
                  <label for="email">
                    <h4>@lang('public.Email')</h4>
                  </label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="@lang('public.Enter Your Email')"
                  value="{{$usr->email}}" required>
                </div>
              </div>
              <div class="form-group">

                <div class="col-xs-6">
                  <label for="Address">
                    <h4>Address</h4>
                  </label>
                  <input type="Address"  name="address" class="form-control" id="Address" placeholder="@lang('public.Enter a Address')"
                     value="{{$usr->address}}" required>
                    </div>
                  </div>
              <div class="form-group">

                <div class="col-xs-6">
                  <label for="password">
                    <h4>@lang('public.Password')</h4>
                  </label>
                  <input type="password" class="form-control" name="password" id="password"
                    placeholder="@lang('public.Enter a Password')" required>
                  <i id="eye" class="fa fa-eye" aria-hidden="true" onclick="toggle()"></i>
                </span>
              </div>
              </div>
              <div class="form-group">

                <!-- <div class="col-xs-6">
                  <label for="password2">
                    <h4>Verify</h4>
                  </label>
                  <input type="password" class="form-control" name="password2" id="password2"
                    placeholder="Enter a Password Verify" title="enter your password ." required>
                  </div>
                </div> -->
                <div class="form-group">
                <div class="col-xs-12">
                  <br>

                  <button type="button" class="_999 btn primary" style="font-weight: bold; " >@lang('public.Save')</button>

                  <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog"
                  aria-labelledby="mySmallModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content text-center">
                        @lang('public.Saving...')
                      </div>
                    </div>
                  </div>
<!--
                  <button style="font-weight: bold;" class="btn" type="reset"><i class="glyphicon glyphicon-repeat"></i>
                    Reset</button> -->

                  </div>
                </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        </div>
        <!-- </div> -->
</div>
          <script src="{{asset('assetsFrontEnd\Profileopts\editProfile\UserProfile.js')}}"></script>
          <!-- Prrofile Page End -->
@endsection
