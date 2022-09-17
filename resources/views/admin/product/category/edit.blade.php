<x-app-layout>
    <x-slot name="header">
        {{__('Atualização de informações de categoria')}}
    </x-slot>

    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.categories.update', $category->id)}}" method="post">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="category">Categoria:</label>
                            <input type="text" class="form-control @error('category') is-invalid  @enderror" id="category" name="category">
                            @error('category')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <button class="btn btn-primary">Atualizar</button>
            </form>
        </div>
    </div>

</x-app-layout>