@extends('frontEndLayout.index')

@section('content')

    <div class="container mt-2">
        <form class="myform form-group" action="{{route('SaveProduct')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="jumbotron">
                <h3 class="text-center text-primary mb-5">Product Save Info</h3>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="input"> Product Name </label>
                        <input type="text" name="Prod_name" class="form-control" placeholder="Product Name"/>
                        @error('Product_name')
                           <li style="color: red"> {{$message}} </li>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="input"> Product Description</label>
                        <input type="" name="Prod_Descp" class="form-control" placeholder="Product Description" />
                        @error('Product_description')
                        <li style="color: red"> {{$message}} </li>
                     @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="input"> Product Category</label>
                        <select name="Cat_ID" class="form-control" id="">
                            <option selected>Select Sport Type</option>
                             @foreach($type as $ty)
                              <option value="{{$ty->id}}">{{$ty->Category_name}}</option>
                            @endforeach
                        </select>
                    </div>
                
                        <div class="form-group col-md-6">
                            <label for="input">Condition</label>
                            <select name="Condition" class="form-control">
                                <option selected>Select Item Condition</option>
                                <option value="New">New</option>
                                <option value="Slightly used">Slightly used</option>
                                <option value="Used">Used</option>
                            </select>
                        </div>
                    <div>
                        <input type="radio" name="Insurance" id="radiobtn">
                        <label class="form-check-label inline-block text-white" for="radiobtn">
                            Yes , I have civil liability and full insurance with a private insurance company.
                        </label>
                        <br>
                        <br>

                    <input type="radio" name="Insurance" id="radiobtn2">
                    <label class="form-check-label inline-block text-white" for="radiobtn2">
                        No, I do not have civil liability and full insurance with a private insurance company.
                    </label>
                </div>
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
                  
                <br>
                <br>
                
                <div class="form-control">
                    <label class="text-dark">location : </label>
                <input type="text" 
                 id="Loc"
                name="Location"
                type="text"
                value="{{ $loc->cityName }}"  >
            </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="imges"> Upload Images </label>
                        <input type="file"  name="Photos[]"  accept="images/*" multiple class="form-control" placeholder="Add Images" id="imges"/>
                        @error('image')
                        <li style="color: red"> {{$message}} </li>
                     @enderror
                    </div>
                   
                    
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="input">Rent per hour</label>
                        <input type="text" name="RentPH" class="form-control" placeholder="Rent per hour" />
                        @error('Rent_per_hour')
                        <li style="color: red"> {{$message}} </li>
                     @enderror
                        
                    </div>
                    <div class="form-group col-md-6">
                        <label for="input">Rent per Day</label>
                        <input type="text" name="RentPD" class="form-control" placeholder="Rent per Day" />
                        @error('Rent_per_day')
                        <li style="color: red"> {{$message}} </li>
                     @enderror
                    </div>
                   
                <div class="form-row">
                <div class=" form-group col-md-12 text-center mt-5">    
                    <button type="submit" class="btn btn-primary btn-block btn-lg">Save</button>
                </div>
                </div>
        </form>
    </div>

@endsection

</html>