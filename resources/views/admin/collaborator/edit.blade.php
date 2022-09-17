<x-app-layout>
    <x-slot name="header">
        {{__('Atualização de informações de usuário')}}
    </x-slot>

    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.collaborators.update', $user->id)}}" method="post">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="name">Nome:</label>
                            <input type="text" class="form-control @error('name') is-invalid  @enderror" value="{{$user->name}}" id="name" name="name">
                            @error('name')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="email">E-mail:</label>
                            <input type="email" class="form-control @error('email') is-invalid  @enderror" value="{{$user->email}}" id="email" name="email">
                            @error('email')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="password">Digite a sua senha:</label>
                            <input type="password" name="password" id="password" class="form-control @error('password') is-invalid  @enderror">
                            @error('password')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="password_confirmation">Repita a senha:</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                        </div>
                    </div>
                </div>

                <button class="btn btn-primary">Atualizar</button>
            </form>
        </div>
    </div>

</x-app-layout>