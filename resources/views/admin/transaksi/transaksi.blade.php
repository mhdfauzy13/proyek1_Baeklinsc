<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transaksi</title>
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