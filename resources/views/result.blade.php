@extends('layout.app')
@section('title', 'মুহতামিম পরিচিতি')

@section('content')
    <!-- Page Title -->
    <h2 class="text-3xl font-extrabold text-green-900 text-center py-10">রেজাল্ট</h2>

    <!-- Section 1 -->
    <div class="container mx-auto px-4 grid md:grid-cols-2 gap-10">
        <!-- Instruction Box -->
        <div class="bg-white border border-green-900 border-b-4 rounded-xl shadow p-8 leading-8">
            <h2 class="text-2xl font-bold text-green-900 mb-4">ফলাফল দেখার পদ্ধতি:</h2>

            <p>১. শিক্ষাবর্ষ (Year), পরীক্ষা (Exam), এবং মারহালা/স্তর (Class/Stage) নির্বাচন করতে হবে।</p>
            <p>২. এরপর ইয়ারেজি অংশের শিক্ষার্থীর আইডি নম্বর অথবা রোল নম্বর প্রদান করতে হবে।</p>
            <p>৩. আইডি নাম্বারের ক্ষেত্রে শূন্য(0) যুক্ত করতে হবে, (যেমনঃ 251533)</p>
        </div>

        <!-- ইবতেদায়ি ফলাফল -->
        <div class="bg-white border border-green-900 border-b-4 rounded-xl shadow p-8">
            <h2 class="text-xl font-bold text-green-900 leading-relaxed mb-6">ইকরার শিক্ষার্থীদের ফলাফল দেখতে নিচের লিংকে
                ক্লিক করুন</h2>

            <a href="#" class="bg-green-900 text-white font-bold px-6 py-2 rounded shadow"> ইকরার ফলাফল দেখুন </a>
        </div>
    </div>

    <!-- Section 2 -->
    <div class="container mx-auto px-4 grid md:grid-cols-2 gap-10 mt-10 mb-10">
        <!-- বালিকা শাখা -->
        <div class="bg-white border border-green-900 border-b-4 rounded-xl shadow p-8">
            <h2 class="text-xl font-bold text-green-900 mb-6 leading-relaxed">বালিকা শাখার ফলাফল দেখতে নিচের লিংকে ক্লিক
                করুন।</h2>

            <a href="#" class="bg-green-900 text-white font-bold px-6 py-2 rounded shadow"> বালিকা শাখার ফলাফল দেখুন </a>
        </div>

        <!-- বালক ও হিফজ -->
        <div class="bg-white border border-green-900 border-b-4 rounded-xl shadow p-8">
            <h2 class="text-xl font-bold text-green-900 mb-6 leading-relaxed">বালক এবং হিফজ শাখার ফলাফল দেখতে নিচের লিংকে
                ক্লিক করুন।</h2>

            <a href="#" class="bg-green-900 text-white font-bold px-6 py-2 rounded shadow"> বালক ও হিফজ শাখার ফলাফল দেখুন
            </a>
        </div>
    </div>
@endsection