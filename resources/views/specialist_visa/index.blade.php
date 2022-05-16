    @extends('admin.layouts.app')
    @section('content')
        <div class="card m-4">
            <div class="card-body">
                <h3>IT-специалисты</h3>
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-bordered text-centet" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Имя</th>
                                    <th>Страна</th>
                                    <th>Телефон номер</th>
                                    <th>Дополнительный номер телефона</th>
                                    <th>Действие</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($specialists as $specialist)
                                    <tr id="Id{{ $specialist->id }}">
                                        <td>{{ $specialist->fio }}</td>
                                        <td>
                                            {{ $specialist->citizen }}
                                        </td>
                                        <td>
                                            {{ $specialist->phone }}
                                        </td>
                                        <td>
                                            {{ $specialist->additional_phone }}
                                        </td>
                                        <td>
                                            <div class="inline-block ml-4">
                                                <span>
                                                    <a href="{{ route('specialist-visa.show', $specialist->id) }}"
                                                        class="text-primary"><i class="fas fa-eye"
                                                            aria-hidden="true"></i></a>
                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="{{ route('admin.dashboard') }}" class="btn btn-primary float-left mt-3">Назад</a>

                    </div>
                </div>
            </div>
        </div>
    @endsection
