<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <section class="py-12 max-h-[400px] overflow-y-auto">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="gap-4" height="25">
                        
                        <img class="mb-4" width="25" height="25" src="https://img.icons8.com/ios/50/user--v1.png" alt="user--v1"/>
                    </div>
                    <table class="table-auto min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    User ID
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Name
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Email
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Blocked
                                </th>
                            </tr>
                        </thead>
                        
                        <tbody class="bg-white divide-y divide-gray-200">
                           @foreach($users as $user)
                           
                            <tr>

                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{$user->id}}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{$user->name}}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{$user->email}}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if($user->blocked == 0)
                                    <a href="{{route('block-user' , ['id'=>$user->id])}}">
                                        <img src="{{URL::asset('/images/cross.png')}}" alt="cross" class="h-8">
                                    </a>
                                    @else
                                    <a href="{{route('unblock-user' , ['id'=>$user->id])}}">
                                        <img src="{{URL::asset('/images/check.png')}}" alt="cross" class="h-8">
                                    </a>
                                    @endif
                                    
                                </td>
                            </tr>
                            @endforeach
                           
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <section class="py-12 max-h-[400px] overflow-y-auto">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <div class="mb-4">
                <p>Create a category</p>
                <form action="{{ route('categories.store')}}" method="post" enctype="multipart/form-data">
                  @csrf
                  <input type="text" name="cat_name" placeholder="categorie" class="border rounded py-2 px-4">

                  <button type="submit" class="bg-[#4338ca] hover:shadow-lg text-white font-bold py-2 px-4 rounded">
                    Create
                  </button>
                </form>
              </div>
              <table class="min-w-full">
                <!-- Table header -->
                <thead>
                  <tr>
                    <th class="px-4 py-2">#</th>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Actions</th>
                  </tr>
                </thead>
                <!-- Table body -->
                <tbody>
                  <!-- Table rows -->

                  @foreach($categories as $categorie)
                  <tr>
                    <td class="border px-4 py-2">{{$categorie->id}}</td>
                    <td class="border px-4 py-2">{{$categorie->cat_name}}
                      <input hidden id="spec_input" type="text" name="id" value="{{$categorie->categorie_name}}">
                    </td>
                    <td class="border px-4 py-2 flex gap-4 justify-center">
                      <!-- CRUD actions -->
                     <div>
                     <button href="" value="{{$categorie->id}}" class="edit-btn bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Edit
                      </button>
                     </div>
                      <div>
                      <form class="" action="{{route('categories.destroy',['category' => $categorie->id])}}" method="post">
                        @csrf
                        @method('DELETE')

                        <input hidden id="spec_input" type="text" name="id" value="{{$categorie->cat_name}}">
                        <button  onclick="return confirm('Are you sure to delete?')" class="bg-[#ef4444] text-white font-bold py-2 px-4 rounded">
                          Delete
                        </button>
                      </div>
                      </form>
                    </td>
                  </tr>
                  @endforeach


                </tbody>
              </table>
                   
            </div>
            </div>
        </div>
    </section>
    <div id="modal" class="hidden min-w-screen h-screen animated fadeIn faster   fixed  left-0 top-0  inset-0 z-50 outline-none focus:outline-none bg-no-repeat bg-center bg-cover">
      <form id="edit-form" action="{{route('categories.update',['category' => $categorie->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="absolute border border-[#4338ca] z-20 md:w-1/3 sm:w-full rounded-lg shadow-lg bg-white mx-auto ">
          <div class="flex justify-between border-b border-gray-100 px-5 py-4">
            <div>
              <i class="fas fa-exclamation-circle text-blue-500"></i>
              <span class="font-bold text-[#4338ca] text-lg">Edit</span>
            </div>

          </div>

          <div class="px-10 py-5 text-gray-600">
            <input hidden id="targeted_spec" type="text" name="id" value="">
            <input type="text" name="cat_name" placeholder="category" class="border rounded py-2 px-4">
          </div>

          <div class="px-5 py-4 flex justify-end">
            <button type="submit" id="saveChanges" class="text-sm py-2 px-3 text-gray-500 hover:text-gray-600 transition duration-150">Save</button>
      </form>
      <a href="{{route('categories.index')}}" id="closeModalBtn" class="text-sm py-2 px-3 text-gray-500 hover:text-gray-600 transition duration-150">Close</a>
    </div>
    <script src="{{ asset('js/main.js') }}"></script>
</x-app-layout>
