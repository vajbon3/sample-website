<x-layout>
    <div class="relative min-h-[70vh] w-full">
        <div class="flex absolute top-0 left-0 right-0 bottom-0 flex-col justify-center items-center min-h-[70vh] w-full bg-cover"
             style="background-image:url('{{$service->image}}'); filter: blur(10px); z-index: -1;">
        </div>
        <div class="absolute top-0 left-0">
            <a href="{{URL::previous()}}">
                <button class="bg-blue-500 p-4 rounded-br-lg hover:bg-blue-400">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M9.53 2.47a.75.75 0 010 1.06L4.81 8.25H15a6.75 6.75 0 010 13.5h-3a.75.75 0 010-1.5h3a5.25 5.25 0 100-10.5H4.81l4.72 4.72a.75.75 0 11-1.06 1.06l-6-6a.75.75 0 010-1.06l6-6a.75.75 0 011.06 0z" clip-rule="evenodd" />
                    </svg>
                </button>
            </a>
        </div>
        <div class="w-full bg-black bg-opacity-70 p-5 shadow min-h-[70vh] flex flex-col lg:flex-row justify-center items-center">
            <div class="basis-1/3">
                <img class="rounded-xl" src="{{$service->image}}" alt="product image"/>
            </div>
            <div class="px-5 basis-2/3 text-gray-200">
                <div class="text-3xl text-center">
                    <h5 class="font-semibold tracking-tight">
                        {{$service->slug}}
                    </h5>
                </div>
                <div class="min-h-[100px] flex items-center justify-center">
                    <p class="text-xl text-gray-300">{{$service->description}}</p>
                </div>
                <hr class="bg-gray-400">
                <div class="flex justify-end">
                    <span class="text-3xl font-bold text-blue-500">{{$service->price}}$</span>
                </div>
            </div>
        </div>
    </div>
</x-layout>
