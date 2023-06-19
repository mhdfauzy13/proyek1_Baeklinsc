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
        @if (session('success'))
          <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
          <script>
            Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Your work has been saved',
            showConfirmButton: false,
            timer: 1500
          })
          </script>
        @endif
        
        <main class=" flex  justify-center w-full min-h-screen bg-gray-300 rounded shadow rounded-tl-[60px] rounded-bl-[60px]">
            <div class="overflow-x-auto my-8">
                <div class="flex justify-end">
                    <a href={{ route('layanan.create') }}>
                    <button class="btn btn-primary">Add</button>
                    
                    </a>
                </div>
  <table class="table">
    <!-- head -->
    <thead>
      <tr>
        <th></th>
        <th>Nama</th>
        <th>Keterangan</th>
        <th>Image</th>
        <th>Total varian</th>
        <th>action</th>
      </tr>
    </thead>
    <tbody>
      <!-- row 1 -->
      @foreach ($layanan as $item )
          <tr class="bg-base-200">
        <td>{{ $angka ++ }}</td>
        <td>{{  $item->nama }}</td>
        <td>
          <div class="max-w-[400px] ">
            {{ \Illuminate\Support\Str::limit($item->keterangan, $limit = 40, $end = '...') }}
          </div>
        </td>
        
        <td>
            <div style="width:100px">  
                <img src="../assets/image/sepatukw.png" alt="" srcset="">
            </div>
        </td>
        <td>3</td>
        <td class="flex">
          <a href={{ route('layanan.edit',$item->id) }}>
            <button class="btn btn-primary">Update</button>

          </a>
            <form action="{{ route('layanan.destroy', $item->id) }}" method="POST">
    @csrf
    @method('DELETE')
            <button class="btn btn-secondary">delete</button>

    </form>

            <button class="btn btn-accent">detail</button>
                    </td>
      </tr>
      @endforeach


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