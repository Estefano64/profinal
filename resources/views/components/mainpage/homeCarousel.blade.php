<div class="mt-20 max-w-1x3 mx-auto">

    <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-180 md:h-96" data-carousel-inner>

            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('images/1.png') }}"
                    class="object-cover w-full h-full" alt="Slide 2">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('images/2.png') }}"
                    class="object-cover w-full h-full" alt="Slide 3">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('images/3.png') }}"
                    class="object-cover w-full h-full" alt="Slide 3">
            </div>
        </div>

        <!-- Slider controls -->
        <button type="button"
            class="flex absolute top-1/2 left-3 z-40 items-center justify-center w-10 h-10  focus:outline-none transition"
            data-carousel-prev>
            <svg class="w-5 h-5 text-black-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>
        <button type="button"
            class="flex absolute top-1/2 right-3 z-40 items-center justify-center w-10 h-10 focus:outline-none transition"
            data-carousel-next>
            <svg class="w-5 h-5 text-black-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>
    </div>


    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>

</div>

