@extends('layouts.admin')

@section('content')
<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Edit</h4>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <!-- end page title end breadcrumb -->
        <form action="{{ route('leadership.update', $leadership->id) }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-body">
                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-4">
                            <label for="name_uz">Name [Uzbek]</label>
                            <input type="text" id="name_uz" value="{{ $leadership->name_uz }}" class="form-control" name="name_uz">
                            @if($errors->has('name_uz'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('name_uz') }}
                            </div>
                            @endif
                        </div>
                        <div class="col-md-4">
                            <label for="name_ru">Name [Russian]</label>
                            <input type="text" id="name_ru" value="{{ $leadership->name_ru }}" class="form-control" name="name_ru">
                            @if($errors->has('name_ru'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('name_ru') }}
                            </div>
                            @endif
                        </div>
                        <div class="col-md-4">
                            <label for="name_en">Name [English]</label>
                            <input type="text" id="name_en" value="{{ $leadership->name_en }}" class="form-control" name="name_en">
                            @if($errors->has('name_en'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('name_en') }}
                            </div>
                            @endif
                        </div>
                     </div><br>


                     <div class="row" style="margin-top: 15px">
                        <div class="col-md-3">
                            <label for="job_uz">Job title: [Uzbek]</label>
                            <input type="text" id="job_uz" value="{{ $leadership->job_uz }}" class="form-control" name="job_uz">
                            @if($errors->has('job_uz'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('job_uz') }}
                            </div>
                            @endif
                        </div>
                        </div>
                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-3">
                                <label for="job_ru">Job title: [Russian]</label>
                                <input type="text" id="job_ru" value="{{ $leadership->job_ru }}" class="form-control" name="job_ru">
                                @if($errors->has('job_ru'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{ $errors->first('job_ru') }}
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-3">
                                <label for="job_en">Job title: [English]</label>
                                <input type="text" id="job_en" value="{{ $leadership->job_en }}" class="form-control" name="job_en">
                                @if($errors->has('job_en'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{ $errors->first('job_en') }}
                                </div>
                                @endif
                            </div>
                        </div><br>


                     <div class="row" style="margin-top: 15px">
                        <div class="col-md-12">
                            <label for="content_uz">Content [Uzbek]</label>
                            <textarea name="content_uz" class="my-editor" id="content_uz" cols="30" rows="10">{{ $leadership->content_uz }}</textarea>
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
                            <textarea name="content_ru" class="my-editor" id="content_ru" cols="30" rows="10">{{ $leadership->content_ru }}</textarea>
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
                            <textarea name="content_en" class="my-editor" id="content_en" cols="30" rows="10">{{ $leadership->content_en }}</textarea>
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
                        <div class="col-md-6">
                            <label for="image">Image</label>
                            <input type="file" name="image" class="form-control-file">
                            @if($errors->has('image'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{ $errors->first('image') }}
                                </div>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset($leadership->image) }}" width="150" height="150" alt="">
                        </div>
                    </div><br><br>

                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success btn-block">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div><!-- container -->

</div>
@endsection
@section('custom_js')
@component('admin.utils.tinymce')@endcomponent
@endsection

