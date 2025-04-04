@extends('layouts.layout-buscador')

@section('content')
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card p-3  py-4">
                    <h5>Ingrese el folio que aparece en la constancia, que le fue entregada en las oficinas de la Secretaría de la Honestidad y Función Pública</h5>

                    <div class="row">
                        <div class="col-md-9">
                            <input type="text" id="txtBusca" name="txtBusca" class="form-control" placeholder="Ingresar folio ej: 1038-C-2021">
                        </div>

                        <div class="col-md-3">
                            <button class="btn btn-secondary btn-block" onclick="buscar_folio()">Buscar coincidencias</button>
                        </div>                       
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                             <div class="table-responsive">
                                <ul id="resultados" name="resultados" class="resultados"></ul>                    
                            </div>
                        </div>
                    </div>
                    
                </div>


            </div>
        </div>
    </div>
@endsection

@section('js')
     <script src="{{ asset('js/buscador/clsBuscar.js') }}"></script>
@endsection