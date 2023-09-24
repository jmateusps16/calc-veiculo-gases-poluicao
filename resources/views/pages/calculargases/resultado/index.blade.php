<h4 class="page-title">Resultado</h4>
<div class="card">
    <div class="row">
        <div class="col-md-6">
            <div class="card card-stats card-success">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5">
                            <div class="icon-big text-center">
                                <i class="la la-automobile"></i>
                            </div>
                        </div>
                        <div class="col-7 d-flex align-items-center">
                            <div class="numbers">
                                <p class="card-category">Veículos</p>
                                <h4 class="card-title">{{ $dados['quantidadeVeiculos'] }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-stats card-danger">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="icon-big text-center">
                                <i class="la la-bar-chart"></i>
                            </div>
                        </div>
                        <div class="col-7 d-flex align-items-center">
                            <div class="numbers">
                                <p class="card-category">Gases Emitidos</p>
                                <h4 class="card-title"> {{ $dados['quantidadeDeGases'] }} quilogramas (kg) de CO2</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>