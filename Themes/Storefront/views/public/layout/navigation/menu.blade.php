<li class="lvl1 parent megamenu {{ mega_menu_classes($menu, $type) }}">
    <a href="{{ $menu->url() }}">
        <i class="{{ $menu->icon() }}"></i>
        {{ $menu->name() }}
        @if($menu->subMenus()->count())
            <i class="bi bi-chevron-down"></i>
        @endif
    </a>
    @if ($menu->isFluid())
        @include('public.layout.navigation.fluid', ['subMenus' => $menu->subMenus()])
    @else
        @include('public.layout.navigation.dropdown', ['subMenus' => $menu->subMenus()])
    @endif
</li>
