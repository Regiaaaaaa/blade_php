@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<!-- Hero Section -->
<div class="hero position-relative bg-primary text-white">
    <div class="position-absolute w-100 h-100" style="background: url('/api/placeholder/1920/1080') center/cover; opacity: 0.2;"></div>
    <div class="container position-relative py-5">
        <div class="row min-vh-75 align-items-center">
            <div class="col-lg-6">
                <h1 class="display-3 fw-bold mb-4">Selamat Datang di Website Kami</h1>
                <p class="lead mb-4">Platform pembelajaran modern yang dirancang untuk membantu Anda mencapai potensi maksimal dalam pendidikan digital.</p>
                <div class="d-flex gap-3">
                    <button class="btn btn-light btn-lg px-4">Mulai Sekarang</button>
                    <button class="btn btn-outline-light btn-lg px-4">Pelajari Lebih Lanjut</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Features Section -->
<div class="container my-5">
    <div class="text-center mb-5">
        <h2 class="display-6 fw-bold">Fitur Unggulan</h2>
        <p class="text-muted">Berbagai layanan terbaik yang kami sediakan</p>
    </div>
    
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm hover-card">
                <div class="card-body text-center p-4">
                    <div class="feature-icon bg-primary bg-gradient text-white mb-4 mx-auto">
                        <i class="fas fa-laptop-code fa-2x"></i>
                    </div>
                    <h4 class="card-title mb-3">Pembelajaran Online</h4>
                    <p class="card-text text-muted">Akses materi pembelajaran kapan saja dan di mana saja dengan sistem yang interaktif.</p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm hover-card">
                <div class="card-body text-center p-4">
                    <div class="feature-icon bg-success bg-gradient text-white mb-4 mx-auto">
                        <i class="fas fa-users fa-2x"></i>
                    </div>
                    <h4 class="card-title mb-3">Komunitas Aktif</h4>
                    <p class="card-text text-muted">Bergabung dengan komunitas pembelajar yang aktif dan saling mendukung.</p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm hover-card">
                <div class="card-body text-center p-4">
                    <div class="feature-icon bg-info bg-gradient text-white mb-4 mx-auto">
                        <i class="fas fa-certificate fa-2x"></i>
                    </div>
                    <h4 class="card-title mb-3">Sertifikasi</h4>
                    <p class="card-text text-muted">Dapatkan sertifikat resmi setelah menyelesaikan program pembelajaran.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Statistics Section -->
<div class="bg-light py-5">
    <div class="container">
        <div class="row text-center g-4">
            <div class="col-md-3">
                <div class="stat-card">
                    <h2 class="display-4 fw-bold text-primary">500+</h2>
                    <p class="text-muted mb-0">Siswa Aktif</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-card">
                    <h2 class="display-4 fw-bold text-primary">50+</h2>
                    <p class="text-muted mb-0">Instruktur</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-card">
                    <h2 class="display-4 fw-bold text-primary">100+</h2>
                    <p class="text-muted mb-0">Kursus</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-card">
                    <h2 class="display-4 fw-bold text-primary">95%</h2>
                    <p class="text-muted mb-0">Tingkat Kepuasan</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Call to Action Section -->
<div class="container my-5">
    <div class="row align-items-center">
        <div class="col-lg-6">
            <img src="/api/placeholder/600/400" alt="Learning" class="img-fluid rounded shadow">
        </div>
        <div class="col-lg-6 ps-lg-5">
            <h2 class="display-6 fw-bold mb-4">Mulai Perjalanan Belajar Anda</h2>
            <p class="lead text-muted mb-4">Bergabunglah dengan ribuan siswa yang telah sukses menempuh pendidikan bersama kami.</p>
            <div class="d-flex gap-3">
                <button class="btn btn-primary btn-lg">Daftar Sekarang</button>
                <button class="btn btn-outline-primary btn-lg">Hubungi Kami</button>
            </div>
        </div>
    </div>
</div>

<!-- Newsletter Section -->
<div class="bg-dark text-white py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <h3 class="fw-bold mb-4">Berlangganan Newsletter</h3>
                <p class="mb-4">Dapatkan informasi terbaru tentang kursus dan promo menarik.</p>
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Masukkan email Anda">
                    <button class="btn btn-primary" type="button">Berlangganan</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style>
    .min-vh-75 {
        min-height: 75vh;
    }
    
    .feature-icon {
        width: 64px;
        height: 64px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .hover-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .hover-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 1rem 3rem rgba(0,0,0,.175)!important;
    }
    
    .stat-card {
        padding: 2rem;
        border-radius: 0.5rem;
        background: white;
        box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,.075);
    }
</style>
@endsection