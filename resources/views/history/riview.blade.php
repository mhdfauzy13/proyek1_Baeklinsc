<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>riview</title>
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


</body>
</html>