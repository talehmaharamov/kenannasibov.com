@extends('master.backend')
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">@lang('backend.languages')</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 ">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('backend.site-languages.store') }}" method="POST"
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
                                                   data-parsley-minlength="6" placeholder="Azərbaycan,English,Русский">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label>@lang('backend.code'):</label>
                                        <div>
                                            <input type="text" name="code" class="form-control" required=""
                                                   data-parsley-minlength="6" placeholder="az,en,ru">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label>@lang('backend.icon'):</label>
                                        <div>
                                            <input type="file" name="icon" class="form-control" required="">
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
