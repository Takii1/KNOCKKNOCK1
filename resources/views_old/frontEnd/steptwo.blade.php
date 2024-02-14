@extends('frontEndLayout.index')
@section('content')

<div class="Ssteptwo">
    <!-- <div class="backtbn">
        <a class="b-btn" href="./index.html"><i class="fa-solid fa-arrow-left"></i>Back</a>
    </div> -->
    <div class="container">
        <!-- <div class="text-center" style="font-size:2.8rem; font-weight:Bold; color:#45bdb9;">
           <marquee behavior="" direction="" scrollamount="14" loop="1000"><h1>VERIFICATION PURPOSE FOR RENT</h1> </marquee> 
        </div> -->
        <div class="forms-container">
            <div class="signin-signup">
                <form action="{{route('updateprofile')}}" method="POST" class="sign-in-form" enctype="multipart/form-data">
                    @csrf
                    <div class="containers">
                        <div class="avatar-upload">
                            <div class="avatar-edit">
                                <input type='file' name="profilePicture" id="imageUpload" accept=".png, .jpg, .jpeg" />
                                <label for="imageUpload"></label>
                            </div>
                            <div class="avatar-preview">
                                <div id="imagePreview" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png');">
                                </div>
                            </div>
                        </div>
                    </div>
                    <label for="" style="font-weight:bold; margin-bottom: -0.5rem;">Front side picture of your Goverment issued I'D : (For verification)</label>
                    <div class="input-field">
                        <i class="fas fa-address-card"></i>
                         <input class="Pro-img" type='file' placeholder="Front I'D" name="idFront" accept=".png, .jpg, .jpeg"
                         >
                    </div>
                    <label for="" style="font-weight:bold; margin-bottom: -0.5rem;">Back side picture of your Goverment issued I'D : (For verification)</label>
                           <div class="input-field">
                        <i class="fas fa-address-card"></i>
                         <input class="Pro-img" type='file' placeholder="Back I'D" name="idBack" accept=".png, .jpg, .jpeg"
                        >
                    </div>
                    <div class="input-field">
                        <i class="fas fa-map-marker"></i>
                        <input type="text" placeholder="Address" name="address"/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-birthday-cake"></i>
                        <input class="date text-muted" type="text" name="DOB" placeholder="Date of Birth" onfocus="(this.type='date')"
                        onblur="(this.type='text')">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-mobile"></i>
                        <input type="text" placeholder="Mobile Phone"  name="mobilePhone"/>
                    </div>
                    <input type="submit" value="Done" class="btn solid" />
                </form>
</div>
</div>
</div>
</div>

            {{-- <script src="app.js"></script> --}}
@endsection
