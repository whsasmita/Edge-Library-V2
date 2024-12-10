<x-admin-layout>
    <!-- welcome -->
    <section class="text-center flex flex-col items-center">
                <span class="text-2xl font-bold">Welcome Back, Admin</span>
                <span class="text-m pb-4">Check Your Edge Library Store Performance</span>
            </section>
            <!-- welcome end -->

            <!-- card -->
            <section class="flex w-full justify-around">
                <!-- card 1 -->
                <div class="bg-cover w-[23%] h-[100px] rounded-[10px] p-2 cursor-pointer">
                    <img src="{{ asset('assets/images admin/book-black.png') }}" alt="books" class="w-5 h-5">
                    <div class="flex flex-col">
                        <span>Status</span>
                        <span>View Now</span>
                    </div>
                </div>
                <!-- card 1 end -->

                <!-- card 2 -->
                <div class="bg-[url('img/card2.jpg')] bg-cover w-[23%] rounded-[10px] p-2 cursor-pointer">
                    <img src="{{ asset('assets/images admin/book-black.png') }}" alt="books" class="w-5 h-5">
                    <div class="flex flex-col">
                        <span>Books</span>
                        <span>100</span>
                    </div>
                </div>
                <!-- card 2 end -->

                <!-- card 3 -->
                <div class="bg-[url('img/card3.jpg')] bg-cover w-[23%] rounded-[10px] p-2 cursor-pointer">
                    <img src="{{ asset('assets/images admin/book-black.png') }}" alt="books" class="w-5 h-5">
                    <div class="flex flex-col">
                        <span>History</span>
                        <span>30</span>
                    </div>
                </div>
                <!-- card 3 end -->

                <!-- card 4 -->
                <div class="bg-[url('img/card4.jpg')] bg-cover w-[23%] rounded-[10px] p-2 cursor-pointer">
                    <img src="{{ asset('assets/images admin/book-black.png') }}" alt="books" class="w-5 h-5">
                    <div class="flex flex-col">
                        <span>Books</span>
                        <span>100</span>
                    </div>
                </div>
                <!-- card 4 end -->
            </section>
            <!-- card end -->

            <!-- filter -->
            <section class="w-full bg-white rounded-[5px] p-2 mt-5 mb-3 flex justify-between cursor-pointer">
                <div class="flex gap-2">
                    <span class="font-bold">History Reading</span>
                    <div class="bg-green-500 rounded-[5px] px-2">
                        <span class="text-[12px] text-white">+10 reading</span>
                    </div>
                </div>
                <div class="flex bg-green-500 gap-2 px-2 rounded-[5px]">
                    <span class="text-white">ALL</span>
                </div>
            </section>
            <!-- filter end -->

            <!-- table -->
            <section>
                <table class="w-full table-auto text-left">
                    <thead>
                        <tr>
                            <th>Books</th>
                            <th>User</th>
                            <th>Status</th>
                            <th>Date, Time</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($datas->sortByDesc('created_at')->take(4) as $data)
                        <tr>
                            <td class="flex items-center gap-2 py-2">
                                <img src="{{ asset($data->path_img.$data->image) }}" alt="cover" class="w-10 h-10">
                                <span>{{ $data['title'] }}</span>
                            </td>
                            <td>Herry Rasio</td>
                            <td>finished</td>
                            <td>17-12-2022, 12:00</td>
                            <td class="cursor-pointer"><img src="{{ asset('assets/images admin/eye.png') }}" alt="eye" class="w-4 h-4"></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </section>
            <!-- table end -->
</x-admin-layout>