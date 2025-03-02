
@props([
    'title',
    'route',
    'linkText' => 'Link',
])

<div {{ $attributes->merge(['class' => 'card shadow mb-2']) }} >
    <div class="card-header">{{ $title }}</div>

    <div class="card-body ">
        <div class="mt-2 text-end">
            <a href="{{ $route }}">{{ $linkText }}</a>
        </div>
    </div>
</div>
