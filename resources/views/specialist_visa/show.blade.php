    @extends('admin.layouts.app')
    @section('content')
        <div class="card m-4">
            <div class="card-body">
                <h3>Имя IT-специалист: {{ $specialist->fio }}</h3>
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <th>Дата рождения</th>
                            <td>{{ $specialist->date_birth }}</td>
                        </tr>
                        <tr>
                            <th>Пол</th>
                            <td>{{ $specialist->sex }}</td>
                        </tr>
                        <tr>
                            <th>Копия паспорта</th>
                            <td><a href="{{ asset("$specialist->file4") }}" target="_blank">Загрузка</a>
                            </td>
                        </tr>
                        <tr>
                            <th>Номер паспорта</th>
                            <td>{{ $specialist->passport_number }}</td>
                        </tr>
                        <tr>
                            <th>Дата получения паспорта</th>
                            <td>{{ $specialist->passport_date }}</td>
                        </tr>
                        <tr>
                            <th>Срок действия паспорта</th>
                            <td>{{ $specialist->passport_expire }}</td>
                        </tr>
                        <tr>
                            <th>Фото</th>
                            <td><a href="{{ asset("$specialist->file5") }}" target="_blank">Загрузка</a></td>
                        </tr>
                            <tr>
                                <th>Страны</th>
                                <td>{{ $specialist->citizen }}</td>
                            </tr>
                            <tr>
                                <th>Адресс</th>
                                <td>{{ $specialist->adress_specialist }}</td>
                            </tr>
                            <tr>
                                <th>Телефон номер</th>
                                <td>{{ $specialist->phone_specialist }}</td>
                            </tr>
                            <tr>
                                <th>Дополнительный номер телефона</th>
                                <td>{{ $specialist->additional_phone }}</td>
                            </tr>
                            <tr>
                                <th>Срок действия IT-виза</th>
                                <td>{{ $specialist->visa_date }}</td>
                            </tr>
                            <tr>
                                <th>Доходе за последние 12 месяцев</th>
                                <td><a href="{{ asset("$specialist->file") }}" target="_blank">Загрузка</a>
                                </td>
                            </tr>
                            <tr>
                                <th>Диплом и сертификат </th>
                                <td><a href="{{ asset("$specialist->file2") }}" target="_blank">Загрузка</a>
                                </td>
                            </tr>
                        <tr>
                            <th>Письмо (ходатайство)</th>
                            <td><a href="{{ asset("$specialist->file3") }}" target="_blank">Загрузка</a>
                            </td>
                        </tr>
                            <tr>
                                <th>Наименование юридического лица - работодателя</th>
                                <td>{{ $specialist->company_name }}</td>
                            </tr>
                            <tr>
                                <th>Адрес работодателя</th>
                                <td>{{ $specialist->adress }}</td>
                            </tr>
                            <tr>
                                <th>Номер телефона работодателя</th>
                                <td>{{ $specialist->phone }}</td>
                            </tr>

                            <tr>
                                <th>Ф.И.О ходатайствующего лица</th>
                                <td>{{ $specialist->applicant_fio }}</td>
                            </tr>
                            <tr>
                                <th>Должность ходатайствующего лица</th>
                                <td>{{ $specialist->applicant_position }}</td>
                            </tr>
                            <tr>
                                <th>Контактный номер ходатайствующего лица</th>
                                <td>{{ $specialist->applicant_phone_number }}</td>
                            </tr>
                        </tbody>
                    </table>
                @if(!$specialist->reletions->isEmpty())
                    <h3>Данные о сопровождающих родственниках </h3>
                    <table class="table table-bordered">
                        <tbody>
                        @foreach($specialist->reletions as $reletion)
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
                    <a href="{{ route('specialist-visa.index') }}" class="btn btn-primary float-left mt-3">Назад</a>
            </div>
        </div>
    @endsection
