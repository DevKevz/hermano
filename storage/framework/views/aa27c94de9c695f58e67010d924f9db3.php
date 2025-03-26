

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<div class="container">
    <h1 class="text-center font-bold text-2xl">Shop Now!</h1>

    <div class="grid grid-cols-3 gap-6 mt-8">
        <!-- Product 1 -->
        <div class="border p-4 text-center">
            <img src="<?php echo e(asset('assets/images/p1.png')); ?>" alt="Evergreen Tee" class="w-full">
            <h2 class="text-lg font-semibold mt-2">EVERGREEN</h2>
            <p class="text-gray-600">₱520.00</p>
            <button class="bg-black text-white px-4 py-2 mt-2">Add to Cart</button>
        </div>

        <!-- Product 2 -->
        <div class="border p-4 text-center">
            <img src="<?php echo e(asset('assets/images/p2.png')); ?>" alt="Slogan Tee" class="w-full">
            <h2 class="text-lg font-semibold mt-2">SLOGAN TEE</h2>
            <p class="text-gray-600">₱500.00</p>
            <button class="bg-black text-white px-4 py-2 mt-2">Add to Cart</button>
        </div>

        <!-- Product 3 -->
        <div class="border p-4 text-center">
            <img src="<?php echo e(asset('assets/images/p3.png')); ?>" alt="Staple Tee" class="w-full">
            <h2 class="text-lg font-semibold mt-2">STAPLE AND GRAFFITI</h2>
            <p class="text-gray-600">₱400.00</p>
            <button class="bg-black text-white px-4 py-2 mt-2">Add to Cart</button>
        </div>
    </div>
</div>


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

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\hermano\resources\views/store.blade.php ENDPATH**/ ?>