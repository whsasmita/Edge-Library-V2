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
<body>
    <main class="flex justify-around bg-white">
        <aside class="w-64 h-screen bg-white shadow-lg border-r border-gray-100 p-6 flex flex-col">
            <a href="{{route('admin')}}" class="flex items-center justify-center mb-10">
                <img src="{{ asset('assets/images admin/library.png') }}" alt="logo" class="w-24 h-24 object-cover">
            </a>
            <nav class="space-y-2">
                <div class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-green-50 transition-colors group cursor-pointer">
                    <img src="{{ asset('assets/images admin/dashboard-black.png') }}" alt="dashboard" class="w-6 h-6 group-hover:scale-110 transition-transform">
                    <a href="{{route('admin')}}" class="text-gray-800 font-medium group-hover:text-green-600">Dashboard</a>
                </div>
                <div class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-green-50 transition-colors group cursor-pointer">
                    <img src="{{ asset('assets/images admin/book-black.png') }}" alt="book" class="w-6 h-6 group-hover:scale-110 transition-transform">
                    <a href="{{route('allBooks')}}" class="text-gray-800 font-medium group-hover:text-green-600">Books</a>
                </div>
                <div class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-green-50 transition-colors group cursor-pointer">
                    <img src="{{ asset('assets/images admin/history.png') }}" alt="history" class="w-6 h-6 group-hover:scale-110 transition-transform">
                    <a href="{{route('history')}}" class="text-gray-800 font-medium group-hover:text-green-600">History</a>
                </div>
            </nav>
        </aside>

        <div class="content w-[80%] bg-[#F2EDED] h-[100vh] px-5">
            <nav class="flex justify-between items-center py-2">
                <!-- Search Section -->
                <div class="relative w-[75%]">
                    <img 
                        src="{{ asset('assets/images admin/search.png') }}"
                        alt="search" 
                        class="absolute left-3 top-1/2 transform -translate-y-1/2 w-4 h-4 text-gray-400">
                    <input 
                        type="search" 
                        placeholder="Search" 
                        class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-[30px] focus:outline-none focus:ring-2 focus:ring-blue-400 text-sm">
                </div>
                
            
                <!-- Notification and Email Icons -->
                <div class="flex items-center gap-4">
                    <img src="{{ asset('assets/images admin/notification.png') }}" alt="notification" class="w-6 h-6 cursor-pointer">
                    <img src="{{ asset('assets/images admin/email.png') }}" alt="message" class="w-6 h-6 cursor-pointer">
                </div>
            
                <!-- Profile Section -->
                <div class="flex items-center gap-2">
                    <div class="flex-shrink-0">
                        <img src="{{ asset('assets/images admin/dragon.png') }}" alt="dragon" class="w-6 h-6 rounded-full">
                    </div>
                    <div class="flex flex-col text-sm">
                        <span class="font-medium text-gray-800">Admin</span>
                        <span class="text-gray-500">MU Store</span>
                    </div>
                    <a href="{{route('landing')}}">
                        <img src="{{ asset('assets/images admin/dropdown.png') }}" alt="dropdown" class="w-4 h-4 cursor-pointer rotate-[-90deg]">
                    </a>
                </div>
            </nav>
            

            <div>
                {{ $slot }}
            </div>
        </div>
    </main>
</body>