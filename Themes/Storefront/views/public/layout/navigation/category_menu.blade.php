@if ($categoryMenu->menus()->isNotEmpty())
    <li class="lvl1 parent megamenu">
        <a href="{{ route('categories.index') }}">
            {{ trans('storefront::layout.all_categories') }}
            @if ($categoryMenu->menus()->count())
                <span class="bi bi-chevron-down"></span>
            @endif
        </a>
        <div class="megamenu style2">
            <div class="row">
                @foreach ($categoryMenu->menus() as $menu)
                    <div class="lvl-1 col">
                        <a href="{{ $menu->url() }}" target="{{ $menu->target() }}" class="lvl-1 menu-title mb-2">
                            {{ $menu->name() }}
                        </a>

                        @if($menu->subMenus()->count())
                        <ul class="subLinks flex-fill mb-4">
                            @foreach ($menu->subMenus() as $subMenu)
                                <li class="lvl-2">
                                    <a href="{{ $subMenu->url() }}"
                                       target="{{ $subMenu->target() }}"
                                       class="site-nav lvl-2">
                                        {{ $subMenu->name() }}
                                    </a>
                                    @foreach($subMenu->items() as $item)
                                        $subMenu -> {{ $item->name() }}<br/>
                                    @endforeach
                                </li>
                            @endforeach
                        </ul>
                        @endif

                        @if ($menu->hasBackgroundImage())
                            <a href="{{ $menu->url() }}" class="megamenu-img-url">
                                <img src="{{ $menu->backgroundImage() }}"
                                     data-src="{{ $menu->backgroundImage() }}" alt="image"/>
                            </a>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </li>
@endif
