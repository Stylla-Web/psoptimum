@foreach ($primaryMenu->menus() as $menu)
    @include('public.layout.navigation.menu', ['type' => 'primary_menu'])
@endforeach
