@extends('frontEndLayout.index')

@section('content')

<div class="pporduct">
<main class="_114">
  <div class="container _115">
    <div class="single-product _116">
      <div class="row _117">
        <div class="col-6">
          <div class="product-image">
            <div class="product-image-main">
              <img src="{{asset('ProductImages/'.$singleImg[0]->image)}}" alt="" id="product-main-image" />
            </div>
            <div class="product-image-slider">
              @foreach($images as $img)
              <img src="{{asset('ProductImages/'.$img->image)}}" onclick="changeImage()"  id="img-small" class="image-list" />
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="{{ route('ratings.store') }}" method="POST">
          @csrf
          <input type="hidden" name="rateable_id" value="{{ $product->id }}">
          <div class="">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Rating this product {{$product->Product_name}}</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
          <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
          <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <!------ Include the above in your HEAD tag ---------->

          <div class="container">
            <div class="rate">
              <input type="radio" id="star5" name="rating" value="5" />
              <label for="star5" title="text">5 stars</label>
              <input type="radio" id="star4" name="rating" value="4" />
              <label for="star4" title="text">4 stars</label>
              <input type="radio" id="star3" name="rating" value="3" />
              <label for="star3" title="text">3 stars</label>
              <input type="radio" id="star2" name="rating" value="2" />
              <label for="star2" title="text">2 stars</label>
              <input type="radio" id="star1" name="rating" value="1" />
              <label for="star1" title="text">1 star</label>
            </div>
          </div>
          <textarea name="comment" id="comment" placeholder="comment this product..." class="comment"></textarea>
          <button type="submit" onclick="alert('thank you for rating!')" class="btn btn-primary" width: 67%; >Massage send</button>
      </div>
      </form>
    </div>
  </div>


  <div class="modal new fade" id="exampleModal2" tabindex="1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <h5>You have already rated this product</h5>
    </div>
  </div>
  </div>


{{-- @isset($MSG )
 <button id="myButton" data-bs-toggle="modal" data-bs-target="#exampleModal2">Click me</button>
@endisset
@isset($MSG)

 <h4>{{$MSG}}</h4>
@endisset --}}
  {{-- <div class="product _118">
    <div class="product-title _119">
      <h2>{{$product->Product_name}}</h2>

    </div>
    <div class="span4">
    <h3>Users Reviews</h3>
    @isset($ratings)


    @endisset
    @if(count($ratings)>0)
    @else
    <p><b>Reviews are not available for this product</b></p>
    @endif

     @endif --}}





    <div class="product-rating _120">
      <span><i class="bx bxs-star"></i></span>
      <span><i class="bx bxs-star"></i></span>
      <span><i class="bx bxs-star"></i></span>
      <span><i class="bx bxs-star"></i></span>
      <span><i class="bx bxs-star"></i></span>
      <span class="review">(47 Review)</span>

    </div>
    <div class="product-price _121">
      <span class="offer-price">{{$product->Rent_per_day}}</span>
      {{-- <span class="sale-price">Rs 100</span> --}}
    </div>

    <div class="product-details _122">
      <h3>Description</h3>
      <p>
        {{$product->Product_description}}
      </p>
    </div>
  </div>



    <span class="divider _123"></span>
     <!-- Button trigger modal -->
  <button type="button" class="_989 btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Rating this product
  </button>
    @if ($dates != null)
    <p style="font-size: 15px">This Product is booked from {{$dates->Start_date}} to {{$dates->End_date}}</p>
    @endif
     @if(\Session::has('MSGreq'))
     <div class="container-fluid">
        <h2 class="alert alert-success text-center">{{\Session::get('MSGreq')}}</h2>
    </div>
     @endif
    <form action="{{route('add_cart' , $product->id ) }}" method="POST">
      @csrf
      <div class="container">
        <div class=" _111">
          <div class="sub _112">
            <sub>Pickup</sub>
              <sub>Return</sub>
          </div>
          <input type="text" id="daterange" name="date[]" class="daterange _113">
        </div>
      </div>

  <div class="product-btn-group _124">
    <div class="button buy-now">
      <i class="fa-solid fa-money-bills"></i>
      <input type="submit" class="btn m-1 text-white text-lg" value="Rent it">
      </form>
    </div>
    </div>
<br>
@isset($rating)
@foreach ($rating as $rate)
<br>
<div class="row" style="color: orange">

    @switch($rate->rating)
        @case(5)
        <div class="">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>


            @break
            @case(4)
        <div class="">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>




          </div>

            @break
            @case(3)
        <div class="">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>




          </div>

            @break
            @case(2)
        <div class="">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
          </div>
            @break
            @case(1)
        <div class="">

            <span class="fa fa-star checked"></span>




          </div>

            @break

        @default

    @endswitch

<p style="color: red;font-size:30px;">{{$rate->comment}}</p>
</div>
</div>
@endforeach
@endisset
  </div>
  </div>
  <div class="Map _125">
    <h1>Pick-up and return location</h1>
    <iframe class="map _126" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2990.274257380938!2d-70.56068388481569!3d41.45496659976631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e52963ac45bbcb%3A0xf05e8d125e82af10!2sDos%20Mas!5e0!3m2!1sen!2sus!4v1671220374408!5m2!1sen!2sus" allowfullscreen=""    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</main>

<!-- back-to-top -->
<button id="btn-back-to-top" type="button " data-mdb-ripple="true " data-mdb-ripple-color="light " class="inline-block p-3 bg-grey-600 text-light font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-black-700 hover:text-white hover:shadow-lg focus:bg-sky-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-sky-800 active:shadow-lg transition duration-150 ease-in-out bottom-5 right-5">
  <svg aria-hidden="true " focusable="false " data-prefix="fas " class="w-4 h-4" role="img " xmlns="http://www.w3.org/2000/svg " viewBox="0 0 448 512 ">
    <path fill="currentColor " d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3
             9.8-24.8 10-34.3.4z "></path>
  </svg>
</button>
<!-- back-to-top -->
<!-- date&time -->
<script src="{{asset('/assetsFrontEnd/Product/daterangepicker.js')}}"></script>
<script type="text/javascript">
  // const periodeValue = document.querySelector('.periode-value');
  const picker = new DateRangePicker('#daterange', {
    start: "2023-01-01",
    end: "2023-01-01",
    onchange: (start, end) => {
      periodeValue.innerHTML = `
                      Début: ${start}
                      <br/>
                      Fin: ${end}
                  `;
    },
    args: []
  });
</script>


<!-- js file -->
<script src="{{asset('/assetsFrontEnd/Product/Products/script.js')}}"></script>
<script>
const myButton = document.getElementById('myButton');
myButton.dispatchEvent(new Event('click'));
</script>


@endsection
