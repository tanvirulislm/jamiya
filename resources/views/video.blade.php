@extends('layout.app')
@section('title', 'ভিডিও গ্যালারি')

@section('content')

    <!-- Page Title -->
    <h2 class="text-3xl font-extrabold text-green-900 text-center py-10">
        ভিডিও গ্যালারি
    </h2>

    <!-- Video Gallery Container -->
    <div class="container mx-auto px-4 pb-20">

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Video Card -->
            @foreach ($videos as $v)
                <div class="bg-white rounded-xl shadow-lg border border-green-700 overflow-hidden">
                    <div class="aspect-w-16 aspect-h-9">
                        <iframe class="w-full h-60" src="https://www.youtube.com/embed/{{ $v->url }}" title="YouTube video"
                            allowfullscreen>
                        </iframe>
                    </div>
                    <div class="p-4 text-center">
                        <h3 class="font-bold text-green-900 text-lg">{{ $v->title }}</h3>
                    </div>
                </div>
            @endforeach


        </div>
    </div>



@endsection