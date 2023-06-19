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
            <div class="flex justify-end mt-2 mr-3">
                <div class="bg-gray-500 h-55  rounded-lg">
                    <div class="flex h-10 mr-2"> 
                        <h3 class="text-lg text-black py-1 px-3">Hi, {{ Auth::user()->name }} </h3>
                        <img src="../assets/icon/userLogo.png" alt="">
                    </div> 
                </div>
            </div>
            @foreach ($layanan as $item)
                        
                    
            <div class="flex bg-white rounded shadow m-8 p-8 h-[450px] mt-20 rounded-2xl">
                <div class="h-[270px] w-[290px] bg-gray-200 rounded shadow">
                    <div class="h-[150px] w-[190px] ml-10 mt-[10px]">
                        <img src="../assets/image/sepatukw.png" alt="">
                    </div>
                   
                    <div>
                        <p class=" ml-4 mt-3 font-bold font-serif text-black">{{ $item->nama }}</p>
                    </div>
                </div>
                <div>
                <h3 class="font-bold text-lg ml-5 mt-2">Deskripsi Layanan</h3>
                <div class=" max-w-md">
                    <p class="text-berge ml-5 "> 

                        {{ $item->keterangan }}
                    </p>
                    
                    
                </div>
                <div class="dropdown dropdown-bottom mt-2 ml-5">
                   <select  class="select select-info w-full max-w-xs" id="varian">
                        <option disabled>Pilih varian </option>
                     @foreach ($item->details as $harga)
                         <option value={{ $harga->harga }}>{{ $harga->nama }} </option>
                     @endforeach    
                    {{-- <option disabled selected>Pilih Varian</option>
                        <option>Mild</option>
                        <option>Hard</option>
                        <option>Premium</option>   --}}
                    </select>
                    <p class="pt-3 font-semibold">Rp. <span id='harga' ></span> </p>
                    
                    <script>
                        const varian = document.getElementById('varian')
                        const harga = document.getElementById('harga');
                        varian.addEventListener('change', function(){
                            const selected = varian.value;
                        console.log(selected)

                            harga.innerHTML = selected
                        })
                        
                        // function onselected() {
                        //     const varian = document.getElementById('varian').value;
                            
                        //     console.log ('varian', varian);  
                        //     if(varian == 'Mild'){
                        //         harga.innerHTML = '25.000'
                        //     }else if(varian == 'Hard'){
                        //         harga.innerHTML = '30.000'
                        //     }else{
                        //         harga.innerHTML = '40.000'
                        //     }
                        // }
                        
                    </script>
                </div>
                <div class="ml-5 mt-12">
                    
                     <button class="btn btn-sm">Pesan</button>
                </div>
                </div>
            </div>
            @endforeach
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