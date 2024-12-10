<x-admin-layout>
    <div class="h-[90vh] overflow-y-auto">
        <div class="flex justify-center sticky top-0">
            <h1 class="bg-green-500 w-[500px] text-2xl font-bold text-center text-white py-4 rounded-[20px]">
                {{ $action }} Book
            </h1>
        </div>
        <form enctype="multipart/form-data" action="{{ $routes }}" method="POST" class="p-6 space-y-4">
    @csrf
    @isset($book)
        @method('PUT')
    @endisset
    <div>
        <label for="photo" class="block text-sm font-medium text-gray-700 mb-2">Cover Image</label>
        <input 
            type="file" 
            id="photo" 
            name="photo" 
            accept="image/*"
            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 file:mr-4 file:rounded-md file:border-0 file:bg-green-50 file:px-4 file:py-2 file:text-sm file:font-semibold hover:file:bg-green-100"
        >
    </div>

    <div>
        <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Title</label>
        <input 
            type="text" 
            id="title" 
            name="title" 
            required
            placeholder="Enter book title"
            value="{{ $book->title ?? '' }}"
            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500"
        >
    </div>

    <div>
        <label for="author" class="block text-sm font-medium text-gray-700 mb-2">Author</label>
        <input 
            type="text" 
            id="author" 
            name="author" 
            required
            placeholder="Enter author name"
            value="{{ $book->author ?? '' }}"
            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500"
        >
    </div>

    <div>
        <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Description</label>
        <textarea 
            id="description" 
            name="description" 
            rows="4"
            placeholder="Enter book description"
            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500"
        >{{ $book->description ?? '' }}</textarea>
    </div>

    <div>
        <label for="date" class="block text-sm font-medium text-gray-700 mb-2">Publication Date</label>
        <input 
            type="date" 
            id="date" 
            name="date" 
            required
            value="{{ $book->publish_year ?? '' }}"
            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500"
        >
    </div>

    <div>
        <label for="category" class="block text-sm font-medium text-gray-700 mb-2">Category</label>
        <select 
            id="category" 
            name="category" 
            required
            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500"
        >
            <option value="">Select a category</option>
            <option value="3" {{ isset($book) && $book->category_id == 3 ? 'selected' : '' }}>Fiction</option>
            <option value="4" {{ isset($book) && $book->category_id == 4 ? 'selected' : '' }}>Non-Fiction</option>
            <option value="1" {{ isset($book) && $book->category_id == 1 ? 'selected' : '' }}>Fantasy</option>
            <option value="5" {{ isset($book) && $book->category_id == 5 ? 'selected' : '' }}>Science Fiction</option>
            <option value="6" {{ isset($book) && $book->category_id == 6 ? 'selected' : '' }}>Mystery</option>
            <option value="2" {{ isset($book) && $book->category_id == 2 ? 'selected' : '' }}>Romance</option>
            <option value="7" {{ isset($book) && $book->category_id == 7 ? 'selected' : '' }}>Biography</option>
            <option value="8" {{ isset($book) && $book->category_id == 8 ? 'selected' : '' }}>History</option>
        </select>
    </div>

    <div>
        <label for="book-pdf" class="block text-sm font-medium text-gray-700 mb-2">Book PDF File</label>
        <input 
            type="file" 
            id="book-pdf" 
            name="book-pdf" 
            accept=".pdf"
            {{ isset($book) ? '' : 'required' }}
            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 file:mr-4 file:rounded-md file:border-0 file:bg-green-50 file:px-4 file:py-2 file:text-sm file:font-semibold hover:file:bg-green-100"
        >
        <p class="text-xs text-gray-500 mt-1">Only PDF files are allowed. Max file size: 50MB</p>
    </div>

    <div class="pt-4">
        <button 
            type="submit" 
            class="w-full bg-green-500 text-white py-2 rounded-md hover:bg-green-600 transition-colors focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50"
        >
            {{ $action }} Book
        </button>
    </div>
</form>
</div>
</x-admin-layout>