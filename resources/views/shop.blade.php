@extends('layout')
@section('title', 'Shop')
@section('sl4', "id=selected")
@section('content')

<div style="background-color: #e3f2fd; padding: 20px; margin-bottom: 20px;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h2>Featured Products</h2>
                <p>Discover our special collection of magical items and equipment</p>
            </div>
            <div class="col-md-4 text-end">
                <div class="shopping-cart">
                    <a href="#" class="btn btn-outline-primary">
                        <i class="fas fa-shopping-cart"></i> Cart
                        <span class="badge bg-primary">0</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <h1 class="text-center mb-4">Game Item Shop</h1>

    <div class="row">
        <!-- Item Card 1 -->
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="{{ asset('images/apk.png') }}" class="card-img-top" alt="Sword">
                <div class="card-body">
                    <h5 class="card-title">Legendary Sword</h5>
                    <p class="card-text">A powerful sword with +50 attack damage</p>
                    <p class="card-text"><strong>Price: 1000 Gold</strong></p>
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div>

        <!-- Item Card 2 -->
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="{{ asset('images/shield.jpg') }}" class="card-img-top" alt="Shield">
                <div class="card-body">
                    <h5 class="card-title">Divine Shield</h5>
                    <p class="card-text">Protective shield with +30 defense</p>
                    <p class="card-text"><strong>Price: 800 Gold</strong></p>
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div>

        <!-- Item Card 3 -->
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="{{ asset('images/potion.jpg') }}" class="card-img-top" alt="Potion">
                <div class="card-body">
                    <h5 class="card-title">Health Potion</h5>
                    <p class="card-text">Restores 100 HP instantly</p>
                    <p class="card-text"><strong>Price: 200 Gold</strong></p>
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div>

        <!-- Item Card 4 -->
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="{{ asset('images/armor.jpg') }}" class="card-img-top" alt="Armor">
                <div class="card-body">
                    <h5 class="card-title">Dragon Scale Armor</h5>
                    <p class="card-text">Legendary armor with fire resistance</p>
                    <p class="card-text"><strong>Price: 1500 Gold</strong></p>
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Second Row -->
    <div class="row">
        <!-- Item Card 5 -->
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="{{ asset('images/bow.jpg') }}" class="card-img-top" alt="Bow">
                <div class="card-body">
                    <h5 class="card-title">Elven Bow</h5>
                    <p class="card-text">Long-range weapon with magical properties</p>
                    <p class="card-text"><strong>Price: 1200 Gold</strong></p>
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div>

        <!-- Item Card 6 -->
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="{{ asset('images/staff.jpg') }}" class="card-img-top" alt="Staff">
                <div class="card-body">
                    <h5 class="card-title">Wizard's Staff</h5>
                    <p class="card-text">Increases magic power by 40%</p>
                    <p class="card-text"><strong>Price: 1300 Gold</strong></p>
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div>

        <!-- Item Card 7 -->
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="{{ asset('images/ring.jpg') }}" class="card-img-top" alt="Ring">
                <div class="card-body">
                    <h5 class="card-title">Ring of Power</h5>
                    <p class="card-text">Increases all stats by 10</p>
                    <p class="card-text"><strong>Price: 2000 Gold</strong></p>
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div>

        <!-- Item Card 8 -->
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="{{ asset('images/amulet.jpg') }}" class="card-img-top" alt="Amulet">
                <div class="card-body">
                    <h5 class="card-title">Ancient Amulet</h5>
                    <p class="card-text">Provides immunity to status effects</p>
                    <p class="card-text"><strong>Price: 1800 Gold</strong></p>
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
