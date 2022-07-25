@extends('layouts.layout')

@section('content')
    <section class="d-flex align-items-center justify-content-center " style="background-color: lightgray">

        <div class="container mt-5">
            <div class="card" style="max-width: 60%; margin: 10px auto">
                <div class="card-body">
                    <div class="" style="text-align: center; font-size: 24px; font-weight: bold">@lang('form.visa')</div>
                    <form class="form-group" action="{{ route('specialist-visa.store') }}" method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        <label for="fio" class="mb-2 mt-3"><b>@lang('form.fio')</b></label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('fio') }}</span>
                        <input id="fio" class="form-control p-2 ps-3" type="text" style="border-radius: 10px" name="fio"
                               value="{{ old('fio') }}">

                        <label for="date_birth" class="mb-2 mt-3"><b>@lang('form.date_birth')</b></label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('date_birth') }}</span>
                        <input id="date_birth" class="form-control p-2 ps-3" type="text" style="border-radius: 10px"
                               name="date_birth" value="{{ old('date_birth') }}">
                        <div>
                            <label for="sex" class="mb-2 mt-3"><b>@lang('form.sex')</b></label>
                            <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('sex') }}</span>
                            <div>
                                <input id="man" type="radio" name="sex" value="man" checked>
                                <label for="man">@lang('form.man')</label>

                                <input id="woman" type="radio" name="sex" value="woman">
                                <label for="woman">@lang('form.woman')</label>
                            </div>
                        </div>
                        <label for="citizen" class="mb-2 mt-3"><b>@lang('form.citizen')</b></label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('citizen') }}</span>
                        <input id="citizen" class="form-control p-2 ps-3" type="text" style="border-radius: 10px"
                               name="citizen" value="{{ old('citizen') }}">

                        <label for="passport_number" class="mb-2 mt-3"><b>@lang('form.passport_number')</b></label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('passport_number') }}</span>
                        <input id="passport_number" class="form-control p-2 ps-3" type="text" style="border-radius: 10px"
                               name="passport_number" value="{{ old('passport_number') }}">

                        <label for="passport_date" class="mb-2 mt-3"><b>@lang('form.passport_date')</b></label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('passport_date') }}</span>
                        <input id="passport_date" class="form-control p-2 ps-3" type="text" style="border-radius: 10px"
                               name="passport_date" value="{{ old('passport_date') }}">

                        <label for="passport_expire" class="mb-2 mt-3"><b>@lang('form.passport_expire')</b></label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('passport_expire') }}</span>
                        <input id="passport_expire" class="form-control p-2 ps-3" type="text" style="border-radius: 10px"
                               name="passport_expire" value="{{ old('passport_expire') }}">

                        <div>
                            <label for="file4" class="mb-2 mt-3"><b>@lang('form.passport_copy')</b></label>
                            <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('file4') }}</span>
                            <input type="button" id="loadFileXml" value="{{ __('form.upload') }}"
                                   onclick="document.getElementById('file4').click();" />
                            <input type="file" style="display:none;" id="file4" name="file4" onchange="Filevalidation('file4')" />
                            <p id="size"></p>
                            <label class=selected>@lang('form.no_choosen')</label>
                        </div>

                        <div>
                            <label for="file5" class="mb-2 mt-3"><b>@lang('form.photo')</b></label>
                            <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('file5') }}</span>
                            <input type="button" id="loadFileXml" value="{{ __('form.upload') }}"
                                   onclick="document.getElementById('file5').click();" />
                            <input type="file" style="display:none;" id="file5" name="file5" onchange="Filevalidation('file5')" />
                            <label class=selected>@lang('form.no_choosen')</label>
                            <br><i class="text-muted">
                                <b>@lang('form.one_photo')</b><br>
                                @lang('form.photo_requirement')
                                <br>
                                @lang('form.background_white') <br>
                                @lang('form.photo_month') <br>
                                @lang('form.photo_color') <br>
                                @lang('form.photo_size') <br>
                                @lang('form.photo_head') <br>
                                @lang('form.photo_sunglasses') <br>
                                @lang('form.photo_wear')
                                <br>
                                @lang('form.photo_eye')
                                <br>
                                @lang('form.photo_hair')
                            </i>
                        </div>

                        <label for="adress" class="mb-2 mt-3"><b>@lang('form.adress')</b></label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('adress') }}</span>
                        <input id="adress" class="form-control p-2 ps-3" type="text" style="border-radius: 10px"
                               name="adress" value="{{ old('adress') }}">

                        <label for="phone" class="mb-2 mt-3"><b>@lang('form.phone')</b></label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('phone') }}</span>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text p-2 ps-3" id="basic-addon1">+</span>
                            </div>
                            <input id="phone" class="form-control p-2 ps-3" type="number" aria-describedby="basic-addon1"
                                   style="border-radius: 0 10px 10px 0" name="phone" value="{{ old('phone') }}">
                        </div>

                        <label for="additional_phone" class="mb-2 mt-3"><b>@lang('form.additional_phone')</b></label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('additional_phone') }}</span>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text p-2 ps-3" id="basic-addon1">+</span>
                            </div>
                            <input id="additional_phone" class="form-control p-2 ps-3" type="number"
                                   aria-describedby="basic-addon1" style="border-radius: 0 10px 10px 0" name="additional_phone"
                                   value="{{ old('additional_phone') }}">
                        </div>
                        <h5>@lang('form.title_reletion')</h5>
                        <label for="reletion_level" class="mb-2 mt-3"><b>@lang('form.reletion_level')</b></label>
                        <input id="reletion_level" class="form-control p-2 ps-3" type="text" style="border-radius: 10px"
                               name="reletion_level[]" value="">

                        <label for="reletion_fio" class="mb-2 mt-3"><b>@lang('form.reletion_fio')</b></label>
                        <input id="reletion_fio" class="form-control p-2 ps-3" type="text" style="border-radius: 10px"
                               name="reletion_fio[]" value="">

                        <label for="reletion_birth" class="mb-2 mt-3"><b>@lang('form.reletion_birth')</b></label>
                        <input id="reletion_birth" class="form-control p-2 ps-3" type="text" style="border-radius: 10px"
                               name="reletion_birth[]" value="">

                        <label for="reletion_citizen" class="mb-2 mt-3"><b>@lang('form.reletion_citizen')</b></label>
                        <input id="reletion_citizen" class="form-control p-2 ps-3" type="text" style="border-radius: 10px"
                               name="reletion_citizen[]" value="">

                        <div>
                            <label for="file6" class="mb-2 mt-3"><b>@lang('form.reletion_passport_copy')</b></label>
                            <input type="button" id="loadFileXml" value="{{ __('form.upload') }}"
                                   onclick="document.getElementById('file6').click();" />
                            <input type="file" style="display:none;" id="file6" name="file6[]" onchange="Filevalidation('file6')" />
                            <label class=selected>@lang('form.no_choosen')</label>
                        </div>
                        <div class="newElement"></div>
                        <div id="addElement">
                            <span>
                                <label for="addElement">@lang('form.add_reletion')</label><input
                                    style="border-radius: 15px; border-width:1px; margin-left:7px" type="button"
                                    value="+" />
                            </span>
                        </div>
                        <label for="company_name" class="mb-2 mt-3"><b>@lang('form.company_name')</b></label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('company_name') }}</span>
                        <input id="company_name" class="form-control p-2 ps-3" type="text" style="border-radius: 10px"
                               name="company_name" value="{{ old('company_name') }}">

                        <label for="adress_specialist" class="mb-2 mt-3"><b>@lang('form.adress_specialist')</b></label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('adress_specialist') }}</span>
                        <input id="adress_specialist" class="form-control p-2 ps-3" type="text" style="border-radius: 10px"
                               name="adress_specialist" value="{{ old('adress_specialist') }}">

                        <label for="phone_specialist" class="mb-2 mt-3"><b>@lang('form.phone_specialist')</b></label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('phone_specialist') }}</span>
                        <input id="phone_specialist" class="form-control p-2 ps-3" type="text" style="border-radius: 10px"
                               name="phone_specialist" value="{{ old('phone_specialist') }}">

                        <div>
                            <label for="income_year" class="mb-2 mt-3"><b>@lang('form.income_year')</b></label>
                            <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('file') }}</span>
                            <input type="button" id="loadFileXml" value="{{ __('form.upload') }}"
                                   onclick="document.getElementById('file').click();" />
                            <input type="file" style="display:none;" id="file" name="file" onchange="Filevalidation('file')" />
                            <label class=selected>@lang('form.no_choosen')</label>
                        </div>
                        <div>
                            <label for="diplom" class="mb-2 mt-3"><b>@lang('form.diplom')</b></label>
                            <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('file2') }}</span>
                            <input type="button" id="loadFileXml" value="{{ __('form.upload') }}"
                                   onclick="document.getElementById('file2').click();" />
                            <input type="file" style="display:none;" id="file2" name="file2" onchange="Filevalidation('file2')" />
                            <label class=selected>@lang('form.no_choosen')</label>
                        </div>
                        <div>
                            <label for="application" class="mb-2 mt-3"><b>@lang('form.application_specialist')</b></label>
                            <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('file3') }}</span>
                            <input type="button" id="loadFileXml" value="{{ __('form.upload') }}"
                                   onclick="document.getElementById('file3').click();" />
                            <input type="file" style="display:none;" id="file3" name="file3" title="file3" onchange="Filevalidation('file3')"/>
                            <label class=selected>@lang('form.no_choosen')</label>
                        </div>
                        <label for="applicant_fio" class="mb-2 mt-3"><b>@lang('form.applicant_fio')</b></label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('applicant_fio') }}</span>
                        <input id="applicant_fio" class="form-control p-2 ps-3" type="text" style="border-radius: 10px" name="applicant_fio"
                               value="{{ old('applicant_fio') }}">

                        <label for="applicant_position" class="mb-2 mt-3"><b>@lang('form.applicant_position')</b></label>
                        <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('applicant_position') }}</span>
                        <input id="applicant_position" class="form-control p-2 ps-3" type="text" style="border-radius: 10px"
                               name="applicant_position" value="{{ old('applicant_position') }}">


                        <label for="applicant_phone_number" class="mb-2 mt-3"><b>@lang('form.applicant_phone_number')</b></label>
                        <span style="color: #b02a37; font-weight: bold">*{{ $errors->first('applicant_phone_number') }}</span>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text p-2 ps-3" id="basic-addon1">+</span>
                            </div>
                            <input id="applicant_phone_number" class="form-control p-2 ps-3" type="number" aria-describedby="basic-addon1"
                                   style="border-radius: 0 10px 10px 0" name="applicant_phone_number" value="{{ old('applicant_phone_number') }}">
                        </div>

                        <div>
                            <label for="expire_date" class="mb-2 mt-3"><b>@lang('form.visa_date')</b></label>
                            <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('visa_date') }}</span>
                            <div class="form-group" style="margin-right: 70%">
                                <div style="display: inline-block">
                                    <select class="form-control p-2 ps-3"  id="sel1" name="visa_date">
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                        <option>13</option>
                                        <option>14</option>
                                        <option>15</option>
                                        <option>16</option>
                                        <option>17</option>
                                        <option>18</option>
                                        <option>19</option>
                                        <option>20</option>
                                        <option>21</option>
                                        <option>22</option>
                                        <option>23</option>
                                        <option>24</option>
                                        <option>25</option>
                                        <option>26</option>
                                        <option>27</option>
                                        <option>28</option>
                                        <option>29</option>
                                        <option>30</option>
                                        <option>31</option>
                                        <option>32</option>
                                        <option>33</option>
                                        <option>34</option>
                                        <option>35</option>
                                        <option>36</option>
                                    </select>
                                </div>
                                <div style="display: inline-block">
                                    <span>@lang('form.month')</span>
                                </div>
                            </div>
                            <i class="text-muted">@lang('form.visa_expire')</i>
                        </div>


                        <div>
                            <label for="checkbox"><a @if ( app()->getLocale() == 'ru') href="{{ asset('files/conditions.pdf') }}" @else href="{{ asset('files/conditions_en.pdf') }}"
                                                     @endif  target="_blank">@lang('form.terms_conditions')</a></label>
                            <span style="color: #b02a37; font-weight: bold">* {{ $errors->first('conditions') }}</span>
                            <input style="margin-left:5px" id="checkbox" type="checkbox" name="conditions">
                        </div>
                        <input type="submit" class="btn btn-outline-success mt-4" value="{{ __('form.save') }}">
                        <label style="display:none" id="lable">{{ __('form.choosen') }}</label>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
        $("#addElement").click(function() {
            var id = new Date().getTime();
            $('.newElement').add('<label for="reletion_level" class="mb-2 mt-3"><b>@lang("form.reletion_level")</b></label>' +
                '<span style="color: #b02a37; font-weight: bold">* {{ $errors->first('reletion_level') }}</span>' +
                '<input id="reletion_level" class="form-control p-2 ps-3" type="text" style="border-radius: 10px" name="reletion_level[]" value="">' +
                '<label for="reletion_fio" class="mb-2 mt-3"><b>@lang("form.reletion_fio")</b></label>' +
                '<span style="color: #b02a37; font-weight: bold">* {{ $errors->first('reletion_fio') }}</span>' +
                '<input id="reletion_fio" class="form-control p-2 ps-3" type="text" style="border-radius: 10px" name="reletion_fio[]" value="">' +
                '<label for="reletion_birth" class="mb-2 mt-3"><b>{{ __('form.reletion_birth') }}</b></label>' +
                '<span style="color: #b02a37; font-weight: bold">* {{ $errors->first('reletion_birth') }}</span>' +
                '<input id="reletion_birth" class="form-control p-2 ps-3" type="text" style="border-radius: 10px"name="reletion_birth[]" value="">' +
                '<label for="reletion_citizen" class="mb-2 mt-3"><b>{{ __('form.reletion_citizen') }}</b></label>' +
                '<span style="color: #b02a37; font-weight: bold">* {{ $errors->first('reletion_citizen') }}</span>' +
                '<input id="reletion_citizen" class="form-control p-2 ps-3" type="text" style="border-radius: 10px" name="reletion_citizen[]" value="">' +
                '<div><label for="file6" class="mb-2 mt-3"><b>{{ __('form.reletion_passport_copy') }}</b></label>' +
                '<span style="color: #b02a37; font-weight: bold">* {{ $errors->first('file6') }}</span>' +
                '<input type="button" id="loadFileXml" value="{{ __('form.upload') }}" onclick="document.getElementById('+id+').click();" ><input type="file" style="display:none;" id="' + id + '" name="file6[]" >' +
                '<label class=selected>@lang('form.no_choosen')</label>' +
                '</div>').insertBefore("#addElement");

        });

        $(document).ready(function() {
            var filename3 = $('#lable').text();
            $(document).delegate("input:file", "change", function() {
                console.log($(this).parent().find('.selected').html(filename3));
            });

            $('textarea').val($('textarea').val().trim());

        });
    </script>
@endsection
<script>

    Filevalidation = (file_name) => {
        const fi = document.getElementById(file_name);
        // Check if any file is selected.
        if (fi.files.length > 0) {
            for (let i = 0; i <= fi.files.length - 1; i++) {

                const fsize = fi.files.item(i).size;
                const file = Math.round((fsize / 1024));
                // The size of the file.
                if (file >= 5096) {
                    alert("Файл слишком большой, пожалуйста, выберите файл размером менее 5 МБ");
                    fi.value = null
                }
            }
        }
    }


</script>
