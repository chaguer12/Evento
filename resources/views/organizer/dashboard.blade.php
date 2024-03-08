<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dear organizer
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6  text-gray-900">
                    <form action="{{route('event.store')}}" method="post" enctype="multipart/form-data" class="bg-white">
                        @csrf
                        @method('POST')
                        <div class="mb-4 flex flex-col w-1/2 mx-auto">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="rounded-lg shadow-lg border-[#4338ca]" placeholder="title">
                        </div>
                        <div class="mb-4 flex flex-col w-1/2 mx-auto">
                            <label for="description">Description</label>
                            <input type="text" name="description" id="description" class="rounded-lg shadow-lg border-[#4338ca]" placeholder="description">
                        </div>
                        <div class="mb-4 flex flex-col w-1/2 mx-auto">
                            <label for="date">Date</label>
                            <input type="date" name="date" id="date" class="rounded-lg shadow-lg border-[#4338ca]" placeholder="date">
                        </div>
                        <div class="mb-4 flex flex-col w-1/2 mx-auto">
                            <label for="location">Location</label>
                            <input type="text" name="location" id="location" class="rounded-lg shadow-lg border-[#4338ca]" placeholder="location">
                        </div>
                        <div class="mb-4 flex flex-col w-1/2 mx-auto">                            
                            <label  for="cat_id">Categorie</label>
                            <select name="cat_id" id="category" class="rounded-lg shadow-lg border-[#4338ca]">
                                <option selected disabled >Select a cargeorie</option>
                                @foreach($categories as $categorie)
                                <option value="{{$categorie->id}}">{{$categorie->cat_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4 flex flex-col w-1/2 mx-auto">                            
                            <label  for="image">Upload file</label>
                            <input class="rounded-lg shadow-lg border-[#4338ca]" name="image" type="file">
                            <p class="mt-1 text-sm text-gray-500 " id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                        </div>
                        
                        <div class="mb-4 flex flex-col w-1/2 mx-auto">
                            <label for="auto accept">Auto accept</label>
                            <input checked type="checkbox"  name="auto accept" id="auto accept" class="rounded-lg shadow-lg border-[#4338ca]" placeholder="auto accept">
                        </div>
                        <div class="mb-4 flex flex-col w-1/2 mx-auto">
                            <button type="submit" class="bg-[#4338ca] w-24 text-white mx-auto p-2 rounded-lg hover:shadow-lg">submit</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
