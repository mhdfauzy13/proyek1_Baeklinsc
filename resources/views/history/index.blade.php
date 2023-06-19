<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>History</title>
    @vite('../resources/css/app.css')
</head>
<body>
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
            <div class="bg-white rounded shadow m-8 p-8 h-[830px] w-[980px] mt-20 rounded-2xl ml-20">
                <div class="overflow-x-auto w-[790px] ml-7 mt-8">
                    <table class="table w-full">
                        <!-- head -->
                        <thead>
                        <tr>
                            <th class="bg-cyan-500 text-white"></th>
                            <th class="bg-cyan-500 text-white">Layanan</th>
                            <th class="bg-cyan-500 text-white">Varian</th>
                            <th class="bg-cyan-500 text-white">Tanggal</th>
                            <th class="bg-cyan-500 text-white">Status</th>
                            <th class="bg-cyan-500 text-white">Riview</th>
                        </tr>
                        </thead>
                        <tbody>
                        <!-- row 1 -->
                        <tr>
                            <th>1</th>
                            <td>Deep Cleaning</td>
                            <td>Hard</td>
                            <td>30-05-2023</td>
                            <td class="bg-yellow-400 rounded-lg font-semibold w-10 ">Sedang diproses</td>
                        </tr>
                        <!-- row 2 -->
                        <tr>
                            <th>2</th>
                            <td>Unyellowing</td>
                            <td>Mild</td>
                            <td>15-05-2023</td>
                            <td class="bg-green-500 rounded-lg font-semibold w-10 ">Berhasil</td>
                            <td>
                                <button class="btn btn-black h-10 w-20 font-semibold rounded-lg">Riview</button>
                            </td>
                        </tr>
                        <!-- row 3 -->
                        <tr>
                            <th>3</th>
                            <td>Leather Care</td>
                            <td>Premium</td>
                            <td>08-05-2023</td>
                            <td class="bg-red-500 rounded-lg font-semibold w-10 ">Gagal</td>
                        </tr>
                        </tbody>
                    </table>
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


