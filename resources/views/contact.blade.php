<!DOCTYPE html>
<html lang="en" class="h-full bg-[#1a1a1a] text-white">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Noche de Pasión</title>
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
<section class="relative h-[50vh] bg-cover bg-center flex items-center justify-center mt-16" style="background-image: url('{{ Vite::asset('resources/img/contact-hero.jpg') }}')">
    <div class="absolute inset-0 bg-black bg-opacity-60"></div>
    <div class="relative z-10 text-center">
        <h1 class="text-5xl font-extrabold text-white mb-2">Get in Touch</h1>
        <p class="text-[#facc15] text-lg">Connect, Collaborate, Celebrate.</p>
    </div>
</section>

<!-- Contact Info + Form -->
<section class="py-16 bg-[#1a1a1a]">
    <div class="max-w-4xl mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-10">
            <!-- Info -->
            <div>
                <h2 class="text-3xl font-bold text-[#facc15] mb-6">Contact Us</h2>
                <ul class="space-y-4 text-gray-300 text-sm">
                    <li><span class="font-semibold text-white">Email:</span> <a href="mailto:info@nochedepasion.id" class="text-[#facc15] hover:underline">info@nochedepasion.id</a></li>
                    <li><span class="font-semibold text-white">Instagram (Official):</span> <a href="https://instagram.com/nochedepasionn" class="text-[#facc15] hover:underline">@nochedepasionn</a></li>
                    <li><span class="font-semibold text-white">Instagram (Community):</span> <a href="https://instagram.com/noche.oficial" class="text-[#facc15] hover:underline">@noche.oficial</a></li>
                    <li><span class="font-semibold text-white">Location:</span> Jakarta • Bali • Bandung</li>
                </ul>
            </div>

            <!-- Form -->
            <div>
                <h2 class="text-3xl font-bold text-[#facc15] mb-6">Send Us a Message</h2>
                <form action="#" method="POST" class="space-y-4">
                    <input type="text" name="name" placeholder="Your Name" required
                        class="w-full px-4 py-2 rounded bg-gray-800 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-[#facc15]">
                    
                    <input type="email" name="email" placeholder="Your Email" required
                        class="w-full px-4 py-2 rounded bg-gray-800 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-[#facc15]">

                    <textarea name="message" rows="4" placeholder="Your Message" required
                        class="w-full px-4 py-2 rounded bg-gray-800 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-[#facc15]"></textarea>

                    <button type="submit"
                        class="bg-[#facc15] text-black font-semibold px-6 py-2 rounded hover:bg-yellow-300 transition">
                        Send Message
                    </button>
                </form>
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
