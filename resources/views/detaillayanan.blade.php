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
                   <select onchange="onselected()" class="select select-info w-full max-w-xs" id="varian">
                    
                     @foreach ($item->details as $harga)
                         <option>{{ $harga->nama }}</option>
                     @endforeach    
                    {{-- <option disabled selected>Pilih Varian</option>
                        <option>Mild</option>
                        <option>Hard</option>
                        <option>Premium</option>   --}}
                    </select>
                    <p class="pt-3 font-semibold">Rp. <span id='harga' ></span> </p>
                    <script>
                        const harga = document.getElementById('harga');
                        function onselected() {
                            const varian = document.getElementById('varian').value;
                            
                            console.log('varian', varian);
                            if(varian == 'Mild'){
                                harga.innerHTML = '25.000'
                            }else if(varian == 'Hard'){
                                harga.innerHTML = '30.000'
                            }else{
                                harga.innerHTML = '40.000'
                            }
                        }
                        
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
</html>   