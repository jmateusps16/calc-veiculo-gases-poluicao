@extends('base')
@section('root')
<div class="content">
    <div class="container-fluid">
        <h4 class="page-title">Calculadora</h4>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Emissão de Gases Veicular</div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="defaultSelect">Selecione o Tipo de Veículo</label>
                            <select class="form-control form-control" id="defaultSelect" name="tipo_veiculo">
                                @if (count($tipoVeiculos) > 0)
                                    @foreach ($tipoVeiculos as $tipo)
                                        <option value="{{ $tipo->id }}">{{ $tipo->nome }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="largeInput">Quantidade de Veículos</label>
                            <input type="number" class="form-control form-control" id="defaultInput" placeholder="Informe a quantidade">
                        </div>
                        <div class="form-group">
                            <label for="largeInput">Quantidade de KM rodado</label>
                            <input type="number" class="form-control form-control" id="defaultInput" placeholder="Informe a quantidade de KM">
                        </div>
                        <div class="form-group">
                            <label for="largeInput">Quantidade de Combustível Usado</label>
                            <input type="number" class="form-control form-control" id="defaultInput" placeholder="Informe a quantidade em Litros">
                        </div>
                        <div class="form-group">
                            <label for="largeInput">Quantidade de Dias</label>
                            <input type="number" class="form-control form-control" id="defaultInput" placeholder="Informe a quantidade de Dias">
                        </div>
                    </div>
                    <div class="card-action">
                        <button class="btn btn-success">Calcular</button>
                        <button class="btn btn-danger">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection