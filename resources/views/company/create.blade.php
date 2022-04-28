@extends('layouts.layout')

@section('content')
    <div class="container">
        <form action="{{route('company.store')}}" method="POST">
            <label for="">Company Person FIO</label>
            <input type="text" name="">

        </form>
    </div>
@endsection
