<x-app-layout>
    <x-slot name="header">
        {{__('Movimentações')}}
    </x-slot>

    <div class="content">
        <div class="content-fluid">
            <div class="row">
                <div class="col-6">
                    <p>Aqui vai ter várias abas:</p>
                    <p>Uma para transferência de insumos dentro da unidade de saúde.</p>
                    <p>Outra para transferência de insumos para outras unidades de saúde, com inputs inerentes a elas.</p>
                    <p>E uma outra para informe de descarte de material vencido.</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>