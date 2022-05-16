@extends('admin.layouts.app')
@section('content')
    <div class="card m-4">
        <div class="card-body">
            <h3>Имя инвестор: {{ $investor->fio }}</h1>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Копия паспорта</th>
                            <td><a href="{{ asset("$investor->file4") }}" target="_blank">Загрузка</i></a>
                            </td>
                        </tr>
                        <tr>
                            <th>Страны</th>
                            <td>{{ $investor->citizen }}</td>
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
                            <th>Копия решения учредителей</th>
                            <td><a href="{{ asset("$investor->file2") }}" target="_blank">Загрузка</a>
                            </td>
                        </tr>
                        <tr>
                            <th>Письмо (ходатайство) </th>
                            <td><a href="{{ asset("$investor->file3") }}" target="_blank">Загрузка</a>
                            </td>
                        </tr>
                        <tr>
                            <th>Выписка из банка</th>
                            <td><a href="{{ asset("$investor->file") }}" target="_blank">Загрузка</a>
                            </td>
                        </tr>
                        <tr>
                            <th>Телефон номер</th>
                            <td>{{ $investor->phone }}</td>
                        </tr>
                        <tr>
                            <th>Дополнительный номер телефона</th>
                            <td>{{ $investor->additional_phone }}</td>
                        </tr>
                        <tr>
                            <th>Aдресс</th>
                            <td>{{ $investor->adress }}</td>
                        </tr>
                        <tr>
                            <th>Дата рождения</th>
                            <td>{{ $investor->date_birth }}</td>
                        </tr>
                        <tr>
                            <th>Пол</th>
                            <td>{{ $investor->sex }}</td>
                        </tr>
                        <tr>
                            <th>Номер паспорта</th>
                            <td>{{ $investor->passport_number }}</td>
                        </tr>
                        <tr>
                            <th>Дата получения паспорта</th>
                            <td>{{ $investor->passport_date }}</td>
                        </tr>
                        <tr>
                            <th>Срок действия паспорта</th>
                            <td>{{ $investor->passport_expire }}</td>
                        </tr>
                        <tr>
                            <th>Фото</th>
                            <td><a href="{{ asset("$investor->file5") }}" target="_blank">Загрузка</a></td>
                        </tr>
                        <tr>
                            <th>Ф.И.О ходатайствующего лица</th>
                            <td>{{ $investor->applicant_fio }}</td>
                        </tr>
                        <tr>
                            <th>Должность ходатайствующего лица</th>
                            <td>{{ $investor->applicant_position }}</td>
                        </tr>
                        <tr>
                            <th>Контактный номер ходатайствующего лица</th>
                            <td>{{ $investor->applicant_phone_number }}</td>
                        </tr>
                        <tr>
                            <th>Срок действия IT-виза</th>
                            <td>{{ $investor->visa_date }}</td>
                        </tr>
                    </tbody>
                </table>
                @if(!$investor->reletions->isEmpty())
                <h3>Данные о сопровождающих родственниках </h3>
                <table class="table table-bordered">
                    <tbody>
                    @foreach($investor->reletions as $reletion)
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
                <a href="{{ route('investor.index') }}" class="btn btn-primary float-left mt-3">Назад</a>
        </div>
    </div>
@endsection
