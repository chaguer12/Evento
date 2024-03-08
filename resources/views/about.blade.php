<!DOCTYPE html>
<html lang="en">
@include('includes.head')
<body class="bg-[#f3f4f6]">

<!-- component -->
<section>
    <div class=" text-black py-8">
    <div class="container mx-auto flex flex-col items-start md:flex-row my-12 md:my-24">
      <div class="flex flex-col w-full sticky md:top-36 lg:w-1/3 mt-2 md:mt-12 px-8">
        <p class="ml-2 text-[#4338ca] uppercase tracking-loose">our goal</p>
        <p class="text-3xl md:text-4xl leading-normal md:leading-relaxed mb-2">Evento</p>
        <p class="text-sm md:text-base text-black mb-4">
         offers an interactive platform allowing event attendents to consult different event categories, explore events, and make reservations of their choice for the current day. ​
        </p>
        <a href=""
        class="bg-transparent mr-auto hover:bg-[#4338ca] text-[#4338ca] hover:text-white rounded shadow hover:shadow-lg py-2 px-4 border border-[#4338ca] hover:border-transparent">
        Explore Now</a>
      </div>
      <div class="ml-0 md:ml-12 lg:w-2/3 sticky">
        <div class="container mx-auto w-full h-full">
          <div class="relative wrap overflow-hidden p-10 h-full">
            <div class="border-2-2 border-[#4338ca] absolute h-full border"
              style="right: 50%; border: 2px solid #4338ca; border-radius: 1%;"></div>
            <div class="border-2-2 border-[#4338ca] absolute h-full border"
              style="left: 50%; border: 2px solid #4338ca; border-radius: 1%;"></div>
            <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
              <div class="order-1 w-5/12"></div>
              <div class="order-1 w-5/12 px-1 py-4 text-right">
                <p class="mb-3 text-base text-[#4338ca]">Easy registration</p>
                <h4 class="mb-3 font-bold text-lg md:text-2xl">Accessible</h4>
                <p class="text-sm md:text-base leading-snug text-black text-opacity-100">
                    You can have the ability to consult doctors within minutes after your registration
                </p>
              </div>
            </div>
            <div class="mb-8 flex justify-between items-center w-full right-timeline">
              <div class="order-1 w-5/12"></div>
              <div class="order-1  w-5/12 px-1 py-4 text-left">
                <p class="mb-3 text-base text-[#4338ca]">trusted organizers</p>
                <h4 class="mb-3 font-bold text-lg md:text-2xl">Trustworthy</h4>
                <p class="text-sm md:text-base leading-snug text-black text-opacity-100">
                  The doctors in our website are certified to practice their profession and we make sure to bring the best doctors
                </p>
              </div>
            </div>
            <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
              <div class="order-1 w-5/12"></div>
              <div class="order-1 w-5/12 px-1 py-4 text-right">
                <p class="mb-3 text-base text-[#4338ca]"> Powerful website</p>
                <h4 class="mb-3 font-bold text-lg md:text-2xl">Efficient</h4>
                <p class="text-sm md:text-base leading-snug text-black text-opacity-100">
                  during the development of the website the best technologies had been choosen to ensure fluidity while using the website
                </p>
              </div>
            </div>

            <div class="mb-8 flex justify-between items-center w-full right-timeline">
              <div class="order-1 w-5/12"></div>

              <div class="order-1  w-5/12 px-1 py-4">
                <p class="mb-3 text-base text-[#4338ca]">Team</p>
                <h4 class="mb-3 font-bold  text-lg md:text-2xl text-left">Service</h4>
                <p class="text-sm md:text-base leading-snug text-black text-opacity-100">
                Our team consists of experienced physicians, nurses, and healthcare specialists who are passionate about delivering high-quality care to every patient we serve.
                </p>
              </div>
            </div>
          </div>
          <img class="mx-auto -mt-36 md:-mt-36" src="https://user-images.githubusercontent.com/54521023/116968861-ef21a000-acd2-11eb-95ac-a34b5b490265.png" />
        </div>
      </div>
    </div>
  </div>
  </section>
    @include('includes.footer')
</body>
</html>