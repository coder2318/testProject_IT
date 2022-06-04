@extends('admin.layouts.app')
@section('content')
    <div class="card m-4">
        <div class="card-body">
            <form action="{{route('application.update', $application->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12 form-group">
                        <h3>Данные о выданной рекомендации</h3>
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" for="fio">Номер выданной рекомендации</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('application_number') }}</span>
                        <input class="form-control" name="application_number" type="text" value="{{ $application->application_number }}">
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" for="fio">Дата оформления рекомендации</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('register_date') }}</span>
                        <input class="form-control" name="register_date" type="text" value="{{ $application->register_date }}">
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" for="fio">Срок действия рекомендации</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('expire_date') }}</span>
                        <input class="form-control" name="expire_date" type="text" value="{{ $application->expire_date }}">
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" for="fio">Статус выданной рекомендации</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('status') }}</span>
                        <select class="form-control" name="status">
                            <option @if($application->status == 'активный') selected @endif value="активный">активный</option>
                            <option @if($application->status == 'прекращен') selected @endif value="прекращен">прекращен</option>
                            <option @if($application->status == 'аннулирован') selected @endif value="аннулирован">аннулирован</option>
                        </select>
                    </div>
                    <div class="col-md-12 form-group">
                        <h3>Данные заявителя</h3>
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" for="fio">ФИО</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('fio') }}</span>
                        <input class="form-control" name="fio" type="text" value="{{ $application->fio }}">
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" for="fio">Дата рождения</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('date_birth') }}</span>
                        <input class="form-control" name="date_birth" type="text" value="{{ $application->date_birth }}">
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="sex" class="mb-2 mt-3">Пол</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('sex') }}</span>
                        <div>
                            <input @if($application->sex == 'man') checked @endif id="man" type="radio" name="sex" value="man">
                            <label for="man">Мужской</label>

                            <input @if($application->sex == 'woman') checked @endif id="woman" type="radio" name="sex" value="woman">
                            <label for="woman">Женский</label>
                        </div>
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" for="fio">Номер паспорта</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('passport_number') }}</span>
                        <input class="form-control" name="passport_number" type="text" value="{{ $application->passport_number }}">
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" for="fio">Дата получения паспорта</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('passport_date') }}</span>
                        <input class="form-control" name="passport_date" type="text" value="{{ $application->passport_date }}">
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" for="fio">Срок действия паспорта</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('passport_expire') }}</span>
                        <input class="form-control" name="passport_expire" type="text" value="{{ $application->passport_expire }}">
                    </div>

                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" for="fio">Гражданство</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('citizen') }}</span>
                        <input class="form-control" name="citizen" type="text" value="{{ $application->citizen }}">
                    </div>

                    @if(!$application->reletions->isEmpty())
                        <div class="col-md-12 form-group">
                            <h3>Данные о сопровождающих родственниках </h3>
                        </div>
                        @foreach($application->reletions as $reletion)
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
                                <input name="reletion_id[]" type="hidden" value="{{$reletion->id}}">
                            </div>
                        @endforeach
                    @endif

                </div>
                <a href="{{ route('application.index') }}" class="btn btn-danger float-left">Отмена</a>
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

