<!DOCTYPE html>
<html lang="en">
@include('includes.head')

<body class="bg-[#f3f4f6]">

 <section>
 <div class="relative flex flex-col-reverse py-16 lg:pt-0 lg:flex-col lg:pb-0">
  <div class="inset-y-0 top-0 right-0 z-0 w-full max-w-xl px-4 mx-auto md:px-0 lg:pr-0 lg:mb-0 lg:mx-0 lg:w-7/12 lg:max-w-full lg:absolute xl:px-0">
    <svg class="absolute left-0 hidden h-full text-white transform -translate-x-1/2 lg:block" viewBox="0 0 100 100" fill="currentColor" preserveAspectRatio="none slice">
      <path d="M50 0H100L50 100H0L50 0Z"></path>
    </svg>
    <img
      class="object-cover w-full h-56 rounded shadow-lg lg:rounded-none lg:shadow-none md:h-96 lg:h-full"
      src="{{URL::asset('/images/event.jpg')}}"
      alt=""
    />
  </div>
  <div class="relative flex flex-col items-start w-full max-w-xl px-4 mx-auto md:px-0 lg:px-8 lg:max-w-screen-xl">
    <div class="mb-16 lg:my-40 lg:max-w-lg lg:pr-5">
      <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
        Evento
      </p>
      <h2 class="mb-5 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
      Your event booking partner<br class="hidden md:block" />
      for better organisation.
        
      </h2>
      <p class="pr-5 mb-5 text-base text-gray-700 md:text-lg">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, reprehenderit? Eligendi dolor doloremque, blanditiis voluptatum fuga quo omnis amet non quod eveniet accusamus illo quidem alias quos at similique vitae!
      </p>
      <div class="flex items-center">
        @guest
        <a
          href=""
          class="bg-[#4338ca] inline-flex items-center justify-center h-12 px-6 mr-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md hover:shadow-lg "
        >
          Find an event
        </a>
        @endguest
        <a href="/" aria-label="" class="inline-flex items-center font-semibold text-gray-800 transition-colors duration-200 hover:text-deep-purple-accent-700">Learn more</a>
      </div>
    </div>
  </div>
</div>
 </section>
 <section >
 <h2 class="mb-8 py-16 text-center font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
 Find the answers you need
      
        
</h2>
    <!-- component -->
<div class="container" style="margin: 0 auto;">
          <div
            class="flex flex-col md:grid grid-cols-9 mx-auto  text-blue-50">
            <!-- left -->
            <div class="flex flex-row-reverse md:contents">
              <div
                class="bg-[#4338ca] col-start-1 col-end-5 p-4 rounded-xl my-4 ml-auto shadow-md"
              >
                <h3 class="font-semibold text-lg mb-1">Best events</h3>
                <p class="leading-tight text-justify">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi,
                  quaerat?
                </p>
              </div>
              <div class="col-start-5 col-end-6 md:mx-auto relative mr-10">
                <div class="h-full w-6 flex items-center justify-center">
                  <div class="h-full w-1 bg-blue-800 pointer-events-none"></div>
                </div>
                <div
                  class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-[#4338ca] shadow"
                ></div>
              </div>
            </div>
            <!-- right -->
            <div class="flex md:contents">
              <div class="col-start-5 col-end-6 mr-10 md:mx-auto relative">
                <div class="h-full w-6 flex items-center justify-center">
                  <div class="h-full w-1 bg-blue-800 pointer-events-none"></div>
                </div>
                <div
                  class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-[#4338ca] shadow"
                ></div>
              </div>
              <div
                class="bg-[#4338ca] col-start-6 col-end-10 p-4 rounded-xl my-4 mr-auto shadow-md"
              >
                <h3 class="font-semibold text-lg mb-1">Trust worthy</h3>
                <p class="leading-tight text-justify">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                  Vitae, facilis.
                </p>
              </div>
            </div>
            <!-- left -->
            <div class="flex flex-row-reverse md:contents">
              <div
                class="bg-[#4338ca] col-start-1 col-end-5 p-4 rounded-xl my-4 ml-auto shadow-md"
              >
                <h3 class="font-semibold text-lg mb-1">Easy to use</h3>
                <p class="leading-tight text-justify">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi,
                  quaerat?
                </p>
              </div>
              <div class="col-start-5 col-end-6 md:mx-auto relative mr-10">
                <div class="h-full w-6 flex items-center justify-center">
                  <div class="h-full w-1 bg-blue-800 pointer-events-none"></div>
                </div>
                <div
                  class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-[#4338ca] shadow"
                ></div>
              </div>
            </div>
            <!-- left -->
            <div class="flex flex-row-reverse md:contents">
              <div
                class="bg-[#4338ca] col-start-1 col-end-5 p-4 rounded-xl my-4 ml-auto shadow-md"
              >
                <h3 class="font-semibold text-lg mb-1">flexible</h3>
                <p class="leading-tight text-justify">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi,
                  quaerat?
                </p>
              </div>
              <div class="col-start-5 col-end-6 md:mx-auto relative mr-10">
                <div class="h-full w-6 flex items-center justify-center">
                  <div class="h-full w-1 bg-blue-800 pointer-events-none"></div>
                </div>
                <div
                  class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-[#4338ca] shadow"
                ></div>
              </div>
            </div>
            <!-- right -->
            <div class="flex md:contents">
              <div class="col-start-5 col-end-6 mr-10 md:mx-auto relative">
                <div class="h-full w-6 flex items-center justify-center">
                  <div class="h-full w-1 bg-blue-800 pointer-events-none"></div>
                </div>
                <div
                  class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-[#4338ca] shadow"
                ></div>
              </div>
              <div
                class="bg-[#4338ca] col-start-6 col-end-10 p-4 rounded-xl my-4 mr-auto shadow-md"
              >
                <h3 class="font-semibold text-lg mb-1">100% secure</h3>
                <p class="leading-tight text-justify">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                  Vitae, facilis.
                </p>
              </div>
            </div>
          </div>
        </div>
 </section>
 <section>
    <!-- component -->
<!-- MDI Icons -->


<!-- Page Container -->
<div class="flex items-center justify-center min-h-screen bg-[#f3f4f6] py-16">
    

        <div class="flex flex-col mt-8">
            <!-- Meet the Team -->
            <div class="container max-w-7xl px-4">
                <!-- Section Header -->
                <div class="flex flex-wrap justify-center text-center mb-24">
                    <div class="w-full lg:w-6/12 ">
                        <!-- Header -->
                        <h1 class="mb-8 py-16 text-center font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
                            Meet the Team
                        </h1>

                        <!-- Description -->
                        <p class="text-gray-700 text-lg mb-4 font-light">
                            With over 100 years of combined experience, we've got a well-seasoned team at the helm.
                        </p>
                    </div>
                </div>

                <!-- Team Members -->
                <div class="flex ">
                    <!-- Member #1 -->
                    <div class="w-full md:w-6/12 lg:w-3/12 mb-6 px-6 sm:px-6 lg:px-4">
                        <div class="flex flex-col">
                            <!-- Avatar -->
                            <a href="#" class="mx-auto">
                                <img class="rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100"
                                    src="https://images.unsplash.com/photo-1634926878768-2a5b3c42f139?fit=clamp&w=400&h=400&q=80">
                            </a>

                            <!-- Details -->
                            <div class="text-center mt-6">
                                <!-- Name -->
                                <h1 class="text-gray-900 text-xl font-bold mb-1">
                                    Flana 
                                </h1>

                                <!-- Title -->
                                <div class="text-gray-700 font-light mb-2">
                                    Founder & Specialist
                                </div>

                                <!-- Social Icons -->
                                <div class="flex items-center justify-center opacity-50 hover:opacity-100
                                transition-opacity duration-300">
                                    <!-- Linkedin -->
                                    <a href="#" class="flex rounded-full hover:bg-indigo-50 h-10 w-10">
                                        <i class="mdi mdi-linkedin text-indigo-500 mx-auto mt-2"></i>
                                    </a>

                                    <!-- Twitter -->
                                    <a href="#" class="flex rounded-full hover:bg-blue-50 h-10 w-10">
                                        <i class="mdi mdi-twitter text-blue-300 mx-auto mt-2"></i>
                                    </a>

                                    <!-- Instagram -->
                                    <a href="#" class="flex rounded-full hover:bg-orange-50 h-10 w-10">
                                        <i class="mdi mdi-instagram text-orange-400 mx-auto mt-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Member #2 -->
                    <div class="w-full md:w-6/12 lg:w-3/12 mb-6 px-6 sm:px-6 lg:px-4">
                        <div class="flex flex-col">
                            <!-- Avatar -->
                            <a href="#" class="mx-auto">
                                <img class="rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100"
                                    src="https://images.unsplash.com/photo-1634896941598-b6b500a502a7?fit=clamp&w=400&h=400&q=80">
                            </a>

                            <!-- Details -->
                            <div class="text-center mt-6">
                                <!-- Name -->
                                <h1 class="text-gray-900 text-xl font-bold mb-1">
                                  Another flana 
                                </h1>

                                <!-- Title -->
                                <div class="text-gray-700 font-light mb-2">
                                    Tired & M. Specialist
                                </div>

                                <!-- Social Icons -->
                                <div class="flex items-center justify-center opacity-50 hover:opacity-100
                                transition-opacity duration-300">
                                    <!-- Linkedin -->
                                    <a href="#" class="flex rounded-full hover:bg-indigo-50 h-10 w-10">
                                        <i class="mdi mdi-linkedin text-indigo-700 mx-auto mt-2"></i>
                                    </a>

                                    <!-- Twitter -->
                                    <a href="#" class="flex rounded-full hover:bg-blue-50 h-10 w-10">
                                        <i class="mdi mdi-twitter text-blue-400 mx-auto mt-2"></i>
                                    </a>

                                    <!-- Instagram -->
                                    <a href="#" class="flex rounded-full hover:bg-orange-50 h-10 w-10">
                                        <i class="mdi mdi-instagram text-orange-400 mx-auto mt-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Member #3 -->
                    <div class="w-full md:w-6/12 lg:w-3/12 mb-6 px-6 sm:px-6 lg:px-4">
                        <div class="flex flex-col">
                            <!-- Avatar -->
                            <a href="#" class="mx-auto">
                                <img class="rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100"
                                    src="https://images.unsplash.com/photo-1634193295627-1cdddf751ebf?fit=clamp&w=400&h=400&q=80">
                            </a>

                            <!-- Details -->
                            <div class="text-center mt-6">
                                <!-- Name -->
                                <h1 class="text-gray-900 text-xl font-bold mb-1">
                                    Flan jorayfi
                                </h1>

                                <!-- Title -->
                                <div class="text-gray-700 font-light mb-2">
                                    CEO & founder
                                </div>

                                <!-- Social Icons -->
                                <div class="flex items-center justify-center opacity-50 hover:opacity-100
                                transition-opacity duration-300">
                                    <!-- Linkedin -->
                                    <a href="#" class="flex rounded-full hover:bg-indigo-50 h-10 w-10">
                                        <i class="mdi mdi-linkedin text-indigo-700 mx-auto mt-2"></i>
                                    </a>

                                    <!-- Twitter -->
                                    <a href="#" class="flex rounded-full hover:bg-blue-50 h-10 w-10">
                                        <i class="mdi mdi-twitter text-blue-400 mx-auto mt-2"></i>
                                    </a>

                                    <!-- Instagram -->
                                    <a href="#" class="flex rounded-full hover:bg-orange-50 h-10 w-10">
                                        <i class="mdi mdi-instagram text-orange-400 mx-auto mt-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Member #4 -->
                    <div class="w-full md:w-6/12 lg:w-3/12 mb-6 px-6 sm:px-6 lg:px-4">
                        <div class="flex flex-col">
                            <!-- Avatar -->
                            <a href="#" class="mx-auto">
                                <img class="rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100"
                                    src="https://images.unsplash.com/photo-1635003913011-95971abba560?fit=clamp&w=400&h=400&q=80">
                            </a>

                            <!-- Details -->
                            <div class="text-center mt-6">
                                <!-- Name -->
                                <h1 class="text-gray-900 text-xl font-bold mb-1">
                                    Doesn't matter
                                </h1>

                                <!-- Title -->
                                <div class="text-gray-700 font-light mb-2">
                                    Will be fired
                                </div>

                                <!-- Social Icons -->
                                <div class="flex items-center justify-center opacity-50 hover:opacity-100
                                transition-opacity duration-300">
                                    <!-- Linkedin -->
                                    <a href="#" class="flex rounded-full hover:bg-indigo-50 h-10 w-10">
                                        <i class="mdi mdi-linkedin text-indigo-700 mx-auto mt-2"></i>
                                    </a>

                                    <!-- Twitter -->
                                    <a href="#" class="flex rounded-full hover:bg-blue-50 h-10 w-10">
                                        <i class="mdi mdi-twitter text-blue-400 mx-auto mt-2"></i>
                                    </a>

                                    <!-- Instagram -->
                                    <a href="#" class="flex rounded-full hover:bg-orange-50 h-10 w-10">
                                        <i class="mdi mdi-instagram text-orange-400 mx-auto mt-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@include('includes.footer')
</body>

</html>