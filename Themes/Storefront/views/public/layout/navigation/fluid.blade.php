<div class="megamenu style4"
     @if ($menu->hasBackgroundImage())
         style="background-image: url({{ $menu->backgroundImage() }});"
    @endif>
    <div class="row">
        <div class="lvl-1 col-md-3 col-lg-3">
            @foreach ($subMenus as $subMenu)
            <a  href="{{ $subMenu->url() }}" target="{{ $subMenu->target() }}" class="site-nav lvl-1 menu-title">
                {{ $subMenu->name() }}
            </a>
            <ul class="subLinks">
                @foreach ($subMenu->items() as $item)
                    <li class="lvl-2">
                        <a href="{{ $item->url() }}" target="{{ $subMenu->target() }}" class="site-nav lvl-2">
                            {{ $item->name() }}
                        </a>
                    </li>
                @endforeach
            </ul>
            @endforeach
        </div>
    </div>
</div>
