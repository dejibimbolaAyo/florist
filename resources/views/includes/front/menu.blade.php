<div class="menu-section">
    <input type="checkbox" name="mobile-nav" id="mobile-nav" class="gaadiexp-check" onchange="this.blur()">
    <label for="mobile-nav" class="gaadiexp white" tabindex="0"><span></span></label>
    <nav class="header-nav">
        <div class="fixed-nav">
            <a class="navbar-brand" style="margin-left:40px" href="#"></a>

            <div class="menu">
                <ul>
                    <li class="page_item page-item-2">
                        <a href="{{ headless_url('/') }}" class="list-group-item">Home</a>
                    </li>
                    <li class="page_item page-item-2">
                        <a href="#contact" class="list-group-item scroll">Contact</a>
                    </li>
                    @if($user)
                    <li class="page_item page-item-2">
                        <a href="{{ headless_url('user/products') }}" class="list-group-item">Products</a>
                    </li>
                    <li class="page_item page-item-2">
                        <a href="{{ headless_url('logout') }}" class="list-group-item">Logout</a>
                    </li>
                    @else
                    <li class="page_item page-item-2">
                        <a href="{{ headless_url('login') }}" class="list-group-item">Login</a>
                    </li>
                    <li class="page_item page-item-2">
                        <a href="{{ headless_url('register') }}" class="list-group-item">Register</a>
                    </li>
                    @endif

                </ul>
            </div>
        </div>
    </nav>
</div>
