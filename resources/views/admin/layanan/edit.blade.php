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
        @include('layouts.aside')
        
        <main class=" flex  justify-center w-full min-h-screen bg-gray-300 rounded shadow rounded-tl-[60px] rounded-bl-[60px]">
            <form method="post" actions={{ route('layanan.store') }} class="flex flex-col bg-white shadow m-8 p-8 h-[830px] w-[1000px] mt-20 rounded-2xl ml-20">
                @csrf
                <div class="flex flex-col max-w-md">
                    <div class="mb-4">
                        <label for="recipient_name" class="block text-gray-700 text-sm font-bold mb-2">Nama :</label>
                        <input id="recipient_name" name="nama_layanan" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan nama penerima">
                </div>
                <div class="mb-4">
                        <label for="recipient_name" class="block text-gray-700 text-sm font-bold mb-2">Keterangan:</label>
                        <input id="recipient_name" name="keterangan_layanan" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan nama penerima">
                </div>
                <div class="mb-4">
                        <input name="gambar" type="file" class="file-input file-input-bordered file-input-sm w-full max-w-xs" />

                </div>


                {{-- start --}}
                @foreach ($layanan->details as $details)
                    <div class="flex items-end" >
                    <div>
                        <div class="mb-4">
                            <label for="recipient_name" class="block text-gray-700 text-sm font-bold mb-2">varian:</label>
                            <input value={{ $details->nama }} name="varian[]" type="text" class="varian-input shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan nama varian">
                        </div>
                        <div class="mb-4">
                            <label for="recipient_name" class="block text-gray-700 text-sm font-bold mb-2">harga_varian:</label>
                            <input value={{ $details->harga }}  name="harga_varian[]" type="text" class="harga-varian-input shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan harga varian">
                        </div>
                    </div>
                    <form action="{{ route('layanan.detail.destroy', $details->id) }}" method="POST">
                        @csrf
                        @method('DELETE')       
                        <button  class="btn btn-secondary mx-2 ">Hapus</button>
                    </form>
                </div>
                <div id="varian-container" class="flex flex-col">

                </div>
                @endforeach

                {{-- end --}}


            <button class="btn btn-primary m-2 add-variant">SAVE</button>
</form>

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

