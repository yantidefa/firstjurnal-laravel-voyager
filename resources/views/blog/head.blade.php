<div class="page-wrapper">
    <header class="header">
        <div class="header-middle sticky-header">
            <div class="container">
                <div class="header-left">
                    <button class="mobile-menu-toggler">
                        <span class="sr-only">Toggle mobile menu</span>
                        <i class="icon-bars"></i>
                    </button>

                    <a href="{{ route('blog.index') }}" class="logo">
                        <img src="{{ asset('storage/' . $site_logo->value) }}" alt="Antukna Logo" width="155" height="35">
                    </a>

                    <nav class="main-nav">
                        <ul class="menu sf-arrows">
                            @foreach ($category_menu as $menu)
                                <li class="megamenu-container">
                                    <a href="{{ route('blog.category', $menu->slug) }}"><b>{{ $menu->name }}</b></a>
                                </li>
                            @endforeach
                        </ul>
                    </nav>
                </div>

                <div class="header-right">
                    <div class="header-search">
                        <a href="#" class="search-toggle" role="button" title="Search"><i
                                class="icon-search"></i></a>
                        <form action="{{ route('search') }}" method="get">
                            <div class="header-search-wrapper">
                                <label for="q" class="sr-only">Search</label>
                                <input type="search" class="form-control" name="search" id="q"
                                    placeholder="Search in..." required>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
