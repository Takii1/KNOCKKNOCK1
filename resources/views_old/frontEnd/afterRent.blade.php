@extends('frontEndLayout.index')

@section('content')
<div class="UUpload">

<form action="{{route('savebefore')}}" method="POST" enctype="multipart/form-data">
                      @csrf

      <div class="fafe2f65">
          <div class="a1f8c89e">
            <div>
              <div class="_27033455">
                  <div class="b7cdd9f7">
                    <span class="_7978e49c _2e82a662 a695f1e9"
                      >Images while Returning possesion product</span
                    >
                  </div>
                  <div class="cb852a68">
                    <div class="cb8c9afa">
                      <label for="title" class="_9e14c74e"><span class="_34a7409b">Order ID: {{$order->id}}</span></label>
                      <div class="_9e14c74e">
                        <span class="c45bea97"
                            ><span class="_34a7409b"
                              >booked by : {{$order->name}}</span
                            ></span>
                      </div>
                      <div class="df4e426f">
                            <span class="c45bea97"
                              ><span class="_8918c0a8"
                                >booked from {{$order->Start_date}} - {{$order->End_date}}</span
                              ></span
                            ><span class="ee7ffe72"
                              ></span
                            >
                      </div>
                    </div>
                    <div class="Kam_kar">

                        <input type="file" name="Photos[]" id="imges"  accept="images/*" multiple>

                        <button class="BBtn" type="submit" style="float:right">Post Now</button>
                      </form>
                  </div>

              </div>
            </div>
          </div>

      </div>


</div>
    @endsection

