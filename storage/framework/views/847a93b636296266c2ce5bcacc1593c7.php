<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<!-- Hero Section -->
<video autoplay muted loop playsinline class="hero-video">
    <source src="<?php echo e(asset('assets/videos/sample-trailer.mp4')); ?>" type="video/mp4">
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
                <img src="<?php echo e(asset('assets/images/evergreen_p1.png')); ?>" alt="Evergreen Tee Back">
            </div>
            <div class="product-image top-right">
                <img src="<?php echo e(asset('assets/images/evergreen_p2.png')); ?>" alt="Evergreen Tee Model">
            </div>
            
            <!-- Bottom row -->
            <div class="product-image bottom-left">
                <img src="<?php echo e(asset('assets/images/evergreen_p3.png')); ?>" alt="Evergreen Tee Front">
            </div>
            <div class="product-info">
                <h3>EVERGREEN</h3>
                <p>product 1</p>
                <a href="store">Shop Now →</a>
            </div>
            <div class="product-image bottom-right">
                <img src="<?php echo e(asset('assets/images/evergreen_p4.png')); ?>" alt="Evergreen Tee Motion">
            </div>
        </div>
    </div>

    
    <!-- Rest of your code... -->

    <div class="product-category">
        <h2>SLOGAN TEE</h2>
        <div class="product">
            <img src="<?php echo e(asset('assets/images/slogan-tee.jpg')); ?>" alt="Slogan Tee">
            <h3>WEAR THE BOND</h3>
            <a href="store">Shop Now →</a>
        </div>
    </div>

    <div class="product-category">
        <h2>STAPLE AND GRAFFITI</h2>
        <div class="product">
            <img src="<?php echo e(asset('assets/images/staple-graffiti.jpg')); ?>" alt="Staple and Graffiti">
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

<?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\hermano\resources\views/home.blade.php ENDPATH**/ ?>