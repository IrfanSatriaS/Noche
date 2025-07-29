<!DOCTYPE html>
<html lang="en" class="h-full bg-[#1a1a1a] text-white">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event - Noche de Pasión</title>
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="h-full font-serif">

<!-- Navbar -->
<nav class="bg-black bg-opacity-90 shadow-lg" x-data="{ open: false }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex items-center space-x-4">
                <img src="{{ Vite::asset('resources/img/Noche.jpg') }}" alt="Noche de Pasión" class="h-10 w-auto" />
                <span class="text-xl font-extrabold text-[#facc15] tracking-widest">NOCHE DE PASIÓN</span>
            </div>

            <!-- Desktop menu -->
            <div class="hidden md:flex items-center space-x-6">
                <a href="/" class="text-white hover:text-[#facc15]">Home</a>
                <a href="/event" class="text-white hover:text-[#facc15]">Event</a>
                <a href="/gallery" class="text-white hover:text-[#facc15]">Gallery</a>
                <a href="/contact" class="text-white hover:text-[#facc15]">Contact Us</a>

                <!-- Language Switcher -->
                <div x-data="{ openLang: false }" class="relative">
                    <button @click="openLang = !openLang" class="flex items-center gap-1 text-white hover:text-[#facc15] focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4v1m0 14v1m8-8h1M4 12H3m15.36-6.36l-.7.7M6.34 17.66l-.7.7m12.02 0l-.7-.7M6.34 6.34l-.7-.7" />
                        </svg>
                        <span>Language</span>
                    </button>
                    <div x-show="openLang" @click.away="openLang = false"
                        class="absolute right-0 mt-2 w-32 bg-black bg-opacity-95 border border-gray-700 rounded-md shadow-lg z-50">
                        <a href="?lang=id" class="block px-4 py-2 text-sm text-white hover:bg-[#facc15] hover:text-black">🇮🇩 Indonesia</a>
                        <a href="?lang=en" class="block px-4 py-2 text-sm text-white hover:bg-[#facc15] hover:text-black">🇬🇧 English</a>
                        <a href="?lang=la" class="block px-4 py-2 text-sm text-white hover:bg-[#facc15] hover:text-black">🏛️ Latin</a>
                    </div>
                </div>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button @click="open = !open" class="text-white focus:outline-none">
                    <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Dropdown Menu -->
    <div x-show="open" x-transition class="md:hidden px-4 pb-4 pt-2 space-y-2 bg-black bg-opacity-95">
        <a href="#" class="block text-white hover:text-[#facc15]">Home</a>
        <a href="#" class="block text-white hover:text-[#facc15]">Event</a>
        <a href="#" class="block text-white hover:text-[#facc15]">Gallery</a>
        <a href="#" class="block text-white hover:text-[#facc15]">Contact</a>

        <!-- Mobile Language Switcher -->
        <hr class="border-gray-700 my-2">
        <div class="text-white font-semibold">🌐 Language</div>
        <a href="?lang=id" class="block text-white hover:text-[#facc15] ml-2">🇮🇩 Indonesia</a>
        <a href="?lang=en" class="block text-white hover:text-[#facc15] ml-2">🇬🇧 English</a>
        <a href="?lang=la" class="block text-white hover:text-[#facc15] ml-2">🏛️ Latin</a>
    </div>
</nav>

<!-- Hero -->
<section class="relative h-[60vh] bg-cover bg-center flex items-center justify-center" style="background-image: url('{{ Vite::asset('resources/img/bg-latino-night.jpg') }}'); margin-top:64px;">
    <div class="absolute inset-0 bg-black bg-opacity-60"></div>
    <div class="relative z-10 text-center px-4">
        <h1 class="text-5xl font-extrabold text-white mb-4">All Events</h1>
        <p class="text-[#facc15] text-lg md:text-xl">Celebrate rhythm and soul across the islands</p>
    </div>
</section>

<!-- Event Grid -->
<section class="py-16 bg-[#111]">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-3xl md:text-4xl text-center text-[#facc15] font-bold mb-12">Upcoming Latin Nights</h2>
        <div class="grid gap-8 sm:grid-cols-2 md:grid-cols-3">

            <!-- Event 1 -->
            <div class="bg-white rounded-lg overflow-hidden text-black shadow-md hover:shadow-xl transition">
                <img src="{{ Vite::asset('resources/img/event1.jpg') }}" class="w-full h-48 object-cover" alt="Event 1">
                <div class="p-5">
                    <h3 class="text-xl font-bold mb-1">Noche Caliente</h3>
                    <p class="text-sm text-gray-700 mb-1">31 Agustus 2025 • Sky Lounge Jakarta</p>
                    <p class="text-xs text-gray-600 mb-4">🔥 Salsa • 🎧 Latin DJ • 🌆 Rooftop Party</p>
                    <a href="#" class="inline-block px-4 py-2 bg-[#facc15] text-black rounded-full text-sm font-semibold hover:bg-yellow-300">Get Ticket</a>
                </div>
            </div>

            <!-- Event 2 -->
            <div class="bg-white rounded-lg overflow-hidden text-black shadow-md hover:shadow-xl transition">
                <img src="{{ Vite::asset('resources/img/event2.jpg') }}" class="w-full h-48 object-cover" alt="Event 2">
                <div class="p-5">
                    <h3 class="text-xl font-bold mb-1">Sabor Latino</h3>
                    <p class="text-sm text-gray-700 mb-1">14 September 2025 • Bali Nightclub</p>
                    <p class="text-xs text-gray-600 mb-4">💃 Bachata • 🍹 Mojito Bar • 🎶 Live DJ</p>
                    <a href="#" class="inline-block px-4 py-2 bg-[#facc15] text-black rounded-full text-sm font-semibold hover:bg-yellow-300">Join Now</a>
                </div>
            </div>

            <!-- Event 3 -->
            <div class="bg-white rounded-lg overflow-hidden text-black shadow-md hover:shadow-xl transition">
                <img src="{{ Vite::asset('resources/img/event3.jpg') }}" class="w-full h-48 object-cover" alt="Event 3">
                <div class="p-5">
                    <h3 class="text-xl font-bold mb-1">Latino Moonlight</h3>
                    <p class="text-sm text-gray-700 mb-1">27 Oktober 2025 • Bandung Rooftop</p>
                    <p class="text-xs text-gray-600 mb-4">🎷 Live Music • 🌕 Moonlight Dance • 🍸 Latin Drinks</p>
                    <a href="#" class="inline-block px-4 py-2 bg-[#facc15] text-black rounded-full text-sm font-semibold hover:bg-yellow-300">Reserve Spot</a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-black text-center py-5 text-gray-500 text-sm border-t border-gray-700">
    &copy; 2025 Noche de Pasión. All rights reserved.
</footer>

</body>
</html>
