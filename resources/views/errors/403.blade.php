<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>403 - Forbidden</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .float-animation {
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-12px);
            }
        }
    </style>
</head>

<body class="bg-gradient-to-b from-green-50 to-green-100 min-h-screen flex items-center justify-center">

    <div class="text-center px-6">

        <!-- Shield icon -->
        <div class="float-animation inline-block">
            <svg class="w-40 h-40 mx-auto text-green-700" fill="none" stroke="currentColor" stroke-width="1.5"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3l7 4v5c0 5-3.5 9-7 9s-7-4-7-9V7l7-4z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4" />
            </svg>
        </div>

        <!-- Title -->
        <h1 class="text-5xl font-extrabold text-green-800 mt-6">
            403 – Forbidden
        </h1>

        <!-- Message -->
        <p class="text-lg text-gray-700 mt-4">
            You don’t have permission to access this page.
        </p>

        <!-- Home Button -->
        <a href="{{ url('/') }}" class="mt-8 inline-block px-8 py-3 bg-green-700 text-white text-lg rounded-xl shadow-lg 
                   hover:bg-green-800 transition-all duration-200">
            Go Back Home
        </a>

        <div class="mt-10 text-sm text-gray-500">
            <p>© {{ date('Y') }} All Rights Reserved. Design & Developed By <a href="https://hikmatech.com/"
                    class="text-green-700 hover:text-green-800 transition-all duration-200">HikmaTech</a></p>
        </div>
    </div>

</body>

</html>