@extends('layouts.app')

@section('title', 'Profile Page')

@section('content')
<div class="container py-5">
    <div class="row">
        <!-- Profile Card -->
        <div class="col-lg-4">
            <div class="card shadow">
                <div class="card-body text-center">
                    <h3 class="card-title mb-3">M RAFA GHEIZA S</h3>
                    <p class="text-muted">Student RPL</p>
                    <div class="d-flex justify-content-center gap-2 mb-3">
                        <a href="#" class="btn btn-primary btn-sm">
                            <i class="fas fa-envelope me-1"></i>Contact
                        </a>
                        <a href="#" class="btn btn-outline-primary btn-sm">
                            <i class="fas fa-user-plus me-1"></i>Follow
                        </a>
                    </div>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="#" class="text-dark"><i class="fab fa-github fa-lg"></i></a>
                        <a href="#" class="text-primary"><i class="fab fa-linkedin fa-lg"></i></a>
                        <a href="#" class="text-info"><i class="fab fa-twitter fa-lg"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Profile Content -->
        <div class="col-lg-8">
            <div class="card shadow">
                <div class="card-body">
                    <h4 class="card-title mb-4">About Me</h4>
                    <p class="text-muted">
                        Ini adalah halaman profile yang dibuat menggunakan Laravel dan Bootstrap. 
                        Saya adalah seorang murid Rpl di SMK TARUNA BHAKTI
                    </p>
                    
                    <hr class="my-4">
                    
                    <h4 class="card-title mb-4">Skills</h4>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label text-muted">HTML & CSS</label>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 90%">90%</div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-muted">JavaScript</label>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 60%">60%</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label text-muted">PHP & Laravel</label>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 45%">45%</div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-muted">MySQL</label>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 60%">60%</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="my-4">

                    <div class="text-center">
                        <a href="#" class="btn btn-primary">
                            <i class="fas fa-book me-1"></i>Pelajari Lebih Lanjut
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .progress {
        height: 10px;
        border-radius: 5px;
    }
    .progress-bar {
        background-color: #0d6efd;
    }
</style>
@endpush

@push('scripts')
<script>
    // Add any custom JavaScript here
</script>
@endpush