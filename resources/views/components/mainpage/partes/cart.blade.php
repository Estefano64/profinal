
    <div class="w-172 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
        <a href="{{$link}}">
           
            <img src="{{ $img  }}" alt="Product" class="h-80 w-172 object-cover rounded-t-xl" />
            <div class="px-4 py-3 w-72">

                <p class="text-center text-lg font-bold text-black truncate block capitalize">{{$slot }}</p>
                <p class=" text-black"> {{$description ?? ''}}</p>

            </div>
        </a>
    </div>


