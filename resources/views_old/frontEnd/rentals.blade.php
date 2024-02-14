@extends('frontEndLayout.index')
@section('content')
<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
<div class="Container _553320">
<!-- Sidebar -->
<div class="w55-sidebar w3-bar-block">
<a href="{{route('myrentals')}}" class="w3-bar-item w3-button"><i class="fa-solid fa-car-side"></i> Your Rentals</a>
  <a href="{{route('completedBooking')}}" class="w3-bar-item w3-button"><i class="fa-regular fa-circle-check"></i> Complete Rentals</a>
  <a href="{{route('cancelledBooking')}}" class="w3-bar-item w3-button"><i class="fa-regular fa-circle-xmark"></i> Cancelled Rentals</a>
</div>

<!-- </div> -->
      <div class="container _5533299">

      @isset($check)
        <div class="_553321">
          <h2>@lang('public.Your Rentals')</h2>
          <h5 class="text-muted">@lang('public.Your Upcoming or active rental booking')</h5>
        </div>
        
        <hr class="hr" />
        <div class="_553324">
                  <div>
                          @foreach (auth()->user()->unreadNotifications as $notification)
                              @if($notification->data['NotificationType'] == 'Request')
                              <h1 class="abc">{{ $notification->data['Name'] }} @lang('public.has requested to rent your Item, from Date:')
                                  {{ $notification->data['start'] }} - {{ $notification->data['end'] }}</h1>
                                  <form action="{{route('approved',$notification->data['cart_id'])}}">
                                    <input type="text" hidden name="nID" value="{{$notification->id}}">
                                  <button class="btn-lg  btn-info">@lang('public.Approve')</button>
                                  </form>
                                  <form action="{{route('declined',$notification->data['cart_id'])}}">
                                    <input type="text" hidden name="nID" value="{{$notification->id}}">
                                    <button class="btn-lg  btn-danger">@lang('public.Decline')</button>
                                  </form>
                            @endif

                            @if($notification->data['NotificationType'] == 'Approved')
                            <h3 class="abc">@lang('public.Your booking request has been approved proceed to check out')</h3>
                            <a href="{{route('confirmed',$notification->data['cart_id'])}}"><button class="btn-lg  btn-primary" >@lang('public.Check Out')</button></a>
                            <a href="{{route('markasread',$notification->id)}}"><button class="btn-lg  btn-primary" >@lang('public.Mark as Read')</button></a>
                            @endif


                          @if($notification->data['NotificationType'] == 'Delcined')
                              <p>@lang('public.Your request for booking of') {{$notificatio->data['product_name']}}@lang('public.has been declined by vendor') </p>
                          @endif
                          @endforeach
                      </div>
          <img src="{{asset('/assetsFrontEnd/rentalImgs/Your-rental-01.png')}}" alt="" />
        </div>
        <div class="_553325">
          <h3>@lang('public.You dont have any rentals')</h3>
          <h6 class="text-muted">
            @lang('public.here you will find an overview of your Upcoming or active rental booking')
          </h6>
        </div>
        @endisset
      </div>

      </div>
    </div>

    @endsection
