<x-layouts.app>
    <div class="container mt-5">        
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <h1>{{ $title }}</h1>
                <p class="lead">{{ $description }}</p>

                @if(session()->has('success'))
                    <div class="alert alert-success">{{session('success') }}</div>
                @endif

                <div class="mt-5">
                    <form action="{{ route('contacts.receive') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="dept">Dipartimento</label>
                                <select name="dept" id="dept" class="form-control">
                                    <option value="1">Amministrazione</option>
                                    <option value="2">Marketing</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="name">Nome</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="col-12">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>
                            <div class="col-12">
                                <label for="message">Messaggio</label>
                                <textarea name="message" id="message" class="form-control"
                                    rows="6"></textarea>
                            </div>
                            <div class="col-12 text-end">
                                <button type="submit" class="btn btn-primary">Invia messaggio</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>