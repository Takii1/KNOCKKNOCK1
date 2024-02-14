<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>


<form action="{{route('SaveProduct')}}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 ">

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">

                <div class="max-w-xl m-auto">
                    <x-input-label for="category Name" :value="__('Product Name :')"  />
                    <x-text-input
                    id="password"
                    name="Prod_name"
                    type="text"
                    class="mt-1 block w-3/4"
                    placeholder="Product Name"
                />


                <br>
                <x-input-label for="category status" :value="__('Product Description :')"  />
                    <x-text-input
                    id="password"
                    name="Prod_Descp"
                    type="text"
                    class="mt-1 block w-3/4"
                    placeholder="Product Description"

                />


                <div class="flex justify-center">
  <div class="mb-3 xl:w-96">
    <select class="form-select appearance-none
      block
      w-full
      px-3
      py-1.5
      text-base
      font-normal
      text-gray-700
      bg-white bg-clip-padding bg-no-repeat
      border border-solid border-gray-300
      rounded
      transition
      ease-in-out
      m-0
      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example" name="Cat_ID">
        <option selected>Select Sport Type</option>
        @foreach($type as $ty)
        <option value="{{$ty->id}}">{{$ty->Category_name}}</option>
        @endforeach
    </select>
  </div>
</div>

<div class="flex justify-center">
  <div class="mb-3 xl:w-96">
    <select class="form-select appearance-none
      block
      w-full
      px-3
      py-1.5
      text-base
      font-normal
      text-gray-700
      bg-white bg-clip-padding bg-no-repeat
      border border-solid border-gray-300
      rounded
      transition
      ease-in-out
      m-0
      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="Condition" aria-label="Default select example">
        <option selected>Select Item Condition</option>
        <option value="New">New</option>
        <option value="Slightly used">Slightly used</option>
        <option value="Used">Used</option>
    </select>
  </div>
</div>

            <div class="flex justify-center">
            <div>
                <div class="form-check">
                <input class="left mr-2 cursor-pointer" type="radio" name="Insurance" id="flexRadioDefault1">
                <label class="form-check-label inline-block text-white" for="flexRadioDefault1">
                    Yes , I have civil liability and full insurance with a private insurance company.
                </label>
                </div>
                <div class="form-check">
                <input class="form-bg-ointer" type="radio" name="Insurance" id="flexRadioDefault2" checked>
                <label class="form-check-label inline-block text-white" for="flexRadioDefault2">
                    No, I do not have civil liability and full insurance with a private insurance company.
                </label>
                </div>
            </div>
            </div>
            <br>
            <div>
                <x-input-label for="category status" :value="__('location :')"  />
                    <x-text-input
                    id="Loc"
                    name="coords"

                    placeholder=""
                    value="{{ $loc->latitude }}, {{ $loc->longitude }}"
                    hidden
                />
                <x-text-input
                    id="Loc"
                    name="Zipcode"

                    value="Zipcode: {{ $loc->zipCode }}"
                />
                <x-text-input
                    id="Loc"
                    name="Region"

                    value="Region Name: {{ $loc->regionName }}"
                />
                <x-text-input
                    id="Loc"
                    name="Location"
                    type="text"
                    class="mt-1 block w-3/4"
                    placeholder=""
                    value="City Name: {{ $loc->cityName }}"
                />
                <div id="googleMap" style="width:100%;height:400px;"></div>
            </div>
                <br>
                <br>
                <x-input-label for="category status" :value="__('Rent per Hour:')"  />
                    <x-text-input
                    id="password"
                    name="RentPH"
                    type="text"
                    class="mt-1 block w-3/4"
                    placeholder="Rent per Hour"

                />

                <br>
                <br>
                <x-input-label for="category status" :value="__('Rent Per Day :')"  />
                    <x-text-input
                    id="password"
                    name="RentPD"
                    type="text"
                    class="mt-1 block w-3/4"
                    placeholder="Product Description"

                />

                <br>
                <div class="flex justify-center">
  <div class="mb-3 w-96">
    <label for="formFile" class="form-label inline-block mb-2 text-gray-50">Add Pictures</label>
    <input class="form-control
    block
    w-full
    px-3
    py-1.5
    text-base
    font-normal
    text-gray-700
    bg-white bg-clip-padding
    border border-solid border-gray-300
    rounded
    transition
    ease-in-out
    m-0
    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" type="file"  name="Photos[]" id="formFile" accept="images/*" multiple>
  </div>
</div>


                <x-primary-button type="submit">
                    Submit
                </x-primary-button>

                </div>
            </div>
            </div>
        </div>
    </div>
</form>
<script>
    var lat={{$loc->latitude}};
    var long={{$loc->longitude}};
function myMap() {
var mapProp= {
  center: new google.maps.LatLng(lat,long),
  zoom:18,
  mapTypeId: google.maps.MapTypeId.HYBRID,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

// var marker = new google.maps.Marker({position: mapProp,map:map});

const marker = new google.maps.Marker({
    position: { lat: lat, lng: long },
    map: map,
  });
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBFMmgOrZkroIy8I33X295rUjuezLPjxw&callback=myMap" async defer></script>
</x-app-layout>
