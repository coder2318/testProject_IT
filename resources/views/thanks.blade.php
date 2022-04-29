@extends('layouts.layout')

@section('content')
    <section class="d-flex align-items-center justify-content-center " style="background-color: lightgray; height: 100%">

        <div class="container mt-5">
            <div class="card" style="max-width: 60%; margin: 10px auto">
                <div class="card-body">
                    <div class="" style="text-align: center; font-size: 24px; font-weight: bold">Спасибо! Ваша заявка принята</div>
                    <div class="mt-4" style="text-align: center; font-size: 20px;">Пожалуйста, дождитесь ответа</div>
                    <div class="mt-5" style="text-align: center; font-size: 24px; font-weight: bold">
                        <a href="{{route('home')}}" class="btn btn-outline-success">Возвращаться домой</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
