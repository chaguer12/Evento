<!DOCTYPE html>
<html lang="en">
@include('includes.head')
<body class="bg-[#f3f4f6]">

<section>
 <div class="relative flex flex-col-reverse py-16 lg:pt-0 lg:flex-col lg:pb-0">
  <div class="inset-y-0 top-0 right-0 z-0 w-full max-w-xl px-4 mx-auto md:px-0 lg:pr-0 lg:mb-0 lg:mx-0 lg:w-7/12 lg:max-w-full lg:absolute xl:px-0">
    
    <img
      class="object-cover w-full h-56 rounded shadow-lg lg:rounded-none lg:shadow-none md:h-96 lg:h-full"
      src="{{URL::asset('/images/festival.jpg')}}"
      alt=""
    />
  </div>
  <div class="relative flex flex-col items-start w-full max-w-xl px-4 mx-auto md:px-0 lg:px-8 lg:max-w-screen-xl">
    <div class="mb-16 lg:my-40 lg:max-w-lg lg:pr-5">
      <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
        Evento
      </p>
      <h2 class="mb-5 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
      Choose a categorie and get <br> your ticket
        
      </h2>
      <p class="pr-5 mb-5 text-base text-gray-700 md:text-lg">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, reprehenderit? Eligendi dolor doloremque, blanditiis voluptatum fuga quo omnis amet non quod eveniet accusamus illo quidem alias quos at similique vitae!
      </p>
      <div class="flex items-center">
        @guest
        <a
          href="#sect"
          class="bg-[#4338ca] inline-flex items-center justify-center h-12 px-6 mr-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md hover:shadow-lg "
        >
          See categories
        </a>
        @endguest
       
      </div>
    </div>
  </div>
</div>
 </section>

 <h2 id="sect" class="mb-8 py-16 text-center font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
Choose from a variety of categories
      
        
</h2>
 <section  class="flex flex-wrap gap-4">
@foreach($categories as $categorie)
 <div class="max-w-xs mx-auto">
    <a href="{{route('categories.create',['category_id' => $categorie ])}}" class="block relative bg-white border border-[#a78bfa] rounded-lg overflow-hidden hover:border-gray-300 hover:bg-white hover:shadow-md">
        <div class="p-6">
            <p class="text-base text-gray-600">{{$categorie->cat_name}}</p>
            <p class="text-sm text-gray-500">Card description with lots of great facts and interesting details.</p>
        </div>
        <div class="absolute top-0 right-0 -mt-3 -mr-3 bg-[#a78bfa] rounded-full w-8 h-8 flex items-center justify-center">
            <div class="transform rotate-45 text-white">→</div>
        </div>
    </a>
</div>
@endforeach
</section>
 @include('includes.footer')
</body>