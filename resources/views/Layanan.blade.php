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
    <div class="flex w-full">
        <aside class="h-screen bg-white w-[250px]">
            <div class="flex pb-[50px]">
               <img src="/assets/image/logoBaeklin.png" class="pt-4" width="100px"/>
               <img src="/assets/image/Baeklin Shoes Cleaning.png"class="pt-4" width="100px"/>
            </div>
            <div class='text-lg px-2 '>  
                <p class="pl-14 mb-7 font-bold">Dashboard</p>
                <div class="flex pl-5 mt-3">
                    <img src="assets/icon/iconsepatu.png" alt="">
                    <p class=" pl-2 font-bold"> Layanan</p> 
                   
                </div>
                <div class="flex pl-5 mt-3">
                    <img src="assets/icon/iconmoney.png" alt="">
                    <p class=" pl-2 font-bold"> Transaksi</p> 
                   
                </div>
               <div class="flex pl-5 mt-3">
                    <img src="assets/icon/iconhistory.png" alt="">
                    <p class=" pl-2 font-bold"> History</p> 
                   
                </div>
            </div>
        </aside>
        <main class="w-full min-h-screen bg-gray-300 rounded shadow rounded-tl-[60px] rounded-bl-[60px]">
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