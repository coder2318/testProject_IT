@extends('admin.layouts.app')
@section('content')
    <div class="card m-4">
        <div class="card-body">
            <form action="{{route('company.update', $company->id)}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" for="fio">Название компания</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('name') }}</span>
                        <input class="form-control" name="name" type="text" value="{{ $company->name }}">
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" for="fio">Имя</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('person_fio') }}</span>
                        <input class="form-control" name="person_fio" type="text" value="{{ $company->person_fio }}">
                    </div>

                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" for="fio">Количество сотрудников</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('count_staffs') }}</span>
                        <input class="form-control" name="count_staffs" type="text" value="{{ $company->count_staffs }}">
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" for="fio">Телефон номер</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('phone') }}</span>
                        <input class="form-control" name="phone" type="text" value="{{ $company->phone }}">
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" for="fio">Другая информация</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('other') }}</span>
                        <input class="form-control" name="other" type="text" value="{{ $company->other }}">
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" for="fio">Эмайл</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('email') }}</span>
                        <input class="form-control" name="email" type="text" value="{{ $company->email }}">
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="col-form-label-sm" for="fio">Деятельность</label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('activity') }}</span>
                        <textarea class="form-control" name="activity" >{{$company->activity}}</textarea>
                    </div>
                </div>

                <a href="{{ route('company.index') }}" class="btn btn-danger float-left">Отмена</a>
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

