@extends('frontend.layouts.master')
@section('title', trans('language.update_info'))

@section('css_library')
    @include('backend.libraryGroup.style-library', ['datepicker' => true, 'icheck' => true, 'select2' => true])
@stop

@section('css_page')
    <link rel="stylesheet" href="{{ asset("common/css/profile.css") }}">
@stop

@section('content')
    <main>
        <!-- breadcrumb-area -->
        @include('frontend.layouts.breadcrumb', [
            'title' => trans('language.self_info'),
            'breadcrumbItem' => trans('language.self_info'),
        ])
        <!-- breadcrumb-area-end -->

        <!-- shop-cart-area -->
        <section class="shop-cart-area wishlist-area pt-100 pb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <form method="POST" enctype="multipart/form-data" action="{{ route('customer.update')}}">
                        @if (isset($method))
                            @method($method)
                        @endif
                        @csrf
                        <div class="row">
                            <div class="col-xl-10 theia-content">
                                <div class="card mb-1">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label for="">{{ trans('language.avatar') }}</label>
                                                    <div class="text-center">
                                                        <div class="form-image">
                                                            <img src="{{ asset('storage/'. $customer->avatar) }}"
                                                                onerror="this.onerror=null;this.src='{{ asset('images/no-image.png') }}';"
                                                                class="form-image__view" id="avatar_view"
                                                                alt="preview image">
                                                            <input type="file" class="form-image__file" id="avatar"
                                                                accept=".png, .jpg, .jpeg, .gif"
                                                                data-origin="{{ isset($customer) ? asset('storage/'. $customer->avatar) : asset('images/user-default.png') }}"
                                                                name="avatar"
                                                                {{ isset($deleted) && $deleted == true ? 'disabled' : '' }}>
                                                            <label for="avatar" class="form-image__label"><i
                                                                    class="fas fa-pen"></i></label>
                                                        </div>
                                                        @if ($errors->first('avatar'))
                                                            <div class="invalid-alert text-danger">
                                                                {{ $errors->first('avatar') }}</div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <p>{{trans('language.email')}}: <span>{{$customer->email}}</span></p>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="">{{ trans('language.first_name') }} <span
                                                                    class="fe-primary-color">*</span></label>
                                                            <input type="text"
                                                                class="form-control {{ $errors->first('first_name') ? 'is-invalid' : '' }}"
                                                                name="first_name"
                                                                placeholder="{{ trans('language.enter_first_name') }}" required
                                                                value="{{ old('first_name') ? old('first_name') : (isset($customer->first_name) ? $customer->first_name : '') }}">
                                                            @if ($errors->first('first_name'))
                                                                <div class="invalid-alert text-danger">
                                                                    {{ $errors->first('first_name') }}</div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="">{{ trans('language.last_name') }} <span
                                                                    class="fe-primary-color">*</span></label>
                                                            <input type="text"
                                                                class="form-control {{ $errors->first('last_name') ? 'is-invalid' : '' }}"
                                                                name="last_name"
                                                                placeholder="{{ trans('language.enter_last_name') }}" required
                                                                value="{{ old('last_name') ? old('last_name') : (isset($customer->last_name) ? $customer->last_name : '') }}">
                                                            @if ($errors->first('last_name'))
                                                                <div class="invalid-alert text-danger">
                                                                    {{ $errors->first('last_name') }}</div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="">{{ trans('language.birthday') }}</label>
                                                            <label class="input-group mb-0 ">
                                                                <input type="text"
                                                                    class="form-control {{ $errors->first('birthday') ? 'is-invalid' : '' }}"
                                                                    data-picker="date" autocomplete="off" name="birthday"
                                                                    placeholder="{{ trans('language.choose_birthday') }}"
                                                                    value="{{ old('birthday') ? old('birthday') : (isset($customer->birthday) ? (new App\Services\DateFormatService())->dateFormatLanguage($customer->birthday, 'd/m/Y') : '') }}">
        
                                                                <div class="input-group-append">
                                                                    <div class="input-group-text">
                                                                        <span class="far fa-calendar-alt"></span>
                                                                    </div>
                                                                </div>
                                                            </label>
                                                            @if ($errors->first('birthday'))
                                                                <div class="invalid-alert text-danger">
                                                                    {{ $errors->first('birthday') }}</div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="">{{ trans('language.phone') }}</label>
                                                            <label class="input-group mb-0">
                                                                <input type="text"
                                                                    class="form-control {{ $errors->first('phone') ? 'is-invalid' : '' }}"
                                                                    name="phone"
                                                                    placeholder="{{ trans('language.enter_phone') }}"
                                                                    value="{{ old('phone') ? old('phone') : (isset($customer->phone) ? $customer->phone : '') }}">
                                                                <div class="input-group-append">
                                                                    <div class="input-group-text">
                                                                        <span class="fa fa-phone"></span>
                                                                    </div>
                                                                </div>
                                                            </label>
                                                            @if ($errors->first('phone'))
                                                                <div class="invalid-alert text-danger">
                                                                    {{ $errors->first('phone') }}</div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="radioGender1">{{ trans('language.gender') }}</label>
                                                            <br>
                                                            @php
                                                                $genders = trans('language.genders');
                                                                $choose_gender = old('gender') ? old('gender') : (isset($customer->gender) ? $customer->gender : 0);
                                                            @endphp
                                                            @for ($i = 0; $i < count($genders); $i++)
                                                                <div class="icheck-primary d-inline mr-4">
                                                                    <input type="radio" name="gender"
                                                                        id="radioGender{{ $i }}"
                                                                        value="{{ $i }}"
                                                                        {{ $i === $choose_gender ? 'checked' : '' }}>
                                                                    <label for="radioGender{{ $i }}">
                                                                        {{ $genders[$i] }}
                                                                    </label>
                                                                </div>
                                                            @endfor
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="">{{ trans('language.hometown') }}</label>
                                                        <div class="row">
                                                            @php
                                                                $prefectures = \App\Models\Prefecture::orderBy('name')->get();
                                                                $choose_prefecture = old('prefecture_id') ? old('prefecture_id') : (isset($customer->prefecture_id) ? $customer->prefecture_id : '');
                                                                $districts = \App\Models\District::where('prefecture_id', $choose_prefecture)
                                                                    ->orderBy('name')
                                                                    ->get();
                                                                $choose_district = old('district_id') ? old('district_id') : (isset($customer->district_id) ? $customer->district_id : '');
                                                                $communes = \App\Models\Commune::where('district_id', $choose_district)
                                                                    ->orderBy('name')
                                                                    ->get();
                                                                $choose_commune = old('commune_id') ? old('commune_id') : (isset($customer->commune_id) ? $customer->commune_id : '');
                                                            @endphp
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <select
                                                                        class="select2-base dynamic-select-option {{ $errors->first('prefecture_id') ? 'is-invalid' : '' }}"
                                                                        style="width: 100%" data-child="#select_district"
                                                                        data-url="{{ route('getDistrictList') }}"
                                                                        data-placeholder="{{ trans('language.choose_a_prefecture') }}"
                                                                        name="prefecture_id">
                                                                        <option value="" disabled selected
                                                                            style="display: none">
                                                                            {{ trans('language.choose_prefecture') }}</option>
                                                                        @if (isset($prefectures))
                                                                            @foreach ($prefectures as $prefecture)
                                                                                <option value="{{ $prefecture->id }}"
                                                                                    {{ $choose_prefecture == $prefecture->id ? 'selected' : '' }}>
                                                                                    {{ $prefecture->name }}
                                                                                </option>
                                                                            @endforeach
                                                                        @endif
                                                                    </select>
                                                                    @if ($errors->first('prefecture_id'))
                                                                        <div class="invalid-alert text-danger">
                                                                            {{ $errors->first('prefecture_id') }}</div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <select
                                                                        class="select2-base dynamic-select-option {{ $errors->first('district_id') ? 'is-invalid' : '' }}"
                                                                        style="width: 100%" name="district_id"
                                                                        data-child="#select_ward"
                                                                        data-url="{{ route('getCommuneList') }}"
                                                                        id="select_district"
                                                                        data-placeholder="{{ trans('language.choose_a_district') }}">
                                                                        <option value="" disabled selected>
                                                                            {{ trans('language.choose_district') }}</option>
                                                                        @if ($districts)
                                                                            @foreach ($districts as $district)
                                                                                <option value="{{ $district->id }}"
                                                                                    {{ $choose_district == $district->id ? 'selected' : '' }}>
                                                                                    {{ $district->name }}
                                                                                </option>
                                                                            @endforeach
                                                                        @endif
                                                                    </select>
                                                                    @if ($errors->first('district_id'))
                                                                        <div class="invalid-alert text-danger">
                                                                            {{ $errors->first('district_id') }}</div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <select
                                                                        class="select2-base {{ $errors->first('commune_id') ? 'is-invalid' : '' }}"
                                                                        id="select_ward"
                                                                        data-placeholder="{{ trans('language.choose_a_commune') }}"
                                                                        name="commune_id" style="width: 100%">
                                                                        <option value="" disabled selected>
                                                                            {{ trans('language.choose_commune') }}</option>
                                                                        @if ($communes)
                                                                            @foreach ($communes as $commune)
                                                                                <option value="{{ $commune->id }}"
                                                                                    {{ $choose_commune == $commune->id ? 'selected' : '' }}>
                                                                                    {{ $commune->name }}
                                                                                </option>
                                                                            @endforeach
                                                                        @endif
                                                                    </select>
                                                                    @if ($errors->first('commune_id'))
                                                                        <div class="invalid-alert text-danger">
                                                                            {{ $errors->first('commune_id') }}</div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 theia-sidebar">
                                {{-- <div class="card"> --}}
                                    <div class="card-body align-items-start flex-wrap">
                                        <button type="submit" class="btn btn-fe-primary-color mr-2 my-1"><i
                                                class="far fa-save"></i> {{ trans('language.save') }}</button>
                                    </div>
                                {{-- </div> --}}
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </section>
        <!-- shop-cart-area-end -->
    </main>
@stop

@section('js_library')
    @include('backend.libraryGroup.script-library', ['datepicker' => true, 'select2' => true])
@stop

@section('js_page')
    <script src="{{ asset("common/js/common.js") }}"></script>
@stop
