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
            <div class='text-lg px-2 border-y-2 border-black py-10 '>  
                <p class="pl-14"><b>Dashboard</b></p>
                <p class="pl-14"><b>Layanan</b></p>
                <p class="pl-14"><b>Transaksi</b></p>
                <p class="pl-14"><b>History</b></p>
            </div>
        </aside>
        <main class="w-full min-h-screen bg-gray-300 rounded shadow rounded-tl-[60px] rounded-bl-[60px]">
            <div class="bg-white rounded shadow rounded-3xl m-8 p-8 h-[485px] mt-20">
                <div class="h-[200px] w-[220px] bg-gradient-to-b from-cyan-500 to-blue-900 rounded-2xl">
                    <div class="h-[130px] w-[200px] ml-3">
                        <img src="assets/image/sepatu.png" alt="">
                    </div>
                        <p class="ml-4 mt-1 font-bold font-serif text-white">Fast Cleaning</p>
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