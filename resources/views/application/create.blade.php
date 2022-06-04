@extends('admin.layouts.app')
@section('content')
    <div class="card m-4">
        <div class="card-body">
            <form action="{{route('application.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12 form-group">
                        <h5>Данные о выданной рекомендации</h5>
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" for="fio">Дата оформления рекомендации</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('register_date') }}</span>
                        <input class="form-control" name="register_date" type="text" >
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" for="fio">Номер выданной рекомендации</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('application_number') }}</span>
                        <input class="form-control" name="application_number" type="text" >
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" for="fio">Срок действия рекомендации</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('expire_date') }}</span>
                        <input class="form-control" name="expire_date" type="text" >
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" for="fio">Статус выданной рекомендации</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('status') }}</span>
                        <select class="form-control" name="status">
                            <option value="активный">активный</option>
                            <option value="прекращен">прекращен</option>
                            <option value="аннулирован">аннулирован</option>

                        </select>
                    </div>
                    <div class="col-md-12 form-group">
                        <h5>Данные заявителя</h5>
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" for="fio">ФИО</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('fio') }}</span>
                        <input class="form-control" name="fio" type="text" >
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" for="fio">Дата рождения</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('date_birth') }}</span>
                        <input class="form-control" name="date_birth" type="text">
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="sex" class="col-form-label-sm">Пол</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('sex') }}</span>
                        <div>
                            <input id="man" type="radio" name="sex" value="man" checked>
                            <label for="man">Мужской</label>

                            <input id="woman" type="radio" name="sex" value="woman">
                            <label for="woman">Женский</label>
                        </div>
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" for="fio">Номер паспорта</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('passport_number') }}</span>
                        <input class="form-control" name="passport_number" type="text">
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" for="fio">Дата получения паспорта</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('passport_date') }}</span>
                        <input class="form-control" name="passport_date" type="text">
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" for="fio">Срок действия паспорта</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('passport_expire') }}</span>
                        <input class="form-control" name="passport_expire" type="text">
                    </div>

                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" for="fio">Гражданство</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('citizen') }}</span>
                        <input class="form-control" name="citizen" type="text" >
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h5>Данные о сопровождающих родственниках (только супруги и дети)</h5>
                    </div>
                    <div class="col-md-4">
                        <label for="reletion_level" class="col-form-label-sm"><b>Степень родства</b></label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('reletion_level') }}</span>
                        <input id="reletion_level" class="form-control" type="text"
                               name="reletion_level[]" value="">
                    </div>
                    <div class="col-md-4">
                        <label for="reletion_fio" class="col-form-label-sm"><b>Фамилия, имя, отчество</b></label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('reletion_fio') }}</span>
                        <input id="reletion_fio" class="form-control" type="text"
                               name="reletion_fio[]" value="">
                    </div>
                    <div class="col-md-4">

                        <label for="reletion_birth" class="col-form-label-sm"><b>Дата рождения</b></label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('reletion_birth') }}</span>
                        <input id="reletion_birth" class="form-control" type="text"
                               name="reletion_birth[]" value="">
                    </div>
                    <div class="col-md-4">

                        <label for="reletion_citizen" class="col-form-label-sm"><b>Гражданство</b></label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('reletion_citizen') }}</span>
                        <input id="reletion_citizen" class="form-control" type="text"
                               name="reletion_citizen[]" value="">
                    </div>
                </div>
                <div class="newElement "></div>
                <div class="row">
                    <div class="col-md-12" id="addElement" class="mt-5" style="margin-top: 10px; margin-bottom: 10px">
                            <span>
                                <label for="addElement">@lang('form.add_reletion')</label><input
                                    style="border-radius: 15px; border-width:1px; margin-left:7px" type="button"
                                    value="+" />
                            </span>
                    </div>
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
            // $('input:file').change(function (){
            //     $(this).parent().find('.download').css("display","none");
            // });
            $("#addElement").click(function() {
                var id = new Date().getTime();
                $('.newElement').add('<div class="row ml-1"><div class="col-md-4"><label for="reletion_level" class="col-form-label-sm"><b>Степень родства</b></label>' +
                    '<span style="color: #b02a37; font-weight: bold">* {{ $errors->first('reletion_level') }}</span>' +
                    '<input id="reletion_level" class="form-control" type="text" name="reletion_level[]" value=""></div>' +
                    '<div class="col-md-4"><label for="reletion_fio" class="col-form-label-sm"><b>Фамилия, имя, отчество</b></label>' +
                    '<span style="color: #b02a37; font-weight: bold">* {{ $errors->first('reletion_fio') }}</span>' +
                    '<input id="reletion_fio" class="form-control" type="text" name="reletion_fio[]" value=""></div>' +
                    '<div class="col-md-4"><label for="reletion_birth" class="col-form-label-sm"><b>Дата рождения</b></label>' +
                    '<span style="color: #b02a37; font-weight: bold">* {{ $errors->first('reletion_birth') }}</span>' +
                    '<input id="reletion_birth" class="form-control" type="text" name="reletion_birth[]" value=""></div>' +
                    '<div class="col-md-4"><label for="reletion_citizen" class="col-form-label-sm"><b>Гражданство</b></label>' +
                    '<span style="color: #b02a37; font-weight: bold">* {{ $errors->first('reletion_citizen') }}</span>' +
                    '<input id="reletion_citizen" class="form-control" type="text" name="reletion_citizen[]" value=""></div></div>'
                ).insertBefore("#addElement");
            })
        });

    </script>

@endpush

