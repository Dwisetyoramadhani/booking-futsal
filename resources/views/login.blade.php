<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - Andi's Futsal</title>
    <meta name="description" content="Masuk ke akun Andi's Futsal Anda dan booking permainan selanjutnya.">

    <!-- Tailwind CSS with custom config -->
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
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.6s ease-out',
                        'slide-up': 'slideUp 0.6s ease-out',
                        'float': 'float 6s ease-in-out infinite',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': {
                                opacity: '0',
                                transform: 'translateY(20px)'
                            },
                            '100%': {
                                opacity: '1',
                                transform: 'translateY(0)'
                            },
                        },
                        slideUp: {
                            '0%': {
                                transform: 'translateY(30px)',
                                opacity: '0'
                            },
                            '100%': {
                                transform: 'translateY(0)',
                                opacity: '1'
                            },
                        },
                        float: {
                            '0%, 100%': {
                                transform: 'translateY(0px) rotate(0deg)'
                            },
                            '50%': {
                                transform: 'translateY(-20px) rotate(180deg)'
                            },
                        }
                    }
                }
            }
        }
    </script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', system-ui, sans-serif;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #059669 0%, #047857 50%, #065f46 100%);
        }

        .glass-effect {
            backdrop-filter: blur(16px);
            background: rgba(255, 255, 255, 0.95);
        }

        .input-focus {
            transition: all 0.3s ease;
        }

        .input-focus:focus {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(34, 197, 94, 0.15);
        }

        .btn-hover {
            transition: all 0.3s ease;
        }

        .btn-hover:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(34, 197, 94, 0.4);
        }

        .floating {
            animation: float 6s ease-in-out infinite;
        }

        .floating-delayed {
            animation: float 6s ease-in-out infinite;
            animation-delay: -3s;
        }

        .floating-delayed-2 {
            animation: float 6s ease-in-out infinite;
            animation-delay: -1.5s;
        }
    </style>
</head>

<body class="bg-slate-50 min-h-screen">
    <div class="min-h-screen flex">

        <!-- Left Side -->
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

        <!-- Right Side -->
        <div class="w-full lg:w-1/2 flex items-center justify-center px-6 py-12">

            <div class="w-full max-w-md">

                <!-- Mobile Logo -->
                <div class="lg:hidden text-center mb-8">
                    <div class="w-14 h-14 bg-green-600 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-futbol text-white"></i>
                    </div>

                    <h1 class="text-2xl font-bold text-slate-900">
                        Andi's Futsal
                    </h1>
                </div>

                <!-- Card -->
                <div class="bg-white rounded-2xl shadow-lg border border-slate-200 p-8">

                    <div class="mb-8">
                        <h2 class="text-3xl font-bold text-slate-900 mb-2">
                            Masuk
                        </h2>

                        <p class="text-slate-500">
                            Silakan masuk ke akun Anda.
                        </p>
                    </div>

                    @if (session('success'))
                        <div class="mb-5 bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->has('loginError'))
                        <div class="mb-5 bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg">
                            {{ $errors->first('loginError') }}
                        </div>
                    @endif

                    <form action="{{ route('autentic') }}" method="POST">
                        @csrf

                        <div class="mb-5">
                            <label class="block text-sm font-medium text-slate-700 mb-2">
                                Username
                            </label>

                            <input type="text" name="username" value="{{ old('username') }}"
                                class="w-full h-12 px-4 border border-slate-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none"
                                placeholder="Masukkan username">
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-medium text-slate-700 mb-2">
                                Kata Sandi
                            </label>

                            <div class="relative">
                                <input id="password" type="password" name="password"
                                    class="w-full h-12 px-4 pr-12 border border-slate-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none"
                                    placeholder="Masukkan kata sandi">

                                <button type="button" id="togglePassword"
                                    class="absolute right-4 top-1/2 -translate-y-1/2 text-slate-500">

                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>

                        <button type="submit"
                            class="w-full h-12 bg-green-600 hover:bg-green-700 text-white font-semibold rounded-xl transition">

                            Masuk
                        </button>
                    </form>

                    <div class="mt-8 text-center">
                        <span class="text-slate-500 text-sm">
                            Belum punya akun?
                        </span>

                        <a href="{{ route('register') }}"
                            class="text-green-600 font-semibold hover:text-green-700 ml-1">

                            Daftar
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
