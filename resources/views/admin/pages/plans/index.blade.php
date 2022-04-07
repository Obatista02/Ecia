@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('admin.index') }}">Dashboard</a>
        </li>

        <li class="breadcrumb-item active">
            <a href="{{ route('plans.index') }}">Planos</a>
        </li>
    </ol>

    <h1>Painel <a href="{{ route('plans.create') }}" class="btn btn-dark" method="POST" style="margin-left: 10px">Novo Plano</a> </h1>

@stop

@section('content')
    <p>Listagem dos Planos</p>
    <div class="card">
        <div class="card-header">
            <form action="{{ route('plans.search') }}" method="POST" class="form form-inline">
                @csrf
                <div class="form-group">
                <input type="text" name="filter" placeholder="Procurar" class="form-control" value="{{ $filters['filter'] ??  ''}}">
                <button type="submit" class="btn btn-dark">Filtrar</button>
                </div>
            </form>
        </div>

        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th style="width:250" >Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($plans as $plan)
                        <tr>
                            <td>
                                {{ $plan->name }}
                            </td>
                            <td>
                            R$ {{ number_format($plan->price, 2, ',', '.')}}
                            </td>
                            <td>
                                <a href="{{ route('plans.show', $plan->url) }}" class="btn btn-warning">Ver</a>

                                <a href="{{ route('details.plan.index', $plan->url) }}" class="btn btn-primary">Detalhes</a>

                                <a href="{{ route('plans.edit', $plan->url) }}" class="btn btn-info">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if(isset($filters))
                {!! $plans->appends($filters)->links() !!}
            @else
                {!! $plans->links() !!}
            @endif
        </div>
    </div>
@stop