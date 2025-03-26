<header>
    
    <nav>
        <ul>
            <li><a href="<?php echo e(url('/home')); ?>">Home</a></li>
            <li><a href="<?php echo e(route('store')); ?>" class="hover:underline">Store</a></li>

            <li><a href="<?php echo e(route('ourstory')); ?>">Our Story</a></li>
        </ul>
    </nav>

    <div class="logo">
        <a href="<?php echo e(url('/')); ?>">
            <img src="<?php echo e(asset('assets/images/logo.png')); ?>" alt="Hermano Logo">
        </a>
    </div>
    <div class="header-icons">
        <input type="text" placeholder="Search products...">
        <a href="#"> <img src="<?php echo e(asset('assets/icons/userIcon.png')); ?>" alt="User Logo"></a>
        <a href="#"> <img src="<?php echo e(asset('assets/icons/cartIcon.png')); ?>" alt="User Logo"></a>
    </div>
</header>
<?php /**PATH C:\xampp\htdocs\hermano\resources\views/partials/header.blade.php ENDPATH**/ ?>