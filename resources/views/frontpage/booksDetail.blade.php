<x-home-layout>
    <a href="./books.html" class="w-full h-[50px] flex justify-start fixed top-[60px] left-5 z-40">
        <img class="w-7 h-7 hover:scale-110 transition-transform duration-200" src="{{ asset('assets/images/back.png') }}" alt="menu-btn">
    </a>

    <div class="mt-[80px] mx-6 flex justify-around">
        <div class="relative w-[425px] h-[500px] overflow-hidden rounded-xl">
            <div id="carousel" class="flex transition-transform duration-700 ease-in-out">
                <img class="w-[425px] h-[500px] flex-shrink-0" 
                     src="{{ asset($datas->path_img . $datas->image) }}" 
                     alt="{{ $datas->title }}">
            </div>
        </div>

        <div class="w-[700px] h-[500px] flex flex-col justify-between px-4">
            <div>
                <div class="flex justify-between">
                    <span class="poppins-black text-[36px]">{{ $datas->title }}</span>
                    <img class="w-7 h-7" src="{{asset('assets/images/favorite-books.png')}}" alt="favorite-btn">
                </div>
                <div class="flex gap-1">
                    <img class="w-5 h-5" src="{{asset('assets/images/calendar.png')}}" alt="year">
                    <span class="hover:text-emerald-600">{{ $datas->publish_year }}</span>
                </div>
                <div class="flex gap-1">
                    <img class="w-5 h-5" src="{{asset('assets/images/author.png')}}" alt="author">
                    <span class="hover:text-emerald-600">{{ $datas->author }}</span>
                </div>
                <div>
                    <span>Description</span>
                    <p class="text-justify">{{ $datas->description }}</p>
                </div>
            </div>

            <a class="block w-full bg-emerald-600 hover:bg-emerald-700 text-white rounded-full py-2 px-4 text-center transition-colors duration-200" 
   href="{{ route('readingPage', ['id_books' => $datas->id_books, 'title' => $datas->title]) }}">Start Reading</a>
        </div>
    </div>
</x-home-layout>