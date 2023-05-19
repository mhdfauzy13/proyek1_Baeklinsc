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
                    <img src="assets/icon/iconlayanan.png" alt="">
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
            <div class="bg-white rounded shadow rounded-3xl m-8 p-8 h-[485px] mt-20">
                <div class="h-[200px] w-[220px] bg-gradient-to-b from-cyan-500 to-blue-900 rounded shadow rounded-2xl">
                    <div class="h-[130px] w-[200px] ml-3 mt-">
                        <img src="assets/image/sepatu.png" alt="">
                    </div>
                        <p class="ml-4 mt-1 font-bold font-serif text-white">Fast Cleaning</p>
                        <p class="ml-4 mt-1 font-serif text-white text-xs mb-10">
                            Treatment pencucian cepat yang memakan waktu kurang lebih 10-15 menit, material sepatu yang dicuci hanya bagian Upper dan midsole.
                        </p>
                </div>
                <div class="h-[200px] w-[220px] bg-gradient-to-b from-cyan-500 to-blue-900 rounded-2xl mt-5">
                    <div class="h-[130px] w-[200px] ml-3">
                        <img src="assets/image/sepatu.png" alt="">
                    </div>
                        <p class="ml-4 mt-1 font-bold font-serif text-white">Deep Cleaning</p>
                </div>
            </div>
        </main>
    </div>
</body>
</html>   