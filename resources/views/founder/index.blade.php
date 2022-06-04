    @extends('admin.layouts.app')
    @section('content')
        <div class="card m-4">
            <div class="card-body">
                <h3>Учредители резидентов IT Park</h3>
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
                                @foreach ($founders as $founder)
                                    <tr id="Id{{ $founder->id }}">
                                        <td>{{ $founder->fio }}</td>
                                        <td>
                                            {{ $founder->citizen }}
                                        </td>
                                        <td>
                                            {{ $founder->phone }}
                                        </td>
                                        <td>
                                            {{ $founder->additional_phone }}
                                        </td>
                                        <td>
                                            <div class="inline-block">
                                                <form action="{{ route('founder.destroy', $founder->id) }}"
                                                      class="dib" method="post">
                                                    @csrf
                                                <span>
                                                    <a href="{{ route('founder.show', $founder->id) }}"
                                                        class="text-primary"><i class="fas fa-eye"
                                                            aria-hidden="true"></i></a>
                                                </span>
                                                <span>
                                                    <a href="{{ route('founder.edit', $founder->id) }}"
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
                            {!! $founders->links() !!}
                        </div>
                    </div>
                </div>
                <a href="{{ route('admin.dashboard') }}" class="btn btn-primary float-left mt-3">Назад</a>
            </div>
        </div>
    @endsection
