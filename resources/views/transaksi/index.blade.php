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
        
        {{-- todo::aside --}}
        @include('layouts.aside')

        <main class="w-full min-h-screen bg-gray-300 rounded shadow rounded-tl-[60px] rounded-bl-[60px]">
             <div class="flex justify-end mt-2 mr-3">
                <div class="bg-gray-500 h-55  rounded-lg">
                    <div class="flex h-10 mr-2"> 
                        <h3 class="text-lg text-black py-1 px-3">Hi, {{ Auth::user()->name }} </h3>
                        <img src="../assets/icon/userLogo.png" alt="">
                    </div> 
                </div>
            </div>
            <div class="flex flex-wrap bg-white rounded shadow m-8 p-8 h-[830px] w-[980px] mt-20 rounded-2xl ml-20 ">
                <div class="h-[270px] w-[290px] bg-gray-200 rounded shadow">
                    <div class="h-[150px] w-[190px] ml-10 mt-[10px]">
                        <img src="../assets/image/sepatukw.png" alt="">
                    </div>
                    <div>
                        <p class=" ml-4 mt-3 font-bold font-serif text-black">DEEP CLEANING</p>
                    </div>
                </div>
               <div class="flex flex-warp">
                 <div class=" ml-5">
                    <div class="mb-4">
                        <label for="recipient_name" class="block text-gray-700 text-sm font-bold mb-2">Nama Penerima:</label>
                        <input id="recipient_name" name="recipient_name" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan nama penerima">
                    </div>
                    <div class="mb-4">
                        <label for="address" class="block text-gray-700 text-sm font-bold mb-2">Alamat:</label>
                        <textarea id="address" name="address" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan alamat penerima"></textarea>
                    </div>
                    <div class="mb-4">
                        <label   label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Nomor Telepon:</label>
                    <div class="flex">
                        <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500">+62</span>
                        <input id="phone" name="phone" type="text" class="flex-1 appearance-none border rounded-r-md py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan nomor telepon">
                    </div>
                    <div class="mb-4 mt-4">
                        <label for="recipient_name" class="block text-gray-700 text-sm font-bold mb-2">Layanan yang dipesan:</label>
                        <input id="recipient_name" name="recipient_name" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan layanan yang dipesan">
                    </div>
                    </div>
                    <div>
                      <label for="address" class="block text-gray-700 text-sm font-bold mb-2">Ambil Sendiri?</label>
                      <div class="flex">
                        <input type="radio" name="radio-1" class="radio" checked /> <p class="font-bold">
                        YA
                        </p>
                        <input type="radio" name="radio-1" class="radio ml-3" /> <p class="font-bold">
                        TIDAK
                        </p>
                        </div>
                    </div>
                </div>
               </div>
            </div>
        </main>
    </div>
</body>
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
</html>   