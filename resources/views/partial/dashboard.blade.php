
    <!-- Menu Toggle Button (visible on mobile) -->
    <button class="menu-toggle" id="menu-toggle">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Sidebar -->
    <aside class="sidebar" id="sidebar">
        <div class="logo">
            <h2>Dried<span>Fruits</span></h2>
        </div>
        
        <div class="nav-links">
           <div class="nav-item {{ request()->routeIs('product.index') ? 'active' : '' }}">
    <i class="fas fa-home"></i>
    <a href="{{ route('product.index') }}"><span>Dashboard</span></a>
</div>

<div class="nav-item {{ request()->routeIs('product.create') ? 'active' : '' }}">
    <i class="fas fa-plus-circle"></i>
    <a href="{{ route('product.create') }}"><span>Add Product</span></a>
</div>
            <div class="nav-item">
                <i class="fas fa-cog"></i>
                <a href="#"><span>Setting</span></a>
            </div>
           
        </div>
        
        <div class="auth-section">
            <div class="user-info">
                <div class="user-avatar">JD</div>
                <div class="user-details">
                    <div class="user-name">John Doe</div>
                    <div class="user-role">Administrator</div>
                </div>
            </div>
            <button class="auth-button" id="auth-button">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span>
            </button>
        </div>
    </aside>

   

    <!-- Bottom Navigation (visible on mobile) -->
    <nav class="bottom-nav">
        <div class="nav-icons">
            <a href="{{route('product.index')}}" class="nav-icon active">
                <i class="fas fa-home"></i>
                <span>Home</span>
            </a>
            <a href="{{route('product.create')}}" class="nav-icon">
                <i class="fas fa-plus-circle"></i>
                <span>Add</span>
            </a>
            
            <a href="#" class="nav-icon">
                <i class="fas fa-cog"></i>
                <span>Settings</span>
            </a>
        </div>
    </nav>

    <script>
        // Toggle sidebar on mobile
        const menuToggle = document.getElementById('menu-toggle');
        const sidebar = document.getElementById('sidebar');
        
        menuToggle.addEventListener('click', () => {
            sidebar.classList.toggle('open');
        });

        // Toggle login/logout state with animation
        const authButton = document.getElementById('auth-button');
        let isLoggedIn = true;
        
        authButton.addEventListener('click', function() {
            this.classList.add('pulse');
            
            setTimeout(() => {
                this.classList.remove('pulse');
                
                if (isLoggedIn) {
                    this.innerHTML = '<i class="fas fa-sign-in-alt"></i><span>Login</span>';
                    document.querySelector('.user-name').textContent = 'Guest User';
                    document.querySelector('.user-role').textContent = 'Not logged in';
                    isLoggedIn = false;
                } else {
                    this.innerHTML = '<i class="fas fa-sign-out-alt"></i><span>Logout</span>';
                    document.querySelector('.user-name').textContent = 'John Doe';
                    document.querySelector('.user-role').textContent = 'Administrator';
                    isLoggedIn = true;
                }
            }, 500);
        });

        // Add active class to clicked nav items
        const navItems = document.querySelectorAll('.nav-item');
        navItems.forEach(item => {
            item.addEventListener('click', function() {
                navItems.forEach(i => i.classList.remove('active'));
                this.classList.add('active');
            });
        });

        // Add active class to clicked nav icons
        const navIcons = document.querySelectorAll('.nav-icon');
        navIcons.forEach(icon => {
            icon.addEventListener('click', function() {
                navIcons.forEach(i => i.classList.remove('active'));
                this.classList.add('active');
            });
        });

        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', (e) => {
            if (window.innerWidth <= 992 && 
                !sidebar.contains(e.target) && 
                e.target !== menuToggle &&
                sidebar.classList.contains('open')) {
                sidebar.classList.remove('open');
            }
        });
    </script>