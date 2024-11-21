@extends('layouts.app')

@section('title', 'About Page')

@section('content')
<div class="container py-4">
    <h1 class="text-center mb-4">Kopi Berkualitas</h1>
    <p class="text-center text-muted mb-5">Halaman ini memberikan informasi tentang berbagai jenis kopi berkualitas</p>

    <div class="row">
        @php
            $coffeeTypes = [
                [
                    'name' => 'Espresso',
                    'image' => 'eskopi.png',
                    'description' => 'Kopi hitam pekat yang kuat dan penuh cita rasa'
                ],
                [
                    'name' => 'Cappuccino',
                    'image' => 'cappucino.png',
                    'description' => 'Kombinasi sempurna espresso dengan busa susu yang lembut'
                ],
                [
                    'name' => 'Latte',
                    'image' => 'latte.png',
                    'description' => 'Espresso dengan susu steamed dan sedikit foam'
                ],
                [
                    'name' => 'Americano',
                    'image' => 'americano.jpeg',
                    'description' => 'Espresso yang dicampur dengan air panas'
                ]
            ];
        @endphp

        @foreach($coffeeTypes as $coffee)
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/coffee/' . $coffee['image']) }}" 
                         class="card-img-top" 
                         alt="{{ $coffee['name'] }}"
                         style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $coffee['name'] }}</h5>
                        <p class="card-text text-muted">{{ $coffee['description'] }}</p>
                        <a href="#" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

@push('styles')
<style>
    .card {
        transition: transform 0.2s;
    }
    .card:hover {
        transform: translateY(-5px);
    }
    .card-img-top {
        border-bottom: 1px solid rgba(0,0,0,0.1);
    }
</style>
@endpush