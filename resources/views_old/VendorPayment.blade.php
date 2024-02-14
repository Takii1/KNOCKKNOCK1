<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center text-gray-700 dark:text-gray-200 leading-tight">
            {{ __('Vendors Payments') }}
        </h2>
    </x-slot>

    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-4">
            <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
              <div class="overflow-hidden">

                <table class="min-w-full text-center">
                  <thead class="border-b bg-gray-800">
                    <tr>
                      <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                          Vendor ID :
                      </th>
                      <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                          Vendor Name :
                      </th>
                      <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                          Vendor Email :
                      </th>
                      <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                        Action
                      </th>
                    </tr>
                  </thead class="border-b">





                  <tbody>
                    @foreach($vendors as $Ad)
                    <tr class="bg-white border-b">
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                         {{$Ad->id}}
                      </td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$Ad->name}}
                      </td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$Ad->email}}
                      </td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                          <a href="{{route('vendorReport',$Ad->id)}}">
                          <x-danger-button>
                              Report
                          </x-danger-button>
                          </a>


                        <a href="">
                        <x-secondary-button>
                            Pay
                        </x-secondary-button>
                        </a>
                    </td>


                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>

          </div>
        </div>
    </form>
</x-app-layout>
