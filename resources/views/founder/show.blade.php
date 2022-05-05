            @extends('admin.layouts.app')
            @section('content')
                <div class="card m-4">
                    <div class="card-body">
                        <h3>Имя резидент: {{ $founder->fio }}</h1>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>Копия паспорта</th>
                                        <td><a href="{{ asset("$founder->file") }}" target="_blank">Загрузка</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Страны</th>
                                        <td>{{ $founder->country }}</td>
                                    </tr>
                                    <tr>
                                        <th>Свидетельство о резидентстве в IT-Парк</th>
                                        <td><a href="{{ asset("$founder->file2") }}" target="_blank">Загрузка</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Телефон номер</th>
                                        <td>{{ $founder->phone }}</td>
                                    </tr>
                                    <tr>
                                        <th>Эмайл</th>
                                        <td>{{ $founder->email }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="{{ route('founder.index') }}" class="btn btn-primary float-left mt-3">Назад</a>
                    </div>
                </div>
            @endsection
