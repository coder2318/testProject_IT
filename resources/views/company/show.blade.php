    @extends('admin.layouts.app')
    @section('content')
        <div class="card m-4">
            <div class="card-body">
                <h3>Название компания: {{ $company->name }}</h3>
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>Имя</th>
                                <td>{{ $company->person_fio }}</td>
                            </tr>
                            <tr>
                                <th>Деятельность</th>
                                <td>{{ $company->activity }}</td>
                            </tr>
                            <tr>
                                <th>Количество сотрудников</th>
                                <td>{{ $company->count_staffs }}</td>
                            </tr>
                            <tr>
                                <th>Телефон номер</th>
                                <td>{{ $company->phone }}</td>
                            </tr>
                            <tr>
                                <th>Другая информация</th>
                                <td>{{ $company->other }}</td>
                            </tr>
                            <tr>
                                <th>Эмайл</th>
                                <td>{{ $company->email }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{ route('company.index') }}" class="btn btn-primary float-left mt-3">Назад</a>
            </div>
        </div>
    @endsection
