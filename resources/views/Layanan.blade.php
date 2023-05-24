<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Layanan</title>
    @vite('../resources/css/app.css')
    
</head>
<body>
</div>
    <div class="flex w-full">
        @include('layouts.aside')
        
        <main class="w-full min-h-screen bg-gray-300 rounded shadow rounded-tl-[60px] rounded-bl-[60px]">
            <div class="flex items-center justify-end">
  <div class="w-12 h-12 mt-3 rounded-full overflow-hidden">
    <img src="/assets/image/benzema.jpg" alt="Profile Picture" class="object-cover w-full h-full">
  </div>
  <h3 class="mr-4 text-lg text-black py-1 px-3">
    Hi,Karim
  </h3>
</div>

            <div class="flex bg-white rounded shadow m-8 p-8 h-[800px] mt-20 rounded-2xl">
                <div class="h-[370px] w-[290px] bg-gray-200 rounded shadow">
                    <div class="h-[150px] w-[190px] ml-10 mt-[10px]">
                        <img src="assets/image/sepatukw.png" alt="">
                    </div>
                    <div>
                        <p class=" text-center mt-3 font-bold font-serif text-black">FAST CLEANING</p>
                        <p class=" text-center ml-2 mr-2 text-black text-xs mt-5">
                            Treatment pencucian cepat yang memakan waktu kurang lebih 10-15 menit,material sepatu yang dicuci hanya bagian Upper dan midsole.
                        </p>
                    </div>
                    <div class="flex justify-center items-center">
                        <button class="bg-cyan-500 hover:bg-blue-700 text-white mt-11 py-3 px-5 rounded shadow rounded-full">
                            Keterangan Layanan
                        </button>
                    </div>
                </div>
                <div class="h-[370px] w-[290px] bg-gray-200 ml-5 rounded shadow">
                    <div class="h-[150px] w-[190px] ml-10 mt-[10px]">
                        <img src="assets/image/sepatukw.png" alt="">
                    </div>
                    <div>
                        <p class=" text-center mt-3 font-bold font-serif text-black">DEEP CLEANING</p>
                        <p class=" text-center ml-2 mr-2 text-black text-xs mt-5">
                            Treatment pencucian khusus untuk sepatu secara detail untuk seluruh bagian memakan waktu 2-3 hari, aman untuk semua bahan dan warna.
                        </p>
                    </div>
                    <div class="flex justify-center items-center">
                        <a href="layanan/fast-cleaning">
                            <button class="bg-cyan-500 hover:bg-blue-700 text-white mt-11 py-3 px-5 rounded shadow rounded-full">
                                Keterangan Layanan
                            </button>
                        </a>
                        
                    </div>
                </div>
                <div class="h-[370px] w-[290px] bg-gray-200 ml-5 rounded shadow">
                    <div class="h-[150px] w-[190px] ml-10 mt-[10px]">
                        <img src="assets/image/sepatukw.png" alt="">
                    </div>
                    <div>
                        <p class=" text-center mt-3 font-bold font-serif text-black">UNYELLOWING</p>
                        <p class=" text-center ml-2 mr-2 text-black text-xs mt-5">
                            Treatment layanan khusus untuk midsole sepatu yang yellowing memakan waktu 3-4 hari, aman untuk bahan rubber/karet. Solusi untuk mengembalikan warna midsole yang menguning selain treatment repaint midsole.
                        </p>
                    </div>
                    <div class="flex justify-center items-center">
                        <button class="bg-cyan-500 hover:bg-blue-700 text-white mt-3 py-3 px-5 rounded shadow rounded-full">
                            Keterangan Layanan
                        </button>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>   