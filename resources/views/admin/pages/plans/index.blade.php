@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
    <h1>Dashboard </h1>
@stop

@section('content')
    <div class="card">
            <div class="card-header">
                    #filtros
            </div>

            <div class="card-body">
                <table class="table table-condensed">
                        <thead>
                            <th>Nome</th>
                            <th>Preço</th>
                            <th style="width 50px;">Ações</th>
                        </thead>
                        <tbody>
                            @foreach($plans as $plan)
                                    <tr>
                                            <td>
                                                {{ $plan->name }}
                                            </td>
                                            <td>
                                                {{ $plan->price }}
                                            </td>
                                            <td style="width=10px;">
                                                <a href="" class="btn btn-warning">VER</a>
                                            </td>
                                    </tr>
                            @endforeach
                        </tbody>

                    </table>
            </div>

            <div class="card-footer">
                    {!! $plans->links() !!}
            </div>
    </div>
@stop
