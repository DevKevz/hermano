@extends('layouts.app')

@section('content')
@include('partials.header')

<!-- Hero Section -->
<video autoplay muted loop playsinline class="hero-video">
    <source src="{{ asset('assets/videos/sample-trailer.mp4') }}" type="video/mp4">
    Your browser does not support the video tag.
</video>


<!-- Welcome Section -->
<section class="welcome">
    <h1>Welcome to Hermano</h1>
    <p>UNBOUND POSSIBILITIES</p>
</section>

<!-- Featured products -->


<!-- Products Section -->
<section class="products">
    <div class="product-category">
        <h2>NEW PRODUCTS</h2>
        <div class="product-gallery">
            <!-- Top row -->
            <div class="product-image top-left">
                <img src="{{ asset('assets/images/evergreen_p1.png') }}" alt="Evergreen Tee Back">
            </div>
            <div class="product-image top-right">
                <img src="{{ asset('assets/images/evergreen_p2.png') }}" alt="Evergreen Tee Model">
            </div>
            
            <!-- Bottom row -->
            <div class="product-image bottom-left">
                <img src="{{ asset('assets/images/evergreen_p3.png') }}" alt="Evergreen Tee Front">
            </div>
            <div class="product-info">
                <h3>EVERGREEN</h3>
                <p>product 1</p>
                <a href="store">Shop Now →</a>
            </div>
            <div class="product-image bottom-right">
                <img src="{{ asset('assets/images/evergreen_p4.png') }}" alt="Evergreen Tee Motion">
            </div>
        </div>
    </div>

    
    <!-- Rest of your code... -->

    <div class="product-category">
        <h2>SLOGAN TEE</h2>
        <div class="product">
            <img src="{{ asset('assets/images/slogan-tee.jpg') }}" alt="Slogan Tee">
            <h3>WEAR THE BOND</h3>
            <a href="store">Shop Now →</a>
        </div>
    </div>

    <div class="product-category">
        <h2>STAPLE AND GRAFFITI</h2>
        <div class="product">
            <img src="{{ asset('assets/images/staple-graffiti.jpg') }}" alt="Staple and Graffiti">
            <h3>STREET STYLE</h3>
            <a href="store">Shop Now →</a>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="features">
    <div class="feature">
        <i class="icon">📞</i>
        <h4>FAST DELIVERY</h4>
        <p>Reliable and quick shipping on orders.</p>
    </div>

    <div class="feature">
        <i class="icon">📞</i>
        <h4>CUSTOMER SERVICE</h4>
        <p>Friendly customer support.</p>
    </div>

    <div class="feature">
        <i class="icon">🔒</i>
        <h4>SECURED WEBSITE</h4>
        <p>Protected payments for worry-free shopping.</p>
    </div>
</section>

@include('partials.footer')

@endsection
