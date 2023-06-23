<aside class="h-screen bg-white w-[250px]">
    <div class="flex pb-[50px]">
       <img src="/assets/image/logoBaeklinsc.png" class="pt-4 ml-2" width="190px" />
    </div>
    
    @if(auth()->check() && auth()->user()->role == 'admin')
        <div class=' px-2 '>  
        <div>
            <p class="pl-14 mb-7 font-bold">Administrator</p>
        </div>
        
        <div class="flex pl-5 mt-3 hover:bg-gradient-to-r from-blue-500">
            <a href={{ route('layanan.admin') }} class="flex">
                <img src="../../../assets/icon/iconsepatu.png" alt="">
            <p class=" pl-2 font-berge ">Data Layanan</p> 
            </a>
        </div>
        <div class="flex pl-5 mt-3 hover:bg-gradient-to-r from-blue-500">
            <a href="/transaksi" class="flex">
                <img src="../../../assets/icon/iconmoney.png" alt="">
                <p class=" pl-2 font-berge">Data Transaksi</p>
            </a>
        </div>
        <div class="flex pl-5 mt-3 hover:bg-gradient-to-r from-blue-500">
        <a href="/history" class="flex">
            <img src="../../../assets/icon/iconhistory.png" alt="">
            <p class=" pl-2 font-berge font-monn">Data History</p> 
        </a>
            
        </div>
        <div  >
            <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();  
                            this.closest('form').submit();">
                        <div class="flex mt-5 hover:bg-gradient-to-r from-red-600">
                            <img class="ml-2" src="../../../assets/icon/iconlogout.png" alt="">
                            <p class="font-bold font-xl text-black ml-2 mt-1"> {{ __('Log Out') }} </p> 
                        </div>
                            
                        </x-dropdown-link>
            </form>
        </div>
    </div>
@else
    <div class='text-lg px-2 '>  
        <div>
            <p class="pl-14 mb-7 font-semibold">Dashboard</p>
        </div>
        <div class="flex pl-5 mt-3 hover:bg-gradient-to-r from-blue-500">
            <a href="/layanan" class="flex">
                <img src="../assets/icon/iconsepatu.png" alt="">
            <p class=" pl-2 font-berge "> Layanan</p> 
            </a>
        </div>
        <div class="flex pl-5 mt-3 hover:bg-gradient-to-r from-blue-500">
            <a href="/transaksi" class="flex">
                <img src="../assets/icon/iconmoney.png" alt="">
                <p class=" pl-2 font-berge"> Transaksi</p>
            </a>
             
           
        </div>
       <div class="flex pl-5 mt-3 hover:bg-gradient-to-r from-blue-500">
        <a href="/history" class="flex">
            <img src="../assets/icon/iconhistory.png" alt="">
            <p class=" pl-2 font-berge font-monn"> History</p> 
        </a>
        </div>
         <div  >
            <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();  
                            this.closest('form').submit();">
                        <div class="flex mt-5 hover:bg-gradient-to-r from-red-600">
                            <img class="ml-2" src="../../../assets/icon/iconlogout.png" alt="">
                            <p class="font-bold font-xl text-black ml-2 mt-1"> {{ __('Log Out') }} </p> 
                        </div>
                            
                        </x-dropdown-link>
            </form>
        </div>
    </div>
@endif

    

</aside>