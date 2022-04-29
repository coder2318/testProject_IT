@extends('layouts.layout')

@section('content')
    <section class="d-flex align-items-center justify-content-center " style="background-color: lightgray">

        <div class="container mt-5">
            <div class="card" style="max-width: 60%; margin: 10px auto">
                <div class="card-body">
                    <div class="" style="text-align: center; font-size: 24px; font-weight: bold">Заявка на IT-виза для
                        IT-специалистов</div>
                    <form class="form-group" action="{{ route('specialist-visa.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <label for="fio" class="mb-2 mt-3"><b>Ф.И.О.</b></label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('fio') }}</span>
                        <input id="fio" class="form-control p-2 ps-3" type="text" style="border-radius: 10px" name="fio"
                            value="{{ old('fio') }}">


                        <label for="file" class="mb-2 mt-3"><b>Копия паспорта</b></label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('file') }}</span>
                        <input id="file" class="form-control p-2 ps-3" type="file" style="border-radius: 10px" name="file"
                            value="{{ old('file') }}">

                        <label for="country" class="mb-2 mt-3"><b>Из какой страны пребываете?</b></label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('country') }}</span>
                        <input id="country" class="form-control p-2 ps-3" type="text" style="border-radius: 10px"
                            name="country" value="{{ old('country') }}">

                        <label for="resume" class="mb-2 mt-3"><b>Резюме о своей деятельности</b></label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('resume') }}</span>
                        <input id="resume" class="form-control p-2 ps-3" type="text" style="border-radius: 10px"
                            name="resume" value="{{ old('resume') }}">

                        <label for="file2" class="mb-2 mt-3"><b>Информация о доходе за последние 12 месяцев (с приложением
                                подтверждающих документов)</b></label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('file2') }}</span>
                        <input id="file2" class="form-control p-2 ps-3" type="file" style="border-radius: 10px" name="file2"
                            value="{{ old('file2') }}">

                        <label for="file3" class="mb-2 mt-3"><b>Информация о планируемых доходах (ходатайство работодателя
                                из Узбекистана или иная информация)</b></label>
                        <span style="color: #b02a37; font-weight: bold">*{{ $errors->first('file3') }}</span>
                        <input id="file3" class="form-control p-2 ps-3" type="file" style="border-radius: 10px" name="file3"
                            value="{{ old('file3') }}">

                        <label for="phone" class="mb-2 mt-3"><b>Контактный номер телефона</b></label>
                        <span style="color: #b02a37; font-weight: bold">*{{ $errors->first('phone') }}</span>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text p-2 ps-3" id="basic-addon1">+</span>
                            </div>
                            <input id="phone" class="form-control p-2 ps-3" type="number" aria-describedby="basic-addon1"
                                style="border-radius: 0 10px 10px 0" name="phone" value="{{ old('phone') }}">
                        </div>

                        <label for="email" class="mb-2 mt-3"><b>Адрес электронной почты</b></label>
                        <span style="color: #b02a37; font-weight: bold">*{{ $errors->first('email') }}</span>
                        <input id="email" class="form-control p-2 ps-3" type="email" style="border-radius: 10px"
                            name="email" value="{{ old('email') }}">
                        <input type="submit" class="btn btn-outline-success mt-4" value="Сохранить">
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
