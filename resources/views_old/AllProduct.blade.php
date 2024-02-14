<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Products') }}
        </h2>
        <a href="{{route('Uploadproduct')}}" class="px-4 py-2 text-white bg-blue-500 hover:bg-blue-700 rounded-md">Add Products</a>
    </x-slot>

    <div class="flex flex-col">
      <div class="overflow-x-auto sm:-mx-6 lg:-mx-4">
          <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <x-success-status class="mb-4 text-center text-white" :status="session('Msg')" />
              <table class="min-w-full text-center">
                <thead class="border-b bg-gray-800">
                  <tr>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                        Product Id
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                        Product name
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                          Product description
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                          Product Sport Type
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                          Product Condition
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                          Product Insurance
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                          Product Photos
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                          Product Location
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                            Rent_per_hour
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                          Product Rent_per_day
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      Action
                    </th>

                  </tr>
                </thead class="border-b">



                @foreach($item as $itm)

                <tbody>
                  <tr class="bg-white border-b">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        {{$itm->id}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$itm->Product_name}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$itm->Product_description}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$itm->Category_Id}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$itm->Condition}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$itm->Insurance}}
                    </td>
                    <td class=" text-gray-900 font-light whitespace-nowrap">

                       @foreach($pics as $p)
                        @if($p->products_id == $itm->id)

                          <img src="{{asset('ProductImages/'.$p->image)}}" class="rounded " height="40px" width="30px" alt="">
                        @endif
                       @endforeach

                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$itm->Location}}
                    </td>

                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$itm->Rent_per_hour}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$itm->Rent_per_day}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        <a href="{{route('EditProduct',$itm->id)}}">
                        <x-primary-button type="submit">
                            Edit
                        </x-primary-button>
                        </a> --
                        <a href="{{route('DeleteProduct', $itm->id)}}">
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
