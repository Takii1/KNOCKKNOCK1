<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center text-gray-700 dark:text-gray-200 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>
    
    <form action="{{route('SaveCategory')}}" method="POST" >
        @csrf
    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8 space-y-6 ">
            <center>
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                
                <div class="max-w-xl m-auto">
                    <x-input-label for="category Name" :value="__('Category Name :')"  />
                    <x-text-input
                    id="password"
                    name="Cat_name"
                    type="text"
                    class="mt-1 block w-3/4"
                    placeholder="Category Name"
                />
                

                <br>
                <x-input-label for="category status" :value="__('Category status :')"  />
                    <x-text-input
                    id="password"
                    name="Cat_status"
                    type="text"
                    class="mt-1 block w-3/4"
                    placeholder="Category status"
                    
                />
                
                <br>

                <x-primary-button type="submit">
                    Submit
                </x-primary-button>

                </div>
            </div>         
            </div>
        </div>
    </div>
</center>
</form>

</x-app-layout>