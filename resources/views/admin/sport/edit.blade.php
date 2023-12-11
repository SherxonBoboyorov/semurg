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

            <form action="{{ route('sport.update', $sport->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                            <div class="row" style="margin-top: 15px">
                                <div class="col-md-4">
                                    <label for="name_uz">Name [Uzbek]</label>
                                    <input type="text" id="name_uz" value="{{ $sport->name_uz }}" class="form-control" name="name_uz">
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
                                    <input type="text" id="name_ru" value="{{ $sport->name_ru }}" class="form-control" name="name_ru">
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
                                    <input type="text" id="name_en" value="{{ $sport->name_en }}" class="form-control" name="name_en">
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
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success btn-block">Update</button>
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

