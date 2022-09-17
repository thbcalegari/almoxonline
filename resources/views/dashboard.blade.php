<x-app-layout>
    <x-slot name="header">
        {{ __('Dashboard') }}
    </x-slot>



    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-3">
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>35</h3>
                            <p>Produtos com validade superior a um ano.</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-dolly-flatbed"></i>
                        </div>
                    </div>
                </div> 
                <div class="col-3">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>44</h3>
                            <p>Produtos com estoque baixo</p>
                        </div>
                        <div class="icon">
                            <i class="fab fa-buromobelexperte"></i>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>65</h3>
                            <p>Produtos estão perto do vencimento</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-exclamation"></i>
                        </div>
                    </div>
                </div>  
                <div class="col-3">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>150</h3>
                            <p>Novas requisições de insumos</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-file-signature"></i>
                        </div>
                    </div>
                </div>             
            </div>
        <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
</x-app-layout>
