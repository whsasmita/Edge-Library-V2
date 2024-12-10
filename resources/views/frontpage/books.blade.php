<x-home-layout>
<div class="flex flex-wrap justify-center items-start gap-10 p-4 mt-[70px] min-h-[calc(90vh-50px)]">
    @foreach ($datas as $data)
        <div
            class="w-[250px] bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1">
            <div class="relative overflow-hidden">
                <img class="w-full h-[150px] object-cover rounded-t-xl transition-transform duration-300 hover:scale-110"
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
    {{ $datas->appends(request()->query())->links() }}
    </div>
</x-home-layout>