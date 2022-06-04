@extends('layouts.layout')
@section('content')
    <section class="d-flex align-items-center justify-content-center " style="background-color: lightgray">
        <div class="container mt-5" style="margin-bottom: 70px!important;">
            <div class="card" style="max-width: 80%; margin: 10px auto">
                <div class="card-body">
                    <h3>Ф.И.О: {{ $application->fio }}</h3>
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <th>Дата выдачи</th>
                            <td>{{ $application->register_date }}</td>
                        </tr>
                        <tr>
                            <th>Срок действия</th>
                            <td>{{ $application->expire_date }}</td>
                        </tr>
                        <tr>
                            <th>Серийный номер</th>
                            <td>{{ $application->application_number }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
