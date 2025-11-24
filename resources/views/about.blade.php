@extends('layout.app')
@section('title', 'About')

@section('content')
    <!-- Hero Section -->
    <h2 class="text-3xl font-extrabold text-green-900 text-center py-10">জামেয়া ইসলামিয়া শ্রীমঙ্গল</h2>

    <!-- Intro Section -->
    <section class="container mx-auto px-4 py-14">
        <div class="bg-white border-l-4 border-green-700 rounded-xl shadow-lg p-8 md:p-10">
            <h2 class="text-3xl font-bold text-green-900 mb-4">প্রতিষ্ঠার ইতিহাস</h2>
            <p class="leading-8 text-gray-800 text-lg">
                {!! $about->history !!}
            </p>
        </div>
    </section>

    <!-- Timeline Section -->
    <section class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-green-900 text-center mb-10">এক নজরে প্রতিষ্ঠার ধাপসমূহ</h2>

        <div class="relative border-l-4 border-green-700 ml-4 space-y-10">
            <div class="pl-8 relative">
                <span
                    class="absolute -left-4 top-0 w-8 h-8 bg-green-700 text-white rounded-full flex items-center justify-center">১</span>
                <p class="text-gray-800 leading-7">স্থানীয় দ্বীনি শিক্ষার দুরবস্থা দেখে বৃহত্তর একটি দ্বীনি প্রতিষ্ঠান
                    প্রতিষ্ঠার স্বপ্নের সূচনা।</p>
            </div>

            <div class="pl-8 relative">
                <span
                    class="absolute -left-4 top-0 w-8 h-8 bg-green-700 text-white rounded-full flex items-center justify-center">২</span>
                <p class="text-gray-800 leading-7">লন্ডনপ্রবাসী শিক্ষানুরাগী ডা. এখলাছুর রহমানের সাথে চিন্তাধারার মিলন।</p>
            </div>

            <div class="pl-8 relative">
                <span
                    class="absolute -left-4 top-0 w-8 h-8 bg-green-700 text-white rounded-full flex items-center justify-center">৩</span>
                <p class="text-gray-800 leading-7">বিশিষ্ট আলেমদের পরামর্শে প্রতিষ্ঠার উদ্যোগ আনুষ্ঠানিক রূপ নেয়।</p>
            </div>

            <div class="pl-8 relative mb-16">
                <span
                    class="absolute -left-4 top-0 w-8 h-8 bg-green-700 text-white rounded-full flex items-center justify-center">৪</span>
                <p class="text-gray-800 leading-7">১৯৯৮ সালের ২ রমযান “জামেয়া ইসলামিয়া বালক-বালিকা মাদরাসা” প্রতিষ্ঠা।</p>
            </div>
        </div>
    </section>

    <!-- Features (Very Premium Grid Style) -->
    <section class="container mx-auto px-4 py-16">
        <h2 class="text-3xl font-bold text-green-900 text-center mb-10">জামেয়ার বৈশিষ্ট্যসমূহ</h2>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Feature Card -->
            <div class="bg-white rounded-2xl shadow-lg p-8 border border-green-700 hover:-translate-y-1 transition">
                <div class="text-green-700 text-4xl mb-4"><i class="fa-solid fa-book-quran"></i></div>
                <h3 class="font-bold text-xl mb-3 text-green-900">মানসম্মত শিক্ষা পদ্ধতি</h3>
                <p class="text-gray-700 leading-relaxed">জাতীয় ও কওমি সিলেবাস অনুযায়ী শিক্ষা কার্যক্রম পরিচালিত হয়।</p>
            </div>

            <div class="bg-white rounded-2xl shadow-lg p-8 border border-green-700 hover:-translate-y-1 transition">
                <div class="text-green-700 text-4xl mb-4"><i class="fa-solid fa-award"></i></div>
                <h3 class="font-bold text-xl mb-3 text-green-900">উচ্চমানের হিফজ বিভাগ</h3>
                <p class="text-gray-700 leading-relaxed">অভিজ্ঞ হাফেজদের তত্ত্বাবধানে আন্তর্জাতিক মানের হিফজ শিক্ষা।</p>
            </div>

            <div class="bg-white rounded-2xl shadow-lg p-8 border border-green-700 hover:-translate-y-1 transition">
                <div class="text-green-700 text-4xl mb-4"><i class="fa-solid fa-chalkboard-user"></i></div>
                <h3 class="font-bold text-xl mb-3 text-green-900">মেধা বিকাশমুখী কার্যক্রম</h3>
                <p class="text-gray-700 leading-relaxed">বক্তৃতা, প্রতিযোগিতা, দেয়াল পত্রিকা ও সৃজনশীল কার্যক্রম।</p>
            </div>
        </div>
    </section>

    <!-- Success Section -->
    <section class="container mx-auto px-4 py-12">
        <div class="bg-white border border-green-700 rounded-2xl shadow-xl p-10">
            <h2 class="text-3xl font-bold text-green-900 mb-6">জামেয়ার সাফল্য</h2>
            <p class="text-gray-800 leading-8 text-lg">
                {!! $about->success !!}
            </p>
        </div>
    </section>

    <!-- Vision Section -->
    <section class="container mx-auto px-4 py-14">
        <h2 class="text-3xl font-bold text-green-900 text-center mb-10">আদর্শিক দৃষ্টিভঙ্গি</h2>

        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white border border-green-700 rounded-xl shadow p-8 leading-relaxed">
                <ul class="list-decimal ml-6 space-y-3 text-gray-800">
                    <li>কুরআন, সুন্নাহ ও সাহাবায়ে কেরামের আদর্শকে ভিত্তি ধরা।</li>
                    <li>উলামায়ে দেওবন্দের নীতি অনুসরণ।</li>
                    <li>হানাফি ফিকহ অনুযায়ী সিদ্ধান্ত গ্রহণ।</li>
                </ul>
            </div>

            <div class="bg-white border border-green-700 rounded-xl shadow p-8 leading-relaxed">
                <ul class="list-decimal ml-6 space-y-3 text-gray-800">
                    <li>উদার ও সহনশীল মানসিকতা বজায় রাখা।</li>
                    <li>সুন্নাত অনুসারী চরিত্র গঠন ও তারবিয়াত।</li>
                    <li>ইসলামী উম্মাহর দাওয়াত ও তাজকিয়ার প্রসার।</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Goals -->
    <section class="container mx-auto px-4 py-12">
        <h2 class="text-3xl font-bold text-green-900 text-center mb-10">লক্ষ্য ও উদ্দেশ্য</h2>

        <div class="bg-white border border-green-700 rounded-xl shadow-xl p-10">
            <p class="text-gray-800 leading-8 text-lg">
                {!! $about->goal !!}
            </p>
        </div>
    </section>

    <!-- Branches -->
    <section class="container mx-auto px-4 py-12">
        <h2 class="text-3xl font-bold text-green-900 text-center mb-10">শাখা প্রতিষ্ঠানসমূহ</h2>

        <div class="grid md:grid-cols-2 gap-6">
            <div class="bg-white border border-green-700 rounded-xl shadow p-6">
                <h3 class="font-bold text-green-900 text-xl mb-2">আবু বকর সিদ্দীক রা. মহিলা মাদরাসা</h3>
                <p class="text-gray-700">শোরীবাজার, মৌলভীবাজার</p>
            </div>

            <div class="bg-white border border-green-700 rounded-xl shadow p-6">
                <h3 class="font-bold text-green-900 text-xl mb-2">ইকরা বাংলাদেশ স্কুল ও মাদরাসা</h3>
                <p class="text-gray-700">সিন্দুরখান রোড, শ্রীমঙ্গল</p>
            </div>

            <div class="bg-white border border-green-700 rounded-xl shadow p-6">
                <h3 class="font-bold text-green-900 text-xl mb-2">আল-আমিন মাদরাসা</h3>
                <p class="text-gray-700">আমিনবাগ আ/এ</p>
            </div>

            <div class="bg-white border border-green-700 rounded-xl shadow p-6">
                <h3 class="font-bold text-green-900 text-xl mb-2">দারুল উলূম মাদরাসা</h3>
                <p class="text-gray-700">ইসলামবাগ আ/এ</p>
            </div>
        </div>
    </section>

    <!-- Future Plan -->
    <section class="container mx-auto px-4 py-16">
        <h2 class="text-3xl font-bold text-green-900 text-center mb-10">ভবিষ্যত পরিকল্পনা</h2>

        <div class="bg-white border border-green-700 rounded-2xl shadow-xl p-10 leading-relaxed">
            <p class="text-gray-800 leading-8 text-lg">
                {!! $about->future !!}
            </p>
        </div>
    </section>

    <!-- Appeal Section -->
    <section class="container mx-auto px-4 py-16">
        <div class="bg-white border border-green-700 rounded-2xl shadow-xl p-10 leading-relaxed">
            <h2 class="text-3xl font-bold text-green-900 mb-6">আকুল আবেদন</h2>

            <p class="text-gray-800 leading-8 mb-4">{!! $about->appeal !!}
            </p>

            <p class="font-bold text-green-900 text-lg">
                মাআসসালাম<br />
                মুহাম্মদ আব্দুশ শুকুর<br />
                পরিচালক
            </p>
        </div>
    </section>
@endsection