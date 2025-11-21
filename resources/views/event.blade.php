@extends('layout.app')
@section('title', 'জামেয়ার অনুষ্ঠান সমূহ')

@section('content')
    <!-- Page Title -->
    <h2 class="text-3xl font-extrabold text-green-900 text-center py-10">আমাদের অনুষ্ঠান ও আয়োজনসমূহ</h2>

    <!-- Event Grid -->
    <section class="container mx-auto px-4 grid md:grid-cols-4 gap-8 pb-16">
        <!-- Event Card -->
        <div class="bg-white border border-green-700 rounded-xl shadow hover:shadow-xl transition p-6">
            <div class="text-5xl text-green-700 text-center mb-4">
                <i class="fa-solid fa-mosque"></i>
            </div>
            <h3 class="text-xl font-bold text-green-900 text-center mb-3">বার্ষিক মাহফিল</h3>
            <div class="flex items-center justify-center text-green-800 font-semibold"><i class="fa fa-clock mr-2"></i>
                শাওয়াল ১২ তারিখ</div>
        </div>

        <!-- Event Card -->
        <div class="bg-white border border-green-700 rounded-xl shadow hover:shadow-xl transition p-6">
            <div class="text-5xl text-green-700 text-center mb-4">
                <i class="fa-solid fa-users"></i>
            </div>
            <h3 class="text-xl font-bold text-green-900 text-center mb-3">অভিভাবক সমাবেশ</h3>
            <div class="flex items-center justify-center text-green-800 font-semibold"><i class="fa fa-clock mr-2"></i> রজব
                ২০ তারিখ</div>
        </div>

        <!-- Event Card -->
        <div class="bg-white border border-green-700 rounded-xl shadow hover:shadow-xl transition p-6">
            <div class="text-5xl text-green-700 text-center mb-4">
                <i class="fa-solid fa-graduation-cap"></i>
            </div>
            <h3 class="text-xl font-bold text-green-900 text-center mb-3">নবীন বরণ অনুষ্ঠান</h3>
            <div class="flex items-center justify-center text-green-800 font-semibold"><i class="fa fa-clock mr-2"></i>
                মহররম ৫ তারিখ</div>
        </div>

        <!-- Event Card -->
        <div class="bg-white border border-green-700 rounded-xl shadow hover:shadow-xl transition p-6">
            <div class="text-5xl text-green-700 text-center mb-4">
                <i class="fa-solid fa-book-quran"></i>
            </div>
            <h3 class="text-xl font-bold text-green-900 text-center mb-3">হিফজ সমাপনী অনুষ্ঠান</h3>
            <div class="flex items-center justify-center text-green-800 font-semibold"><i class="fa fa-clock mr-2"></i>
                শাবান ১৫ তারিখ</div>
        </div>

        <!-- Event Card -->
        <div class="bg-white border border-green-700 rounded-xl shadow hover:shadow-xl transition p-6">
            <div class="text-5xl text-green-700 text-center mb-4">
                <i class="fa-solid fa-hand-holding-heart"></i>
            </div>
            <h3 class="text-xl font-bold text-green-900 text-center mb-3">ইকরাম সম্মাননা অনুষ্ঠান</h3>
            <div class="flex items-center justify-center text-green-800 font-semibold"><i class="fa fa-clock mr-2"></i>
                জিলহজ ৮ তারিখ</div>
        </div>

        <!-- Event Card -->
        <div class="bg-white border border-green-700 rounded-xl shadow hover:shadow-xl transition p-6">
            <div class="text-5xl text-green-700 text-center mb-4">
                <i class="fa-solid fa-child-reaching"></i>
            </div>
            <h3 class="text-xl font-bold text-green-900 text-center mb-3">বার্ষিক ক্রীড়া প্রতিযোগিতা</h3>
            <div class="flex items-center justify-center text-green-800 font-semibold"><i class="fa fa-clock mr-2"></i>
                রবিউল আউয়াল ২২ তারিখ</div>
        </div>
    </section>

@endsection