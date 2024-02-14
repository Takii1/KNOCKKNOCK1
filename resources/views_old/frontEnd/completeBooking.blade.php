@extends('frontEndLayout.index')
@section('content')
<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
<div class="Container _553320">
<!-- Sidebar -->
<div class="w55-sidebar w3-bar-block">
<a href="{{route('myrentals')}}" class="w3-bar-item w3-button"><i class="fa-solid fa-car-side"></i>@lang('public.Your Rentals')</a>
  <a href="{{route('completedBooking')}}" class="w3-bar-item w3-button"><i class="fa-regular fa-circle-check"></i> @lang('public.Complete Rentals')</a>
  <a href="{{route('cancelledBooking')}}" class="w3-bar-item w3-button"><i class="fa-regular fa-circle-xmark"></i>@lang('public.Cancelled Rentals')</a>
</div>

<!-- </div> -->
      <div class="container _5533299">
        <div class="_553321">
          <h2>@lang('public.Your completed')</h2>
          <h5 class="text-muted">@lang('public.Your Upcoming or active rental booking')</h5>
        </div>
        {{-- <div class="_553322">
          <button class="_553323 border border-muted">@lang('public.Add to Calender')</button>
        </div> --}}
        <hr class="hr" />
        @isset($ConfirmedOrders)
        @if($ConfirmedOrders)
        <table class="table text-center" >
          <th>
            <tr class="table-bordered">
              <td>
              Order ID
              </td>
              <td>
              Product name
              </td>
              <td>
              Total price
              </td>
              <td>
              Booking requested at
              </td>
              <td>
              Start date - End date
              </td>
              <td>
              Order Status
              </td>
            </tr>
          </th>
          <tbody>
            @foreach($ConfirmedOrders as $orders)
              <tr class="table-bordered">
                <td>{{$orders->id}}</td>
                <td>{{$orders->product_name}}</td>
                <td>{{$orders->total_price}}</td>
                <td>{{$orders->created_at}}</td>
                <td>{{$orders->Start_date}} - {{$orders->End_date}}</td>
                <td>{{$orders->Order_status}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
        @else
        <div class="_553324">
          <img src="{{asset('/assetsFrontEnd/rentalImgs/Your-rental-01.png')}}" alt="" />
        </div>
        <div class="_553325">
          <h3>@lang('public.You dont have any rentals')</h3>
          <h6 class="text-muted">
            @lang('public.here you will find an overview of your Upcoming or active rental booking')
          </h6>
        </div>
        @endif
        @endisset
      </div>
      </div>
    </div>
@endsection
