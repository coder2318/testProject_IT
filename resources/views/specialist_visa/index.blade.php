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
                                    <th>Номер заявки</th>
                                    <th>Имя</th>
                                    <th>Страна</th>
                                    <th>Телефон номер</th>
                                    <th>Дополнительный номер телефона</th>
                                    <th>Дата подачи заявки</th>
                                    <th>Действие</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($specialists as $specialist)
                                    <tr >
                                        <td>{{ $specialist->id }}</td>
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
                                            {{ $specialist->updated_at }}
                                        </td>
                                        <td>
                                            <div class="inline-block">
                                                <form action="{{ route('specialist-visa.destroy', $specialist->id) }}"
                                                      class="dib" method="post">
                                                    @csrf
                                                <span>
                                                    <a href="{{ route('specialist-visa.show', $specialist->id) }}"
                                                        class="text-primary"><i class="fas fa-eye"
                                                            aria-hidden="true"></i></a>
                                                </span>
                                                    @if(auth()->user()->role == 'admin')
                                                        <span>
                                                            <a href="{{ route('specialist-visa.edit', $specialist->id) }}"
                                                               class="text-success ml-2"><i class="fas fa-edit" aria-hidden="true"></i></a>
                                                        </span>
                                                            <button class="btn btn-danger mb-1"
                                                                    style="border: none; background-color:transparent;"
                                                                    onclick="return confirm('@lang('Ты хочешь удалить')');"

                                                                    title="@lang('Ты хочешь удалить')">
                                                                <i class="fa fa-trash text-danger"></i>
                                                            </button>
                                                        <span>
                                                            <a href="#" class="text-primary">
                                                                @if($specialist->is_showed)
                                                                    <i class="fa-solid fa-circle-check"   aria-hidden="true"></i>
                                                                @else
                                                                    <i class="fa-regular fa-circle-check"   aria-hidden="true"></i>
                                                                @endif
                                                            </a>
                                                        </span>
                                                    @endif
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
