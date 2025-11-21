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
                মাওলানা মুহাম্মদ আব্দুশ শাকুর ১৯৯৪ সালে দ্বীনি শিক্ষার সর্বোচ্চ স্তর দাওরায়ে হাদীস অধ্যয়ন সমাপ্ত করে তাবলীগি
                সফর শেষে শ্রীমঙ্গলের সিন্দুরখান রোডে অবস্থিত তাঁর চাচার বাসায় অবস্থান করেন। এরপর তিনি পার্শ্ববর্তী খাসগাঁও
                হাসানিয়া মাদরাসায় মহান শিক্ষকতার পেশায় নিয়োজিত হন। যদিও তিনি দ্বীনের
                খেদমতে নিয়োজিত ছিলেন, তবুও এলাকার সার্বিক পরিস্থিতি ও দ্বীনি শিক্ষার দুরবস্থা তাঁকে গভীরভাবে ভাবিয়ে তুলেছিল।
                তাঁর অন্তরে দীর্ঘদিন ধরে লালিত ছিল দ্বীনের খেদমতকে কেন্দ্র করে একটি বৃহত্তর স্বপ্ন — এ অঞ্চলে উচ্চতর দ্বীনি
                শিক্ষা প্রতিষ্ঠার আকাঙ্ক্ষা। ঠিক একইভাবে তাঁর চাচা, মৌলভীবাজার জেলার
                রাজনগর উপজেলার লন্ডনপ্রবাসী এক দ্বীনপ্রেমী শিক্ষানুরাগী ডা. এখলাছুর রহমান সাহেবও দীর্ঘদিন ধরে একটি আদর্শ
                ধর্মীয় শিক্ষা প্রতিষ্ঠান প্রতিষ্ঠার চিন্তা লালন করছিলেন। কালের পরিক্রমায় একদিন এই দুই মহান ব্যক্তিত্বের
                অন্তর্নিহিত সুমহান চিন্তাধারার মিলন ঘটে। মাওলানা মুহাম্মদ আব্দুশ শাকুর তাঁর চাচার
                কাছে প্রেরিত এক দীর্ঘ চিঠিতে তাঁর অনুভূতি প্রকাশ করেন এবং সিন্দুরখানস্থ ঐ বাসাবাড়িতে পরিকল্পিত মাদরাসা
                প্রতিষ্ঠার অভিপ্রায় ব্যক্ত করেন। এরপর বিশিষ্ট উলামায়ে কেরাম ও ইসলামী চিন্তাবিদদের পরামর্শক্রমে উভয়ের চিন্তা
                ও কর্মপ্রচেষ্টা বাস্তবায়নের লক্ষ্যে কার্যক্রম শুরু হয়। পরিশেষে মহান রাব্বুল
                কারীমের অফুরন্ত অনুগ্রহ ও মেহেরবানিতে ১৯৯৮ সালের ২ রমযান ১৪১৮ হিজরি তারিখে “জামেয়া ইসলামিয়া বালক-বালিকা
                মাদরাসা, সিন্দুরখান রোড, শ্রীমঙ্গল” নামক এই দ্বীনি দরসগাহের শুভ সূচনা হয়।
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
                প্রতিষ্ঠালগ্ন থেকে আজ পর্যন্ত জামেয়া ইসলামিয়া শ্রীমঙ্গল অসংখ্য হাফেজে কুরআন ও বহু যোগ্য আলেম-আলেমা তৈরি
                করেছে। বোর্ডের ফাইনাল পরীক্ষায় স্টার মার্কসহ রেকর্ড সংখ্যক শিক্ষার্থী উত্তীর্ণ হয়ে মাদরাসার সুনাম অক্ষুণ্ণ
                রেখেছে। পবিত্র মাহে রমযানে ক্বিরাআতের সর্বোচ্চ শ্রেণিতে স্টার মার্কসহ
                মেধাতালিকায় উত্তীর্ণ হয়ে বহু শিক্ষার্থী সনদপ্রাপ্ত ক্বারী হয়েছেন। এছাড়া জামেয়া আয়োজিত রমযানব্যাপী
                টেলিভিশনভিত্তিক হিফজুল কুরআন প্রতিযোগিতা “ওহির পরশ” দেশে ব্যাপক সাড়া জাগিয়েছে। আঞ্চলিক ও আন্তর্জাতিক বিভিন্ন
                প্রতিযোগিতায় অংশগ্রহণ করে জামেয়ার শিক্ষার্থীরা ধারাবাহিকভাবে কৃতিত্বের স্বাক্ষর
                রেখে চলেছে, যা প্রতিষ্ঠানের গৌরব ও মর্যাদাকে আরও সমুন্নত করেছে।
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
            <ul class="list-decimal ml-6 space-y-3 text-gray-800 leading-relaxed">
                <li>কুরআন-হাদীসের পাশাপাশি আধুনিক বিষয়ের মানসম্মত শিক্ষা।</li>
                <li>চরিত্র গঠন, তারবিয়াত এবং সুন্নাহময় জীবন গঠন।</li>
                <li>দাওয়াত, ভাষা, সাহিত্য ও বক্তৃতায় দক্ষতা বৃদ্ধি।</li>
                <li>ইসলামী আদর্শের প্রচার-প্রসার।</li>
                <li>দ্বীনের জ্ঞান সমাজে পৌঁছানো।</li>
                <li>কারিগরি শিক্ষার মাধ্যমে আত্মনির্ভরশীলতা অর্জন।</li>
            </ul>
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
            <ul class="list-disc ml-6 space-y-3 text-gray-800">
                <li>উচ্চতর ইলমুল কিরাআত কোর্স চালু।</li>
                <li>বয়স্কদের জন্য দ্বীন শিক্ষার কোর্স।</li>
                <li>কারিগরি বিভাগ চালু।</li>
                <li>বহুতল আবাসন ভবন নির্মাণ।</li>
                <li>বৃহৎ পাঁচতলা মসজিদ নির্মাণ সম্পন্ন।</li>
                <li>দামি কিতাবাদীসহ সমৃদ্ধ গ্রন্থাগার।</li>
                <li>সকল শিক্ষার্থীর জন্য কম্পিউটার প্রশিক্ষণ বাধ্যতামূলক।</li>
                <li>সামাজসেবামূলক কাজে অংশগ্রহণ।</li>
            </ul>
        </div>
    </section>

    <!-- Appeal Section -->
    <section class="container mx-auto px-4 py-16">
        <div class="bg-white border border-green-700 rounded-2xl shadow-xl p-10 leading-relaxed">
            <h2 class="text-3xl font-bold text-green-900 mb-6">আকুল আবেদন</h2>

            <p class="text-gray-800 leading-8 mb-4">জামেয়া ইসলামিয়া শ্রীমঙ্গল দীর্ঘদিন ধরে ইলমে দ্বীনের খেদমত করে যাচ্ছে...
            </p>

            <p class="text-gray-800 leading-8 mb-4">মাদরাসার স্থায়ী আয় নেই; দেশী-বিদেশী দানের ওপর নির্ভরতা অত্যধিক...</p>

            <p class="text-gray-800 leading-8 mb-6">আপনাদের সহযোগিতা, দো‘আ ও পরামর্শ প্রতিষ্ঠানের অগ্রগতির জন্য অপরিহার্য।
            </p>

            <p class="font-bold text-green-900 text-lg">
                মাআসসালাম<br />
                মুহাম্মদ আব্দুশ শুকুর<br />
                পরিচালক
            </p>
        </div>
    </section>
@endsection