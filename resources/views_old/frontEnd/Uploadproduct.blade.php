@extends('frontEndLayout.index')

@section('content')
    <div class="UUpload">

    <form action="{{route('SaveProduct')}}"method="POST" enctype="multipart/form-data">
        @csrf
    <div class="fafe2f65">
      <div class="a1f8c89e">
        <div>
          <div class="_8892a5e8">
            <div>
              <div class="_302801f2">
                <span class="_7978e49c _2e82a662 a695f1e9"
                  >@lang('public.Select category')</span
                >
              </div>
             <select class="SELECt " name="Cat_ID" id="">
                <option selected>@lang('public.Select category')</option>
                @foreach($type as $ty)
                              <option value="{{$ty->id}}">{{$ty->Category_name}}</option>
                            @endforeach
             </select>
            </div>
          </div>
          <div class="_27033455">
            <form>
              <div class="b7cdd9f7">
                <span class="_7978e49c _2e82a662 a695f1e9"
                  >@lang('public.Include some details')</span
                >
              </div>
              <div class="cb852a68">
                <div class="cb8c9afa">
                  <label for="title" class="_9e14c74e"
                    ><span class="_34a7409b">@lang('public.Product Name')</span></label
                  >
                  <div class="f6c2c5a2">
                    <input
                      name="Prod_name"
                      id="title"
                      name="title"
                      spellcheck="false"
                      class="fc60720d"
                      maxlength="70"
                      autocomplete="nope"
                      value=""
                    />
                  </div>
                  <div class="df4e426f">
                    <span class="c45bea97"
                      ><span class="_8918c0a8"
                        >@lang('public.Mention the key features of your item (e.g. brand,model, age, type)')</span
                      ></span
                    ><span class="ee7ffe72"
                      ><span class="_8918c0a8">0/70</span></span
                    >
                  </div>
                </div>
                <div class="cb8c9afa">
                  <label for="description" class="_9e14c74e"
                    ><span class="_34a7409b">@lang('public.Description')</span></label
                  >
                  <div class="f6c2c5a2 _75b19f76">
                    <textarea
                      id="description"
                      name="Prod_Descp"
                      spellcheck="false"
                      class="fc60720d"
                      maxlength="4096"
                      autocomplete="nope"
                    ></textarea>
                  </div>
                  <div class="df4e426f">
                    <span class="c45bea97"
                      ><span class="_8918c0a8"
                        >@lang('public.Include condition, features and reason for selling')</span
                      ></span>
                    ><span class="ee7ffe72"
                      ><span class="_8918c0a8">0/4096</span></span
                    >
                  </div>
                </div>
                <div class="Kam_kar">
                <select class="SELECT" name="Condition" id="">
                    <option value="Selected">@lang('public.Select Condition')</option>
                    <option>@lang('public.New')</option>
                    <option>@lang('public.Used')</option>
                    <option>@lang('public.Old')</option>
                </select>

                <label class="IImage" for="imges">@lang('public.Upload Image')
                <input id="imges" name="Photos[]" type="file" multiple accept="images/*" ></label>
            </div>
                <div class="_7fccd0e8"></div>
                <div class="_24ffe5a1">
                  <span class="_7978e49c _2e82a662 a695f1e9">@lang('public.Set a price')</span>
                </div>
                <div class="cb8c9afa">
                  <label for="price" class="_9e14c74e"
                    ><span class="_34a7409b">@lang('public.Rent Per Day')</span></label
                  >
                  <div class="f6c2c5a2">
                    <span class="f16b0aeb"
                      ><span class="_8918c0a8">€</span></span
                    ><input
                      id="price"
                      name="RentPD"
                      spellcheck="false"
                      class="fc60720d"
                      autocomplete="nope"
                      type="text"
                      value=""
                    />
                  </div>
                </div>
                <!-- <div class="cb8c9afa">
                  <label for="price" class="_9e14c74e"
                    ><span class="_34a7409b">Rent Per Hour</span></label
                  >
                  <div class="f6c2c5a2">
                    <span class="f16b0aeb"
                      ><span class="_8918c0a8">€</span></span
                    ><input
                      id="price"
                      name="RentPH"
                      spellcheck="false"
                      class="fc60720d"
                      autocomplete="nope"
                      type="text"
                      value=""
                    />
                  </div>
                </div> -->
                <div class="_7fccd0e8"></div>
                <div class="RRatio">
                    <input   type="radio" name="Insurance" id="radiobtn">
                    <label class="form-check-label inline-block text-white" for="radiobtn">
                        @lang('public.Yes , I have civil liability and full insurance with a private insurance company.')
                    </label>
                <input type="radio" name="Insurance" id="radiobtn2">
                <label class="form-check-label inline-block text-white" for="radiobtn2">
                    @lang('public.No, I do not have civil liability and full insurance with a private insurance company.')
                </label>
            </div>
            <div class="_7fccd0e8"></div>
            <div>
                    <input type="text" name="coords"
                    placeholder=""
                    value="{{ $loc->latitude }}, {{ $loc->longitude }}"
                    hidden>
                    <input type="text" name="Zipcode"
                    value="Zipcode: {{ $loc->zipCode }}" hidden>
                    <input type="text" name="Region"
                    value="Region Name: {{ $loc->regionName }}" hidden>
                </div>
            <label class="llocation" for="">Location :
                <input type="text" value="{{ $loc->cityName }}" name="Location" >
            </label>
            <button class="BBtn" type="Submit" style="float:right">@lang('public.Rent Per Day')</button>

            </form>
          </div>
        </div>
      </div>
    </div>
    </form>
    </div>

    @endsection

