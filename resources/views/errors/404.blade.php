<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>

    <!-- Tailwind (works if already included in app.css) -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

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

        <!-- Icon -->
        <div class="float-animation inline-block">
            <svg class="w-40 h-40 mx-auto text-green-700" fill="none" stroke="currentColor" stroke-width="1.5"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 
                         0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464
                         0L3.34 16c-.77 1.333.192 3 1.732 3z" />
            </svg>
        </div>

        <!-- Title -->
        <h1 class="text-7xl font-extrabold text-green-800 my-6">
            404
        </h1>

        <!-- Subtitle -->
        <p class="text-xl text-gray-700 font-medium">
            Oops! The page you're looking for doesn’t exist.
        </p>

        <!-- Description -->
        <p class="mt-2 text-gray-600">
            It might have been moved, deleted, or never existed at all.
        </p>

        <!-- Button -->
        <a href="{{ url('/') }}" class="mt-8 inline-block px-8 py-3 bg-green-700 text-white text-lg rounded-xl shadow-lg 
                  hover:bg-green-800 transition-all duration-200">
            Back to Home
        </a>

        <!-- Additional styling -->
        <div class="mt-12 text-sm text-gray-500">
            <p>© {{ date('Y') }} All Rights Reserved. Design & Developed By <a href="hikmatech.com"
                    class="text-green-700 hover:text-green-800 transition-all duration-200">HikmaTech</a> </p>
        </div>

    </div>

</body>

</html>