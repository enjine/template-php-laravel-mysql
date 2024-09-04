<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="msapplication-TileColor" content="#000000" />
        <meta name="theme-color" media="(prefers-color-scheme: light)" content="#fff" />
        <meta name="theme-color" media="(prefers-color-scheme: dark)" content="#000" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite(['resources/css/app.css'])
        <style>
            h1 {
                color: orange;
            }
        </style>
</head>
<body class="bg-gray-100 text-gray-800">
        <title>Propwire Coding Challenge</title>
    </head>
    <body class="bg-gray-100 text-gray-800">
    <!-- Header -->
        <header class="bg-blue-600 text-white p-4">
            <div class="container mx-auto">
                <h1 class="text-2xl font-bold">My Awesome Store</h1>
            </div>
        </header>

        <!-- Main Content -->
        <main class="container mx-auto mt-8 p-4">
            <div class="flex flex-wrap -mx-4">
                <!-- Post Item -->
                <div class="w-full sm:w-1/2 lg:w-1/3 p-4">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="https://via.placeholder.com/600x400" alt="Post Image" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h2 class="text-xl font-semibold mb-2">Item Title 1</h2>
                            <p class="text-gray-600 text-sm mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, pulvinar facilisis justo mollis.</p>
                            <a href="#" class="text-blue-500 hover:underline">See Details</a>
                        </div>
                    </div>
                </div>

                <!-- Post Item -->
                <div class="w-full sm:w-1/2 lg:w-1/3 p-4">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="https://via.placeholder.com/600x400" alt="Post Image" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h2 class="text-xl font-semibold mb-2">Item Title 2</h2>
                            <p class="text-gray-600 text-sm mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, pulvinar facilisis justo mollis.</p>
                            <a href="#" class="text-blue-500 hover:underline">See Details</a>
                        </div>
                    </div>
                </div>

                <!-- Post Item -->
                <div class="w-full sm:w-1/2 lg:w-1/3 p-4">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="https://via.placeholder.com/600x400" alt="Post Image" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h2 class="text-xl font-semibold mb-2">Item Title 3</h2>
                            <p class="text-gray-600 text-sm mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, pulvinar facilisis justo mollis.</p>
                            <a href="#" class="text-blue-500 hover:underline">See Details</a>
                        </div>
                    </div>
                </div>

                <!-- Add more post items as needed -->

            </div>
        </main>
        @vite(['resources/js/app.js'])
    </body>
</html>
