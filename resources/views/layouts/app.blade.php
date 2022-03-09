<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        @yield('css')
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    </head>
    <body class="font-sans antialiased">
        
        <div class="min-h-screen bg-white">
        <div class="flex justify-between py-2">
            <div class="flex text-sm">
                <a class="px-3">Contact</a>
                <a class="px-3">About us</a>
                <a class="px-3">FAQ's</a>
            </div>
            <div class="flex">
                <i class="fab fa-facebook  "></i>
                <i class="fab fa-instagram px-2 mx-5"></i>
            </div>
        </div>
        <hr>
        {{-- Navbar start --}}
        <div class="flex px-10 justify-center mt-2">
            <a class="px-5 hover:text-blue-500 cursor-pointer">Home</a>
            <a class="px-5 hover:text-blue-500 cursor-pointer">About us</a>
            <a class="px-5 hover:text-blue-500 cursor-pointer">Shop Now</a>
            <a><img src="{{asset('images/logo.png')}}" class="w-12 h-12"></a>
            <a class="px-5 hover:text-blue-500 cursor-pointer">Client</a>
            <a class="px-5 hover:text-blue-500 cursor-pointer">Distribution</a>
            <a class="px-5 hover:text-blue-500 cursor-pointer">Contact Us</a>
        </div>
        {{-- Navbar close --}}
        @yield('main')
        <p class="text-3xl text-center py-3">"Nepal's Most Loved Hybrid Luxury Mattress Brand."</p>

        <div class="grid grid-cols-3 bg-blue-700 w-full h-50 text-white">
            
            <div class="flex  border-2 border-blue-300  m-10">
                <div class="p-2">
                <i class="fas fa-thumbs-up fa-4x"></i>
                </div>
                <div >
                <h1 class="font-bold font-mono text-4xl">High Quality</h1>
                <p class="text-2xl">High Quality Materials used in our Products</p>
                </div>
            </div>

            <div class="flex  border-2 border-blue-300  m-10">
                <div class="p-2">
                <i class="fas fa-thumbs-up fa-4x"></i>
                </div>
                <div >
                <h1 class="font-bold font-mono text-4xl">Durable</h1>
                <p class="text-2xl">All our Products are Durable & Long Lasting</p>
                </div>
            </div>

            <div class="flex  border-2 border-blue-300  m-10">
                <div class="p-2">
                <i class="fas fa-heart fa-4x"></i>
                </div>
                <div >
                <h1 class="font-bold font-mono text-4xl">Comfortable</h1>
                <p class="text-2xl">Feel the Comfort with all range of Products</p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-2 bg-gray-400">
            <div class="p-[15%]" >
                <h1 class="font-bold text-2xl text-blue-400">Who are we?</h1>
                <p class="text-xl font-serif">" Subek Trade Concern is the first mattress suppliers company in Chitwan. We provide products like Mattress, Towel, Bedsheet, Quil/Duvet, Pillow, Cushion, Quilt Cover, Bed Runner, 
                    Cushion Cover. Pillow Cover, Mattress Protector, Door Mat. "</p>
            </div>
            <div class="p-[15%]">
                
                @yield('slide')
                
            </div>
        </div>

        <div>
            <div class="flex justify-between font-bold text-2xl px-16 py-5">
                <h1>Categories</h1>
                <h1 class="text-blue-500">See More<i class="fas fa-arrow-right px-2 py-1"></i></h1>
            </div>
            <div class="flex">
                
            </div>
        </div>

        {{-- footer open --}}
        <div class="bg-blue-700 h-70 text-white">
            <div class="grid grid-cols-4">
                <div>
                    <img src="{{asset('images/logo.png')}}" class="w-15 h-15 px-5"> 
                    <i class="fab fa-facebook-square ml-[30%]"></i>
                    <i class="fab fa-instagram-square"></i>
                </div>
                <div >
                    <h1 class="font-bold font-mono text-xl mt-5">About us</h1>
                    <p class="text-justify ">Subek Trade Concern is the first mattress suppliers company in Chitwan. We provide products like Mattress, Towel, Bedsheet, Quil/Duvet, Pillow, Cushion, Quilt Cover, Bed Runner, Cushion Cover. Pillow Cover, Mattress Protector, Door Mat.</p>
                </div>
                <div>
                    <h1 class="text-xl mt-5 pl-12">Contact Details</h1>
                    <p class="mt-3 pl-12">Subek Trade Concern pvt.ltd</p>
                    <i class="fas fa-location pl-12"></i>Bharatpur-3,chitwan
                </div> 
                <div>
                    <h1 class="pl-8">Quick Links</h1>
                </div>
            </div>
        </div>
        @yield('js')
    </body>
</html>
