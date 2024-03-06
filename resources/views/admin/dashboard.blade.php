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
                  <input type="text" name="categorie" placeholder="categorie" class="border rounded py-2 px-4">

                  <button type="submit" class="bg-[#4338ca] hover:shadow-lg text-white font-bold py-2 px-4 rounded">
                    Create
                  </button>
                </form>
              </div>
                   
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
