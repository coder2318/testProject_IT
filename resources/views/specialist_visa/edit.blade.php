@extends('admin.layouts.app')
@section('content')
    <div class="card m-4">
        <div class="card-body">
            <form action="{{route('specialist-visa.update', $specialist->id)}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" for="fio">Имя резидент:</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('fio') }}</span>
                        <input class="form-control" name="fio" type="text" value="{{ $specialist->fio }}">
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" for="fio">Дата рождения</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('date_birth') }}</span>
                        <input class="form-control" name="date_birth" type="text" value="{{ $specialist->date_birth }}">
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="sex" class="col-form-label-sm">Пол</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('sex') }}</span>
                        <div>
                            <input @if($specialist->sex == 'man') checked @endif id="man" type="radio" name="sex" value="man">
                            <label for="man">Мужской</label>

                            <input @if($specialist->sex == 'woman') checked @endif id="woman" type="radio" name="sex" value="woman">
                            <label for="woman">Женский</label>
                        </div>
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" for="fio">Номер паспорта</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('passport_number') }}</span>
                        <input class="form-control" name="passport_number" type="text" value="{{ $specialist->passport_number }}">
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" for="fio">Дата получения паспорта</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('passport_date') }}</span>
                        <input class="form-control" name="passport_date" type="text" value="{{ $specialist->passport_date }}">
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" for="fio">Срок действия паспорта</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('passport_expire') }}</span>
                        <input class="form-control" name="passport_expire" type="text" value="{{ $specialist->passport_expire }}">
                    </div>

                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" for="fio">Срок действия IT-виза</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('visa_date') }}</span>
                        <input class="form-control" name="visa_date" type="text" value="{{ $specialist->visa_date }}">
                    </div>

                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" for="fio">Страны</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('citizen') }}</span>
                        <input class="form-control" name="citizen" type="text" value="{{ $specialist->citizen }}">
                    </div>

                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" for="fio">Адресс</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('adress_specialist') }}</span>
                        <input class="form-control" name="adress_specialist" type="text" value="{{ $specialist->adress_specialist }}">
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" for="fio">Телефон номер</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('phone_specialist') }}</span>
                        <input class="form-control" name="phone_specialist" type="text" value="{{ $specialist->phone_specialist }}">
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" for="fio">Дополнительный номер телефона</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('additional_phone') }}</span>
                        <input class="form-control" name="additional_phone" type="text" value="{{ $specialist->additional_phone }}">
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" for="fio">Наименование компании резидента Технопарка</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('company_name') }}</span>
                        <input class="form-control" name="company_name" type="text" value="{{ $specialist->company_name }}">
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" for="fio">Адрес работодателя</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('adress') }}</span>
                        <input class="form-control" name="adress" type="text" value="{{ $specialist->adress }}">
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" for="fio">Номер телефона работодателя</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('phone') }}</span>
                        <input class="form-control" name="phone" type="text" value="{{ $specialist->phone }}">
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" for="fio">Ф.И.О ходатайствующего лица</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('applicant_fio') }}</span>
                        <input class="form-control" name="applicant_fio" type="text" value="{{ $specialist->applicant_fio }}">
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" for="fio">Должность ходатайствующего лица</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('applicant_position') }}</span>
                        <input class="form-control" name="applicant_position" type="text" value="{{ $specialist->applicant_position }}">
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" for="fio">Контактный номер ходатайствующего лица</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('applicant_phone_number') }}</span>
                        <input class="form-control" name="applicant_phone_number" type="text" value="{{ $specialist->applicant_phone_number }}">
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" style="display: block" for="fio">Копия паспорта</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('file4') }}</span>
                        <a class="download" href="{{ asset("$specialist->file4") }}" target="_blank">Загрузка</a>
                        <input type="button" id="loadFileXml" value="Выбрать новый файл"
                               onclick="document.getElementById('file4').click();" />
                        <input type="file" style="display:none;" id="file4" name="file4" />
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" style="display: block" for="fio">Доходе за последние 12 месяцев</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('file') }}</span>
                        <a class="download" href="{{ asset("$specialist->file") }}" target="_blank">Загрузка</a>
                        <input type="button" id="loadFileXml" value="Выбрать новый файл"
                               onclick="document.getElementById('file').click();" />
                        <input type="file" style="display:none;" id="file" name="file" />

                    </div>
                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" style="display: block" for="fio">Диплом и сертификат</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('file2') }}</span>
                        <a class="download" href="{{ asset("$specialist->file2") }}" target="_blank">Загрузка</a>
                        <input type="button" id="loadFileXml" value="Выбрать новый файл"
                               onclick="document.getElementById('file2').click();" />
                        <input type="file" style="display:none;" id="file2" name="file2" />
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" style="display: block" for="fio">Письмо (ходатайство)</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('file5') }}</span>
                        <a class="download" href="{{ asset("$specialist->file3") }}" target="_blank">Загрузка</a>
                        <input type="button" id="loadFileXml" value="Выбрать новый файл"
                               onclick="document.getElementById('file3').click();" />
                        <input type="file" style="display:none;" id="file3" name="file3" />
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" style="display: block" for="fio">Фото</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('file5') }}</span>
                        <a class="download" href="{{ asset("$specialist->file5") }}" target="_blank">Загрузка</a>
                        <input type="button" id="loadFileXml" value="Выбрать новый файл"
                               onclick="document.getElementById('file5').click();" />
                        <input type="file" style="display:none;" id="file5" name="file5" />
                    </div>
                    @if(!$specialist->reletions->isEmpty())
                        <div class="col-md-12 form-group">
                            <h3>Данные о сопровождающих родственниках </h3>
                        </div>
                        @foreach($specialist->reletions as $reletion)
                            <div class="row">
                                <div class="col-md-4 form-group">
                                    <label class="col-form-label-sm" for="fio">Степень родства</label>
                                    <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('reletion_level') }}</span>
                                    <input class="form-control" name="reletion_level[]" type="text" value="{{ $reletion->reletion_level }}">
                                </div>
                                <div class="col-md-4 form-group">
                                    <label class="col-form-label-sm" for="fio">Ф.И.О</label>
                                    <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('reletion_fio') }}</span>
                                    <input class="form-control" name="reletion_fio[]" type="text" value="{{ $reletion->reletion_fio }}">
                                </div>
                                <div class="col-md-4 form-group">
                                    <label class="col-form-label-sm" for="fio">Дата рождения</label>
                                    <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('reletion_birth') }}</span>
                                    <input class="form-control" name="reletion_birth[]" type="text" value="{{ $reletion->reletion_birth }}">
                                </div>
                                <div class="col-md-4 form-group">
                                    <label class="col-form-label-sm" for="fio">Гражданство</label>
                                    <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('reletion_citizen') }}</span>
                                    <input class="form-control" name="reletion_citizen[]" type="text" value="{{ $reletion->reletion_citizen }}">
                                </div>
                                <div class="col-md-4 form-group">
                                    <label class="col-form-label-sm" style="display: block" for="fio">Копия паспорта</label>
                                    <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('file6') }}</span>
                                    <a class="download" href="{{ asset("$reletion->file6") }}" target="_blank">Загрузка</a>
                                    <input type="button" id="loadFileXml" value="Выбрать новый файл"
                                           onclick="document.getElementById('{{$reletion->file6}}').click();" />
                                    <input type="file" style="display:none;" id="{{$reletion->file6}}" name="file6[]" />
                                </div>
                                <input name="reletion_id[]" type="hidden" value="{{$reletion->id}}">
                            </div>
                        @endforeach
                    @endif

                </div>
                <a href="{{ route('specialist-visa.index') }}" class="btn btn-danger float-left">Отмена</a>
                <button type="submit" class="btn btn-primary float-right">Сохранить</button>
            </form>

        </div>
    </div>
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            $('input:file').change(function (){
                $(this).parent().find('.download').css("display","none");
            });
        });

    </script>

@endpush

