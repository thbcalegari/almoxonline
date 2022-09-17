<x-app-layout>
    <x-slot name="header">
        {{__('Fabricantes de produtos')}}
    </x-slot>



<div class="card">
    <div class="card-header d-flex justify-content-end">
        <a href="{{route('admin.manufactorers.create')}}" class="btn btn-primary">Cadastrar</a>
    </div>
    <div class="card-body">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nome da fabricante</th>
                    <th>CNPJ</th>
                    <th>Endereço</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($manufactorers as $manufactorer)
                    <tr>
                        <td>{{$manufactorer->name}}</td>
                        <td>{{$manufactorer->cnpj}}</td>
                        <td>{{$manufactorer->address}}</td>
                        <td>{{$manufactorer->email}}</td>
                        <td>{{$manufactorer->phone}}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{route('admin.manufactorers.edit', $manufactorer->id)}}" class="btn btn-info"><i class="fas fa-edit"></i></a>
                                <a href="{{route('admin.manufactorers.destroy', $manufactorer->id)}}" onclick="event.preventDefault(); document.getElementById('form-delete-{{$manufactorer->id}}').submit();" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                <form action="{{route('admin.manufactorers.destroy', $manufactorer->id)}}" id="form-delete-{{$manufactorer->id}}" class="d-none" method="post">
                                    @csrf
                                    @method('delete')
                                </form>
                            </div>
                        </td>
                    </tr>                    
                @endforeach
            </tbody>
        </table>
        <br>
        <a href="{{route('admin.products.index')}}" class="btn btn-dark">Voltar</a>
    </div>
</div>

</x-app-layout>