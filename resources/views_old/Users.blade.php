<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users') }}
        </h2>

    </x-slot>

    <div class="overflow-x-auto sm:-mx-6 lg:-mx-4">
        <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
          <div class="overflow-hidden">
              <x-success-status class="mb-4 text-center text-white" :status="session('Msg')" />
              <x-success-status class="mb-4 text-center text-white" :status="session('Msg1')" />
              <x-danger-status class="mb-4 text-center text-white" :status="session('Msg_delete')" />
              
            <table class="min-w-full text-center">
              <thead class="border-b bg-gray-800">
                <tr>
                 
                   <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      Name
                  </th> 
                 
                  <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                        Email
                  </th>
                  <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                        Email verified at
                  </th>
                  <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                        Front ID
                  </th>
                  <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                        Back ID
                  </th> 
                  <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                        Roles
                  </th>
                  <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                        Approved
                  </th>
                  <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                        Actions
                  </th>
                  
                </tr>
              </thead class="border-b">

              <tbody>

              @foreach($rol as $User)

            
                <tr class="bg-white border-b">
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                      {{$User->name}}
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      {{$User->email}}
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      {{$User->email_verified_at}}
                  </td>
                 
                 
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    
                   
                  <img src="{{asset('UserIdPics/')}}"  class="rounded " height="40px" width="30px" >
                  </td>
                
                   

                   
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    <img src="{{asset('UserIdPics/')}}"  class="rounded " height="40px" width="30px" >
                 
                
                </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    @foreach ($User->roles as $rol)
                    {{$rol->name}}
                    @endforeach
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      {{$User->Approved}}
                  </td>
                 
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    <a href="{{route('EditUser', $User->id)}}">
                    <x-primary-button type="submit">
                        Edit
                    </x-primary-button>
                    </a> -
                    <a href="{{route('DeleteUser', $User->id)}}">
                    <x-danger-button>
                        Delete
                    </x-danger-button>
                    </a>
                </td>

                

                
               @endforeach
              

                </tr>
              </tbody>
            </table>
            <br>
            <div class="mx-auto pb-10 w-4/5 text-light ">

            
            </div>
          </div>
        </div>
      </div>
    </div> 

</x-app-layout>