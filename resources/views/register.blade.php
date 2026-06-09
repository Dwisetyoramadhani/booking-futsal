<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Akun - Andi's Futsal</title>
    <meta name="description" content="Buat akun Andi's Futsal Anda dan mulai booking lapangan premium hari ini.">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f0fdf4',
                            100: '#dcfce7',
                            200: '#bbf7d0',
                            300: '#86efac',
                            400: '#4ade80',
                            500: '#22c55e',
                            600: '#16a34a',
                            700: '#15803d',
                            800: '#166534',
                            900: '#14532d',
                        }
                    },
                    fontFamily: {
                        'display': ['Inter', 'system-ui', 'sans-serif'],
                        'body': ['Inter', 'system-ui', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', system-ui, sans-serif;
        }
    </style>
</head>

<body class="bg-slate-50 min-h-screen">
    <div class="min-h-screen flex">

        <div class="hidden lg:flex lg:w-1/2 bg-gradient-to-br from-green-700 to-green-900 text-white">
            <div class="w-full flex flex-col justify-center px-20">
                <div class="max-w-md">
                    <div class="w-16 h-16 rounded-2xl bg-white/10 flex items-center justify-center mb-8">
                        <i class="fas fa-futbol text-2xl"></i>
                    </div>

                    <h1 class="text-5xl font-bold leading-tight mb-6">
                        Andi's Futsal
                    </h1>

                    <p class="text-lg text-green-100 leading-relaxed mb-10">
                        Sistem booking lapangan futsal yang mudah, cepat,
                        dan dapat diakses kapan saja.
                    </p>

                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-3xl font-bold">500+</h3>
                            <p class="text-green-100">Pelanggan Aktif</p>
                        </div>

                        <div>
                            <h3 class="text-3xl font-bold">4</h3>
                            <p class="text-green-100">Lapangan</p>
                        </div>

                        <div>
                            <h3 class="text-3xl font-bold">24/7</h3>
                            <p class="text-green-100">Booking Online</p>
                        </div>

                        <div>
                            <h3 class="text-3xl font-bold">100%</h3>
                            <p class="text-green-100">Realtime</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full lg:w-1/2 flex items-center justify-center px-6 py-8 sm:py-12">
            <div class="w-full max-w-lg">

                <div class="lg:hidden text-center mb-6">
                    <div class="w-14 h-14 bg-green-600 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-futbol text-white"></i>
                    </div>

                    <h1 class="text-2xl font-bold text-slate-900">
                        Andi's Futsal
                    </h1>
                </div>

                <div class="bg-white rounded-2xl shadow-lg border border-slate-200 p-6 sm:p-8">

                    <div class="mb-6">
                        <h2 class="text-3xl font-bold text-slate-900 mb-2">
                            Buat Akun
                        </h2>
                        <p class="text-slate-500">
                            Bergabunglah dengan komunitas Andi's Futsal hari ini.
                        </p>
                    </div>

                    <form action="{{ route('register.store') }}" method="POST">
                        @csrf

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-slate-700 mb-1.5">
                                Nama Lengkap
                            </label>
                            <input type="text" name="nama" value="{{ old('nama') }}"
                                class="w-full h-11 px-4 border border-slate-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition-all @error('nama') border-red-300 bg-red-50 @enderror"
                                placeholder="Masukkan nama lengkap">
                            @error('nama')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-slate-700 mb-1.5">
                                Username
                            </label>
                            <input type="text" name="username" value="{{ old('username') }}"
                                class="w-full h-11 px-4 border border-slate-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition-all @error('username') border-red-300 bg-red-50 @enderror"
                                placeholder="Pilih username">
                            @error('username')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-slate-700 mb-1.5">
                                Alamat Email
                            </label>
                            <input type="email" name="email" value="{{ old('email') }}"
                                class="w-full h-11 px-4 border border-slate-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition-all @error('email') border-red-300 bg-red-50 @enderror"
                                placeholder="Masukkan email Anda">
                            @error('email')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-1.5">
                                    Nomor Telepon
                                </label>
                                <input type="text" name="no_hp" value="{{ old('no_hp') }}"
                                    class="w-full h-11 px-4 border border-slate-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition-all @error('no_hp') border-red-300 bg-red-50 @enderror"
                                    placeholder="Nomor telepon">
                                @error('no_hp')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-1.5">
                                    Tanggal Lahir
                                </label>
                                <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}"
                                    class="w-full h-11 px-4 border border-slate-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition-all text-slate-600 @error('tanggal_lahir') border-red-300 bg-red-50 @enderror">
                                @error('tanggal_lahir')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-1.5">
                                    Kata Sandi
                                </label>
                                <div class="relative">
                                    <input id="password" type="password" name="password"
                                        class="w-full h-11 px-4 pr-10 border border-slate-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition-all @error('password') border-red-300 bg-red-50 @enderror"
                                        placeholder="Kata sandi">
                                    <button type="button" id="togglePassword" class="absolute right-3 top-1/2 -translate-y-1/2 text-slate-500 hover:text-slate-700">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                                @error('password')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-1.5">
                                    Konfirmasi Sandi
                                </label>
                                <input id="password_confirmation" type="password" name="password_confirmation"
                                    class="w-full h-11 px-4 border border-slate-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition-all"
                                    placeholder="Konfirmasi">
                            </div>
                        </div>

                        <button type="submit"
                            class="w-full h-12 bg-green-600 hover:bg-green-700 text-white font-semibold rounded-xl transition shadow-sm mb-4">
                            Daftar Akun
                        </button>
                    </form>

                    <div class="mt-6 text-center">
                        <span class="text-slate-500 text-sm">
                            Sudah punya akun?
                        </span>
                        <a href="{{ route('login') }}"
                            class="text-green-600 font-semibold hover:text-green-700 ml-1 text-sm">
                            Masuk
                        </a>
                    </div>

                </div>

            </div>
        </div>

    </div>

    <script>
        document.getElementById('togglePassword')
            .addEventListener('click', function() {
                const password = document.getElementById('password');
                const icon = this.querySelector('i');

                if (password.type === 'password') {
                    password.type = 'text';
                    icon.classList.replace('fa-eye', 'fa-eye-slash');
                } else {
                    password.type = 'password';
                    icon.classList.replace('fa-eye-slash', 'fa-eye');
                }
            });
    </script>
</body>

</html>
