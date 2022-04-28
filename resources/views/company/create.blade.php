@extends('layouts.layout')

@section('content')
    <section class="d-flex align-items-center justify-content-center " style="background-color: lightgray">

        <div class="container mt-5">
            <div class="card" style="max-width: 60%; margin: 10px auto">
                <div class="card-body">
                    <div class="" style="text-align: center; font-size: 24px; font-weight: bold">Заявка для IT-компаний</div>
                    <form class="form-group" action="{{route('company.store')}}" method="POST">
                        @csrf
                        <label for="person_fio" class="mb-2 mt-3"><b>Ф.И.О. </b></label>
                        <span style="color: #b02a37; font-weight: bold">* {{$errors->first('person_fio')}}</span>
                        <input id="person_fio" class="form-control p-2 ps-3" type="text" style="border-radius: 10px" name="person_fio" value="{{old('person_fio')}}">

                        <label for="activity" class="mb-2 mt-3"><b>Опишите вашу деятельность </b></label>
                        <span style="color: #b02a37; font-weight: bold">* {{$errors->first('activity')}}</span>
                        <input id="activity" class="form-control p-2 ps-3" type="text" style="border-radius: 10px" name="activity" value="{{old('activity')}}">

                        <label for="name" class="mb-2 mt-3"><b>Имеется ли зарегистрированное юр. лицо в Узбекистане или вы намерены открыть новое юр. лицо?</b></label>
                        <span style="color: #b02a37; font-weight: bold">* {{$errors->first('name')}}</span>
                        <input id="name" class="form-control p-2 ps-3" type="text" style="border-radius: 10px" name="name" value="{{old('name')}}">

                        <label for="count_staffs" class="mb-2 mt-3"><b>Количество сотрудников, которые будут релоцированы в Узбекистан</b></label>
                        <span style="color: #b02a37; font-weight: bold">* {{$errors->first('count_staffs')}}</span>
                        <input id="count_staffs" class="form-control p-2 ps-3" type="text" style="border-radius: 10px" name="count_staffs" value="{{old('count_staffs')}}">

                        <label for="other" class="mb-2 mt-3"><b>Другая информация, которую вы считаете полезной</b></label>
                        <input id="other" class="form-control p-2 ps-3" type="text" style="border-radius: 10px" name="other" value="{{old('other')}}">

                        <label for="phone" class="mb-2 mt-3"><b> Контактный номер телефона</b></label>
                        <span style="color: #b02a37; font-weight: bold">* {{$errors->first('phone')}}</span>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text p-2 ps-3" id="basic-addon1">+</span>
                            </div>
                            <input id="phone" class="form-control p-2 ps-3" type="number" aria-describedby="basic-addon1" style="border-radius: 0 10px 10px 0" name="phone" value="{{old('phone')}}">
                        </div>

                        <label for="email" class="mb-2 mt-3"><b>  Адрес электронной почты</b></label>
                        <span style="color: #b02a37; font-weight: bold">* {{$errors->first('email')}}</span>
                        <input id="email" class="form-control p-2 ps-3" type="email" style="border-radius: 10px" name="email" value="{{old('email')}}">

                        <input type="submit" class="btn btn-outline-success mt-4" value="Сохранить">
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
