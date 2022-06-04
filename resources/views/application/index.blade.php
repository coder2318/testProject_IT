@extends('admin.layouts.app')
    @section('content')
        <div class="card m-4">
            <div class="card-body">
                <h3>Единый электронный реестр выданных рекомендаций</h3>
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-bordered text-centet"  width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Номер заявления</th>
                                    <th>Имя заявителя</th>
                                    <th>Страна</th>
                                    <th>Номер выданной рекомендации</th>
                                    <th>Дата оформления рекомендации</th>
                                    <th>Срок действия рекомендации</th>
                                    <th>Статус выданной рекомендации</th>
                                    <th>Действие</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $i=1 ?>
                                @foreach ($applications as $application)
                                    <tr id="Id{{ $application->id }}">
                                        <td>{{$i}}</td>
                                        <td>{{ $application->fio }}</td>
                                        <td>
                                            {{ $application->citizen }}
                                        </td>
                                        <td>
                                            {{ $application->application_number }}
                                        </td>
                                        <td>
                                            {{ $application->register_date }}
                                        </td>
                                        <td>
                                            {{ $application->expire_date }}
                                        </td>
                                        <td>
                                            {{ $application->status }}
                                        </td>
                                        <td>
                                            <div style="float: left">
                                                <form action="{{ route('application.destroy', $application->id) }}"
                                                      method="post">
                                                    @csrf
                                                    <span style="display: inline">
                                                    <a href="{{ route('application.show', $application->id) }}"
                                                       class="text-primary"><i class="fas fa-eye"
                                                                               aria-hidden="true"></i></a>
                                                    </span>
                                                    <span style="display: inline">
                                                    <button class="btn btn-danger mb-1"
                                                            style="border: none; background-color:transparent;"
                                                            onclick="return confirm('@lang('Ты хочешь удалить')');"
                                                            title="@lang('Ты хочешь удалить')">
                                                        <i class="fas fa-trash text-danger"></i>
                                                    </button>
                                                        </span>
                                                    <span style="float: right; margin-top: -35px; margin-left: 5px">
                                                    <a href="{{ route('application.edit', $application->id) }}"
                                                       class="text-success ml-2"><i class="fas fa-edit"
                                                                                    aria-hidden="true"></i></a>
                                                    </span>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php $i++ ?>
                                @endforeach

                            </tbody>
                        </table>
                        <div class="d-flex float-right">
                            {!! $applications->links() !!}
                        </div>
                    </div>
                </div>
                <a href="{{ route('admin.dashboard') }}" class="btn btn-primary float-left mt-3">Назад</a>
                <a href="{{ route('application.create') }}" class="btn btn-primary float-right mt-3">Создать</a>
            </div>
        </div>
    @endsection
    @component('component.dataTable')@endcomponent

