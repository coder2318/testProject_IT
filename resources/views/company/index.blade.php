    @extends('admin.layouts.app')
    @section('content')
        <div class="card m-4">
            <div class="card-body">
                <h3>IT-Компании</h3>
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-bordered text-centet" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Имя</th>
                                    <th>Название компании</th>
                                    <th>Деятельность</th>
                                    <th>Телефон номер</th>
                                    <th>Эмайл</th>
                                    <th>Дата подачи заявки</th>
                                    <th>Действие</th>
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
                                            {{ $company->phone }}
                                        </td>
                                        <td>
                                            {{ $company->email }}
                                        </td>
                                        <td>
                                            {{ $company->updated_at }}
                                        </td>
                                        <td>
                                            <div class="inline-block">
                                                <form action="{{ route('company.destroy', $company->id) }}"
                                                      class="dib" method="post">
                                                    @csrf
                                                <span>
                                                    <a href="{{ route('company.show', $company->id) }}"
                                                        class="text-primary"><i class="fas fa-eye"
                                                            aria-hidden="true"></i></a>
                                                </span>
                                                <span>
                                                    <a href="{{ route('company.edit', $company->id) }}"
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
                            {!! $companies->links() !!}
                        </div>
                    </div>
                </div>
                <a href="{{ route('admin.dashboard') }}" class="btn btn-primary float-left mt-3">Назад</a>
            </div>
        </div>
    @endsection
