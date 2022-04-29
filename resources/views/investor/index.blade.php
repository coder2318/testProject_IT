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
                                    <th>Страна</th>
                                    <th>Телефон номер</th>
                                    <th>Эмайл</th>
                                    <th>Действие</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($investors as $investor)
                                    <tr id="Id{{ $investor->id }}">
                                        <td>{{ $investor->fio }}</td>
                                        <td>
                                            {{ $investor->country }}
                                        </td>
                                        <td>
                                            {{ $investor->phone_number }}
                                        </td>
                                        <td>
                                            {{ $investor->email }}
                                        </td>
                                        <td>
                                            <div class="inline-block ml-4">
                                                <span>
                                                    <a href="{{ route('investor.show', $investor->id) }}"
                                                        class="text-primary"><i class="fas fa-eye"
                                                            aria-hidden="true"></i></a>
                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <a href="{{ route('admin.index') }}" class="btn btn-primary float-left mt-3">Назад</a>
            </div>
        </div>
    @endsection
