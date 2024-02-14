<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Orders') }}
        </h2>

    </x-slot>


<br>

    <center class="flex flex-col">
        <div class="row" style="color:white;">
            <h5>Total Orders: {{ $count }}</h5>
            <h5>Total Commission: {{ $commission }}</h5>
        </center>

        <div class="overflow-x-auto sm:-mx-6 lg:-mx-4">
            <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
              <div class="overflow-hidden">
                  <x-success-status class="mb-4 text-center text-white" :status="session('Msg')" />
                <table class="min-w-full text-center">
                  <thead class="border-b bg-gray-800">
                    <tr>
                      {{-- <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                          Product Id
                      </th> --}}
                      <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                          Name
                      </th>
                      {{-- <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                            Product description
                      </th> --}}
                      <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                            Email
                      </th>
                      <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                            Phone
                      </th>
                      <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                            Address
                      </th>
                      <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                            Product name
                      </th>
                      <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                            Product price
                      </th>
                      <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                              Service fees
                      </th>
                      <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                            Product id
                      </th>
                      <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                        User id
                      </th>
                      <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                        Vendor id
                      </th>
                      <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                        Start date
                      </th>
                      <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                        End date
                      </th>
                    </tr>
                  </thead class="border-b">



                  @foreach($order as $OD)

                  <tbody>
                    <tr class="bg-white border-b">
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                          {{$OD->name}}
                      </td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                          {{$OD->email}}
                      </td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                          {{$OD->Phone}}
                      </td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                          {{$OD->address}}
                      </td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                          {{$OD->product_name}}
                      </td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                          {{$OD->product_price_per_day}}
                      </td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                          {{$OD->Service_charges}}
                      </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                          {{$OD->Product_id}}
                      </td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$OD->User_id}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$OD->Vendor_Id}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$OD->Start_date}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$OD->End_date}}
                    </td>

                      {{-- <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                          <a href="">
                          <x-primary-button type="submit">
                              Edit
                          </x-primary-button>
                          </a> --
                          <a href="">
                          <x-danger-button>
                              Delete
                          </x-danger-button>
                          </a>
                      </td> --}}
                   @endforeach

                    </tr>
                  </tbody>
                </table>
                <br>
                <div class="mx-auto pb-10 w-4/5 text-light ">

                  {{ $order->links()}}
                </div>
              </div>
            </div>
          </div>
        </div>
</x-app-layout>
