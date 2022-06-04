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
                                    <th>Специализация</th>
                                    <th>Навыки</th>
                                    <th>Телефон номер</th>
                                    <th>Город</th>
                                    <th>Действие</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($specialists as $specialist)
                                    <tr id="Id{{ $specialist->id }}">
                                        <td>{{ $specialist->fio }}</td>
                                        <td>
                                            {{ $specialist->specialization }}
                                        </td>
                                        <td>
                                            {{ $specialist->skills }}
                                        </td>
                                        <td>
                                            {{ $specialist->contact_number }}
                                        </td>
                                        <td>
                                            {{ $specialist->city }}
                                        </td>
                                        <td>
                                            <div class="inline-block">

                                                <form action="{{ route('specialist-relocation.destroy', $specialist->id) }}"
                                                      class="dib" method="post">
                                                    @csrf
                                                    <span>
                                                    <a href="{{ route('specialist-relocation.show', $specialist->id) }}"
                                                       class="text-primary"><i class="fas fa-eye"
                                                                               aria-hidden="true"></i></a>
                                                </span>
                                                    <span>
                                                    <a href="{{ route('specialist-relocation.edit', $specialist->id) }}"
                                                       class="text-success ml-2"><i class="fas fa-edit"
                                                                                    aria-hidden="true"></i></a>
                                                    </span>

                                                    <button class="btn btn-danger mb-1"
                                                            style="border: none; background-color:transparent;"
                                                            onclick="return confirm('@lang('Ты хочешь удалить')');"

                                                            title="@lang('Ты хочешь удалить')">
                                                        <i class="fa fa-trash text-danger"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex float-right">
                            {!! $specialists->links() !!}
                        </div>
                        <a href="{{ route('admin.dashboard') }}" class="btn btn-primary float-left mt-3">Назад</a>
                    </div>
                </div>
            </div>
        </div>
    @endsection
