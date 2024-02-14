@extends('frontEndLayout.index')

@section('content')
    <div class="RResult">

        @isset($MSG)
            <div class="_2233">

                <marquee behavior="" direction=""><h1 style="margin-top:90px;">{{$MSG}}</h1></marquee>

            </div>
        @endisset

        @isset($products)
            <!-- card -->
            @foreach($products as $product)
                <div class="card m-10" style="width: 27rem; display: flex;">
                    @if($product->products_id == $product->id)
                        <img src="{{asset('ProductImages/'.$product->Image[0])}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{$product->Product_name}}</h5>
                            <p class="card-text m-3 text-center ">Rent per day : {{$product->Rent_per_day}}</p>
                            <div class="Btn">
                                <a href="{{route('ProductDeatils',$product->id)}}" class="btn m-1">Details</a>
                                <a href="{{route('user',$product->User_Id)}}" class="btn m-1">Chat</a>
                                @endif
                            </div>
                        </div>
                </div>

            @endforeach
        @endisset

    </div>
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

@endsection


