@extends('layouts.layout')

@section('content')
    <section class="d-flex align-items-center justify-content-center " style="background-color: lightgray">

        <div class="container mt-5">
            <div class="card" style="max-width: 60%; margin: 10px auto">
                <div class="card-body">
                    <div class="" style="text-align: center; font-size: 24px; font-weight: bold">@lang('form.founder')
                        Заявка на IT-виза для учредителя</div>
                    <form class="form-group" action="{{ route('founder.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <label for="fio" class="mb-2 mt-3"><b>@lang('form.fio')</b></label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('fio') }}</span>
                        <input id="fio" class="form-control p-2 ps-3" type="text" style="border-radius: 10px" name="fio"
                            value="{{ old('fio') }}">

                        <label for="file" class="mb-2 mt-3"><b>@lang('form.copy_passport')</b></label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('file') }}</span>
                        <input id="file" class="form-control p-2 ps-3" type="file" style="border-radius: 10px" name="file"
                            value="{{ old('file') }}">

                        <label for="country" class="mb-2 mt-3"><b>@lang('form.country')</b></label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('country') }}</span>
                        <input id="country" class="form-control p-2 ps-3" type="text" style="border-radius: 10px"
                            name="country" value="{{ old('country') }}">

                        <label for="file2" class="mb-2 mt-3"><b>@lang('form.resident')</b></label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('file2') }}</span>
                        <input id="file2" class="form-control p-2 ps-3" type="file" style="border-radius: 10px" name="file2"
                            value="{{ old('file2') }}">


                        <label for="phone_number" class="mb-2 mt-3"><b>@lang('form.phone')</b></label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('number') }}</span>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text p-2 ps-3" id="basic-addon1">+</span>
                            </div>
                            <input id="phone" class="form-control p-2 ps-3" type="number" aria-describedby="basic-addon1"
                                style="border-radius: 0 10px 10px 0" name="phone" value="{{ old('phone') }}">
                        </div>

                        <label for="email" class="mb-2 mt-3"><b>@lang('form.email')</b></label>
                        <span style="color: #b02a37; font-weight: bold">*{{ $errors->first('email') }}</span>
                        <input id="email" class="form-control p-2 ps-3" type="text" style="border-radius: 10px" name="email"
                            value="{{ old('email') }}">
                        <input type="submit" class="btn btn-outline-success mt-4" value="Сохранить">
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
