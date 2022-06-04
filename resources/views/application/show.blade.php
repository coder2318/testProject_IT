@extends('admin.layouts.app')
@section('content')
    <div class="card m-4">
        <div class="card-body">
            <h3>Данные заявителя: {{ $application->fio }}</h3>
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <th>Дата рождения</th>
                    <td>{{ $application->date_birth }}</td>
                </tr>
                <tr>
                    <th>Пол</th>
                    <td>{{ $application->sex }}</td>
                </tr>
                <tr>
                    <th>Номер паспорта</th>
                    <td>{{ $application->passport_number }}</td>
                </tr>
                <tr>
                    <th>Дата получения паспорта</th>
                    <td>{{ $application->passport_date }}</td>
                </tr>
                <tr>
                    <th>Срок действия паспорта</th>
                    <td>{{ $application->passport_expire }}</td>
                </tr>
                <tr>
                    <th>Страны</th>
                    <td>{{ $application->citizen }}</td>
                </tr>
                <tr>
                    <th>Номер выданной рекомендации</th>
                    <td>{{ $application->register_date }}</td>
                </tr>
                <tr>
                    <th>Срок действия рекомендации</th>
                    <td>{{ $application->expire_date }}</td>
                </tr>
                <tr>
                    <th>Статус выданной рекомендации</th>
                    <td>{{ $application->status }}</td>
                </tr>
                <tr>
                    <th>Qr Code</th>
                    <td><a download href="{{ asset("$application->qr_code") }}">Загрузка</a>
                    </td>
                </tr>
                </tbody>
            </table>
            @if(!$application->reletions->isEmpty())
                <h3>Данные о сопровождающих родственниках </h3>
                <table class="table table-bordered">
                    <tbody>
                    @foreach($application->reletions as $reletion)
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
                    @endforeach
                    </tbody>
                </table>
            @endif
            <a href="{{ route('application.index') }}" class="btn btn-primary float-left mt-3">Назад</a>
        </div>
    </div>
@endsection
