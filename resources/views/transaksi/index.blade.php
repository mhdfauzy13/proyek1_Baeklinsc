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
             <div class="flex items-center justify-end">
  <div class="w-12 h-12 mt-3 rounded-full overflow-hidden">
    <img src="/assets/image/benzema.jpg" alt="Profile Picture" class="object-cover w-full h-full">
  </div>
  <h3 class="mr-4 text-lg text-black py-1 px-3">
    Hi,Karim
    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <x-dropdown-link :href="route('logout')"
                onclick="event.preventDefault();  
                            this.closest('form').submit();">
            {{ __('Log Out') }}
        </x-dropdown-link>
    </form>
  </h3>
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
      <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg></a>
      <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path></svg></a>
      <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path></svg></a>
    </div>
  </div>
</footer>
</html>   