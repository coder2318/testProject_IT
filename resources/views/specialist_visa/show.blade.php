@extends('admin.layouts.app')
@section('content')

    @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert" style=" margin: 5px auto;  width: 50%;">
            <strong>{!! implode('', $errors->all()) !!}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="card m-4">
        <div class="card-body">
            <h3>Имя IT-специалист: {{ $specialist->fio }}</h3>
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <th>Номер заявки</th>
                    <td>{{ $specialist->id }}</td>
                </tr>
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
                    <th>Диплом и сертификат</th>
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
{{--                @php--}}
{{--                    if(auth()->user()->role =='expert')--}}
{{--                        $model = $anceta_expert;--}}
{{--                    else--}}
{{--                        $model = $specialist;--}}
{{--                        switch ($model->status){--}}
{{--                            case 2:--}}
{{--                                $color = 'darkorange';--}}
{{--                                $status = 'На рассмотрении';--}}
{{--                                break;--}}
{{--                            case 3:--}}
{{--                                $color = 'green';--}}
{{--                                $status = 'Согласовал';--}}
{{--                                break;--}}
{{--                            case 4:--}}
{{--                                $color = 'red';--}}
{{--                                $status = 'Отклонил';--}}
{{--                                break;--}}
{{--                            default:--}}
{{--                                $color = 'mediumvioletred';--}}
{{--                                $status = 'Созданный';--}}
{{--                        }--}}
{{--                @endphp--}}
{{--                <tr style="color: {{$color}}">--}}
{{--                    <th>Статус</th>--}}
{{--                    <td>{{ $status }}</td>--}}
{{--                </tr>--}}
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
            <div class="inline-block mt-3">
                <a href="{{ route('specialist-visa.index') }}" class="btn btn-primary float-left mt-3">Назад</a>
                @if(auth()->user()->role =='expert')
                    @if(in_array($anceta_expert->status, [1,2]))
                        <form action="{{ route('specialist.change-status', $specialist->id) }}" class="dib float-right"
                              method="post">
                            @csrf
                            <input type="number" id="status" name="status" style="display: none">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" onclick="ChangeStatus(3)">@lang('Согласовать')</button>
                            <a class="btn btn-danger" onclick="Filevalidation()">@lang('Отклонить')</a> <br>

                            <div id="reason" class="mt-3" style="display: none; ">
                                <label>
                                    @lang("Введите причину отказа")
                                    <textarea class="form-control" name="reject_reason" cols="60" rows="4"></textarea>
                                </label> <br>
                                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal" onclick="ChangeStatus(4)">@lang('Отправить')</button>
                            </div>

                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">@lang("Введите свой пароль")</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">@lang("Пароль"):</label>
                                                <input type="password" class="form-control" id="recipient-name" name="password">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang("Отмена")</button>
                                                <input type="submit" class="btn btn-primary" value="@lang("Подтвердить")">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    @endif
                @else
                    @if($specialist->status == 1)
                        <form action="{{ route('specialist.sendToExpert', $specialist->id) }}" class="dib float-right"
                              method="post">
                            @csrf
                            <input type="submit" class="btn btn-success" value="@lang('Отправить заявку экспертам')">
                        </form>
                    @endif
                @endif
            </div>
        </div>
        @if($specialist->status != 1 and count($experts) and auth()->user()->role == 'admin')
            <div class="m-2">
                <h3>@lang("Решение экспертного совета")</h3>
                <table class="table table-bordered">
                    @foreach($experts as $expert)
                        @php
                            switch ($expert->status){
                                case 2:
                                    $color = 'darkorange';
                                    $status = 'На рассмотрении';
                                    break;
                                case 3:
                                    $color = 'green';
                                    $status = 'Согласовал';
                                    break;
                                case 4:
                                    $color = 'red';
                                    $status = 'Отклонил';
                                    break;
                                default:
                                    $color = 'mediumvioletred';
                                    $status = 'Созданный';
                            }
                        @endphp
                        <tr>
                            <td>{{$expert->user ? $expert->user->fullname : ''}}</td>
                            <td style="color: {{$color}}">{{$status}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        @endif
    </div>
@endsection
<script>
    Filevalidation = () => {
        const fi = document.getElementById('reason');
        fi.style.display = 'block'
    }

    ChangeStatus = (status) => {
        const fi = document.getElementById('status');
        fi.value = status
    }

    $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('New message to ' + recipient)
        modal.find('.modal-body input').val(recipient)
    })

</script>
