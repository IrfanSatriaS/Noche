<!DOCTYPE html>
<html lang="en" class="h-full bg-[#1a1a1a] text-white">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noche de Pasión</title>
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

<!-- Hero Section -->
<header class="relative h-screen bg-cover bg-center" style="background-image: url('{{ Vite::asset('resources/img/bg-latino-night.jpg') }}')">
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    <div class="relative z-10 flex flex-col justify-center items-center h-full text-center px-4">
        <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-4 tracking-tight">
            Vive la noche latina
        </h1>
        <p class="text-lg md:text-2xl text-[#facc15] mb-6">Musik. Ritmo. Pasión.</p>
        <a href="#" class="px-6 py-3 bg-[#facc15] text-black rounded-full text-lg font-semibold hover:bg-yellow-400 transition">
            Join the Fiesta
        </a>
    </div>
</header>

<!-- Event Preview -->
<section class="bg-[#111] py-16">
    <div class="max-w-5xl mx-auto text-center">
        <h2 class="text-3xl font-bold mb-6 text-[#facc15]">Upcoming Event</h2>
        <p class="text-gray-300 mb-8">Salsa, Bachata, Reggaeton & more in one unforgettable night!</p>
        <div class="flex flex-col md:flex-row gap-6 justify-center items-center">
            <div class="bg-white text-black rounded-lg overflow-hidden w-full max-w-sm">
                <img src="{{ Vite::asset('resources/img/event1.jpg') }}" class="w-full h-48 object-cover" alt="Event">
                <div class="p-4">
                    <h3 class="text-xl font-bold mb-2">Noche Caliente</h3>
                    <p class="text-sm text-gray-700 mb-4">31 Agustus 2025 | Sky Lounge, Jakarta</p>
                    <a href="#" class="text-[#facc15] font-semibold hover:underline">Lihat detail</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-black text-white pt-12 pb-8 px-4">
    <div class="max-w-7xl mx-auto grid md:grid-cols-3 gap-8">
        <div>
            <img src="{{ Vite::asset('resources/img/Noche.jpg') }}" alt="Noche de Pasión" class="h-10 mb-4" />
            <p class="text-sm text-gray-300 leading-relaxed">
                Noche de Pasión HQ<br>
                Plaza Latino, Unit 5A, Kemang Raya,<br>
                Jakarta Selatan, Indonesia 12730
            </p>
            <div class="flex items-center gap-4 mt-4">
                <!-- Instagram -->
                <a href="https://instagram.com/nochedepasionn" target="_blank"
                   class="bg-yellow-400 p-2 rounded-full hover:scale-105 transition transform duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M7 2C4.2 2 2 4.2 2 7v10c0 2.8 2.2 5 5 5h10c2.8 0 5-2.2 5-5V7c0-2.8-2.2-5-5-5H7zm5 5c2.2 0 4 1.8 4 4s-1.8 4-4 4-4-1.8-4-4 1.8-4 4-4zm5.2-1.8a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4zM12 9a3 3 0 100 6 3 3 0 000-6z"/>
                    </svg>
                </a>

                <!-- WhatsApp -->
                <a href="https://wa.me/6281234567890" target="_blank"
                   class="bg-yellow-400 p-2 rounded-full hover:scale-105 transition transform duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-black" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C6.5 2 2 6.3 2 11.7c0 2 .6 3.9 1.7 5.5L2 22l4.9-1.6c1.5.8 3.2 1.2 5.1 1.2 5.5 0 10-4.3 10-9.7S17.5 2 12 2zm5.1 14.3c-.2.6-1.1 1.1-1.5 1.2-.4.1-.9.2-3-.6-2.5-1-4.1-3.5-4.2-3.6s-1-1.4-1-2.6c0-1.1.7-1.6.9-1.8.2-.1.5-.2.7-.2.2 0 .3 0 .4 0 .1 0 .3-.1.4.3.2.4.5 1.3.6 1.4.1.1.1.2 0 .3s-.2.3-.4.5c-.1.1-.3.3-.1.6.2.4.6.9 1.3 1.5.9.7 1.6.9 2 .9.2 0 .4 0 .6-.3.2-.3.7-.9.9-1.2s.4-.3.6-.2.3.1.4.2.2.3.1.9z"/>
                    </svg>
                </a>

                <!-- Email -->
                <a href="mailto:info@nochedepasion.id" class="flex items-center space-x-2 text-sm text-gray-300 hover:text-yellow-400">
                    <div class="bg-yellow-400 p-2 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8m0 8a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h14a2 2 0 012 2z"/>
                        </svg>
                    </div>
                    <span>info@nochedepasion.id</span>
                </a>
            </div>
        </div>

        <!-- Spacer -->
        <div class="hidden md:block"></div>

        <!-- Info -->
        <div class="grid grid-cols-2 gap-4">
            <div>
                <h4 class="text-gray-400 font-semibold mb-3 uppercase text-sm tracking-wide">Informasi Lainnya</h4>
                <ul class="space-y-2 text-sm text-gray-300">
                    <li><a href="#" class="hover:text-[#facc15]">Tentang Kami</a></li>
                    <li><a href="#" class="hover:text-[#facc15]">Berita</a></li>
                    <li><a href="#" class="hover:text-[#facc15]">Karier</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-gray-400 font-semibold mb-3 invisible md:visible uppercase text-sm tracking-wide">&nbsp;</h4>
                <ul class="space-y-2 text-sm text-gray-300">
                    <li><a href="#" class="hover:text-[#facc15]">Reservasi</a></li>
                    <li><a href="#" class="hover:text-[#facc15]">Brands</a></li>
                    <li><a href="#" class="hover:text-[#facc15]">Hubungi Kami</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="border-t border-gray-700 mt-10 pt-4 text-center text-sm text-gray-500">
        &copy; 2025 Noche de Pasión. All rights reserved.
    </div>
</footer>

</body>
</html>
