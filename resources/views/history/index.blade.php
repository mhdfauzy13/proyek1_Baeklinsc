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
</html>   


