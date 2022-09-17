@props(['active' => null])

<div>
    <a {{$attributes}} 
        class="nav-link {{request()->routeIs($active) ? 'active' : null}}">
            {{$slot}}
    </a>
</div>