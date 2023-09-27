@extends('base')
@section('root')
<div class="content">
    <div class="container-fluid">
        <h4 class="page-title">Calculadora</h4>
        <div class="row">
            <div class="col-md-6">
                <form id="calculadora-form" action="{{ route('pages.calculargases.calcular') }}" method="post">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Emissão de Gases Veicular</div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="defaultSelect">Selecione o Tipo de Veículo</label>
                                <select class="form-control form-control" id="tipo_veiculo" name="tipo_veiculo">
                                    @if (count($tipoVeiculos) > 0)
                                        @foreach ($tipoVeiculos as $tipo)
                                            <option value="{{ $tipo->id }}">{{ $tipo->nome }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="largeInput">Quantidade de Veículos</label>
                                <input type="text" class="form-control form-control" id="quantidade_veiculos" name="quantidade_veiculos" placeholder="Informe a quantidade" pattern="^-?\d+(\.\d+)?$">
                                <small class="form-text text-muted">Informe um número positivo (ex: 5).</small>
                            </div>
                            <div class="form-group">
                                <label for="largeInput">KM Rodado</label>
                                <input type="text" class="form-control form-control" id="km_rodado" name="km_rodado" placeholder="Informe a quantidade de KM" pattern="^-?\d+(\.\d+)?$">
                                <small class="form-text text-muted">Informe um número positivo (ex: 5).</small>
                            </div>
                            <div class="form-group">
                                <label for="largeInput">Quantidade de Dias</label>
                                <input type="text" class="form-control form-control" id="quantidade_dias" name="quantidade_dias" placeholder="Informe a quantidade de Dias" pattern="^-?\d+(\.\d+)?$">
                                <small class="form-text text-muted">Informe um número positivo (ex: 5).</small>
                            </div>
                        </div>
                        <div class="card-action">
                            <button class="btn btn-success">Calcular</button>
                            <button class="btn btn-danger" id="btn-cancelar" type="reset">Limpar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-6" id="resultado">
        {{-- Resultado --}}
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // Intercepta o envio do formulário
    $('#calculadora-form').on('submit', function (e) {
        e.preventDefault(); // Impede o envio padrão do formulário
        console.log('Entrou no script');

        // Coleta os dados do formulário
        var formData = $(this).serialize();

        // Envia uma solicitação Ajax para a rota de cálculo
        $.ajax({
            url: "{{ route('pages.calculargases.calcular') }}",
            method: "POST",
            data: formData,
            success: function (response) {
                if (response.error) {
                    $('#resultado').html('<div class="alert alert-danger">' + response.error + '</div>');
                } else {
                    console.log(response);
                    $('#resultado').html(response.html);
                }
            },
            error: function (error) {
                console.error(error);
            }
        });
    });

    $('#btn-cancelar').on('click', function (e) {
        e.preventDefault(); // Impede o envio padrão do formulário
        $('#calculadora-form')[0].reset();
        $('#resultado').html(''); // Limpa qualquer resultado anterior
    });
</script>

@endsection