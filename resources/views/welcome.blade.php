@extends('layout.app')
@section('title', 'Home')

@section('content')

    <div class="container mx-auto px-4 py-6">
        <div class="rounded overflow-hidden shadow relative">

            <div id="slider" class="relative w-full h-[550px] overflow-hidden">
                @foreach ($sliders as $s)
                    <img src="{{ asset('storage/' . $s->image) }}"
                        class="slide w-full h-full object-cover absolute inset-0 opacity-0 transition-opacity duration-700" />
                @endforeach
            </div>

            <!-- Prev/Next Buttons -->
            <button id="prev" class="absolute left-3 top-1/2 -translate-y-1/ text-white rounded-full"><i
                    class="fa fa-angle-left"></i></button>
            <button id="next" class="absolute right-3 top-1/2 -translate-y-1/ text-white rounded-full">❯</button>
        </div>
    </div>

    <script>
        const slides = document.querySelectorAll('.slide');
        let index = 0;

        function showSlide(i) {
            slides.forEach(slide => slide.style.opacity = 0);
            slides[i].style.opacity = 1;
        }

        document.getElementById('next').onclick = () => {
            index = (index + 1) % slides.length;
            showSlide(index);
        };

        document.getElementById('prev').onclick = () => {
            index = (index - 1 + slides.length) % slides.length;
            showSlide(index);
        };

        showSlide(index);
    </script>


    <!-- আমাদের বিভাগসমূহ -->
    <section class="container mx-auto px-4 py-10">
        <h2 class="text-center text-3xl font-bold text-green-900 mb-10">আমাদের বিভাগসমূহ</h2>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 text-center">
            <!-- কিতাব -->
            <a href="{{ route('kitab') }}"
                class="bg-white p-8 rounded-xl shadow-[0_0_10px_rgba(0,0,0,0.15)] hover:shadow-lg transition">
                <i class="fa-solid fa-table-cells-large text-4xl text-green-900 mb-3"></i>
                <h3 class="text-xl font-bold text-green-900">কিতাব</h3>
            </a>

            <!-- নূরানী -->
            <a href="#" class="bg-white p-8 rounded-xl shadow-[0_0_10px_rgba(0,0,0,0.15)] hover:shadow-lg transition">
                <i class="fa-solid fa-book-quran text-4xl text-green-900 mb-3"></i>
                <h3 class="text-xl font-bold text-green-900">নূরানী</h3>
            </a>

            <!-- হিফজ -->
            <a href="#" class="bg-white p-8 rounded-xl shadow-[0_0_10px_rgba(0,0,0,0.15)] hover:shadow-lg transition">
                <i class="fa-solid fa-book text-4xl text-green-900 mb-3"></i>
                <h3 class="text-xl font-bold text-green-900">হিফজ</h3>
            </a>

            <!-- স্কুল -->
            <a href="#" class="bg-white p-8 rounded-xl shadow-[0_0_10px_rgba(0,0,0,0.15)] hover:shadow-lg transition">
                <i class="fa-solid fa-school text-4xl text-green-900 mb-3"></i>
                <h3 class="text-xl font-bold text-green-900">স্কুল</h3>
            </a>
        </div>
    </section>

    <!-- প্রতিষ্ঠার ইতিহাস -->
    <section class="container mx-auto px-4 py-8 grid md:grid-cols-2 gap-6">
        <div class="bg-white p-6 rounded shadow ">
            <h3 class="text-2xl font-bold mb-3 text-green-800">মাদরাসা প্রতিষ্ঠার ইতিহাস</h3>
            <p class="text-gray-700 leading-relaxed text-lg mb-4">
                {!! $about->history !!}
            </p>
            <a href="{{ route("about") }}" class="bg-green-900 rounded text-white mb-3 px-4 py-1.5">আমাদের সম্পর্কে পড়ুন</a>
        </div>
        <div class="bg-white p-6 rounded shadow">
            <h3 class="text-2xl font-bold mb-3 text-green-800">এক নজরে জামেয়া ইসলামিয়া</h3>
            <ul class="text-lg text-gray-700 space-y-1">
                @foreach ($jamiyas as $j)
                    <li><strong>{{ $j->title }}:</strong> {{ $j->description }}</li>
                @endforeach
            </ul>
        </div>
    </section>

    <!-- মুহতামিম -->
    <section class="container mx-auto px-4 py-10 grid md:grid-cols-4 gap-10">
        <!-- Left: মুহতামিম কার্ড -->
        <div class="bg-white rounded-2xl col-span-1 shadow border border-gray-200">
            <!-- Green Top Bar -->
            <div class="bg-green-800 text-white text-center py-3 text-2xl font-bold rounded-t-2xl">মুহতামিম</div>

            <!-- Image -->
            <div class="p-6 flex justify-center">
                <div class="border-4 border-black p-1">
                    <img src="{{ asset('storage/' . $principal->photo) }}" alt="Muhtamim"
                        class="w-64 h-auto object-cover" />
                </div>
            </div>

            <!-- Name & Details -->
            <div class="text-center pb-6">
                <h3 class="text-xl font-bold text-green-900">{{ $principal->name }}</h3>
                <p class="text-green-700 font-medium">{{ $principal->designation }}</p>
                <p class="text-green-700">{{ $principal->phone }}</p>
                <p class="text-green-700">{{ $principal->email }}</p>
            </div>
        </div>

        <!-- Right: মুহতামিমের বাণী -->
        <div class="bg-white rounded-2xl col-span-3 shadow border border-gray-200 p-8 leading-8 text-gray-800">
            <h2 class="text-2xl font-bold text-green-900 mb-4">মুহতামিমের বাণী</h2>
            <hr class="mb-4" />
            <p>
                {!! $principal->message !!}
                <a href="{{ route('principal') }}" class="bg-green-900 rounded text-white px-4 py-1.5">আরও পড়ুন</a>
            </p>
        </div>
    </section>

@endsection