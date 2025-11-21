@extends('layout.app')
@section('title', 'মুহতামিম পরিচিতি')

@section('content')

    <!-- Page Title -->
    <h2 class="text-3xl font-extrabold text-green-900 text-center py-10">মুহতামিম পরিচিতি</h2>

    <!-- Main Profile Section -->
    <section class="container mx-auto px-4 py-16">
        <div class="bg-white border border-green-700 rounded-2xl shadow-2xl p-10 md:flex gap-10">
            <!-- Profile Photo -->
            <div class="md:w-1/3 flex justify-center">
                <div class="w-60 h-full rounded-xl overflow-hidden shadow-xl border-4 border-green-700">
                    <img src="image/image1.webp" class="w-full h-full object-cover" />
                </div>
            </div>

            <!-- Profile Info -->
            <div class="md:w-2/3 mt-10 md:mt-0">
                <h2 class="text-3xl font-bold text-green-900 mb-2">{{ $principal->name }}</h2>
                <p class="text-xl text-green-800 font-semibold mb-4">{{ $principal->designation }}</p>

                <div class="space-y-2 text-gray-800 text-lg">
                    <p><i class="fa-solid fa-phone text-green-700 mr-2"></i> {{ $principal->phone }}</p>
                    <p><i class="fa-solid fa-envelope text-green-700 mr-2"></i> {{ $principal->email }}</p>
                </div>

                <div class="mt-8 bg-green-100 border-l-4 border-green-700 p-5 rounded">
                    <h3 class="text-xl font-bold text-green-900 mb-2">বার্তা</h3>
                    <p class="leading-8 text-gray-800">{{ $principal->short_message }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Biography / Long Message Section -->
    <section class="container mx-auto px-4 pb-20">
        <div class="bg-white border border-green-700 rounded-2xl shadow-xl p-10 leading-8 text-gray-800">
            <h2 class="text-3xl font-bold text-green-900 mb-6">মুহতামিমের বাণী</h2>

            <p class="mb-4">
                {!! $principal->message !!}
            </p>

            <p class="mt-6 font-bold text-green-900 text-lg">
                মাআসসালাম<br />
                মুহাম্মদ আব্দুশ শাকুর
            </p>
        </div>
    </section>
@endsection