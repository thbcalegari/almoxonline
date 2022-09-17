<x-app-layout>
    <x-slot name="header">
        {{__('Atualização de informações de produto')}}
    </x-slot>

    <div class="card">
        <div class="card-body">
            <form enctype="multipart/form-data" action="{{route('admin.products.update', $product->id)}}" method="post">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="name">Produto:</label>
                            <input type="text" class="form-control @error('name') is-invalid  @enderror" value="{{$product->name}}" id="name" name="name">
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
                                
                                @foreach ($measure_units as $unit)
                                    <option value="{{$unit->id}}"{{$product->measure_id == $unit->id ? 'selected' : ''}}>{{$unit->unit}}</option>
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
                                
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}"{{$product->category_id == $category->id ? 'selected' : ''}}>{{$category->category}}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                

                <button class="btn btn-primary">Atualizar produto</button>
                <a href="#" class="btn btn-info">Cadastrar/Atualizar lote</a>
                <a href="{{route('admin.products.index')}}" class="btn btn-dark">Voltar</a>
            </form>
        </div>
    </div>

</x-app-layout>