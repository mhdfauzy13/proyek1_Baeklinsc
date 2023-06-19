<aside class="h-screen bg-white w-[250px]">
    <div class="flex pb-[50px]">
       <img src="/assets/image/logoBaeklinsc.png" class="pt-4 ml-2" width="190px" />
    </div>
    
    @if(auth()->check() && auth()->user()->role == 'admin')
        <div class=' px-2 '>  
        <div>
            <p class="pl-14 mb-7 font-semibold">Administrator</p>
        </div>
        
        <div class="flex pl-5 mt-3 hover:bg-gradient-to-r from-blue-500">
            <a href={{ route('layanan.admin') }} class="flex">
                <img src="../assets/icon/iconsepatu.png" alt="">
            <p class=" pl-2 font-semibold ">Management Layanan</p> 
            </a>
        </div>
        <div class="flex pl-5 mt-3 hover:bg-gradient-to-r from-blue-500">
            <a href="/transaksi" class="flex">
                <img src="../assets/icon/iconmoney.png" alt="">
                <p class=" pl-2 font-semibold">Management Transaksi</p>
            </a>
        </div>
        <div class="flex pl-5 mt-3 hover:bg-gradient-to-r from-blue-500">
        <a href="/history" class="flex">
            <img src="../assets/icon/iconhistory.png" alt="">
            <p class=" pl-2 font-semibold font-monn">Management History</p> 
        </a>
            
        </div>
        <div>
             <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();  
                            this.closest('form').submit();">
                            {{ __('Log Out') }}
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
            <p class=" pl-2 font-semibold "> Layanan</p> 
            </a>
        </div>
        <div class="flex pl-5 mt-3 hover:bg-gradient-to-r from-blue-500">
            <a href="/transaksi" class="flex">
                <img src="../assets/icon/iconmoney.png" alt="">
                <p class=" pl-2 font-semibold"> Transaksi</p>
            </a>
             
           
        </div>
       <div class="flex pl-5 mt-3 hover:bg-gradient-to-r from-blue-500">
        <a href="/history" class="flex">
            <img src="../assets/icon/iconhistory.png" alt="">
            <p class=" pl-2 font-semibold font-monn"> History</p> 
        </a>
            
        </div>
    </div>
@endif

    

</aside>