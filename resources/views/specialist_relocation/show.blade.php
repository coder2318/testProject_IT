    @extends('admin.layouts.app')
    @section('content')
        <div class="card m-4">
            <div class="card-body">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Имя</th>
                            <td>{{ $specialist->fio }}</td>
                        </tr>
                        <tr>
                            <th>Профессия</th>
                            <td>{{ $specialist->specialization }}</td>
                        </tr>
                        <tr>
                            <th>Навыки</th>
                            <td>{{ $specialist->skills }}</td>
                        </tr>
                        <tr>
                            <th>Уровень</th>
                            <td>{{ $specialist->prof_level }}</td>
                        </tr>
                        <tr>
                            <th>Телефон номер</th>
                            <td>{{ $specialist->contact_number }}</td>
                        </tr>
                        <tr>
                            <th>Город</th>
                            <td>{{ $specialist->city }}</td>
                        </tr>
                        <tr>
                            <th>Ссылка на портфолио</th>
                            <td>{{ $specialist->link_portfolio }}</td>
                        </tr>
                        <tr>
                            <th>Нуждаетесь ли Вы в трудоустройстве?</th>
                            <td>{{ $specialist->employment }}</td>
                        </tr>
                        <tr>
                            <th>Резюме</th>
                            <td><a href="{{ asset("$specialist->file") }}" target="_blank"><i
                                        class="fas fa-file-download fa-2xl"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <a href="{{ route('specialist-relocation.index') }}" class="btn btn-primary float-left mt-3">Назад</a>
            </div>
        </div>
    @endsection
