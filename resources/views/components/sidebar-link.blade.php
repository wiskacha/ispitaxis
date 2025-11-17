@props(['href', 'tooltip', 'label', 'activePattern' => null])

@php
    $pattern = $activePattern ?? $href;
    $cleanPattern = ltrim(str_replace(url('/'), '', $pattern), '/');
    $isActive = request()->is($cleanPattern) || request()->routeIs($cleanPattern);
@endphp

<li>
    <a href="{{ $href }}"
        class="is-drawer-close:tooltip is-drawer-close:tooltip-right flex items-center gap-2 px-3 py-1.5 rounded-lg
               {{ $isActive ? 'bg-accent text-accent-content font-medium' : 'text-base-content hover:bg-base-300' }}"
        data-tip="{{ $tooltip }}">
        <span class="flex items-center shrink-0">
            {{ $icon }}
        </span>
        <span class="is-drawer-close:hidden pt-0.5">{{ $label }}</span>
    </a>
</li>
