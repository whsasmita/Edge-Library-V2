<x-home-layout>
<div class="mt-[50px]">
        <div class="relative w-[100%] h-[300px] overflow-hidden">
            <div id="carousel-full" class="flex transition-transform justify-center duration-700 ease-in-out">
                <img class="w-[99%] h-full flex-shrink-0" src="{{ asset($datas->path_img . $datas->image) }}" alt="reading1">
                
            </div>
        </div>

        <div class="w-[100%] flex flex-col justify-center">
            <div class="flex justify-between px-5 mt-5">
                <div class="flex flex-col">
                    <span class="poppins-black text-[30px]">Herry Potter 1</span>
                    <div class="flex gap-5">
                        <div class="flex">
                            <img class="w-5 h-5 mr-1" src="{{ asset('assets/images/calendar.png') }}" alt="year">
                            <span>1997</span>
                        </div>
                        <div class="flex">
                            <img class="w-5 h-5 mr-1" src="{{ asset('assets/images/author.png') }}" alt="author">
                            <span>J.K. Rowling</span>
                        </div>
                    </div>
                </div>
                <img class="w-7 h-7" src="{{ asset('assets/images/favorite-books.png') }}" alt="favorite">
            </div>
            <hr class="bg-[#2E7D32] h-1 w-[98%] my-2 mx-auto">
        </div>
        
        <div class="w-full h-screen">
            <embed src="{{ asset($datas->path_books . $datas->books) }}" type="application/pdf" width="100%" height="100%">
        </div>

        <div class="flex justify-between w-[98%] mx-auto py-3">
            <img class="w-10 h-10 border border-emerald-200 bg-emerald-500 rounded-xl p-2" src="{{ asset('assets/images/backPage.png') }}" alt="back-btn">
            <a href="./readingPage copy.html"><img class="w-10 h-10 border border-emerald-200 bg-emerald-500 rounded-xl p-2 rotate-180" src="{{ asset('assets/images/backPage.png') }}" alt="next-btn"></a>
        </div>
    </div>
</x-home-layout>