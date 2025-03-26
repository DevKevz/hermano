

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<div class="container mx-auto px-4 py-12">
    <h1 class="text-center text-3xl font-bold mb-12">OUR STORY</h1>

    <!-- Origin Section -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center mb-12">
        <img src="<?php echo e(asset('images/origin1.jpg')); ?>" alt="Origin Image 1" class="w-full rounded-lg shadow-md">
        <div>
            <h2 class="text-xl font-bold">Origin</h2>
            <p class="text-gray-600">Hermano was founded in 2023 with a vision to redefine minimalist fashion.</p>
        </div>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center mb-12">
        <div>
            <h2 class="text-xl font-bold">Mission</h2>
            <p class="text-gray-600">To deliver sustainable and stylish apparel for the modern individual.</p>
        </div>
        <img src="<?php echo e(asset('images/mission.jpg')); ?>" alt="Mission Image" class="w-full rounded-lg shadow-md">
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center mb-12">
        <img src="<?php echo e(asset('images/vision.jpg')); ?>" alt="Vision Image" class="w-full rounded-lg shadow-md">
        <div>
            <h2 class="text-xl font-bold">Vision</h2>
            <p class="text-gray-600">To create timeless, high-quality clothing that inspires confidence.</p>
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

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\hermano\resources\views/ourstory.blade.php ENDPATH**/ ?>