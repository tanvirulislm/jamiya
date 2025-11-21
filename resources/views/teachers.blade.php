@extends('layout.app')
@section('title', 'শিক্ষকবৃন্দ')

@section('content')

    <!-- Page Title -->
    <h2 class="text-3xl font-extrabold text-green-900 text-center py-8">আমাদের শিক্ষকবৃন্দ</h2>

    <section class="container mx-auto px-4 pb-20">
        <!-- Teachers Grid -->
        <div class="grid md:grid-cols-3 lg:grid-cols-4 gap-8">
            <!-- Teacher Card -->
            @foreach ($kitabTeachers as $kt)
                <div class="bg-white border border-green-700 shadow-lg rounded-2xl p-4 hover:-translate-y-1 transition">
                    <img src="{{ asset('storage/' . $kt->image_url) }}"
                        class="w-32 h-32 object-cover rounded-full mx-auto border-4 border-green-700" />
                    <h3 class="text-xl font-bold text-green-900 text-center mt-4">{{ $kt->name }}</h3>
                    <p class="text-center text-green-800 font-semibold">{{ $kt->designation }}</p>

                    <div class="mt-4 space-y-1 text-center text-gray-700">
                        <p><i class="fa-solid fa-phone mr-2 text-green-700"></i> {{ $kt->phone }}</p>
                        <p class="text-sm"><i class="fa-solid fa-envelope mr-2 text-green-700"></i> {{ $kt->email }}</p>
                    </div>
                </div>
            @endforeach

            <!-- Duplicate More Teacher Cards as Needed -->
            {{-- <div class="bg-white border border-green-700 shadow-lg rounded-2xl p-6 hover:-translate-y-1 transition">
                <img src="image/teacher2.jpg"
                    class="w-32 h-32 object-cover rounded-full mx-auto border-4 border-green-700" />
                <h3 class="text-xl font-bold text-green-900 text-center mt-4">মাওলানা সাইফুল ইসলাম</h3>
                <p class="text-center text-green-800 font-semibold">হিফজ বিভাগের শিক্ষক</p>
                <div class="mt-4 space-y-1 text-center text-gray-700">
                    <p><i class="fa-solid fa-phone mr-2 text-green-700"></i> 01700-000000</p>
                    <p><i class="fa-solid fa-envelope mr-2 text-green-700"></i> mail@example.com</p>
                </div>
            </div>

            <div class="bg-white border border-green-700 shadow-lg rounded-2xl p-6 hover:-translate-y-1 transition">
                <img src="image/teacher3.jpg"
                    class="w-32 h-32 object-cover rounded-full mx-auto border-4 border-green-700" />
                <h3 class="text-xl font-bold text-green-900 text-center mt-4">উস্তাজা আফসানা বেগম</h3>
                <p class="text-center text-green-800 font-semibold">বালিকা শাখা</p>
                <div class="mt-4 space-y-1 text-center text-gray-700">
                    <p><i class="fa-solid fa-phone mr-2 text-green-700"></i> 01812-111111</p>
                    <p><i class="fa-solid fa-envelope mr-2 text-green-700"></i> ustaza@example.com</p>
                </div>
            </div>

            <div class="bg-white border border-green-700 shadow-lg rounded-2xl p-6 hover:-translate-y-1 transition">
                <img src="image/teacher4.jpg"
                    class="w-32 h-32 object-cover rounded-full mx-auto border-4 border-green-700" />
                <h3 class="text-xl font-bold text-green-900 text-center mt-4">মাওলানা জাকারিয়া হুসাইন</h3>
                <p class="text-center text-green-800 font-semibold">কিতাব বিভাগের শিক্ষক</p>
                <div class="mt-4 space-y-1 text-center text-gray-700">
                    <p><i class="fa-solid fa-phone mr-2 text-green-700"></i> 01730-222222</p>
                    <p><i class="fa-solid fa-envelope mr-2 text-green-700"></i> zakaria@example.com</p>
                </div>
            </div> --}}
        </div>
    </section>
@endsection