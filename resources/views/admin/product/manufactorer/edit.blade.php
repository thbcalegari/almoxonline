<x-app-layout>
    <x-slot name="header">
        {{__('Atualização de informações de fabricante')}}
    </x-slot>

    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.manufactorers.update', $manufactorer->id)}}" method="post">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="name">Fabricante:</label>
                            <input type="text" class="form-control @error('name') is-invalid  @enderror" value="{{$manufactorer->name}}" id="name" name="name">
                            @error('name')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="cnpj">CNPJ:</label>
                            <input type="text" class="form-control @error('cnpj') is-invalid  @enderror" value="{{$manufactorer->cnpj}}" id="cnpj" name="cnpj">
                            @error('cnpj')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>  
                        <div class="form-group">
                            <label for="address">Endereço:</label>
                            <input type="text" class="form-control @error('address') is-invalid  @enderror" value="{{$manufactorer->address}}" id="address" name="address">
                            @error('address')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div> 
                        <div class="form-group">
                            <label for="email">E-mail:</label>
                            <input type="email" class="form-control @error('email') is-invalid  @enderror" value="{{$manufactorer->email}}" id="email" name="email">
                            @error('email')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>  
                        <div class="form-group">
                            <label for="phone">Telefone:</label>
                            <input type="text" class="form-control @error('phone') is-invalid  @enderror" value="{{$manufactorer->phone}}" id="phone" name="phone">
                            @error('phone')
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