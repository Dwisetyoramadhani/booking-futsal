@extends('admin.admin_layout')

@section('title', 'Tolak Booking')

@section('content')

<div class="page-header">
    <div>
        <h1>Tolak Booking</h1>
        <p>Masukkan alasan penolakan booking.</p>
    </div>
</div>

<div class="dashboard-card">

    @if ($errors->any())
        <div class="alert-error">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <div class="booking-info">
        <div class="info-item">
            <span>ID Booking</span>
            <strong>#{{ $pesanan->id }}</strong>
        </div>

        <div class="info-item">
            <span>Status</span>
            <strong>{{ ucfirst($pesanan->status) }}</strong>
        </div>

        <div class="info-item">
            <span>Tanggal Booking</span>
            <strong>{{ $pesanan->created_at->format('d M Y H:i') }}</strong>
        </div>
    </div>

    <form action="{{ route('admin.booking.reject', $pesanan->id) }}" method="POST">
        @csrf

        <div class="form-group">
            <label>Alasan Penolakan</label>

            <textarea
                name="alasan_penolakan"
                rows="6"
                class="form-control"
                placeholder="Masukkan alasan penolakan..."
                required>{{ old('alasan_penolakan') }}</textarea>

            @error('alasan_penolakan')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="action-buttons">
            <button type="submit" class="w-full bg-red-500 text-white py-3 rounded-lg hover:bg-red-600 transition">
                <i class="fas fa-times"></i>
                Tolak Booking
            </button>
        </div>
    </form>

</div>

<style>
.booking-info{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
    gap:15px;
    margin-bottom:25px;
}

.info-item{
    background:#f8fafc;
    padding:15px;
    border-radius:10px;
}

.info-item span{
    display:block;
    color:#64748b;
    font-size:13px;
}

.info-item strong{
    display:block;
    margin-top:5px;
}

.form-group{
    margin-bottom:20px;
}

.form-group label{
    display:block;
    margin-bottom:8px;
    font-weight:600;
}

.form-control{
    width:100%;
    padding:12px;
    border:1px solid #d1d5db;
    border-radius:10px;
    resize:none;
}

.action-buttons{
    display:flex;
    gap:10px;
}

.alert-error{
    background:#fee2e2;
    color:#b91c1c;
    padding:12px;
    border-radius:10px;
    margin-bottom:20px;
}
</style>

@endsection
