<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detaillayanan</title>
    @vite('../resources/css/app.css')
    
</head>
<body>
</div>
    <div class="flex w-full">
        {{-- todo::aside --}}
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
            <div class="flex bg-white rounded shadow m-8 p-8 h-[450px] mt-20 rounded-2xl">
                <div class="h-[270px] w-[290px] bg-gray-200 rounded shadow">
                    <div class="h-[150px] w-[190px] ml-10 mt-[10px]">
                        <img src="../assets/image/sepatukw.png" alt="">
                    </div>
                    <div>
                        <p class=" ml-4 mt-3 font-bold font-serif text-black">FAST CLEANING</p>
                    </div>
                </div>
                <div>
                <h3 class="font-bold text-lg ml-5 mt-2">Deskripsi Layanan</h3>
                <p class="text-xs ml-2 "> Layanan Fast Cleaning Laundry Sepatu adalah layanan yang ditawarkan oleh jasa laundry atau cuci sepatu
                     untuk membersihkan sepatu dengan cepat dan efisien. 
                    Layanan ini sangat cocok bagi mereka yang ingin menjaga penampilan sepatu mereka 
                    tetap bersih dan segar tanpa harus meluangkan waktu untuk membersihkannya sendiri.</p>
                </div>
            </div>
        </main>
    </div>
</body>
</html>   