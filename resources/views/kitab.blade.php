@extends('layout.app')
@section('title', 'কিতাব বিভাগ')

@section('content')

    <!-- Page Title -->
    <h2 class="text-3xl font-extrabold text-green-900 text-center py-10">
        কিতাব বিভাগ
    </h2>

    <!-- Introduction Section -->
    <section class="container mx-auto px-4 py-12">
        <div class="bg-white border border-green-700 shadow-lg rounded-2xl p-8 lg:p-10 leading-8 text-gray-800">
            <h2 class="text-2xl font-bold text-green-900 mb-4">পরিচিতি</h2>
            <p class="mb-4">
                জামেয়া ইসলামিয়া শ্রীমঙ্গলের কিতাব বিভাগ হলো উচ্চতর দাওরায় হাদিস পর্যন্ত সুসংগঠিত দ্বীনি শিক্ষা
                প্রদানের একটি সুপ্রতিষ্ঠিত ব্যবস্থা। এই বিভাগে ছাত্রদের কুরআন, হাদীস, ফিকহ, উসূল, আরবি সাহিত্য,
                নাহব-ছরফসহ ইসলামী জ্ঞানবিজ্ঞানসমূহ পাঠদান করা হয়।
            </p>
            <p class="mb-4">
                অভিজ্ঞ ও যোগ্য উস্তাদগণের তত্ত্বাবধানে মানসম্মত পাঠদান, মাসিক মূল্যায়ন, বার্ষিক পরীক্ষা, এবং নিয়মিত
                তারবিয়াতমূলক কার্যক্রমের মধ্য দিয়ে ছাত্রদের আলেমে দ্বীন হিসেবে গড়ে তোলা হয়।
            </p>
        </div>
    </section>

    <!-- Class Structure -->
    <section class="container mx-auto px-4 py-6">
        <div class="bg-white border border-green-700 shadow-lg rounded-2xl p-8 leading-8">
            <h2 class="text-2xl font-bold text-green-900 mb-6">ক্লাসসমূহ</h2>

            <ul class="space-y-3 text-lg text-gray-800">
                <li>📘 হিদায়াহ (২য় খণ্ড)</li>
                <li>📘 হিদায়াহ (১ম খণ্ড)</li>
                <li>📙 কানযুদ্দাকায়েক</li>
                <li>📙 মেশকাতুল মাসাবীহ</li>
                <li>📗 নাহব-মীর</li>
                <li>📗 বালাগাত</li>
                <li>📕 ফিকহ ও উসূলুল ফিকহ</li>
                <li>📕 আরবি সাহিত্য</li>
            </ul>
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
                <li>নূরানী এবং হিফজ বিভাগ সম্পন্ন হতে হবে।</li>
                <li>মৌলিক আরবি জ্ঞান থাকা আবশ্যক।</li>
                <li>বয়স ও যোগ্যতার ভিত্তিতে ক্লাস নির্ধারণ।</li>
            </ul>
        </div>
    </section>

    <!-- Contact CTA -->
    <section class="bg-green-900 py-10 text-center">
        <h2 class="text-2xl font-bold text-white mb-4">আরও তথ্য জানতে চান?</h2>
        <p class="text-green-200 mb-6">যোগাযোগ করুন: ০১৯১৭৬০০৩৯৬</p>

        <a href="{{ route('contact') }}"
            class="bg-white text-green-900 px-6 py-3 font-bold rounded shadow hover:bg-green-100">
            যোগাযোগ পেইজে যান
        </a>
    </section>


@endsection