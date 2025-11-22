@extends('layout.app')
@section('title', 'গ্যালারি')

@section('content')

    <!-- Page Title -->
    <h2 class="text-3xl font-extrabold text-green-900 text-center py-10">
        ফটো গ্যালারি
    </h2>

    <!-- Category Buttons -->
    <div class="container mx-auto px-4 text-center mb-10">
        <div class="inline-flex flex-wrap gap-3">

            <button class="filter-btn bg-green-800 text-white px-4 py-2 rounded-lg shadow hover:bg-green-900"
                data-category="all">
                সবগুলো
            </button>

            <button
                class="filter-btn bg-white border border-green-700 text-green-900 px-4 py-2 rounded-lg shadow hover:bg-green-100"
                data-category="mahfil">
                বার্ষিক মাহফিল
            </button>

            <button
                class="filter-btn bg-white border border-green-700 text-green-900 px-4 py-2 rounded-lg shadow hover:bg-green-100"
                data-category="envet">
                অভিভাবক সমাবেশ
            </button>

            <button
                class="filter-btn bg-white border border-green-700 text-green-900 px-4 py-2 rounded-lg shadow hover:bg-green-100"
                data-category="newstudents">
                নবীন বরণ
            </button>

            <button
                class="filter-btn bg-white border border-green-700 text-green-900 px-4 py-2 rounded-lg shadow hover:bg-green-100"
                data-category="hifz">
                হিফজ সমাপনী
            </button>

        </div>
    </div>

    <!-- Photo Gallery Grid -->
    <div class="container mx-auto px-4 pb-20">
        <div id="gallery" class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

            @foreach ($galleries as $g)
                <div class="gallery-item {{ $g->category }} rounded-xl overflow-hidden shadow-lg border border-green-700">
                    <img src="{{ asset('storage/' . $g->photo) }}" class="w-full h-48 object-cover hover:scale-105 transition">
                </div>
            @endforeach

        </div>
    </div>

    <!-- Filter Script -->
    <script>
        const filterBtns = document.querySelectorAll(".filter-btn");
        const galleryItems = document.querySelectorAll(".gallery-item");

        filterBtns.forEach(btn => {
            btn.addEventListener("click", () => {
                const category = btn.getAttribute("data-category");

                galleryItems.forEach(item => {
                    if (category === "all" || item.classList.contains(category)) {
                        item.style.display = "block";
                    } else {
                        item.style.display = "none";
                    }
                });

                filterBtns.forEach(b => {
                    b.classList.remove("bg-green-800", "text-white");
                    b.classList.add("bg-white", "text-green-900", "border", "border-green-700");
                });

                btn.classList.remove("bg-white", "text-green-900", "border", "border-green-700");
                btn.classList.add("bg-green-800", "text-white", "hover:bg-green-900", "hover:text-white");
            });
        });
    </script>



@endsection