@extends('layout.app')
@section('title', 'যোগাযোগ')

@section('content')
    <!-- Page Title -->
    <h2 class="text-3xl font-extrabold text-green-900 text-center py-10">যোগাযোগ করুন</h2>

    <section class="container mx-auto px-4 pb-20 grid md:grid-cols-2 gap-12">
        <!-- Left: Contact Information -->
        <div class="bg-white border border-green-700 rounded-2xl shadow p-8">
            <h3 class="text-2xl font-bold text-green-900 mb-6">যোগাযোগের তথ্য</h3>

            <div class="space-y-6 text-gray-800 leading-relaxed">
                <!-- Address -->
                <div class="flex items-start gap-4">
                    <div class="text-3xl text-green-700">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold text-green-900">ঠিকানা</h4>
                        শ্রীমঙ্গল, মৌলভীবাজার, বাংলাদেশ
                    </div>
                </div>

                <!-- Phone -->
                <div class="flex items-start gap-4">
                    <div class="text-3xl text-green-700">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold text-green-900">ফোন নম্বর</h4>
                        +8801715003175
                    </div>
                </div>

                <!-- Email -->
                <div class="flex items-start gap-4">
                    <div class="text-3xl text-green-700">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold text-green-900">ইমেইল</h4>
                        jamayaislamia@gmail.com
                    </div>
                </div>

                <!-- Office Hours -->
                <div class="flex items-start gap-4">
                    <div class="text-3xl text-green-700">
                        <i class="fa-solid fa-clock"></i>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold text-green-900">অফিস সময়</h4>
                        প্রতিদিন সকাল ৮টা – বিকাল ৫টা
                    </div>
                </div>
            </div>

            <!-- Map Placeholder -->
            {{-- <div class="mt-10 rounded-lg overflow-hidden border border-green-700">
                <div class="bg-green-100 text-center py-20 text-green-700">Google Map Embed Here</div>
            </div> --}}
        </div>

        <!-- Right: Contact Form -->
        <div class="bg-white border border-green-700 rounded-2xl shadow p-8">
            <h3 class="text-2xl font-bold text-green-900 mb-6">মেসেজ পাঠান</h3>

            <form class="space-y-5">
                <!-- Name -->
                <div>
                    <label class="block mb-1 font-medium text-green-900">নাম *</label>
                    <input type="text"
                        class="w-full border border-green-400 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-600"
                        placeholder="আপনার নাম লিখুন" />
                </div>

                <!-- Phone -->
                <div>
                    <label class="block mb-1 font-medium text-green-900">ফোন নাম্বার *</label>
                    <input type="text"
                        class="w-full border border-green-400 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-600"
                        placeholder="ফোন নাম্বার লিখুন" />
                </div>

                <!-- Email -->
                <div>
                    <label class="block mb-1 font-medium text-green-900">ইমেইল</label>
                    <input type="email"
                        class="w-full border border-green-400 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-600"
                        placeholder="ঐচ্ছিক" />
                </div>

                <!-- Message -->
                <div>
                    <label class="block mb-1 font-medium text-green-900">মেসেজ *</label>
                    <textarea rows="5"
                        class="w-full border border-green-400 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-600"
                        placeholder="আপনার মেসেজ লিখুন"></textarea>
                </div>

                <!-- Submit Button -->
                <div>
                    <button type="submit"
                        class="bg-green-800 text-white px-6 py-2 rounded-lg font-semibold hover:bg-green-900 shadow">পাঠিয়ে
                        দিন</button>
                </div>
            </form>
        </div>
    </section>
@endsection