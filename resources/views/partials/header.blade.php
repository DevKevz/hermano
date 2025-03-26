<header>
    
    <nav>
        <ul>
            <li><a href="{{ url('/home') }}">Home</a></li>
            <li><a href="{{ route('store') }}" class="hover:underline">Store</a></li>

            <li><a href="{{ route('ourstory') }}">Our Story</a></li>
        </ul>
    </nav>

    <div class="logo">
        <a href="{{ url('/') }}">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Hermano Logo">
        </a>
    </div>
    <div class="header-icons">
        <input type="text" placeholder="Search products...">
        <a href="#"> <img src="{{ asset('assets/icons/userIcon.png') }}" alt="User Logo"></a>
        <a href="#"> <img src="{{ asset('assets/icons/cartIcon.png') }}" alt="User Logo"></a>
    </div>
</header>
