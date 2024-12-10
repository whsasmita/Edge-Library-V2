<x-admin-layout>
<section class="flex justify-between items-center mt-4">
        <h3 class="font-bold text-xl">Your Products</h3>
        <div class="flex gap-2">
        <form method="GET" action="{{ route('filter') }}">
                <select 
                    id="category" 
                    name="category" 
                    class="w-[200px] px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500"
                    onchange="this.form.submit()"
                >
                    <option value="">All</option>
                    <option value="3">Fiction</option>
                    <option value="4">Non-Fiction</option>
                    <option value="1">Fantasy</option>
                    <option value="5">Science Fiction</option>
                    <option value="6">Mystery</option>
                    <option value="2">Romance</option>
                    <option value="7">Biography</option>
                    <option value="8">History</option>
                </select>
            </form>
            <a href="{{ route('addForm') }}" id="addProductBtn" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600  transition-colors">
                + Add Product
            </a>
        </div>
    </section>

    <section class="overflow-y-auto h-[75vh] mt-3">
        <table class="w-full text-left border-collapse">
            <thead class="sticky top-0 bg-gray-200 z-10">
                <tr class="bg-gray-200">
                    <th class="pb-2 text-left p-2">Books</th>
                    <th class="text-left p-2">Author</th>
                    <th class="text-left p-2">Category</th>
                    <th class="text-left p-2">Publication</th>
                    <th class="text-left p-2">Description</th>
                    <th class="text-left p-2">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($datas as $data)
                <tr class="border-b hover:bg-gray-50 transition-colors">
                    <td class="p-2 max-w-[200px] truncate overflow-hidden whitespace-nowrap">
                        <div class="flex items-center gap-2">
                            <img src="{{ asset($data->path_img.$data->image) }}" alt="cover" class="w-10 h-10 object-cover rounded">
                            <span class="truncate">{{ $data->title }}</span>
                        </div>
                    </td>
                    <td class="p-2">{{ $data['author'] }}</td>
                    <td class="p-2">{{ $data->category->category }}</td>
                    <td class="p-2">{{ $data['publish_year'] }}</td>
                    <td class="p-2 max-w-[200px] truncate overflow-hidden whitespace-nowrap">{{ $data['description'] }}</td>
                    <td class="p-2 flex gap-2 cursor-pointer">
                        <a href="{{ route('edit', $data->id_books) }}">
                            <img src="{{ asset('assets/images admin/edit.png') }}" alt="edit" class="w-5 h-5 hover:scale-110 transition-transform">
                        </a>
                        <img src="{{ asset('assets/images admin/eye.png') }}" alt="eye" class="w-5 h-5 hover:scale-110 transition-transform">
                        <a href="{{ route('destroy', $data->id_books) }}" onclick="return confirm('Are you sure to delete it?')">
                            <img src="{{ asset('assets/images admin/delete.png') }}" alt="delete" class="w-5 h-5 hover:scale-110 transition-transform">
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>
</x-admin-layout>