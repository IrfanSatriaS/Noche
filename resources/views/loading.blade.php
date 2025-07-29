<!DOCTYPE html>
<html lang="en" class="h-full bg-black">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loading - Noche de Pasión</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
                opacity: 1;
            }
            50% {
                transform: scale(1.1);
                opacity: 0.7;
            }
        }

        .pulse {
            animation: pulse 2s infinite ease-in-out;
        }
    </style>
</head>
<body class="h-full flex items-center justify-center bg-[#1a1a1a] text-white">
    <div class="text-center">
        <!-- Logo / Brand -->
        <h1 class="text-4xl md:text-6xl font-bold text-[#facc15] pulse tracking-widest">NOCHE DE PASIÓN</h1>
        <p class="mt-4 text-sm text-gray-400 tracking-wide">Feel the rhythm... the night begins</p>
    </div>

    <!-- Redirect to home after 3 seconds -->
    <script>
        setTimeout(() => {
            window.location.href = "{{ url('/home') }}"; // Ubah sesuai route home
        }, 3000); // 3 detik
    </script>
</body>
</html>