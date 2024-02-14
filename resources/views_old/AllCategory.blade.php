<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Categories') }}
        </h2>
        
        
       
        <a href="{{route('AddCategory')}}" class="px-4 py-2 text-white bg-blue-500 hover:bg-blue-800 rounded-md">Add Category</a>
    </x-slot>
    
        @csrf
    <div class="flex flex-col">
      <div class="overflow-x-auto sm:-mx-6 lg:-mx-4">
          <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <x-success-status class="mb-4 text-center text-white" :status="session('Msg')" />
                <x-Danger-status class="mb-4 text-center text-white" :status="session('MsgDelete')" />
              <table class="min-w-full text-center">
                <thead class="border-b bg-gray-800">
                  <tr>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                        Category Id
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                        Category name
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                        Category status
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      Action
                    </th>
                  </tr>
                </thead class="border-b">



                @foreach($Page as $P)

                <tbody>
                  <tr class="bg-white border-b">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        {{$P->id}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$P->Category_name}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$P->Category_status}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        <a href="{{route('DeleteCategory', $P->id )}}">
                        <x-danger-button>
                            Delete
                        </x-danger-button>
                        </a>
                    </td>
                 @endforeach
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          
        </div>
      </div>

</x-app-layout>      