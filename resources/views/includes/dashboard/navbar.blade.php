<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" style="position: relative; left:-40px; top:-10px" href="{{headless_url('/')}}">
        <img src="{{asset('assets/dashboard/images/logo.png')}}" alt="" height="50"/>
    </a>
</div>
<!-- /.navbar-header -->
<ul class="nav navbar-nav navbar-right">
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-user"></i><span
                class="badge">0</span></a>
        <ul class="dropdown-menu">
            @if($user)
            <li class="dropdown-menu-header text-center">
                <strong>Account</strong>
            </li>
            <li class="m_2"><a href="#"><i class="fa fa-bell-o"></i> {{$user->name}} <span
                        class="label label-info"></span></a></li>
            <li class="m_2"><a href="#"><i class="fa fa-envelope-o"></i>Gender:
                    {{$user->gender == 'M' ? 'Male' : 'Female'}} <span class="label label-success"></span></a></li>
            <li class="dropdown-menu-header text-center">
                <strong>Settings</strong>
            </li>
            <li class="m_2"><a href="#"><i class="fa fa-wrench"></i> Settings</a></li>
            <li class="m_2"><a href="#"><i class="fa fa-usd"></i> Payments <span
                        class="label label-default">42</span></a></li>
            <li class="divider"></li>
            <li class="m_2"><a href="{{headless_url('logout')}}"><i class="fa fa-lock"></i>Logout</a></li>
            @endif
        </ul>
    </li>
</ul>
<form class="navbar-form navbar-right">
    <input type="text" class="form-control" value="Search..." onfocus="this.value = '';"
        onblur="if (this.value == '') {this.value = 'Search...';}">
</form>
