@extends('admin.admin_layout')

@section('title', 'Tolak Pesanan - Andi\'s Futsal')
@section('header', 'Tolak Pesanan')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-md">

    <h1 class="text-2xl font-bold mb-6 text-gray-800">
        Tolak Pesanan
    </h1>

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            <ul class="list-disc ml-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">

        <div>
            <label class="block text-gray-700 font-semibold mb-1">
                ID Pesanan
            </label>
            <div class="border border-gray-300 rounded p-2 bg-gray-50">
                #{{ $pesanan->id }}
            </div>
        </div>

        <div>
            <label class="block text-gray-700 font-semibold mb-1">
                Status
            </label>
            <div class="border border-gray-300 rounded p-2 bg-gray-50">
                {{ ucfirst($pesanan->status) }}
            </div>
        </div>

        @if(isset($pesanan->nama_lengkap))
        <div>
            <label class="block text-gray-700 font-semibold mb-1">
                Nama Pemesan
            </label>
            <div class="border border-gray-300 rounded p-2 bg-gray-50">
                {{ $pesanan->nama_lengkap }}
            </div>
        </div>
        @endif

        @if(isset($pesanan->tanggal))
        <div>
            <label class="block text-gray-700 font-semibold mb-1">
                Tanggal Booking
            </label>
            <div class="border border-gray-300 rounded p-2 bg-gray-50">
                {{ $pesanan->tanggal }}
            </div>
        </div>
        @endif

    </div>

    <form action="{{ route('admin.booking.reject', $pesanan->id) }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label class="block text-gray-700 font-semibold">
                Alasan Penolakan
            </label>

            <textarea
                name="alasan_penolakan"
                rows="5"
                class="border border-gray-300 rounded w-full p-2 mt-1"
                placeholder="Masukkan alasan penolakan..."
                required>{{ old('alasan_penolakan') }}</textarea>

            @error('alasan_penolakan')
                <p class="text-red-500 text-sm mt-1">
                    {{ $message }}
                </p>
            @enderror

            <p class="text-gray-500 text-sm mt-1">
                Minimal 10 karakter.
            </p>
        </div>

        <div class="flex gap-2">

            <button
                type="submit"
                class="bg-red-500 hover:bg-red-700 text-white px-4 py-2 rounded">
                <i class="fas fa-times"></i>
                Tolak Pesanan
            </button>

            <a
                href="{{ route('admin.booking.index') }}"
                class="bg-gray-500 hover:bg-gray-700 text-white px-4 py-2 rounded">
                <i class="fas fa-arrow-left"></i>
                Kembali
            </a>

        </div>

    </form>

</div>
@endsection
