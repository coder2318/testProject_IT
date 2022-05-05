@extends('admin.layouts.app')
@section('content')
    <div class="card m-4">
        <div class="card-body">
            <h3>Имя инвестор: {{ $investor->fio }}</h1>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Копия паспорта</th>
                            <td><a href="{{ asset("$investor->file") }}" target="_blank">Загрузка</i></a>
                            </td>
                        </tr>
                        <tr>
                            <th>Страны</th>
                            <td>{{ $investor->country }}</td>
                        </tr>
                        <tr>
                            <th>Деятельность</th>
                            <td>{{ $investor->activity }}</td>
                        </tr>
                        <tr>
                            <th>Запланированный проект</th>
                            <td>{{ $investor->project }}</td>
                        </tr>
                        <tr>
                            <th>Заявка</th>
                            <td><a href="{{ asset("$investor->file2") }}" target="_blank">Загрузка</a>
                            </td>
                        </tr>
                        <tr>
                            <th>Доходе за последние 12 месяцев</th>
                            <td><a href="{{ asset("$investor->file3") }}" target="_blank">Загрузка</a>
                            </td>
                        </tr>
                        <tr>
                            <th>Телефон номер</th>
                            <td>{{ $investor->phone_number }}</td>
                        </tr>
                        <tr>
                            <th>Контакт (username) в телеграме</th>
                            <td>{{ $investor->username }}</td>
                        </tr>
                        <tr>
                            <th>Эмайл</th>
                            <td>{{ $investor->email }}</td>
                        </tr>
                    </tbody>
                </table>
                <a href="{{ route('investor.index') }}" class="btn btn-primary float-left mt-3">Назад</a>
        </div>
    </div>
@endsection
