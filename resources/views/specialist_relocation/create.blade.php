@extends('layouts.layout')

@section('content')
    <section class="d-flex align-items-center justify-content-center " style="background-color: lightgray">

        <div class="container mt-5">
            <div class="card" style="max-width: 60%; margin: 10px auto">
                <div class="card-body">
                    <div class="" style="text-align: center; font-size: 24px; font-weight: bold">@lang('form.relocation')</div>
                    <form class="form-group" action="{{route('specialist-relocation.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="fio" class="mb-2 mt-3"><b>@lang('form.fio')</b></label>
                        <span style="color: #b02a37; font-weight: bold">* {{$errors->first('fio')}}</span>
                        <input id="fio" class="form-control p-2 ps-3" type="text" style="border-radius: 10px" name="fio" value="{{old('fio')}}">

                        <label for="specialization" class="mb-2 mt-3"><b>@lang('form.profession')</b></label>
                        <span style="color: #b02a37; font-weight: bold">* {{$errors->first('specialization')}}</span>
                        <input id="specialization" class="form-control p-2 ps-3" type="text" style="border-radius: 10px" name="specialization" value="{{old('specialization')}}">

                        <label for="skills" class="mb-2 mt-3"><b>@lang('form.skills')</b></label>
                        <span style="color: #b02a37; font-weight: bold">* {{$errors->first('skills')}}</span>
                        <input id="skills" class="form-control p-2 ps-3" type="text" style="border-radius: 10px" name="skills" value="{{old('skills')}}">

                        <label for="prof_level" class="mb-2 mt-3"><b>@lang('form.level')</b></label>
                        <span style="color: #b02a37; font-weight: bold">* {{$errors->first('prof_level')}}</span>
                        <select class="form-control p-2 ps-3" name="prof_level" id="prof_level">
                            <option value="Junior">@lang('form.junior')</option>
                            <option value="Middle">@lang('form.middle')</option>
                            <option value="Senior">@lang('form.senior')</option>
                        </select>

                        <label for="link_portfolio" class="mb-2 mt-3"><b>@lang('form.portfolio')</b></label>
                        <input id="link_portfolio" class="form-control p-2 ps-3" type="text" style="border-radius: 10px" name="link_portfolio" value="{{old('link_portfolio')}}">

                        <label for="contact_number" class="mb-2 mt-3"><b>@lang('form.phone')</b></label>
                        <span style="color: #b02a37; font-weight: bold">* {{$errors->first('contact_number')}}</span>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text p-2 ps-3" id="basic-addon1">+</span>
                            </div>
                            <input id="contact_number" class="form-control p-2 ps-3" type="number" aria-describedby="basic-addon1" style="border-radius: 0 10px 10px 0" name="contact_number" value="{{old('contact_number')}}">
                        </div>

                        <label for="city" class="mb-2 mt-3"><b>@lang('form.city')</b></label>
                        <span style="color: #b02a37; font-weight: bold">* {{$errors->first('city')}}</span>
                        <input id="city" class="form-control p-2 ps-3" type="text" style="border-radius: 10px" name="city" value="{{old('city')}}">

                        <label for="employment" class="mb-2 mt-3"><b>@lang('form.employment')</b></label>
                        <span style="color: #b02a37; font-weight: bold">* {{$errors->first('employment')}}</span>
                        <select class="form-control p-2 ps-3" name="employment" id="employment">
                            <option value="Yes">@lang('form.yes')</option>
                            <option value="No">@lang('form.no')</option>
                            <option value="other">@lang('form.other')</option>
                        </select>

                        <div id="employment_hide" class="mt-2">
                            <label for="" class="mb-2 mt-3"><b></b></label>
                            <span style="color: #b02a37; font-weight: bold">* {{$errors->first('employment_other')}}</span>
                            <input  class="form-control p-2 ps-3" type="text" style="border-radius: 10px" name="employment_other" value="{{old('employment_other')}}">
                        </div>

                        <label for="file" class="mb-2 mt-3"><b>@lang('form.resume')</b></label>
                        <span style="color: #b02a37; font-weight: bold">* {{$errors->first('file')}}</span>
                        <input id="file" class="form-control p-2 ps-3" type="file" style="border-radius: 10px" name="file" value="{{old('file')}}">

                        <input type="submit" class="btn btn-outline-success mt-4" value="Сохранить">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" >
        $(function() {
            $('#employment_hide').hide();
            $('#employment').change(function(){
                if($('#employment').val() == 'other') {
                    $('#employment_hide').show();
                } else {
                    $('#employment_hide').hide();
                }
            });
        });
    </script>
@endsection
