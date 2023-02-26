<x-layout>
    <!-- carousel -->
    <div id="carousel" class="relative" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <span
                    class="absolute text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
                <img src="/img/equipment-1.webp"
                     class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/img/equipment-1.webp"
                     class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/img/equipment-1.webp"
                     class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
        </div>
        <!-- Slider controls -->
        <button type="button"
                class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
        <span
            class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                 stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path
                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            <span class="sr-only">Previous</span>
        </span>
        </button>
        <button type="button"
                class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
        <span
            class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                 stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path
                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <span class="sr-only">Next</span>
        </span>
        </button>
    </div>

    <!-- about us -->
    <hr>
    <div id="about-us" class="text-center flex flex-col items-center mb-4 mx-4">
        <div class="bg-gray-200 p-2 mb-4 w-1/5 rounded-b-xl">
            <h3 class="text-4xl text-gray-400">about us</h3>
        </div>
        <div
            class="flex flex-col-reverse lg:flex-row justify-center items-center border-gray-300 border-2 rounded-xl my-5">
            <p class="p-6 text-3xl lg:text-lg text-gray-700 lg:h-[300px]">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid deleniti distinctio dolorem ducimus
                excepturi in inventore ipsam laborum, mollitia nemo porro quae, quos sunt, veniam vitae voluptas
                voluptates? Laudantium, tenetur!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid deleniti distinctio dolorem ducimus
                excepturi in inventore ipsam laborum, mollitia nemo porro quae, quos sunt, veniam vitae voluptas
                voluptates? Laudantium, tenetur!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid deleniti distinctio dolorem ducimus
                excepturi in inventore ipsam laborum, mollitia nemo porro quae, quos sunt, veniam vitae voluptas
                voluptates? Laudantium, tenetur!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid deleniti distinctio dolorem ducimus
                excepturi in inventore ipsam laborum, mollitia nemo porro quae, quos sunt, veniam vitae voluptas
                voluptates? Laudantium, tenetur!
            </p>
            <img src="/img/portrait.jpg" alt="portrait"
                 class="lg:rounded-r-xl lg:rounded-l-none rounded-xl h-[250px] object-cover object-top w-full lg:h-[300px]">
        </div>
    </div>

    <!-- services -->
    <hr>
    <div id="services" class="bg-black bg-opacity-70 text-center relative text-gray-400 overflow-hidden flex flex-col items-center">
        <div class="bg-gray-200 p-2 mb-4 w-1/5 rounded-b-xl">
            <h3 class="text-4xl">services</h3>
        </div>
        <div>
            <div
                class="flex absolute top-0 left-0 right-0 bottom-0 flex-col justify-center items-center min-h-[70vh] w-full bg-cover"
                style="background-image:url('/img/equipment-1.webp'); filter: blur(10px); z-index: -1;">
            </div>
            <div class="w-full flex flex-wrap items-center justify-center p-6 gap-16">
                @foreach($services as $service)
                    <div
                        class="lg:max-w-sm w-4/5 bg-white border-8 border-gray-400 border-opacity-30 rounded-2xl shadow">
                        <a href="#">
                            <img class="rounded-t-lg" src="{{$service->image}}" alt="service image"/>
                        </a>
                        <div class="p-5">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 lg:text-2xl text-5xl">{{$service->slug}}</h5>
                            <p class="mb-5 font-normal text-gray-700 lg:text-lg text-4xl">{{Str::limit($service->description, 100, $end='...')}}</p>
                            <a href="{{route('services',$service)}}"
                               class="text-3xl lg:text:lg lg:text-lg inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                Read more
                                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor"
                                     viewBox="0 0 20 20"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                          clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
