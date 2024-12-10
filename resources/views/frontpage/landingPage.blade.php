<x-home-layout>
    <div class="flex justify-around items-center min-h-screen bg-gradient-to-b from-green-50 to-white">
<div class="relative flex justify-center group">
            <div class="flex gap-[30px] transition-transform duration-500 transform group-hover:translate-y-2">
                <img class="w-[250px] h-[350px] rounded-lg shadow-xl hover:scale-105 transition-transform duration-300" src="{{ asset('assets/images/hero1.jpg') }}" alt="hero-img">
                <img class="w-[250px] h-[350px] rounded-lg shadow-xl hover:scale-105 transition-transform duration-300" src="{{ asset('assets/images/hero2.jpg') }}" alt="hero-img">
            </div>
            <img class="w-[250px] h-[350px] absolute top-20 left-1/2 transform -translate-x-1/2 -translate-y-5 z-10 rounded-lg shadow-2xl hover:scale-105 transition-transform duration-300 group-hover:-translate-y-8" src="{{ asset('assets/images/hero3.jpg') }}" alt="hero-img">
        </div>
        <div class="flex flex-col items-center space-y-6">
            <div class="text-center">
                <h1 class="text-[40px] font-black tracking-wider text-gray-800">
                    EDGE LIBRARY
                </h1>
                <p class="text-[20px] text-gray-600 text-center">
                    Discover Knowledge, One Book at a Time
                </p>
            </div>
            <div class="flex gap-4 mt-8">
                <a href="{{route('login')}}" class="px-8 py-3 bg-emerald-500 text-white rounded-full font-semibold hover:bg-emerald-600 transition-colors duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                    Sign In
                </a>
                <a href="{{route('register')}}" class="px-8 py-3 border-2 border-emerald-500 text-emerald-600 rounded-full font-semibold hover:bg-emerald-600 hover:text-white transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                    Sign Up
                </a>
            </div>
        </div>
        </div>

        <div class="flex justify-center items-center mt-[70px]">
        <div class="text-center w-[300px]">
            <span class="text-2xl font-bold text-gray-800 mb-2">Recommendation</span>
            <hr class="bg-green-500 h-1 w-30 mx-auto">
        </div>
    </div>    

    <div class="flex flex-wrap justify-center items-start gap-10 p-4 min-h-[calc(90vh-50px)]">
    @foreach ($datas as $data)
        <div class="w-[250px] bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1">
            <div class="relative overflow-hidden">
                <img class="w-full h-[150px] object-cover rounded-t-xl transition-transform hover:scale-110"
                    src="{{ asset($data->path_img.$data->image) }}" alt="{{ asset($data->path_img.$data->image) }}">
                <div class="absolute bottom-0 left-0 right-0 h-20 bg-gradient-to-t from-black/60 to-transparent"></div>
            </div>

            <div class="p-4 space-y-3">
                <h3 class="font-bold text-lg text-gray-800 hover:text-emerald-700 transition-colors duration-200 max-w-[250px] truncate overflow-hidden whitespace-nowrap">
                {{ $data['title'] }}
                </h3>
                <div class="flex justify-between items-center text-sm text-gray-600">
                    <span class="hover:text-emerald-600">{{ $data['author'] }}</span>
                    <span class="bg-emerald-100 text-emerald-800 px-2 py-1 rounded-full text-xs">{{ $data['publish_year'] }}</span>
                </div>
                <p class="text-xs text-gray-500 h-[100px] max-h-[100px] overflow-hidden leading-relaxed">
                {{ $data['description'] }}
                </p>
                <a href="{{ route('booksDetail', $data->id_books) }}"
                    class="block w-full bg-emerald-600 hover:bg-emerald-700 text-white rounded-full py-2 px-4 text-center transition-colors duration-200 transform hover:scale-105">
                    Show Details
                </a>
            </div>
        </div>
        @endforeach
    </div>

    <div class="flex flex-col items-center mt-2">
        <a href="{{ route('books') }}" class="bg-emerald-500 text-white py-2 px-4 rounded-lg shadow-md hover:bg-emerald-600 transition duration-200 ease-in-out transform hover:-translate-y-1 hover:shadow-lg">
            Show More
        </a>
    </div>
</x-home-layout>