    @extends('admin.layouts.app')
    @section('content')
        <div class="card m-4">
            <div class="card-body">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-bordered text-centet" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Имя</th>
                                    <th>Название компании</th>
                                    <th>Деятельность</th>
                                    <th>Количество сотрудников</th>
                                    <th>Телефон номер</th>
                                    <th>Другая информация</th>
                                    <th>Эмайл</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($companies as $company)
                                    <tr id="Id{{ $company->id }}">
                                        <td>{{ $company->person_fio }}</td>
                                        <td>
                                            {{ $company->name }}
                                        </td>
                                        <td>
                                            {{ $company->activity }}
                                        </td>
                                        <td>
                                            {{ $company->count_staffs }}
                                        </td>
                                        <td>
                                            {{ $company->phone }}
                                        </td>
                                        <td>
                                            {{ $company->other }}
                                        </td>
                                        <td>
                                            {{ $company->email }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
