@if ($subMenus->isNotEmpty())
{{--    <ul class="{{ $subMenu->hasItems() ? 'dropdown' : '' }}">--}}
    <ul class="dropdown">
        @foreach ($subMenus as $subMenu)
        <li>
            <a href="{{ $subMenu->url() }}" target="{{ $subMenu->target() }}" class="site-nav">
                {{ $subMenu->name() }}
                @if($subMenu->hasItems())
                    <i class="an an-angle-right-l"></i>
                @endif
            </a>
            @if ($subMenu->hasItems())
                @include('public.layout.navigation.dropdown', ['subMenus' => $subMenu->items()])
            @endif
        </li>
        @endforeach
    </ul>
@endif
