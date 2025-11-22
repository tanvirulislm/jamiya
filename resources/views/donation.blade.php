@extends('layout.app')
@section('title', 'অনুদান')

@section('content')
    <!-- Page Title -->
    <h2 class="text-3xl font-bold text-green-900 text-center py-10">জামেয়ার চলমান প্রকল্প সমূহ</h2>

    <!-- Top Project Cards -->
    <section class="container mx-auto px-4 grid md:grid-cols-2 gap-8">
        <!-- Card 1 -->
        <div class="bg-white border border-green-700 rounded-xl shadow p-8">
            <div class="text-4xl text-green-700 mb-4"><i class="fa-solid fa-mosque"></i></div>
            <h3 class="text-xl font-bold text-green-900 mb-2">৯৬৩০ বর্গফুট মসজিদ সম্প্রসারণ</h3>
            <p class="text-gray-800 leading-relaxed">এর মাধ্যমে মসজিদের বর্তমান কাঠামোটি আরও বড় করা হবে, যাতে একসঙ্গে আরও
                বেশি মুসল্লি নামাজ আদায় করতে পারেন। এই সম্প্রসারণের ফলে মসজিদের ধারণক্ষমতা বাড়বে এবং এটি আরও আধুনিক ও
                সুপ্রশস্ত হবে।</p>
        </div>

        <!-- Card 2 -->
        <div class="bg-white border border-green-700 rounded-xl shadow p-8">
            <div class="text-4xl text-green-700 mb-4"><i class="fa-solid fa-hand-holding-heart"></i></div>
            <h3 class="text-xl font-bold text-green-900 mb-2">অর্থ-নিবিড় শিশুমদের কাজ সম্পন্নকরণ</h3>
            <p class="text-gray-800 leading-relaxed">একটি অসমাপ্ত মসজিদের নির্মাণ কাজ শেষ করার জন্য প্রয়োজনীয় সকল পদক্ষেপ
                দ্রুত সম্পন্ন করা হবে। এর মধ্যে রয়েছে কাঠামোগত কাজ, অভ্যন্তরীণ ও বাহ্যিক ফিনিশিং, মনোরম পেইন্টিং, আধুনিক
                ইলেকট্রিক্যাল এবং উন্নতমানের স্যানিটারি কাজ।</p>
        </div>

        <!-- Card 3 -->
        <div class="bg-white border border-green-700 rounded-xl shadow p-8">
            <div class="text-4xl text-green-700 mb-4"><i class="fa-solid fa-building"></i></div>
            <h3 class="text-xl font-bold text-green-900 mb-2">নতুন হিফজ ভবন নির্মাণ</h3>
            <p class="text-gray-800">এই প্রকল্পের অধীনে, নতুন একটি ভবন তৈরি করা হবে যেখানে শিক্ষার্থীরা পবিত্র কুরআন মুখস্থ
                করতে পারবে। এই ভবনে ক্লাসরুম, থাকার জায়গা এবং অন্যান্য প্রয়োজনীয় সুবিধা থাকবে। এটি একটি ইসলামিক শিক্ষা
                কেন্দ্রের গুরুত্বপূর্ণ অংশ হিসেবে কাজ করবে।</p>
        </div>

        <!-- Card 4 -->
        <div class="bg-white border border-green-700 rounded-xl shadow p-8">
            {{-- <div class="text-4xl text-green-700 mb-4"><i class="fa-solid fa-users"></i>লিল্লাহ</div> --}}
            <h3 class="text-xl font-bold text-green-900 mb-2">লিল্লাহ</h3>
            <div class="space-y-3 text-gray-800 leading-relaxed">
                <p><i class="fa-solid fa-circle text-green-700 mr-2"></i>আল্লাহর সন্তুষ্টির জন্য যে কোনো ধরনের ঐচ্ছিক দানকে
                    লিল্লাহ বলা হয়, যা সাধারণত মসজিদ, মাদ্রাসা বা জনকল্যাণমূলক কাজে ব্যবহৃত হয়।</p>
            </div>
            <h3 class="text-xl font-bold text-green-900 mb-2">সাদাকাহ</h3>
            <div class="space-y-3 text-gray-800 leading-relaxed">
                <p><i class="fa-solid fa-circle text-green-700 mr-2"></i>এটি একটি ঐচ্ছিক দান। যেকোনো সময়, যেকোনো পরিমাণ অর্থ
                    বা বস্তু আল্লাহর পথে দান করাকে সাদাকাহ বলে। এর মাধ্যমে সওয়াব লাভ করা যায়।</p>
            </div>
            <h3 class="text-xl font-bold text-green-900 mb-2">লিল্লাহ</h3>
            <div class="space-y-3 text-gray-800 leading-relaxed">
                <p><i class="fa-solid fa-circle text-green-700 mr-2"></i>ইসলামের পাঁচটি স্তম্ভের একটি। এটি ধন-সম্পদের একটি
                    নির্দিষ্ট অংশ, যা নির্দিষ্ট পরিমাণ সম্পদ থাকলে গরিব ও অভাবী মানুষকে দেওয়া বাধ্যতামূলক।

                </p>
            </div>
        </div>
    </section>

    <!-- Student & Teacher Stats -->
    <section class="container mx-auto px-4 py-12 space-y-6">
        <div class="bg-white border border-green-700 rounded-xl shadow p-8">
            <h3 class="text-xl font-bold text-green-900 mb-4">আবাসিক শিক্ষার্থী</h3>
            <p class="text-gray-800">মোট: ৩৬৪ জন | বালক: ১৩৪ জন | বালিকা: ২৩০ জন</p>
        </div>

        <div class="bg-white border border-green-700 rounded-xl shadow p-8">
            <h3 class="text-xl font-bold text-green-900 mb-4">অনাবাসিক শিক্ষার্থী</h3>
            <p class="text-gray-800">মোট: ৬৩০ জন | বালক: ৩৬৫ জন | বালিকা: ২৬৫ জন</p>
        </div>

        <div class="bg-white border border-green-700 rounded-xl shadow p-8">
            <h3 class="text-xl font-bold text-green-900 mb-4">সর্বমোট শিক্ষক</h3>
            <p class="text-gray-800">মোট ৭৯ জন | পুরুষ: ৬৪ | নারী: ১৫</p>
        </div>

        <div class="bg-white border border-green-700 rounded-xl shadow p-8">
            <h3 class="text-xl font-bold text-green-900 mb-4">সর্বমোট স্টাফ</h3>
            <p class="text-gray-800">মোট ৩৮ জন | পুরুষ ৩৬, নারী ২</p>
        </div>
    </section>

    <!-- Donation Options -->
    <section class="container mx-auto px-4">
        <h3 class="text-2xl font-bold text-green-900 text-center mb-8">সাহায্যের খাতসমুহ</h3>

        <div class="bg-white border border-green-700 rounded-xl shadow p-8">
            <p class="text-gray-800 mb-6">আপনি বিভিন্ন খাতে অনুদান দিয়ে আমাদের সাহায্য করতে পারেন। প্রতিটি অনুদান সরাসরি
                নির্ধারিত খাতে ব্যবহার করা হবে।</p>

            <div class="space-y-4 text-gray-900 font-medium">
                <div class="flex justify-between border-b border-dotted py-2"><span>আবাসিক সম্পদব্যয়
                        (মাসিক)</span><span>£10</span></div>

                <div class="flex justify-between border-b border-dotted py-2"><span>আবাসিক সম্পদব্যয়
                        (বার্ষিক)</span><span>£120</span></div>

                <div class="flex justify-between border-b border-dotted py-2"><span>এক দিনের খাবার</span><span>£300</span>
                </div>

                <div class="flex justify-between border-b border-dotted py-2"><span>দুধের খরচ</span><span>£150</span></div>

                <div class="flex justify-between border-b border-dotted py-2"><span>সাধারণ লাঞ্চ</span><span>£50</span>
                </div>

                <div class="flex justify-between border-b border-dotted py-2"><span>হাফিজ ছাত্রদের
                        উপহার</span><span>£750</span></div>

                <div class="flex justify-between border-b border-dotted py-2"><span>১ টা রুট</span><span>£250</span></div>

                <div class="flex justify-between border-b border-dotted py-2"><span>১ হাফিজ হিফজ
                        ইভেন্ট</span><span>£650</span></div>

                <div class="flex justify-between border-b border-dotted py-2"><span>১০ কপি কুরআন</span><span>£100</span>
                </div>

                <div class="flex justify-between border-b border-dotted py-2"><span>অনাথের প্রতি মাসিক
                        মিনি-কেয়ার</span><span>£50</span></div>

                <div class="flex justify-between border-b border-dotted py-2"><span>নতুন রুম নির্মাণ</span><span>£700</span>
                </div>

                <div class="flex justify-between border-b border-dotted py-2"><span>১ ব্যাগ চাল</span><span>£25</span></div>

                <div class="flex justify-between border-b border-dotted py-2"><span>একটি দরজার মূল্য</span><span>£450</span>
                </div>

                <div class="flex justify-between border-b border-dotted py-2"><span>একটি জানালার
                        মূল্য</span><span>£100</span></div>
            </div>
        </div>
    </section>

    <!-- Bank Details -->
    <section class="container mx-auto px-4 py-12">
        <h3 class="text-2xl font-bold text-green-900 text-center mb-8">অনুদান পাঠানোর নিয়মাবলী</h3>

        <div class="grid md:grid-cols-2 gap-8">
            <!-- Bangladesh Bank -->
            <div class="bg-white border border-green-700 rounded-xl shadow p-8">
                <h4 class="text-xl font-bold text-green-800 mb-4">বাংলাদেশি ব্যাংক একাউন্ট</h4>

                <div class="space-y-2 text-gray-900">
                    <p><strong>ব্যাংকের নাম:</strong> Al Arafah Islami Bank PLC</p>
                    <p><strong>একাউন্ট নাম:</strong> Jamiya Islamia Boys-Girls Madrash</p>
                    <p><strong>একাউন্ট নং:</strong> 0351120003002</p>
                    <p><strong>সুইফট কোড:</strong> ALARBDDH</p>
                    <p><strong>Routing No:</strong> 01558422</p>
                    <p><strong>শাখা:</strong> শ্রীমঙ্গল শাখা</p>
                    <p><strong>জেলা:</strong> শ্রীমঙ্গল, মৌলভীবাজার</p>
                </div>
            </div>

            <!-- UK Bank -->
            <div class="bg-white border border-green-700 rounded-xl shadow p-8">
                <h4 class="text-xl font-bold text-green-800 mb-4">ইউকে ব্যাংক একাউন্ট</h4>

                <div class="space-y-2 text-gray-900">
                    <p><strong>Account Name:</strong> Jamiya Islamia Sreemongal</p>
                    <p><strong>Account Number:</strong> 706 701 62</p>
                    <p><strong>Bank Name:</strong> Lloyds Bank PLC</p>
                    <p><strong>Branch:</strong> Victoria</p>
                    <p><strong>Sort Code:</strong> 30 99 50</p>
                    <p><strong>Registered UK Charity Number:</strong> 120 80 87</p>
                    <p><strong>Trusty Chairman:</strong> Mawlana Abul Kalam</p>
                </div>
            </div>
        </div>
    </section>
@endsection