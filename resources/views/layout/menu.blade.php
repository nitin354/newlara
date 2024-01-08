<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{ url('/') }}" class="logo">Blog<em> Website</em></a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="{{ url('/') }}"
                                class="{{ request()->segment(1) == '' ? 'active' : '' }} no-reload-link">Home</a>
                        </li>
                        <li><a href="{{ url('/blog') }}"
                                class="{{ request()->segment(1) == 'blog' ? 'active' : '' }} no-reload-link">Blog</a>
                        </li>
                        <li><a href="{{ url('/about') }}"
                                class="{{ request()->segment(1) == 'about' ? 'active' : '' }}">About us</a></li>
                        <li><a href="{{ url('/team') }}"
                                class="{{ request()->segment(1) == 'team' ? 'active' : '' }}">Authors</a></li>
                        <li><a href="{{ url('/contact') }}"
                                class="{{ request()->segment(1) == 'contact' ? 'active' : '' }}">Contact</a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->