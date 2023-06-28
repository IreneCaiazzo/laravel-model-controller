<nav>
    <ul class="list-inline text-center">
        @foreach (config('menu') as $menuItem)
            <li class="list-inline-item"><a href="{{ route($menuItem['route']) }}">{{ $menuItem['name'] }}</a></li>
        @endforeach
    </ul>
</nav>
