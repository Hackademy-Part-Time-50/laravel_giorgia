<x-layouts.app :title="$title">
    <div class="container mt-5">    
        <div class="mb-2">
            <a href="{{ route('articles') }}" class="btn btn-sm btn-light">indietro</a>
        </div>

        <span>{{ $category }}</span>
        <h1>{{ $title }}</h1>

        
    </div>
</x-layouts.app>