<x-app-layout>
    <x-slot name="header">
        {{__('Colaboradores')}}
    </x-slot>



<div class="card">
    <div class="card-header d-flex justify-content-end">
        <a href="{{route('admin.collaborators.create')}}" class="btn btn-primary">Cadastrar</a>
    </div>
    <div class="card-body">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{route('admin.collaborators.edit', $user->id)}}" class="btn btn-info"><i class="fas fa-edit"></i></a>
                                <a href="{{route('admin.collaborators.destroy', $user->id)}}" onclick="event.preventDefault(); document.getElementById('form-delete-{{$user->id}}').submit();" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                <form action="{{route('admin.collaborators.destroy', $user->id)}}" id="form-delete-{{$user->id}}" class="d-none" method="post">
                                    @csrf
                                    @method('delete')
                                </form>
                            </div>
                        </td>
                    </tr>                    
                @endforeach
            </tbody>
        </table>

        {{$users->links()}}
    </div>
</div>

</x-app-layout>