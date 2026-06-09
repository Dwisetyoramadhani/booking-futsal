@extends('customer.customer_layout')

@section('title', 'History Booking - Andi\'s Futsal')

@section('content')

    <!-- Header Section -->
    <div class="glass-effect rounded-2xl p-8 mb-8">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-primary-800 mb-4">
                <i class="fas fa-history mr-3"></i>History Booking
            </h1>
            <p class="text-lg text-primary-600">
                Daftar seluruh riwayat booking lapangan Anda
            </p>
        </div>
    </div>

    @if (session('success'))
        <div class="glass-effect border-l-4 border-primary-500 rounded-xl p-6 mb-8">
            <div class="flex items-center">
                <div class="w-8 h-8 bg-primary-100 rounded-full flex items-center justify-center mr-3">
                    <i class="fas fa-check text-primary-600"></i>
                </div>
                <div>
                    <h3 class="font-semibold text-primary-800">Berhasil!</h3>
                    <p class="text-primary-700">{{ session('success') }}</p>
                </div>
            </div>
        </div>
    @endif

    <!-- History Booking -->
    <div class="glass-effect rounded-2xl p-8">

        <div class="flex items-center justify-between mb-6">
            <h2 class="text-2xl font-bold text-primary-800">
                <i class="fas fa-calendar-check mr-2"></i>
                Riwayat Booking
            </h2>

            <span class="px-4 py-2 bg-primary-100 text-primary-700 rounded-full font-semibold">
                Total: {{ $pesanan->total() }} Booking
            </span>
        </div>

        @if ($pesanan->count() > 0)
            {{-- add --}}
            <div class="grid grid-cols-2 gap-2">

                @foreach ($pesanan as $item)
                    <div
                        class="border border-primary-200 rounded-2xl p-6 hover:shadow-lg transition-all duration-300 bg-white/50">

                        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-5">

                            <!-- Informasi Booking -->
                            <div class="flex items-start gap-4">

                                <div class="w-14 h-14 bg-primary-100 rounded-xl flex items-center justify-center">
                                    <i class="fas fa-futbol text-primary-600 text-xl"></i>
                                </div>

                                <div>

                                    <h3 class="text-xl font-bold text-primary-800">
                                        {{ $item->lapangan->nama_lapangan ?? '-' }}
                                    </h3>

                                    <div class="mt-3 space-y-2 text-primary-700">

                                        <p>
                                            <i class="fas fa-calendar-alt w-5"></i>
                                            {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}
                                        </p>

                                        <p>
                                            <i class="fas fa-receipt w-5"></i>
                                            Kode Booking:
                                            <span class="font-semibold">
                                                #{{ $item->id }}
                                            </span>
                                        </p>

                                    </div>

                                </div>

                            </div>

                            <!-- Status -->
                            <!-- Status -->
                            <div class="flex flex-col items-start lg:items-end gap-3">

                                @php
                                    $statusColor = match ($item->status) {
                                        'pending' => 'bg-yellow-100 text-yellow-800',
                                        'accepted' => 'bg-green-100 text-green-800',
                                        'rejected' => 'bg-red-100 text-red-800',
                                        default => 'bg-gray-100 text-gray-800',
                                    };
                                @endphp

                                <span class="px-4 py-2 rounded-full text-sm font-bold {{ $statusColor }}">
                                    {{ ucfirst($item->status) }}
                                </span>

                                <span class="text-sm text-primary-500">
                                    Dibuat:
                                    {{ $item->created_at->format('d M Y H:i') }}
                                </span>

                                @if ($item->status === 'accepted')
                                    <a href="{{ url('/customer/bookinglap/detail/' . $item->id) }}"
                                        class="inline-flex items-center px-4 py-2 bg-primary-500 text-white rounded-lg hover:bg-primary-600 transition">
                                        <i class="fas fa-eye mr-2"></i>
                                        Detail
                                    </a>
                                @endif

                            </div>

                        </div>

                    </div>
                @endforeach

            </div>

            <!-- Pagination -->
            <div class="mt-8">
                {{ $pesanan->links() }}
            </div>
        @else
            <div class="text-center py-16">

                <div class="w-24 h-24 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-calendar-times text-primary-400 text-4xl"></i>
                </div>

                <h3 class="text-2xl font-bold text-primary-800 mb-3">
                    Belum Ada Booking
                </h3>

                <p class="text-primary-600 mb-6">
                    Anda belum pernah melakukan booking lapangan.
                </p>

                <a href="/customer/bookinglap"
                    class="inline-flex items-center px-6 py-3 bg-primary-500 text-white rounded-xl hover:bg-primary-600 transition">
                    <i class="fas fa-plus-circle mr-2"></i>
                    Booking Sekarang
                </a>

            </div>

        @endif

    </div>

@endsection
