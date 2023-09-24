@extends('base')
@section('root')
    <div class="container">
        <div class="container-fluid">
            <h4 class="page-title">Cadastro</h4>
            <div class="row">
                <div class="col-md-6">
                    <form action="{{ route('pages.cadastrarveiculo.cadastrar') }}" method="post">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Tipo de Veículo</div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="largeInput">Nome do Tipo</label>
                                    <input type="text" class="form-control form-control" id="defaultInput" name="nome" placeholder="Informe o nome">
                                </div>
                                <div class="form-group">
                                    <label for="largeInput">KM por Litro</label>
                                    <input type="number" class="form-control form-control" id="defaultInput" name="kmporlitro" placeholder="Informe KM por litro">
                                </div>
                            </div>
                            <div class="card-action">
                                <button class="btn btn-success">Adicionar</button>
                                <button class="btn btn-danger">Cancelar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection