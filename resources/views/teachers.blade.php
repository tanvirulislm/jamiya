@extends('layout.app')
@section('title', 'শিক্ষকবৃন্দ')

@section('content')

    <!-- Page Title -->
    <h2 class="text-3xl font-extrabold text-green-900 text-center py-8">আমাদের শিক্ষকবৃন্দ</h2>

    <section class="container mx-auto px-4 pb-20">
        <h2 class="text-2xl font-extrabold text-green-900 py-8">জামেয়ার কিতাব বিভাগের শিক্ষকবৃন্দ</h2>
        <div class="grid md:grid-cols-3 lg:grid-cols-4 gap-8">
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
        </div>
        <h2 class="text-2xl font-extrabold text-green-900 py-8">জামেয়ার হিফজ বিভাগের শিক্ষকবৃন্দ</h2>
        <div class="grid md:grid-cols-3 lg:grid-cols-4 gap-8">
            @foreach ($hifzTeachers as $ht)
                <div class="bg-white border border-green-700 shadow-lg rounded-2xl p-4 hover:-translate-y-1 transition">
                    <img src="{{ asset('storage/' . $ht->image_url) }}"
                        class="w-32 h-32 object-cover rounded-full mx-auto border-4 border-green-700" />
                    <h3 class="text-xl font-bold text-green-900 text-center mt-4">{{ $ht->name }}</h3>
                    <p class="text-center text-green-800 font-semibold">{{ $ht->designation }}</p>

                    <div class="mt-4 space-y-1 text-center text-gray-700">
                        <p><i class="fa-solid fa-phone mr-2 text-green-700"></i> {{ $ht->phone }}</p>
                        <p class="text-sm"><i class="fa-solid fa-envelope mr-2 text-green-700"></i> {{ $ht->email }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <h2 class="text-2xl font-extrabold text-green-900 py-8">জামেয়ার মহিলা শিক্ষকাবৃন্দ</h2>
        <div class="grid md:grid-cols-3 lg:grid-cols-4 gap-8">
            @foreach ($girlsTeachers as $gt)
                <div class="bg-white border border-green-700 shadow-lg rounded-2xl p-4 hover:-translate-y-1 transition">
                    <img src="{{ asset('storage/' . $gt->image_url) }}"
                        class="w-32 h-32 object-cover rounded-full mx-auto border-4 border-green-700" />
                    <h3 class="text-xl font-bold text-green-900 text-center mt-4">{{ $gt->name }}</h3>
                    <p class="text-center text-green-800 font-semibold">{{ $gt->designation }}</p>

                    <div class="mt-4 space-y-1 text-center text-gray-700">
                        <p><i class="fa-solid fa-phone mr-2 text-green-700"></i> {{ $gt->phone }}</p>
                        <p class="text-sm"><i class="fa-solid fa-envelope mr-2 text-green-700"></i> {{ $gt->email }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection