<x-app-layout>
    <x-slot name="header">
        {{__('Cadastro de novo insumo')}}
    </x-slot>

    <div class="card">
        <div class="card-body">
            <form enctype="multipart/form-data" action="{{route('admin.products.store')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="name">Produto:</label>
                            <input type="text" class="form-control @error('name') is-invalid  @enderror" id="name" name="name">
                            @error('name')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="photo">Foto do produto (opcional):</label>
                            <input type="file" class="form-control-file @error('photo') is-invalid  @enderror" id="photo" name="photo">
                            @error('photo')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="measure_id">Medida:</label>
                            <select name="measure_id" id="measure_id" class="form-control">
                                <option value="" selected>Selecione</option>
                                @foreach ($measure_units as $unit)
                                    <option value="{{$unit->id}}">{{$unit->unit}}</option>
                                @endforeach
                            </select>
                            @error('measure_id')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="category_id">Categoria:</label>
                            <select name="category_id" id="category_id" class="form-control">
                                <option value="" selected>Selecione</option>
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->category}}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                

                <button class="btn btn-primary">Cadastrar produto</button>
                <a href="#" class="btn btn-info">Cadastrar lote</a>
                <a href="{{route('admin.products.index')}}" class="btn btn-dark">Voltar</a>
            </form>
        </div>
    </div>

</x-app-layout>