@extends('admin.layouts.app')
@section('content')
    <div class="card m-4">
        <div class="card-body">
            <form action="{{route('specialist-relocation.update', $specialist->id)}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" for="fio">Имя IT-специалист</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('fio') }}</span>
                        <input class="form-control" name="fio" type="text" value="{{ $specialist->fio }}">
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" for="fio">Профессия</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('specialization') }}</span>
                        <input class="form-control" name="specialization" type="text" value="{{ $specialist->specialization }}">
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" for="fio">Навыки</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('skills') }}</span>
                        <input class="form-control" name="skills" type="text" value="{{ $specialist->skills }}">
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" for="fio">Уровень</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('prof_level') }}</span>
                        <input class="form-control" name="prof_level" type="text" value="{{ $specialist->prof_level }}">
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" for="fio">Телефон номер</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('contact_number') }}</span>
                        <input class="form-control" name="contact_number" type="text" value="{{ $specialist->contact_number }}">
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" for="fio">Город</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('city') }}</span>
                        <input class="form-control" name="city" type="text" value="{{ $specialist->city }}">
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" for="fio">Ссылка на портфолио</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('link_portfolio') }}</span>
                        <input class="form-control" name="link_portfolio" type="text" value="{{ $specialist->link_portfolio }}">
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" for="fio">Нуждаетесь ли Вы в трудоустройстве?</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('employment') }}</span>
                        <input class="form-control" name="employment" type="text" value="{{ $specialist->employment }}">
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" style="display: block" for="fio">Резюме</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('file') }}</span>
                        <a class="download" href="{{ asset("$specialist->file") }}" target="_blank">Загрузка</a>
                        <input type="button" id="loadFileXml" value="Выбрать новый файл"
                               onclick="document.getElementById('file').click();" />
                        <input type="file" style="display:none;" id="file" name="file" />
                    </div>
                </div>

                <a href="{{ route('specialist-relocation.index') }}" class="btn btn-danger float-left">Отмена</a>
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

