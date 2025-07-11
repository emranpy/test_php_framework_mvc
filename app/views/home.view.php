<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test MVC Framework - Installation Successful!</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom font for a clean look */
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen flex items-center justify-center p-4">
    <div class="container mx-auto max-w-4xl bg-white rounded-2xl shadow-xl overflow-hidden md:flex">
        <!-- Left Section: Hero/Welcome Image or Graphic -->
        <div class="md:w-1/2 bg-blue-600 flex items-center justify-center p-8 text-white text-center rounded-l-2xl">
            <div class="space-y-4">
                <svg class="w-24 h-24 mx-auto text-blue-200" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                </svg>
                <h1 class="text-4xl font-extrabold leading-tight">
                    Installation <br class="hidden sm:inline"> Successful!
                </h1>
                <p class="text-blue-200 text-lg">
                    Your Test MVC Framework is ready to go.
                </p>
            </div>
        </div>

        <!-- Right Section: Content and Next Steps -->
        <div class="md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">
                Welcome to <span class="text-blue-600">Test MVC Framework!</span>
            </h2>
            <p class="text-gray-600 mb-6 leading-relaxed">
                Congratulations! You've successfully installed the Test MVC Framework. This page serves as your starting point.
            </p>

            <div class="space-y-6">
                <!-- Getting Started Card -->
                <div class="bg-blue-50 p-6 rounded-xl shadow-md border border-blue-200">
                    <h3 class="text-xl font-semibold text-blue-700 mb-3 flex items-center">
                        <svg class="w-6 h-6 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.538 1.118l-2.8-2.034a1 1 0 00-1.176 0l-2.8 2.034c-.783.57-1.838-.197-1.538-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.92 8.725c-.783-.57-.381-1.81.588-1.81h3.462a1 1 0 00.95-.69l1.07-3.292z"></path></svg>
                        Getting Started
                    </h3>
                    <p class="text-gray-700">
                        Explore the framework's documentation to understand its core concepts and directory structure.
                    </p>
                    <a href="#" class="mt-4 inline-block text-blue-600 hover:text-blue-800 font-medium transition duration-300">
                        Read Documentation &rarr;
                    </a>
                </div>

                <!-- Next Steps Card -->
                <div class="bg-green-50 p-6 rounded-xl shadow-md border border-green-200">
                    <h3 class="text-xl font-semibold text-green-700 mb-3 flex items-center">
                        <svg class="w-6 h-6 mr-2 text-green-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v3.586l-2.293-2.293a1 1 0 10-1.414 1.414l4 4a1 1 0 001.414 0l4-4a1 1 0 00-1.414-1.414L11 10.586V7z" clip-rule="evenodd"></path></svg>
                        What's Next?
                    </h3>
                    <ul class="list-disc list-inside text-gray-700 space-y-2">
                        <li>Create your first controller and view.</li>
                        <li>Configure your database connection.</li>
                        <li>Start building amazing applications!</li>
                    </ul>
                    <a href="#" class="mt-4 inline-block text-green-600 hover:text-green-800 font-medium transition duration-300">
                        View Examples &rarr;
                    </a>
                </div>
            </div>

            <p class="text-center text-gray-500 text-sm mt-8">
                &copy; 2025 Test MVC Framework. All rights reserved.
            </p>
        </div>
    </div>
</body>
</html>
