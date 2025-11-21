<!-- Marquee Notice Bar -->
<div class="bg-[#00460B] text-white shadow text-sm py-1">
    <marquee>সকল শিক্ষার্থীদের জানানো যাচ্ছে যে আগামীকাল সকাল ৯টায় ক্লাস শুরু হবে ইনশাআল্লাহ।</marquee>
</div>

<!-- Header / Logo Section -->
<header class="bg-[#00460B] text-white shadow py-4">
    <div class="container mx-auto px-4 flex flex-col items-center justify-center">
        <img src="image/logo.webp" alt="Logo" class="h-32" />
    </div>
</header>

<!-- Navigation Menu -->
<nav class="bg-[#014F0D] text-white shadow sticky top-0 z-50">
    <div class="container mx-auto flex items-center justify-between px-4 py-3">

        <!-- Logo small (mobile only) -->
        <img src="image/logo.webp" class="h-10 block md:hidden" />

        <!-- Hamburger Button -->
        <button id="menuBtn" class="text-white text-2xl md:hidden focus:outline-none">
            <i class="fa-solid fa-bars"></i>
        </button>

        <!-- Menu Items -->
        <ul id="navMenu"
            class="hidden md:flex flex-col md:flex-row md:items-center gap-6 text-sm font-medium w-full md:w-auto mt-4 md:mt-0">

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
                    <li><a href="#" class="block px-4 py-2 hover:bg-green-100">কিতাব বিভাগ</a></li>
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
                    <i class="fa fa-square-poll-horizontal"></i> রেজাল্ট
                </a>
            </li>
            <li>
                <a href="{{ route('donation') }}" class="flex items-center gap-2 hover:text-yellow-300">
                    <i class="fa fa-donate"></i> অনুদান
                </a>
            </li>

            <li>
                <a href="#" class="flex items-center gap-2 hover:text-yellow-300">
                    <i class="fa fa-image"></i> গ্যালারি
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

        </ul>
    </div>
</nav>

<!-- Mobile Dropdown (JS) -->
<script>
    const menuBtn = document.getElementById('menuBtn');
    const navMenu = document.getElementById('navMenu');

    menuBtn.addEventListener('click', () => {
        navMenu.classList.toggle('hidden');
        navMenu.classList.toggle('flex');
    });
</script>