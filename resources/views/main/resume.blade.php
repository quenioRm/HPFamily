@extends('layouts.main')

@section('title', 'Resumo Geral')

@section('content')
<div>
    <div class="card">
        <div class="row invoice-contact">
            <div class="col-md-8">
                <div class="invoice-box row">
                    <div class="col-sm-12">
                        <table class="table table-responsive invoice-table table-borderless p-l-20">
                            <tbody>
                                <tr>
                                    <td><h1>{{$data->name}}</h1></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
        <div class="card-body">
            <div class="row invoive-info">
                <div class="col-md-4 col-xs-12 invoice-client-info">
                    <h6>Informação :</h6>
                    <h6 class="m-0">{{$data->name}}</h6>
                    <p class="m-0 m-t-10">{{$data->observations}}</p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <h6>Informações :</h6>
                    <table class="table table-responsive invoice-table invoice-order table-borderless">
                        <tbody>
                            <tr>
                                <th>Date :</th>
                                <td>{{$data->created_at}}</td>
                            </tr>
                            <tr>
                                <th>Status :</th>
                                <td>
                                    @if($data->status_payment == 0)
                                    <span class="label label-success">pago</span>
                                    @elseif($data->status_payment == 1)
                                    <span class="label label-warning">Não pago</span>
                                    @elseif($data->status_payment == 2)
                                    <span class="label label-warning">pago 1/3</span>
                                    @elseif($data->status_payment == 3)
                                    <span class="label label-warning">pago 2/3</span>
                                    @elseif($data->status_payment == 4)
                                    <span class="label label-success">pago 3/3</span>
                                    @elseif($data->status_payment == 5)
                                    <span class="label label-warning">pago 1/2</span>
                                    @else
                                    <span class="label label-success">pago 2/2</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Id :</th>
                                <td>
                                    #{{$data->id}}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <h5>Comprovantes :</h5>
                    <div class="table-responsive">
                        <table class="table invoice-detail-table">
                            <thead>
                                <tr class="thead-default">
                                    <th>Nome</th>
                                    <th>Comprovante</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data->cadastro_1_images as $cadastro_1_image)
                                <tr>
                                    <td>{{$cadastro_1_image->name}}</td>
                                    <td><a target="_blank" href="{{url('storage/' . $cadastro_1_image->path)}}">abrir</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-12">
                    <h5>Convidados :</h5>
                    <div class="table-responsive">
                        <table class="table invoice-detail-table">
                            <thead>
                                <tr class="thead-default">
                                    <th>Nome</th>
                                    <th>Grau de parentesco</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data->cadastro_2 as $item)
                                <tr>
                                    <td>{{$item->parent1}}</td>
                                    <td>{{$item->part_parent1}}</td>
                                </tr>
                                <tr>
                                    <td>{{$item->parent2}}</td>
                                    <td>{{$item->part_parent2}}</td>
                                </tr>
                                <tr>
                                    <td>{{$item->parent3}}</td>
                                    <td>{{$item->part_parent3}}</td>
                                </tr>
                                <tr>
                                    <td>{{$item->parent4}}</td>
                                    <td>{{$item->part_parent4}}</td>
                                </tr>
                                <tr>
                                    <td>{{$item->parent5}}</td>
                                    <td>{{$item->part_parent5}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm-12 invoice-btn-group text-center">
            <a class="btn btn-primary btn-print-invoice m-b-10" href="{{route('cad1IndexGeneral')}}">Voltar</a>
        </div>
    </div>
</div>
@endsection
@push('scripts')
@endpush
