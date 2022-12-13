@extends('master.backend')
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">@lang('backend.informations')</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 ">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('backend.my-informations.update',auth()->user()->id) }}" method="POST"
                                      class="custom-validation" novalidate="" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    @if(session()->has('successMessage'))
                                        <div class="alert alert-success">
                                            {{ session()->get('successMessage') }}
                                        </div>
                                    @endif
                                    @if(session()->has('errorMessage'))
                                        <div class="alert alert-danger">
                                            {{ session()->get('errorMessage') }}
                                        </div>
                                    @endif
                                    <div class="mb-3">
                                        <label>@lang('backend.name'):</label>
                                        <div>
                                            <input type="text" name="name" class="form-control" required=""
                                                   data-parsley-minlength="6" value="{{ auth()->user()->name }}">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label>@lang('backend.email'):</label>
                                        <div>
                                            <input type="text" disabled class="form-control" required=""
                                                   data-parsley-minlength="6" value="{{ auth()->user()->email }}">
                                        </div>
                                    </div>
                                    <div class="mb-0 text-center">
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                @lang('backend.submit')
                                            </button>
                                            <a href="{{url()->previous()}}" type="button"
                                               class="btn btn-secondary waves-effect">
                                                @lang('backend.cancel')
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">@lang('backend.change-password')</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 ">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('backend.my-informations.store') }}" method="POST"
                                      class="custom-validation" novalidate="" enctype="multipart/form-data">
                                    @csrf
                                    @if(session()->has('successPassword'))
                                        <div class="alert alert-success">
                                            {{ session()->get('successPassword') }}
                                        </div>
                                    @endif
                                    @if(session()->has('errorPassword'))
                                        <div class="alert alert-danger">
                                            {{ session()->get('errorPassword') }}
                                        </div>
                                    @endif
                                    <input hidden name="id" value="{{ \Illuminate\Support\Facades\Auth::user()->id }}">
                                    <div class="mb-3">
                                        <label>@lang('backend.current-password'):</label>
                                        <div>
                                            <input type="password" name="current-password" class="form-control"
                                                   required=""
                                                   data-parsley-minlength="6">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label>@lang('backend.new-password'):</label>
                                        <div>
                                            <input type="password" name="password" class="form-control" required=""
                                                   data-parsley-minlength="6">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label>@lang('backend.cnew-password'):</label>
                                        <div>
                                            <input type="password" name="password_confirmation" class="form-control"
                                                   required="">
                                        </div>
                                    </div>
                                    <div class="mb-0 text-center">
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                @lang('backend.submit')
                                            </button>
                                            <a href="{{url()->previous()}}" type="button"
                                               class="btn btn-secondary waves-effect">
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
