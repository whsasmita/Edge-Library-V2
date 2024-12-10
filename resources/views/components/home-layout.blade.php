<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edge Library</title>

    <!-- css -->
    <link rel="stylesheet" href="{{ asset('assets/css/font.css') }}">

    <!-- icon -->
    <link rel="icon" href="{{ asset('assets/images/logo.png')}}">

    <!-- tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Pacifico&family=Rubik:ital,wght@1,300&family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet" />
</head>
<body class="bg-gray-50">
    <nav class="bg-[#2E7D32] px-5 h-[50px] flex items-center justify-around fixed w-full top-0 z-50 shadow-lg">
        <a href="{{route('landing')}}" class="pacifico-regular text-lg text-white">Edge Library</a>
        <form action="{{ route('search') }}" method="GET" class="relative flex items-center w-[850px] max-w-full">
    <input 
        type="search" 
        name="search" 
        placeholder="Search book titles, authors, or descriptions" 
        class="w-full pl-4 pr-8 py-1.5 border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-green-400 transition-all duration-300"
        value="{{ request('search') }}"
    />
    <button type="submit" class="absolute right-3 cursor-pointer">
        <img src="{{ asset('assets/images/search.png') }}" alt="Search" class="w-4 h-4">
    </button>
</form>
        <div class="flex justify-between">
            <a href="{{route('books')}}" class="text-white text-lg font-semibold mx-2 hover:text-green-200 transition-colors duration-300">Books</a>
            <img class="w-6 h-6 mx-2 cursor-pointer hover:opacity-80 transition-opacity duration-300" src="{{ asset('assets/images/notification.png') }}" alt="notification-btn">
            <img class="w-6 h-6 mx-2 cursor-pointer hover:opacity-80 transition-opacity duration-300" src="{{ asset('assets/images/favorite.png') }}" alt="favorite-btn">
        </div>
        <a href="{{route('admin')}}" class="flex items-center justify-center border border-gray-300 rounded-full w-[40px] h-[40px] overflow-hidden hover:border-white transition-colors duration-300 cursor-pointer">
            <img src="{{ asset('assets/images/profile.png') }}" alt="profile" class="w-[30px] h-[30px] object-cover">
        </a>
    </nav>

    <main >
        {{ $slot }}
    </main>

    

    <footer class="bg-[#2E7D32] text-white py-8 mt-20">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="space-y-4">
                    <h3 class="text-xl font-bold mb-4">About Edge Library</h3>
                    <p class="text-sm text-gray-200">
                        Discover endless possibilities through reading. Edge Library provides a vast collection of books for all readers.
                    </p>
                </div>
    
                <div class="space-y-4">
                    <h3 class="text-xl font-bold mb-4">Quick Links</h3>
                    <ul class="space-y-1">
                        <li><a href="{{route('landing')}}" class="text-gray-200 hover:text-white transition-colors">Home</a></li>
                        <li><a href="{{route('books')}}" class="text-gray-200 hover:text-white transition-colors">Books</a></li>
                    </ul>
                </div>
    
                <div class="space-y-4">
                    <h3 class="text-xl font-bold mb-4">Contact Us</h3>
                    <ul class="space-y-2">
                        <li class="text-gray-200">Email: info@edgelibrary.com</li>
                        <li class="text-gray-200">Phone: 81152</li>
                        <li class="text-gray-200">Address: Temukus Village </li>
                    </ul>
                </div>
    
                <div class="space-y-4">
                    <h3 class="text-xl font-bold mb-4">Follow Us</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-200 hover:text-white transition-colors">
                            <img src="{{asset('assets/images/facebook-icon.png')}}" alt="{{asset('assets/images/facebook-icon.png')}}" width="24" height="24">
                        </a>
                        <a href="#" class="text-gray-200 hover:text-white transition-colors">
                            <img src="{{asset('assets/images/twitter-icon.png')}}" alt="{{asset('assets/images/twitter-icon.png')}}" width="24" height="24">
                        </a>
                        <a href="#" class="text-gray-200 hover:text-white transition-colors">
                            <img src="{{asset('assets/images/instagram-icon.png')}}" alt="{{asset('assets/images/instagram-icon.png')}}" width="24" height="24">
                        </a>
                    </div>
                </div>
            </div>
    
            <div class="border-t border-gray-600 mt-8 pt-8 text-center text-sm text-gray-300">
                © 2024 Edge Library. All rights reserved.
            </div>
        </div>
    </footer>
</body>
</html>