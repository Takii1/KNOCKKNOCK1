@extends('frontEndLayout.index')
 @section('content')   
 <!-- form starter -->
 <div class="House">
 <section id="form">
     <div class="form-container">
         <div class="containerS">
             <!-- <img src="./assets/Background/flat-mountains.png" alt=""> -->
             <form action="{{route('Products')}}" method="POST">
                    <h2>@lang('public.There are no limits to practice sports." Get out and enjoy')
                    </h2>
                    @csrf
                    <div class="form">
                        <input class="text-muted" type="text" name="Location" id="Location" required>
                        <label for=""></label>

                        <select id="cat-search-popup" class="postform text-muted " name="Category">
                            <option class="text-muted" value="" selected="selected">@lang('public.Select Category')</option>
                            <option class="level-0" value="uncategorized">@lang('public.Uncategorized')</option>
                            @foreach($cat as $cate)
                            <option class="level-0" value="{{$cate->id}}">{{$cate->Category_name}}</option>
                            @endforeach
                        </select>
                        <input class="text-muted" type="text" placeholder="Pick-up Date" name="PickUp" onfocus="(this.type='date')"
                            onblur="(this.type='text')">
                        <input class="text-muted" type="text" placeholder="Drop-off Date" name="DropOff" onfocus="(this.type='date')"
                            onblur="(this.type='text')">
                    </div>

                    <button type="submit" class="f-btn m-10">@lang('public.Find Item')</button>
                    
                    <h3 style="font-family: Fuzzy Bubbles;" class="mt-20">@lang('public."Or if you want to search by discipline"')</h3>
                </form> 

                    <div class="owl-carousel owl-theme ">
                        <div class="item"> <img class="pngs" src="{{asset('/assetsFrontEnd/PNGs/bicycle.png')}}" alt=""> </div>
                        <div class="item"> <img class="pngs" src="{{asset('/assetsFrontEnd/PNGs/ice-skating-silhouette.png')}}" alt=""> </div>
                        <div class="item"> <img class="pngs" src="{{asset('/assetsFrontEnd/PNGs/jugador-de-tenis-con-raqueta.png')}}" alt=""> </div>
                        <div class="item"> <img class="pngs" src="{{asset('/assetsFrontEnd/PNGs/skateboarder.png')}}" alt=""> </div>
                        <div class="item"> <img class="pngs" src="{{asset('/assetsFrontEnd/PNGs/ski.png')}}" alt=""> </div>
                        <div class="item"> <img class="pngs" src="{{asset('/assetsFrontEnd/PNGs/snowboard.png')}}" alt=""> </div>
                        <div class="item"> <img class="pngs" src="{{asset('/assetsFrontEnd/PNGs/surfing.png')}}" alt=""> </div>
                        <div class="item"> <img class="pngs" src="{{asset('/assetsFrontEnd/PNGs/windsurfing.png')}}" alt=""> </div>
                    </div>
                
            </div>
        </div>
    </section>
    <!-- form end -->

    <section>
        <div class="sec-container">
            <div class="left"></div>
            <div class="right">
                <div class="content">
                    <h1>@lang('public.Sharing is living')</h1>
                    <p class="text-secondary">@lang('public.Sharing is one of the most important practices that we can adopt as human beings. Sharing not only helps build stronger and more meaningful relationships with others, but also allows us to be more supportive and empathetic to those around us. Sharing can also have a positive impact on our mental health. By helping others, we can feel more connected and engaged with the world around us, which in turn can help us feel happier and more fulfilled.')</p>
                </div>
            </div>
        </div>
    </section>

    <!-- blog card starter -->

    <h2 id="h1">@lang('public.The Motive of Knock Knock')</h2>

    <section class="details-card">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card-content">
                        <div class="card-img">
                            <img src="{{asset('/assetsFrontEnd/PNGs/1-01.png')}}" alt="">
                        </div>
                        <div class="card-desc">
                            <h3>@lang('public.Save money')</h3>
                            <p>@lang('public.Renting sports equipment from individuals can be a very convenient option for those looking to save money on the purchase of expensive equipment or for those who want to try different equipment before deciding what to buy. In addition, the rental between individuals allows both parties to obtain benefits. On the one hand, the lessee can rent the equipment they need for a specific period, which allows them to save money and time by not having to buy the entire equipment. On the other hand, the lessor can make a profit by renting his equipment to other people, allowing him to write off the cost of the equipment and earn a little extra money.')</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-content">
                        <div class="card-img">
                        <img src="{{asset('/assetsFrontEnd/PNGs/2-01.png')}}" alt="">
                        </div>
                        <div class="card-desc">
                            <h3>@lang('public.Promotes the local economy')</h3>
                            <p>@lang('public.In addition, renting sports equipment between individuals can be a way to promote the local economy and responsible consumption, since you can find more affordable and ecological options than those offered by large companies.In conclusion, the private rental of sports equipment is a convenient and beneficial option for all parties involved, allowing each one to obtain profits and contribute to the development of a more sustainable and fair economy.')
                                </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-content">
                        <div class="card-img">
                        <img src="{{asset('/assetsFrontEnd/PNGs/3-01.png')}}" alt="">
                        </div>
                        <div class="card-desc">
                            <h3>@lang('public.Have a healthy lifestyle')</h3>
                            <p>@lang('public.Having a healthy lifestyle is crucial to maintaining good general health and well-being. By following a healthy eating plan and exercising regularly, you can reduce your risk of chronic diseases such as diabetes, obesity, and cardiovascular disease.Regular exercise can increase muscle strength, improve flexibility and mobility, and help maintain a healthy weight. In addition, sports and physical activity can also be an effective way to socialize, make friends and strengthen personal relationships.')
                                </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


    <script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBFMmgOrZkroIy8I33X295rUjuezLPjxw&libraries=places&callback=mysug" async></script>


<script type="text/javascript">

        function mysug(){

            var autocomplete;
            var to = "Location";

            autocomplete = new google.maps.places.Autocomplete((document.getElementById(to)),{
                types:['geocode'],
            })

        }; 
        window.onload = () => {
            mysug()
            }

        </script>





@endsection