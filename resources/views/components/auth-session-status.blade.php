@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'text-base text-info-800']) }}>
        {{ $status }}
    </div>
@endif
