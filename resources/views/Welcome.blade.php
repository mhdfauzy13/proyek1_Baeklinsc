<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
     @vite('../resources/css/app.css')
</head>
<body class="bg-gray-100">
    <header class="flex bg-black py-4">
        <div class="flex justify-start h-[100px] ">
            <img src="../assets/image/logoBaeklin.png" alt="">
        </div>
        <nav class="items justify-end">
            <ul class="space-x-2">
                <li><a href="http://127.0.0.1:8000/register" class="text-white">Register</a></li>
                <li><a href="http://127.0.0.1:8000/login" class="text-white">Login</a></li>
            </ul>
        </nav>
        
    </header>
    
    <section class="container mx-auto">
       <div class="flex items-center justify-center h-screen">
        <div class="max-w-screen-lg mx-auto">
            <img src="{{ asset('../assets/image/landing2.png') }}" alt="Landing Image" class="w-full h-full object-cover" />
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    </section>
    <footer class="footer p-10 bg-black text-base-content">
    <div class="text-white">
        <span class="footer-title">About us</span> 
        <p class=" max-w-md text-left">
            Baeklin Shoes Cleaning adalah usaha yang bergerak dibidang jasa pencucian khusus sepatu didirikan pada tahun 2018,
            kami telah mengembangkan sistem cuci sepatu yang efektif dan efisien untuk memberikan hasil terbaik bagi pelanggan. 
            menggunakan teknik cuci sepatu terbaik dan bahan-bahan yang aman untuk memberikan hasil terbaik dalam setiap layanan kami.
        </p>
    </div> 
    <div class="text-white">
        <span class="footer-title">maps</span> 
        <a href=""></a>
    </div> 
    <div class="text-white">
        <span class="footer-title">Social</span> 
    <div class="grid grid-flow-col gap-4">
    
    </div>
</footer>
</body>
</html>
