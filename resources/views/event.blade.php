@extends('layout.app')
@section('title', 'জামেয়ার অনুষ্ঠান সমূহ')

@section('content')
    <!-- Page Title -->
    <h2 class="text-3xl font-extrabold text-green-900 text-center py-10">আমাদের অনুষ্ঠান ও আয়োজনসমূহ</h2>

    <!-- Event Grid -->
    <section class="container mx-auto px-4 grid md:grid-cols-4 gap-8 pb-16">

        @foreach ($events as $e)


            <div class="bg-white border border-green-700 rounded-xl shadow hover:shadow-xl transition p-6">
                <div class="text-5xl text-green-700 text-center mb-4">
                    <i class="{{ $e->icon }}"></i>
                </div>
                <h3 class="text-xl font-bold text-green-900 text-center mb-3">{{ $e->title }}</h3>
                <div class="flex items-center justify-center text-green-800 font-semibold"><i class="fa fa-clock mr-2"></i>
                    {{ $e->description }}</div>
            </div>

        @endforeach

    </section>

@endsection