@extends('admin.layouts.app')
@section('content')
    <div class="card m-4">
        <div class="card-body">
            <h3>Имя резидент: {{ $founder->fio }}</h3>
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <th>Дата рождения</th>
                    <td>{{ $founder->date_birth }}</td>
                </tr>
                <tr>
                    <th>Пол</th>
                    <td>{{ $founder->sex }}</td>
                </tr>
                <tr>
                    <th>Номер паспорта</th>
                    <td>{{ $founder->passport_number }}</td>
                </tr>
                <tr>
                    <th>Дата получения паспорта</th>
                    <td>{{ $founder->passport_date }}</td>
                </tr>
                <tr>
                    <th>Срок действия паспорта</th>
                    <td>{{ $founder->passport_expire }}</td>
                </tr>
                <tr>
                    <th>Фото</th>
                    <td><a href="{{ asset("$founder->file5") }}" target="_blank">Загрузка</a></td>
                </tr>
                <tr>
                    <th>Сертификат резидентсва</th>
                    <td><a href="{{ asset("$founder->file2") }}" target="_blank">Загрузка</a></td>
                <tr>
                    <th>Срок действия IT-виза</th>
                    <td>{{ $founder->visa_date }}</td>
                </tr>
                <tr>
                    <th>Копия паспорта</th>
                    <td><a href="{{ asset("$founder->file4") }}" target="_blank">Загрузка</a>
                    </td>
                </tr>
                <tr>
                    <th>Страны</th>
                    <td>{{ $founder->citizen }}</td>
                </tr>
                <tr>
                    <th>Адресс</th>
                    <td>{{ $founder->adress }}</td>
                </tr>
                <tr>
                    <th>Телефон номер</th>
                    <td>{{ $founder->phone }}</td>
                </tr>
                <tr>
                    <th>Дополнительный номер телефона</th>
                    <td>{{ $founder->additional_phone }}</td>
                </tr>
                <tr>
                    <th>Срок действия IT-виза</th>
                    <td>{{ $founder->visa_date }}</td>
                </tr>
                <tr>
                    <th>Наименование компании резидента Технопарка</th>
                    <td>{{ $founder->company_name }}</td>
                </tr>
                <tr>
                    <th>Свидетельство о резидентстве в IT-Парк</th>
                    <td><a href="{{ asset("$founder->file2") }}" target="_blank">Загрузка</a>
                    </td>
                </tr>
                </tbody>
            </table>
            @if(!$founder->reletions->isEmpty())
                <h3>Данные о сопровождающих родственниках </h3>
                <table class="table table-bordered">
                    <tbody>
                    @foreach($founder->reletions as $reletion)
                        <tr>
                            <th>Степень родства</th>
                            <td>{{$reletion->reletion_level}}</td>
                        </tr>
                        <tr>
                            <th>Ф.И.О</th>
                            <td>{{$reletion->reletion_fio}}</td>
                        </tr>
                        <tr>
                            <th>Дата рождения</th>
                            <td>{{$reletion->reletion_birth}}</td>
                        </tr>
                        <tr>
                            <th>Гражданство</th>
                            <td>{{$reletion->reletion_citizen}}</td>
                        </tr>
                        <tr>
                            <th>Копия паспорта</th>
                            <td><a href="{{ asset("$reletion->file6") }}" target="_blank">Загрузка</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
            <a href="{{ route('founder.index') }}" class="btn btn-primary float-left mt-3">Назад</a>
        </div>
    </div>
@endsection
