@extends('master.backend')
@section('title',__('backend.informations'))
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid ">
            <div class="row justify-content-center">
                <div class="col-xl-7">
                    <div class="card">
                        <div class="card-body">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">@lang('backend.informations'):</h4>
                            </div>
                            <form action="{{ route('backend.my-informations.update',auth()->user()->id) }}" method="POST" class="needs-validation" novalidate="" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="mb-3">
                                    <label>@lang('backend.name') <span class="text-danger">*</span></label>
                                    <input type="text" id="validationCustom" name="name" class="form-control" required="" data-parsley-minlength="6" value="{{ auth()->user()->name }}">
                                    <div class="valid-feedback">
                                        @lang('backend.name') @lang('messages.is-correct')
                                    </div>
                                    <div class="invalid-feedback">
                                        @lang('backend.name') @lang('messages.not-correct')
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label>@lang('backend.email') <span class="text-danger">*</span></label>
                                    <input type="text" id="validationCustom" class="form-control" name="email" required="" data-parsley-minlength="6" value="{{ auth()->user()->email }}">
                                    <div class="valid-feedback">
                                        @lang('backend.email') @lang('messages.is-correct')
                                    </div>
                                    <div class="invalid-feedback">
                                        @lang('backend.email') @lang('messages.not-correct')
                                    </div>
                                </div>
                                <div class="mb-0 text-center">
                                    <div>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                            @lang('backend.submit')
                                        </button>
                                        <a href="{{url()->previous()}}" type="button" class="btn btn-secondary waves-effect">
                                            @lang('backend.cancel')
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-xl-7 ">
                    <div class="card">
                        <div class="card-body">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">@lang('backend.change-password'):</h4>
                            </div>
                            <form action="{{ route('backend.my-informations.store') }}" method="POST" class="needs-validation" novalidate enctype="multipart/form-data">
                                @csrf
                                <input hidden name="id" value="{{ \Illuminate\Support\Facades\Auth::user()->id }}">
                                <div class="mb-3">
                                    <label>@lang('backend.current-password') <span class="text-danger">*</span></label>
                                    <input type="password" name="current-password" class="form-control" required="" data-parsley-minlength="6">
                                    <div class="valid-feedback">

                                    </div>
                                    <div class="invalid-feedback">
                                        @lang('backend.current-password') @lang('messages.not-correct')
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label>@lang('backend.new-password') <span class="text-danger">*</span></label>
                                    <input id="pass2" type="password" name="password" class="form-control" required="" data-parsley-minlength="6">
                                    <div class="valid-feedback">
                                        @lang('backend.new-password') @lang('messages.is-correct')
                                    </div>
                                    <div class="invalid-feedback">
                                        @lang('backend.new-password') @lang('messages.not-correct')
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label>@lang('backend.cnew-password') <span class="text-danger">*</span></label>
                                    <input type="password" name="password_confirmation" class="form-control" data-parsley-equalto="#pass2" required="">
                                    <div class="valid-feedback">
                                        @lang('backend.cnew-password') @lang('messages.is-correct')
                                    </div>
                                    <div class="invalid-feedback">
                                        @lang('backend.cnew-password') @lang('messages.not-correct')
                                    </div>
                                </div>
                                <div class="mb-0 text-center">
                                    <div>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                            @lang('backend.submit')
                                        </button>
                                        <a href="{{url()->previous()}}" type="button" class="btn btn-secondary waves-effect">
                                            @lang('backend.cancel')
                                        </a>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection