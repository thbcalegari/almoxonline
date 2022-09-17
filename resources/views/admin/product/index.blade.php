<x-app-layout>
    <x-slot name="header">
        {{__('Relação de insumos em estoque')}}
    </x-slot>



    <div class="card">
        <div class="card-header d-flex justify-content-end">
            <div class="btn-group">
                <a href="{{route('admin.manufactorers.index')}}" class="btn btn-info">Fabricantes</a>
                <a href="{{route('admin.categories.index')}}" class="btn btn-info">Categorias</a>
                <a href="{{route('admin.products.create')}}" class="btn btn-primary">Cadastrar produto</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Produto</th>
                        <th>Medida</th>
                        <th>Categoria</th>
                        <th>Foto</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->measure_id}}</td>
                            <td>{{$product->category_id}}</td>
                            <td>{{$product->photo}}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{route('admin.products.edit', $product->id)}}" class="btn btn-info"><i class="fas fa-edit"></i></a>
                                    <a href="{{route('admin.products.destroy', $product->id)}}" onclick="event.preventDefault(); document.getElementById('form-delete-{{$product->id}}').submit();" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    <form action="{{route('admin.products.destroy', $product->id)}}" id="form-delete-{{$product->id}}" class="d-none" method="post">
                                        @csrf
                                        @method('delete')
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-app-layout>