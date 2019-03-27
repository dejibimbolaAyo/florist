<div class="navbar-default sidebar">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <a href="{{headless_url('admin/dashboard')}}"><i
                        class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-laptop nav_icon"></i>Products</a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{headless_url('admin/products')}}">Products</a>
                    </li>
                    <li>
                        <a href="{{headless_url('admin/products/create')}}">Create product</a>
                    </li>

                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="{{headless_url('admin/orders')}}"><i class="fa fa-list nav_icon"></i>Orders</a>
            </li>
            <li>
                <a href="{{headless_url('logout')}}"><i class="fa fa-lock nav_icon"></i>Logout</a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
