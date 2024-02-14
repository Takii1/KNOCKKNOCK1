@extends('frontEndLayout.index')
@section('content')

    <div class="vendors-product-page">
        <div class="Vvendor">
            <h1>Vendors Profile</h1>
            <div class="Vendor0">
                <label for="Vendor1">Vendor's products been used
                </label>
                <input id="Vendor1" type="number" value="{{$count}}" class="text-secondary">
                <label for="Vendor2">Vendor's earning per week
                </label>
                <input id="Vendor2" type="number" class="text-secondary" value="{{$t}}">
            </div>
        </div>
            <div class="Vendor3">
                <form action="{{route('vendorsave')}}" method="POST">
                    <h2>Share card details</h2>
                    @csrf
                    <div class="Ddetails">
                        <label for="bank-name">Bank Name
                            <input id="bank-name" name="BName" type="text" >
                        </label>
                        <label for="card-holder">Card Holder Name
                            <input id="card-holder" name="HName" type="text">
                        </label>
                        <label for="card-number">Account Number
                            <input id="card-number" name="Cnumber" type="number"/>
                        </label>
                    </div>

            </div>
            <button id="Ssubmit" type="submit">Submit</button>
        </form>
    </div>

@endsection
