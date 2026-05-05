@extends('layouts.adminlte')

@section('content')
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Detail Layanan</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('service.index') }}">Layanan</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $service->service_name }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="app-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card shadow-sm">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSXkyEHY4RMmHrFA1ZtZ07bYnoUoFwruQOfiw&s"
                            class="card-img-top" alt="Service Image" style="object-fit: cover; height: 220px;">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">{{ $service->service_name }}</h4>
                            <p class="text-muted">{{ $service->description }}</p>
                            <hr>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2">
                                    <strong>Harga:</strong>
                                    <span class="text-success fw-semibold">Rp {{ number_format($service->price, 0, ',', '.') }}</span>
                                </li>
                                <li class="mb-2">
                                    <strong>Kategori:</strong> {{ $service->category->category_name }}
                                </li>
                                <li>
                                    <strong>Ketersediaan:</strong>
                                    @if ($service->availability)
                                        <span class="badge bg-success">Tersedia</span>
                                    @else
                                        <span class="badge bg-secondary">Tidak Tersedia</span>
                                    @endif
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer bg-transparent">
                            <a href="{{ route('service.index') }}" class="btn btn-outline-secondary btn-sm">
                                <i class="bi bi-arrow-left me-1"></i> Kembali ke Daftar Layanan
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
