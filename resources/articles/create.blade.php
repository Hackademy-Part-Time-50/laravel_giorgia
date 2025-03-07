<x-layouts.app title='Crea un nuovo articolo'>

    <form action="{{route('article_store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-12">
                <label for="title">Titolo</label>
                <input type="text" name="title" id="title" class="form-control">
                <label for="category">Categoria</label>
                <input type="text" name="category" id="category" class="form-control">
                <label for="category">Categoria</label>
                <input type="text" name="category" id="category" class="form-control">
            </div>
        </div>
    </form>


</x-layouts.app>