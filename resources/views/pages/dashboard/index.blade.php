@extends('base')
@section('root')
<div class="content">
    <div class="container-fluid">
        <h4 class="page-title">Informações Gerais</h4>
        @include('pages.dashboard.components.cards')
        @include('pages.dashboard.components.estatisticas')
    </div>
</div>
@endsection