@extends('admin.layouts.app')
@section('content')
    <div class="card m-4">
        <div class="card-body">
            <h3 align="center" class="m-5">Дашборд в админ панели IT VISA</h3>
            <div class="col-md-12" style="font-size: 18px">
                <div class="row" style="margin: 0 auto; max-width: 100%">
                    <div class="col-md-3 card bg-light mb-3 mr-5" style="max-width: 18rem;">
                        <div class="card-header" style="text-align: right; font-size: 24px; font-weight: bold">{{$reports['all']['all']}}</div>
                        <div class="card-body">
                            <h5 class="card-title m-3"><b>Всего заявок</b></h5> <br>
                            <ul class="card-text">
                                <li>за 30 дней: {{$reports['all']['last_30_count']}}</li>
                                <li>за 7 дней: {{$reports['all']['last_7_count']}}</li>
                                <li>сегодня: {{$reports['all']['today_count']}}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 card bg-light mb-3 mr-5" style="max-width: 18rem;">
                        <div class="card-header" style="text-align: right; font-size: 24px; font-weight: bold">{{$reports['all_sent']['all']}}</div>
                        <div class="card-body">
                            <h5 class="card-title mb-2"> <b>Заявки отправлены экспертам</b></h5> <br>
                            <ul class="card-text">
                                <li>за 30 дней: {{$reports['all_sent']['last_30_count']}}</li>
                                <li>за 7 дней: {{$reports['all_sent']['last_7_count']}}</li>
                                <li>сегодня: {{$reports['all_sent']['today_count']}}</li>
                            </ul>
                        </div>
                    </div>
                    @foreach($reports['expert'] as $index=>$expert)
                        <div class="col-md-3 card bg-light mb-3 mr-5" style="max-width: 18rem;">
                            <div class="card-header" style="text-align: right; font-size: 24px; font-weight: bold">{{$expert->all_count}}</div>
                            <div class="card-body">
                                <h5 class="card-title mb-2"> <b>{{$expert->fullname}}</b></h5>
                                <ul class="card-text">
                                    <li>согласовал: {{$expert->confirm_count}}</li>
                                    <li>отклонил: {{$expert->reject_count}}</li>
                                    <li>на рассмотрении: {{$expert->waiting_count}}</li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered text-centet" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th rowspan="2">№ заявки</th>
                            <th rowspan="2">Категория</th>
                            <th rowspan="2">Дата подачи заявки</th>
                            <th rowspan="2">Дата отправки экспертам</th>
                            <th colspan="2">Эксперт 1</th>
                            <th colspan="2">Эксперт 2</th>
                            <th colspan="2">Эксперт 3</th>
                            <th colspan="2">Эксперт 4</th>
                            <th colspan="2">Эксперт 5</th>
                        </tr>
                        <tr>
                            <th>Решение</th>
                            <th>Дата решения</th>
                            <th>Решение</th>
                            <th>Дата решения</th>
                            <th>Решение</th>
                            <th>Дата решения</th>
                            <th>Решение</th>
                            <th>Дата решения</th>
                            <th>Решение</th>
                            <th>Дата решения</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($ancetas['investor'] as $investor)
                            @php
                                $status = explode(',', $investor->status);
                                $updated = explode(',', $investor->updated);
                            @endphp
                            <tr >
                                <td>{{ $investor->anceta_id }}</td>
                                <td>
                                Инвесторы
                                </td>
                                <td>{{ date_format(date_create($investor->investor->created_at), 'Y-m-d') }}</td>
                                <td>{{ date_format(date_create($investor->investor->updated_at), 'Y-m-d') }}</td>
                            @foreach($status as $index=>$stat)
                                    @php
                                        switch ($stat){
                                            case 2:
                                                $status_name = 'На рассмотрении';
                                                break;
                                            case 3:
                                                $status_name = 'Согласовал';
                                                break;
                                            case 4:
                                                $status_name = 'Отклонил';
                                                break;
                                        }
                                    @endphp
                                    <td>
                                        {{ $status_name }}
                                    </td>
                                    <td>
                                        {{ date_format(date_create($updated[$index]), 'Y-m-d') }}
                                    </td>
                                @endforeach


                            </tr>
                        @endforeach
                        @foreach ($ancetas['founder'] as $founder)
                            @php
                                $status = explode(',', $founder->status);
                                $updated = explode(',', $founder->updated);
                            @endphp
                            <tr >
                                <td>{{ $founder->anceta_id }}</td>
                                <td>
                                    Учредители резидентов IT Park
                                </td>
                                <td>{{ date_format(date_create($founder->founder->created_at), 'Y-m-d') }} </td>
                                <td>{{ date_format(date_create($founder->founder->updated_at), 'Y-m-d') }} </td>
                                @foreach($status as $index=>$stat)
                                    @php
                                        switch ($stat){
                                            case 2:
                                                $status_name = 'На рассмотрении';
                                                break;
                                            case 3:
                                                $status_name = 'Согласовал';
                                                break;
                                            case 4:
                                                $status_name = 'Отклонил';
                                                break;
                                        }
                                    @endphp
                                    <td>
                                        {{ $status_name }}
                                    </td>
                                    <td>
                                        {{ date_format(date_create($updated[$index]), 'Y-m-d') }}
                                    </td>
                                @endforeach


                            </tr>
                        @endforeach
                        @foreach ($ancetas['visa'] as $visa)
                            @php
                                $status = explode(',', $visa->status);
                                $updated = explode(',', $visa->updated);
                            @endphp
                            <tr >
                                <td>{{ $visa->anceta_id }}</td>
                                <td>
                                    Учредители резидентов IT Park
                                </td>
                                <td>{{ date_format(date_create($visa->visa->created_at), 'Y-m-d') }}</td>
                                <td>{{ date_format(date_create($visa->visa->updated_at), 'Y-m-d') }}</td>
                                @foreach($status as $index=>$stat)
                                    @php
                                        switch ($stat){
                                            case 2:
                                                $status_name = 'На рассмотрении';
                                                break;
                                            case 3:
                                                $status_name = 'Согласовал';
                                                break;
                                            case 4:
                                                $status_name = 'Отклонил';
                                                break;
                                        }
                                    @endphp
                                    <td>
                                        {{ $status_name }}
                                    </td>
                                    <td>
                                        {{ date_format(date_create($updated[$index]), 'Y-m-d') }}
                                    </td>
                                @endforeach


                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex float-right">
{{--                        {!! $companies->links() !!}--}}
                    </div>
                </div>
            </div>
            <a href="{{ route('admin.dashboard') }}" class="btn btn-primary float-left mt-3">Назад</a>
        </div>
    </div>
@endsection
