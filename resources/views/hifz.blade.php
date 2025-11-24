@extends('layout.app')
@section('title', 'হিফজ বিভাগ')

@section('content')

    <!-- Page Title -->
    <h2 class="text-3xl font-extrabold text-green-900 text-center py-10">
        হিফজ বিভাগ
    </h2>

    <!-- Introduction Section -->
    <section class="container mx-auto px-4 py-12">
        <div class="bg-white border border-green-700 shadow-lg rounded-2xl p-8 lg:p-10 leading-8 text-gray-800">
            <h2 class="text-2xl font-bold text-green-900 mb-4">পরিচিতি</h2>
            <p class="mb-4">
                {!! $hifz->description !!}
            </p>
        </div>
    </section>

    <!-- Class Structure -->
<section class="container mx-auto px-4 py-10">
    <div class="bg-green-50 border border-green-700 shadow-xl rounded-2xl p-10">

        <h2 class="text-3xl font-extrabold text-green-900 mb-8 text-center">
            ক্লাসসমূহ
        </h2>

        <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($hifz->classes as $class)
                <div class="group bg-white border border-green-700 rounded-xl p-6 shadow-lg 
                            hover:shadow-2xl hover:-translate-y-1 transition duration-300">
                    
                    <div class="flex items-center justify-between">
                        <div class="text-green-900 text-xl font-bold">
                            {{ $class['name'] }}
                        </div>

                        <div class="bg-green-700 text-white px-3 py-1 rounded-lg text-sm 
                                    group-hover:bg-green-800 transition">
                            জামাত
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>


    <!-- Features / Highlights -->
    <section class="container mx-auto px-4 py-10">
        <h2 class="text-2xl font-bold text-green-900 mb-6 text-center">বিভাগটির বৈশিষ্ট্য</h2>

        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-white p-6 border border-green-700 rounded-xl shadow hover:-translate-y-1 transition">
                <i class="fa-solid fa-book-open text-4xl text-green-800 mb-4"></i>
                <h3 class="font-bold text-xl text-green-900">উচ্চতর ইসলামী পাঠক্রম</h3>
                <p class="text-gray-700 mt-3">
                    দাওরায়ে হাদিস পর্যন্ত সুগঠিত, মানসম্মত পাঠদান।
                </p>
            </div>

            <div class="bg-white p-6 border border-green-700 rounded-xl shadow hover:-translate-y-1 transition">
                <i class="fa-solid fa-chalkboard-user text-4xl text-green-800 mb-4"></i>
                <h3 class="font-bold text-xl text-green-900">অভিজ্ঞ শিক্ষকবৃন্দ</h3>
                <p class="text-gray-700 mt-3">
                    দীর্ঘদিনের অভিজ্ঞ ও যোগ্য মুফতি ও আলেমদের মাধ্যমে পাঠদান।
                </p>
            </div>

            <div class="bg-white p-6 border border-green-700 rounded-xl shadow hover:-translate-y-1 transition">
                <i class="fa-solid fa-graduation-cap text-4xl text-green-800 mb-4"></i>
                <h3 class="font-bold text-xl text-green-900">পরীক্ষা ও মূল্যায়ন</h3>
                <p class="text-gray-700 mt-3">
                    মাসিক, ছয় মাসিক ও বার্ষিক পরীক্ষার মাধ্যমে ধারাবাহিক মূল্যায়ন।
                </p>
            </div>
        </div>
    </section>

    <!-- Admission Info -->
    <section class="container mx-auto px-4 py-10">
        <div class="bg-green-100 border border-green-700 rounded-xl shadow-lg p-8">
            <h2 class="text-2xl font-bold text-green-900 mb-4">ভর্তির যোগ্যতা</h2>

            <ul class="list-disc pl-6 leading-8 text-gray-800 text-lg">
                @foreach ($hifz->requirements as $req)
                    <li>{{ $req['text'] }}</li>
                @endforeach
            </ul>
        </div>
    </section>



@endsection