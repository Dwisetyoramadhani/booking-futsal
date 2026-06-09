@extends('admin.admin_layout')

@section('title', 'Tolak Pesanan')
@section('header', 'Tolak Pesanan')

@section('content')
<div class="container mx-auto p-5 max-w-4xl">

    <div class="bg-white rounded-xl shadow-lg overflow-hidden">

        <div class="bg-red-600 text-white px-6 py-4">
            <h1 class="text-2xl font-bold">
                Tolak Pesanan #{{ $pesanan->id }}
            </h1>
        </div>

        <div class="p-6">

            @if ($errors->any())
                <div class="bg-red-100 border border-red-300 text-red-700 px-4 py-3 rounded-lg mb-6">
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">

                <div class="bg-gray-100 p-4 rounded-lg">
                    <p class="text-gray-500 text-sm">ID Booking</p>
                    <p class="font-semibold text-lg">
                        #{{ $pesanan->id }}
                    </p>
                </div>

                <div class="bg-gray-100 p-4 rounded-lg">
                    <p class="text-gray-500 text-sm">Status</p>
                    <p class="font-semibold text-lg">
                        {{ ucfirst($pesanan->status) }}
                    </p>
                </div>

                <div class="bg-gray-100 p-4 rounded-lg">
                    <p class="text-gray-500 text-sm">Tanggal Booking</p>
                    <p class="font-semibold text-lg">
                        {{ $pesanan->tanggal }}
                    </p>
                </div>

                <div class="bg-gray-100 p-4 rounded-lg">
                    <p class="text-gray-500 text-sm">Jam</p>
                    <p class="font-semibold text-lg">
                        {{ $pesanan->jam }}
                    </p>
                </div>

            </div>

            <form action="{{ route('admin.booking.reject', $pesanan->id) }}" method="POST">
                @csrf

                <div class="mb-6">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        Alasan Penolakan
                    </label>

                    <textarea
                        name="alasan_penolakan"
                        rows="5"
                        required
                        class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-red-500 focus:border-red-500"
                        placeholder="Masukkan alasan penolakan...">{{ old('alasan_penolakan') }}</textarea>

                    @error('alasan_penolakan')
                        <p class="text-red-500 text-sm mt-2">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="flex gap-3">

                    <button
                        type="submit"
                        class="bg-red-600 hover:bg-red-700 text-white font-semibold px-6 py-3 rounded-lg transition duration-200">
                        Tolak Pesanan
                    </button>

                    <a
                        href="{{ route('admin.booking.index') }}"
                        class="bg-gray-500 hover:bg-gray-600 text-white font-semibold px-6 py-3 rounded-lg transition duration-200">
                        Kembali
                    </a>

                </div>

            </form>

        </div>
    </div>

</div>
@endsection
