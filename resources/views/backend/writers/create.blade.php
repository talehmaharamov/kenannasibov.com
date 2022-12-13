@extends('master.backend')
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">@lang('backend.add-new-writer')</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 ">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('backend.writers.store') }}" method="POST"
                                      class="custom-validation" novalidate="" enctype="multipart/form-data">
                                    @csrf
                                    @if(session()->has('message'))
                                        <div class="alert alert-success">
                                            {{ session()->get('message') }}
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
                                                   data-parsley-minlength="6" placeholder="Taleh Maharramov">
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label>@lang('backend.email'):</label>
                                        <div>
                                            <input type="text" name="email" class="form-control" required=""
                                                   data-parsley-minlength="6" placeholder="example@site.com">
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label>@lang('backend.password'):</label>
                                        <div>
                                            <input type="password" name="password" class="form-control" required=""
                                                   data-parsley-minlength="6" placeholder="@lang('backend.password')">
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label>@lang('backend.cnew-password'):</label>
                                        <div>
                                            <input type="password" name="password_confirmation" class="form-control" required=""
                                                   data-parsley-minlength="6" placeholder="@lang('backend.cnew-password')">
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
