@foreach ($menu->menus() as $menu)
    <li class="{{ $menu->hasSubMenus() ? 'lvl1 parent megamenu' : '' }}">
        <a href="{{ $menu->url() }}" target="{{ $menu->target() }}">
            {{ $menu->name() }}
            @if ($menu->hasSubMenus())
                <i class="bi bi-plus-lg"></i>
            @endif
        </a>
        @if ($menu->hasSubmenus())
            @include('public.layout.sidebar_menu.dropdown', ['subMenus' => $menu->subMenus()])
        @endif
    </li>
@endforeach
