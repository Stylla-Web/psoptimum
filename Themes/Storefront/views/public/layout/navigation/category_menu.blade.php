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
                    <div class="d-flex flex-column justify-content-between lvl-1 col-md-3 col-lg-3">
                        <a href="{{ $menu->url() }}" target="{{ $menu->target() }}" class="site-nav lvl-1 menu-title">
                            {{ $menu->name() }}
                        </a>
                        <ul class="subLinks flex-fill">
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

                        @if ($menu->hasBackgroundImage())
                            <a class="mt-4" href="{{ $menu->url() }}">
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
