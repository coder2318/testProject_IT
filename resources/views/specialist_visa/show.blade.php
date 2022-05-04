    @extends('admin.layouts.app')
    @section('content')
        <div class="card m-4">
            <div class="card-body">
                <h3>Имя: {{ $specialist->fio }}</h1>
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>Копия паспорта</th>
                                <td><a href="{{ asset("$specialist->file") }}" target="_blank">Загрузка</i></a>
                                </td>
                            </tr>
                            <tr>
                                <th>Страны</th>
                                <td>{{ $specialist->country }}</td>
                            </tr>
                            <tr>
                                <th>Резюме</th>
                                <td>{{ $specialist->resume }}</td>
                            </tr>
                            <tr>
                                <th>Доходе за последние 12 месяцев</th>
                                <td><a href="{{ asset("$specialist->file2") }}" target="_blank">Загрузка</a>
                                </td>
                            </tr>
                            <tr>
                                <th>Планируемых доходах</th>
                                <td><a href="{{ asset("$specialist->file3") }}" target="_blank">Загрузка</a>
                                </td>
                            </tr>
                            <tr>
                                <th>Телефон номер</th>
                                <td>{{ $specialist->phone }}</td>
                            </tr>
                            <tr>
                                <th>Эмайл</th>
                                <td>{{ $specialist->email }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{ route('specialist-visa.index') }}" class="btn btn-primary float-left mt-3">Назад</a>
            </div>
        </div>
    @endsection
