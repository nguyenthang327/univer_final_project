@extends('Backend.Admin.Layout.master')
@section('title',trans('language.create_new_customer'))

@section('breadcrumb')
    <li class="nav-item d-none d-sm-inline-block">
        <a class="nav-link title">{{ trans('language.customer_management') }}</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
        <a class="nav-link title">{{ trans('language.create_new_customer') }}</a>
    </li>
@endsection


@section('css_library')
    @include('Backend.LibraryGroup.style-library', ['datepicker' => true, 'icheck' => true, 'select2' => true])
@stop

@section('css_page')
    <link rel="stylesheet" href="{{ asset("common/css/profile.css") }}">
@stop

@section('content')
    <section class="content pb-4 pt-3">
        <div class="container-fluid">
            @include('Backend.Admin.Customer.partials.form-customer-information',[
                    'action' => route('admin.customer.store'),
                    'method' => 'POST',
                ]
            )
        </div>
    </section>
@stop

@section('js_library')
    @include('Backend.LibraryGroup.script-library', ['datepicker' => true, 'select2' => true])
@stop
