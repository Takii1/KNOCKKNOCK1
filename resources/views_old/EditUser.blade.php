<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users') }}
        </h2>

    </x-slot>

    <center>

    <form action="{{route('SaveUser')}}" method="POST" enctype="multipart/form-data">

            @csrf
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 ">

                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">

                    <div class="max-w-xl m-auto">
                        <x-input-label for="category Name" :value="__('Name :')"  />
                        <x-text-input
                        name="name"
                        type="text"
                        class="mt-1 block w-3/4"

                        value="{{$usr ->name}}"
                    />
                    <br>
                    <x-input-label for="category Name" :value="__('Email :')"  />
                    <x-text-input
                    name="name"
                    type="text"
                    class="mt-1 block w-3/4"

                    value="{{$usr ->email}}"
                />
                <br>
                <x-input-label for="category Name" :value="__('Front ID :')"  />
                <br>

                @foreach ($img as $i)
               
                <img src="{{asset('UserIdPics/'.$i->IdImage1)}}" alt="">
                @endforeach

                <br>
                <br>
                <x-input-label for="category Name" :value="__('Back ID :')"  />
                <br>


                @foreach ($img as $i)
                <img src="{{asset('UserIdPics/'.$i->IdImage2)}}" alt="">
                @endforeach




                <br>

            <br>
            <input type="text" hidden name="id" value="{{$usr ->id}}">

            <x-input-label for="category Name" :value="__('Approved :')"  />
            <x-text-input
            name="Approved"
            type="checkbox"


          value="1"
        />
        <br><br>

        <x-primary-button type="submit">
            Submit
        </x-primary-button>




    </form>
</center>
</x-app-layout>
