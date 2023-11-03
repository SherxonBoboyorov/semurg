@extends('layouts.admin')

@section('content')
    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Add</h4>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <form action="{{ route('history.store') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-4">
                                <label for="active_year">Active Year</label>
                                <input type="text" id="active_year" class="form-control" name="active_year">
                                @if($errors->has('active_year'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('active_year') }}
                                    </div>
                                @endif
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-4">
                                <label for="year">Year</label>
                                <input type="text" id="year" class="form-control" name="year">
                                @if($errors->has('year'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('year') }}
                                    </div>
                                @endif
                            </div>
                        </div>



                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-12">
                                <label for="content_uz">Content [Uzbek]</label>
                                <textarea name="content_uz" class="my-editor" id="content_uz" cols="30" rows="10"></textarea>
                                @if($errors->has('content_uz'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{ $errors->first('content_uz') }}
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-12">
                                <label for="content_ru">Content [Russian]</label>
                                <textarea name="content_ru" class="my-editor" id="content_ru" cols="30" rows="10"></textarea>
                                @if($errors->has('content_ru'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{ $errors->first('content_ru') }}
                                </div>
                                @endif
                            </div>
                        </div>
    
                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-12">
                                <label for="content_en">Content [English]</label>
                                <textarea name="content_en" class="my-editor" id="content_en" cols="30" rows="10"></textarea>
                                @if($errors->has('content_en'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{ $errors->first('content_en') }}
                                </div>
                                @endif
                            </div>
                        </div><br>

                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success btn-block">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection
@section('custom_js')
@component('admin.utils.tinymce')@endcomponent
@endsection

