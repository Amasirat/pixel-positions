@php
    $defaultClasses = "p-4 bg-white/5 rounded-xl border border-transparent hover:border-blue-600 group cursor-pointer transition-colors duration-600";
@endphp

<div {{ $attributes(['class' => $defaultClasses])}}>
    {{ $slot }}
</div>
