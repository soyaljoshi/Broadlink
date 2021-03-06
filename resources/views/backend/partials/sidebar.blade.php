<aside id="sidebar_main">

    <div class="sidebar_main_header">
        <div class="sidebar_logo">
            <a href="{{ url('/') }}" target="_blank" class="sSidebar_hide">
                <img src="{{ asset('assets/backend/img/logo_main.png') }}" alt="" height="15" width="71"/>
            </a>
            <a href="{{ url('/') }}" target="_blank" class="sSidebar_show">
                <img src="{{ asset('assets/backend/img/logo_main_small.png') }}" alt="" height="32" width="32"/>
            </a>
        </div>
    </div>

    <div class="menu_section">
        <ul>
            <li>
                <a href="{{ route('admin::dashboard') }}">
                    <span class="menu_icon"><i class="material-icons">&#xE871;</i></span>
                    <span class="menu_title">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="menu_icon"><i class="material-icons">&#xE2C6;</i></span>
                    <span class="menu_title">Pins</span>
                </a>
                <ul>
                    <li>
                        <a href="{{ route('admin::pin.create') }}">Import</a>
                    </li>
                    <li>
                        <a href="{{ route('admin::pin.index') }}">All Pins</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <span class="menu_icon"><i class="material-icons">&#xE85D;</i></span>
                    <span class="menu_title">Orders</span>
                </a>
                <ul>
                    <li>
                        <a href="{{ route('admin::order.report') }}">Report</a>
                    </li>
                    <li>
                        <a href="{{ route('admin::order.index') }}">All Orders</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ route('admin::post.index') }}">
                    <span class="menu_icon"><i class="material-icons">&#xE060;</i></span>
                    <span class="menu_title">Posts</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin::page.index') }}">
                    <span class="menu_icon"><i class="material-icons">&#xE051;</i></span>
                    <span class="menu_title">Pages</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin::menu') }}">
                    <span class="menu_icon"><i class="material-icons">&#xE5D2;</i></span>
                    <span class="menu_title">Menu</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin::product.index') }}">
                    <span class="menu_icon"><i class="material-icons">&#xE8F6;</i></span>
                    <span class="menu_title">Products</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin::plan.index') }}">
                    <span class="menu_icon"><i class="material-icons">&#xE8EB;</i></span>
                    <span class="menu_title">Plans</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin::service.index') }}">
                    <span class="menu_icon"><i class="material-icons">&#xE553;</i></span>
                    <span class="menu_title">Services</span>
                </a>
            </li>
            {{--<li>--}}
            {{--<a href="{{ route('admin::banner.index') }}">--}}
            {{--<span class="menu_icon"><i class="material-icons">&#xE3F4;</i></span>--}}
            {{--<span class="menu_title">Banners</span>--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a href="{{ url('/admin/upload') }}">--}}
            {{--<span class="menu_icon"><i class="material-icons">&#xE8A7;</i></span>--}}
            {{--<span class="menu_title">Uploads</span>--}}
            {{--</a>--}}
            {{--</li>--}}
            <li>
                <a href="{{ route('admin::contact.index') }}">
                    <span class="menu_icon"><i class="material-icons">&#xE0BA;</i></span>
                    <span class="menu_title">Contacts</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin::testimonial.index') }}">
                    <span class="menu_icon"><i class="material-icons">&#xE0B7;</i></span>
                    <span class="menu_title">Testimonials</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin::client.index') }}">
                    <span class="menu_icon"><i class="material-icons">&#xE7F1;</i></span>
                    <span class="menu_title">Clients</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin::setting') }}">
                    <span class="menu_icon"><i class="material-icons">&#xE8C0;</i></span>
                    <span class="menu_title">Settings</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin::user.index') }}">
                    <span class="menu_icon"><i class="material-icons">&#xE7FB;</i></span>
                    <span class="menu_title">Users</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin::customer.index') }}">
                    <span class="menu_icon"><i class="material-icons">&#xE7FC;</i></span>
                    <span class="menu_title">Customers</span>
                </a>
            </li>
        </ul>
    </div>
</aside>