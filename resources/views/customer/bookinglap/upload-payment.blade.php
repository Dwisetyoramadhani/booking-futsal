@extends('customer.customer_layout')

@section('title', 'Upload Bukti Pembayaran')

@section('content')

<div class="max-w-4xl mx-auto py-8 px-4">

    <a href="/customer/riwayat"
       class="inline-flex items-center px-4 py-2 border border-primary-500 text-primary-600 rounded-lg hover:bg-primary-500 hover:text-white transition mb-6">
        <i class="fas fa-arrow-left mr-2"></i>
        Kembali
    </a>

    <div class="glass-effect rounded-2xl overflow-hidden shadow-lg">

        <div class="bg-primary-500 text-white p-6">
            <h1 class="text-2xl font-bold">
                Upload Bukti Pembayaran
            </h1>
            <p class="opacity-90 mt-1">
                Silakan upload bukti transfer untuk pesanan Anda.
            </p>
        </div>

        <div class="p-8">

            @if(session('success'))
                <div class="bg-green-100 border border-green-300 text-green-700 p-4 rounded-lg mb-6">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="bg-red-100 border border-red-300 text-red-700 p-4 rounded-lg mb-6">
                    <ul class="list-disc ml-5">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="grid md:grid-cols-2 gap-8">

                <div>
                    <img src="{{ asset('storage/'.$pesanan->lapangan->foto) }}"
                         alt="{{ $pesanan->lapangan->nama_lapangan }}"
                         class="rounded-xl w-full h-64 object-cover">
                </div>

                <div>

                    <h2 class="text-2xl font-bold text-primary-800 mb-4">
                        {{ $pesanan->lapangan->nama_lapangan }}
                    </h2>

                    <div class="space-y-2 text-gray-700 mb-6">
                        <p><strong>Kode Booking:</strong> #{{ $pesanan->id }}</p>
                        <p><strong>Nama:</strong> {{ $pesanan->nama_lengkap }}</p>
                        <p><strong>Jumlah Jam:</strong> {{ $pesanan->jumlah_jam }} Jam</p>
                        <p><strong>Total Bayar:</strong> Rp {{ number_format($pesanan->total_biaya,0,',','.') }}</p>
                        <p><strong>Transfer ke: BCA - 019301</p>
                    </div>

                    @if($pesanan->bukti_pembayaran)

                        <div class="bg-green-50 border border-green-200 rounded-xl p-4">
                            <p class="text-green-700 font-semibold">
                                Bukti pembayaran sudah diupload.
                            </p>

                            <a href="{{ asset('storage/'.$pesanan->bukti_pembayaran) }}"
                               target="_blank"
                               class="text-blue-600 underline">
                                Lihat Bukti Pembayaran
                            </a>
                        </div>

                    @else

                        <form action="{{ route('customer.booking.upload-payment', $pesanan->id) }}"
                              method="POST"
                              enctype="multipart/form-data">

                            @csrf

                            <div class="mb-4">

                                <label class="block font-semibold text-gray-700 mb-2">
                                    Upload Bukti Transfer
                                </label>

                                <input type="file"
                                       name="bukti_pembayaran"
                                       accept="image/*"
                                       required
                                       class="w-full border border-gray-300 rounded-lg p-3">

                                <small class="text-gray-500">
                                    Format: JPG, JPEG, PNG (Maks 2MB)
                                </small>

                            </div>

                            <button type="submit"
                                    class="w-full bg-primary-500 text-white py-3 rounded-lg hover:bg-primary-600 transition">

                                <i class="fas fa-upload mr-2"></i>
                                Upload Bukti Pembayaran

                            </button>

                        </form>

                    @endif

                </div>

            </div>

        </div>

    </div>

</div>

@endsection
