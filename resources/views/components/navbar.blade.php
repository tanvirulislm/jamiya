<!-- Marquee Notice Bar for all device -->
@if ($publishedNotice)
    <div class="bg-[#00460B] text-white shadow text-sm pt-2">
        <marquee>{{ $publishedNotice->title }}</marquee>
    </div>
@endif

<!-- Header Logo for all device -->
<header class="bg-[#00460B] text-white shadow py-1">
    <div class="container mx-auto px-4 flex flex-col items-center justify-center">
        <img src="image/logo.webp" alt="Logo" class="md:h-32" />
    </div>
</header>

<!-- Navigation Menu only for desktop -->
<nav class="bg-[#014F0D] hidden md:block  items-center text-white shadow sticky top-0 z-50">
    <div class="container mx-auto flex items-center justify-between px-4 py-3">

        <!-- Menu Items -->
        <ul id="navMenu"
            class="hidden md:flex flex-col md:flex-row md:items-center gap-6 text-medium font-medium w-full md:w-auto mt-4 md:mt-0 absolute md:relative top-full left-0 right-0 bg-[#014F0D] md:bg-transparent p-4 md:p-0">

            <li class="group relative">
                <a href="{{ route('home') }}" class="flex items-center gap-2 hover:text-yellow-300">
                    <i class="fa fa-home"></i> হোম
                </a>
            </li>

            <li class="group relative">
                <a class="flex items-center gap-2 hover:text-yellow-300 cursor-pointer">
                    <i class="fa fa-info-circle"></i> পরিচিতি
                    <i class="fa-solid fa-caret-down text-xs"></i>
                </a>

                <!-- Dropdown -->
                <ul
                    class="absolute hidden group-hover:block bg-white text-green-900 shadow rounded md:min-w-[180px] py-2 z-50">
                    <li><a href="{{ route('about') }}" class="block px-4 py-2 hover:bg-green-100">আমাদের সম্পর্কে</a>
                    </li>
                    <li><a href="{{ route('principal') }}" class="block px-4 py-2 hover:bg-green-100">মুহতামিম</a></li>
                </ul>
            </li>

            <li class="group relative">
                <a class="flex items-center gap-2 hover:text-yellow-300 cursor-pointer">
                    <i class="fa fa-layer-group"></i> বিভাগসমূহ
                    <i class="fa-solid fa-caret-down text-xs"></i>
                </a>

                <!-- Dropdown -->
                <ul
                    class="absolute hidden group-hover:block bg-white text-green-900 shadow rounded md:min-w-[180px] py-2 z-50">
                    <li><a href="{{ route('kitab') }}" class="block px-4 py-2 hover:bg-green-100">কিতাব বিভাগ</a></li>
                    <li><a href="{{ route('hifz') }}" class="block px-4 py-2 hover:bg-green-100">হিফজ বিভাগ</a></li>
                    <li><a href="{{ route('nurani') }}" class="block px-4 py-2 hover:bg-green-100">নূরানী বিভাগ</a></li>
                    <li><a href="{{ route('school') }}" class="block px-4 py-2 hover:bg-green-100">স্কুল</a></li>
                </ul>
            </li>

            <li>
                <a href="{{ route('admission') }}" class="flex items-center gap-2 hover:text-yellow-300">
                    <i class="fa fa-users"></i> ভর্তি নির্দেশিকা
                </a>
            </li>
            <li>
                <a href="{{ route('teachers') }}" class="flex items-center gap-2 hover:text-yellow-300">
                    <i class="fa fa-users"></i> শিক্ষকবৃন্দ </a>
            </li>
            <li>
                <a href="{{ route('result') }}" class="flex items-center gap-2 hover:text-yellow-300">
                    <i class="fa fa-square-poll-horizontal"></i> ফলাফল
                </a>
            </li>
            <li>
                <a href="{{ route('donation') }}" class="flex items-center gap-2 hover:text-yellow-300">
                    <i class="fa fa-donate"></i> অনুদান
                </a>
            </li>

            <li>
                <a href="{{ route('gallery') }}" class="flex items-center gap-2 hover:text-yellow-300">
                    <i class="fa fa-image"></i> গ্যালারি
                </a>
            </li>
            <li>
                <a href="{{ route('video') }}" class="flex items-center gap-2 hover:text-yellow-300">
                    <i class="fa fa-video"></i> ভিডিও
                </a>
            </li>
            <li>
                <a href="{{ route('event') }}" class="flex items-center gap-2 hover:text-yellow-300">
                    <i class="fa fa-calendar"></i> অনুষ্ঠান
                </a>
            </li>

            <li>
                <a href="{{ route('contact') }}" class="flex items-center gap-2 hover:text-yellow-300">
                    <i class="fa fa-phone"></i> যোগাযোগ
                </a>
            </li>

            <li>
                <a href="#" class="flex items-center gap-2 hover:text-yellow-300">
                    <i class="fa fa-language"></i> English
                </a>
            </li>

        </ul>
    </div>
</nav>


<!-- Mobile Navbar (only visible on mobile) -->
<nav class="bg-[#014F0D] text-white shadow md:hidden sticky top-0 z-50">
    <div class="container mx-auto px-4 py-3 flex items-center justify-between">

        <!-- Left: Hamburger Menu -->
        <button id="mobileMenuButton" class="text-white text-2xl focus:outline-none">
            <i class="fa fa-bars"></i>
        </button>

        <!-- Right: Translate / Language Icon -->
        <a href="#" class="text-white text-xl hover:text-yellow-300">
            <i class="fa fa-language"></i>
        </a>
    </div>

    <!-- Mobile Dropdown Menu -->
    <div id="mobileMenu" class="hidden bg-[#014F0D] border-t border-green-700">
        <ul class="flex flex-col text-white font-medium p-4 space-y-2">

            <li><a href="{{ route('home') }}" class="block py-2">হোম</a></li>

            <li><a href="{{ route('about') }}" class="block py-2">আমাদের সম্পর্কে</a></li>
            <li><a href="{{ route('principal') }}" class="block py-2">মুহতামিম</a></li>

            <li><a href="{{ route('kitab') }}" class="block py-2">কিতাব বিভাগ</a></li>
            <li><a href="{{ route('hifz') }}" class="block py-2">হিফজ বিভাগ</a></li>
            <li><a href="{{ route('nurani') }}" class="block py-2">নূরানী বিভাগ</a></li>
            <li><a href="{{ route('school') }}" class="block py-2">স্কুল</a></li>

            <li><a href="{{ route('admission') }}" class="block py-2">ভর্তি নির্দেশিকা</a></li>
            <li><a href="{{ route('teachers') }}" class="block py-2">শিক্ষকবৃন্দ</a></li>
            <li><a href="{{ route('result') }}" class="block py-2">ফলাফল</a></li>
            <li><a href="{{ route('donation') }}" class="block py-2">অনুদান</a></li>
            <li><a href="{{ route('gallery') }}" class="block py-2">গ্যালারি</a></li>
            <li><a href="{{ route('video') }}" class="block py-2">ভিডিও</a></li>
            <li><a href="{{ route('event') }}" class="block py-2">অনুষ্ঠান</a></li>
            <li><a href="{{ route('contact') }}" class="block py-2">যোগাযোগ</a></li>

            <li><a href="#" class="block py-2">English</a></li>
        </ul>
    </div>
</nav>

<!-- JS for mobile toggle -->
<script>
    document.getElementById('mobileMenuButton').addEventListener('click', function () {
        document.getElementById('mobileMenu').classList.toggle('hidden');
    });
</script>