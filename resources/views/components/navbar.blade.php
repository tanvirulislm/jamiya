<!-- Marquee Notice Bar -->
@if ($publishedNotice)
    <div class="bg-[#00460B] text-white shadow text-sm py-1">
        <marquee>{{ $publishedNotice->title }}</marquee>
    </div>
@endif

<!-- Desktop Header (visible only on desktop) -->
<header class="bg-[#00460B] text-white shadow py-4">
    <div class="container mx-auto px-4 flex flex-col items-center justify-center">
        <img src="image/logo.webp" alt="Logo" class="md:h-32" />
    </div>
</header>

<!-- Mobile Header (visible only on mobile) -->
<header class="md:hidden bg-[#00460B] text-white shadow">
    <div class="container mx-auto px-4 py-3 flex items-center justify-between">
        <!-- Hamburger Menu Button -->
        <button id="mobileMenuToggle" class="text-white focus:outline-none">
            <i class="fa fa-bars text-2xl"></i>
        </button>

        <!-- Logo Image -->
        {{-- <img src="image/logo.webp" alt="Logo" class="h-16" /> --}}

        <!-- English Button -->
        <a href="#" class="text-white hover:text-yellow-300 font-medium">
            English
        </a>
    </div>
</header>

<!-- Navigation Menu -->
<nav class="bg-[#014F0D]  items-center text-white shadow sticky top-0 z-50">
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
                    <li><a href="#" class="block px-4 py-2 hover:bg-green-100">হিফজ বিভাগ</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-green-100">নূরানী বিভাগ</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-green-100">স্কুল</a></li>
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

            <li class="md:hidden">
                <a href="#" class="flex items-center gap-2 hover:text-yellow-300">
                    <i class="fa fa-language"></i> English
                </a>
            </li>

        </ul>
    </div>
</nav>

<!-- JavaScript for Mobile Menu Toggle -->
<script>
    document.getElementById('mobileMenuToggle').addEventListener('click', function () {
        const menu = document.getElementById('navMenu');
        menu.classList.toggle('hidden');
        menu.classList.toggle('flex');
    });
</script>