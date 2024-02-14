@extends('frontEndLayout.index')
@section('content')
<div class="Ssetting">
  <div class="w55-sidebar w3-bar-block">
    <a href="{{route('EditProfile')}}" class="w3-bar-item w3-button"><i class="fa-regular fa-user"></i>@lang('public.Edit Profile')</a>
    <a href="{{route('vendor')}}" class="w3-bar-item w3-button"><i class="fa-regular fa-credit-card"></i>@lang('public.Payment Cards')</a>
  <a href="{{route('EditProfile')}}" class="w3-bar-item w3-button"><i class="fa-regular fa-bell"></i>@lang('public.Notification')</a>
  <a href="{{route('setting')}}" class="w3-bar-item w3-button"><i class="fa-solid fa-gear"></i>@lang('public.Settings')</a>
  <a href="{{route('verifications')}}" class="w3-bar-item w3-button"><i class="fa-solid fa-user-shield"></i>@lang('public.Verification')</a>
  </div>
  <div class="container">
      <div class="setting">
        <h2 class="Main2" style="font-size:2.5rem; font-weight:bold;">@lang('public.Settings')</h2>
        <h5 class="head_m text-muted" style="font-size:2rem;" >
            @lang('public.Manage Your Email,Password And Language Settings')
        </h5>
        <hr class="hr" />
        {{-- <h4>Email</h4>
        <h6></h6>
        <span class="span text-muted" style="font-size:1.8rem;">
          You are logged in using your facebook Account. login is approved
          through facebook, and you cannot change the email locally on knock
          knock.
        </span>
        <hr id="hr" />
        <h2 class="Main2">Delete your Account</h2>

        <p class="para text-muted" style="font-size:1.8rem;" >
          once you have Deleted your Account, you will not be able to access
          information about your past activity,message,etc.
        </p> --}}

  {{-- <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable> --}}
      <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
          @csrf
          @method('delete')

          {{-- <h2 class="mb-3" style="font-size:2rem;" > --}}

              <h1>@lang('public.Are you sure you want to delete your account?')</h1>


          <p  style="font-size:1.2rem;" >
            @lang('public.Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.')
          </p>

          <div class="mt-6">
              <x-input-label for="password" value="Password" class="sr-only" />

              <x-text-input
                  id="password"
                  name="password"
                  type="password"
                  class="mt-1 block w-4/5 p-2"
                  placeholder="Password"
              />

              <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
          </div>

          <div class="mt-6 flex justify-end ">
              <x-danger-button class="ml-3" style="font-size:1.2rem; padding:10px !important;" >
                  {{ __('Delete Account') }}
              </x-danger-button>
          </div>
      </form>
  {{-- </x-modal> --}}
  </div>
    </div>
    </div>
    </div>

  <script src="Setting.js"></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
  ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js"></script>
@endsection
