<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
     @vite('../resources/css/app.css')
</head>
<body class="bg-gray-100">
    <header class="bg-blue-500 py-4">
        <nav class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-white text-xl font-bold">Logo</a>
            <ul class="space-x-4">
                <li><a href="#" class="text-white">Home</a></li>
                <li><a href="#" class="text-white">Features</a></li>
                <li><a href="#" class="text-white">Pricing</a></li>
                <li><a href="#" class="text-white">Contact</a></li>
            </ul>
        </nav>
    </header>
    <section class="container mx-auto py-16">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full md:w-1/2 px-4 mb-8">
                <div class="max-w-sm mx-auto rounded-lg overflow-hidden shadow-lg">
                    <img class="w-full" src="../assets/image/landing1.png" alt="Image 1">
                    <div class="px-6 py-4">
                        <h2 class="text-xl font-bold mb-2">Image 1</h2>
                        <p class="text-gray-700 text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed arcu dolor.</p>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 px-4 mb-8">
                <div class="max-w-sm mx-auto rounded-lg overflow-hidden shadow-lg">
                    <img class="w-full" src="../assets/image/landing2.png" alt="Image 2">
                    <div class="px-6 py-4">
                        <h2 class="text-xl font-bold mb-2">Image 2</h2>
                        <p class="text-gray-700 text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed arcu dolor.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="bg-gray-200 py-4">
        <div class="container mx-auto text-center text-gray-600">
            &copy; 2023 Company Name. All rights reserved.
        </div>
    </footer>
</body>
</html>
