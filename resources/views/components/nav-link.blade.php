@props(['active' => false])
<a {{ $attributes }} class="nav-link {{ $active ? 'text-primary' : '' }}" aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>
