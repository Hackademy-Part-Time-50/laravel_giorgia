<x-layouts.app>
    <div class="container mt-5">
        <h1>Chi Siamo</h1>

        <div class="mt-5">
            @if(!$team)
                <h4>Nessun membro del team disponibile!</h4>
            @else
                @foreach($team as $team_member)
                    <x-card 
                    :title="$team_member['name']" 
                    :route="''" 
                    link-text="Più dettagli!"
                    class= "border-dark" 
                    />
                @endforeach
            @endif
        </div>
    </div>
</x-layouts.app>