            @extends('admin.layouts.app')
            @section('content')
                <div class="card m-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>Имя</th>
                                    <td>{{ $founder->fio }}</td>
                                </tr>
                                <tr>
                                    <th>Копия паспорта</th>
                                    <td><a href="{{ asset("$founder->file") }}" target="_blank"><i
                                                class="fas fa-file-download fa-2xl"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Страны</th>
                                    <td>{{ $founder->country }}</td>
                                </tr>
                                <tr>
                                    <th>Свидетельство о резидентстве в IT-Парк</th>
                                    <td><a href="{{ asset("$founder->file2") }}" target="_blank"><i
                                                class="fas fa-file-download fa-2xl"></i></a>
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
