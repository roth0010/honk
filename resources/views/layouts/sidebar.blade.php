<aside class="main-sidebar sidebar-dark-gray-dark bg-lilac elevation-4">
        <a href="{{ route('home') }}" class="brand-link">
        <img src="\img\tinygans.png"
             alt="Goose hehe"
             class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">Honk!</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('layouts.menu')
            </ul>
        </nav>
    </div>

</aside>
