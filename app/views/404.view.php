<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom font for a clean look */
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-red-50 to-pink-100 min-h-screen flex items-center justify-center p-4">
    <div class="container mx-auto max-w-2xl bg-white rounded-2xl shadow-xl overflow-hidden p-8 md:p-12 text-center">
        <div class="space-y-6">
            <svg class="w-32 h-32 mx-auto text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <h1 class="text-6xl font-extrabold text-gray-800">
                404
            </h1>
            <h2 class="text-3xl font-semibold text-gray-700">
                Page Not Found
            </h2>
            <p class="text-gray-600 leading-relaxed">
                Oops! The page you're looking for might have been removed, had its name changed, or is temporarily unavailable.
            </p>
            <div class="mt-8 flex flex-col sm:flex-row justify-center gap-4">
                <a href="/" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-full shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-300">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                    Go to Homepage
                </a>
                <a href="#" class="inline-flex items-center px-6 py-3 border border-gray-300 text-base font-medium rounded-full shadow-sm text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-300">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5L5.442 10.5A1 1 0 006 12h8a1 1 0 00.558-1.5L10.867 7.5A1 1 0 0010 7z" clip-rule="evenodd"></path></svg>
                    Contact Support
                </a>
            </div>
            <p class="text-center text-gray-500 text-sm mt-8">
                &copy; 2025 Test MVC Framework.
            </p>
        </div>
    </div>
</body>
</html>
