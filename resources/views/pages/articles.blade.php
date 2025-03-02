<x-layouts.app title="Articoli">
    <div class="container mt-5">       
    
        <h1>Articoli</h1>

        <div class="mt-5">
            @if(! $articles)
                <h4>Nessun articolo disponibile!</h4>
            @else
                @foreach($articles as $article)
                    @if($article['visible'])
                    <x-card :title="$article['title']"
                            :route="route('article', $article['id'])"
                            link-text="Leggi di più..."
                            class="border-info"
                    />
                    @endif
                @endforeach
            @endif
        </div>
    </div>

    
</x-layouts.app>
