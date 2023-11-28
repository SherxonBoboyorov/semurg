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

        <!-- end page title end breadcrumb -->
        <form action="{{ route('headerkacko.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="card">
                <div class="card-body">
                         <div class="row" style="margin-top: 15px">
                            <div class="col-md-4">
                                <label for="title_uz">Title [Uzbek]</label>
                                <input type="text" id="title_uz" class="form-control" name="title_uz">
                                @if($errors->has('title_uz'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{ $errors->first('title_uz') }}
                                </div>
                                @endif
                            </div>
                            <div class="col-md-4">
                                <label for="title_ru">Title [Russian]</label>
                                <input type="text" id="title_ru" class="form-control" name="title_ru">
                                @if($errors->has('title_ru'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{ $errors->first('title_ru') }}
                                </div>
                                @endif
                            </div>
                            <div class="col-md-4">
                                <label for="title_en">Title [English]</label>
                                <input type="text" id="title_en" class="form-control" name="title_en">
                                @if($errors->has('title_en'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{ $errors->first('title_en') }}
                                </div>
                                @endif
                            </div>
                         </div><br>

                         <div class="row">
                            <div class="col-md-3">
                                <label>Attribute</label>
                                <select name="attribute" id="attribute" class="form-control">
                                    <option value="{{ 'class="half half1" data-aos="slide-left"' }}">1</option>
                                    <option value="{{ 'class="full full1" data-aos="slide-right"' }}">2</option>
                                </select>
                                @if($errors->has('attribute'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{ $errors->first('attribute') }}
                                </div>
                                @endif
                            </div>
                         </div><br>

                         <div class="row" style="margin-top: 15px">
                          <div class="col-md-12">
                            <label for="link">Link</label>
                            <input type="text" id="link" class="form-control" name="link">
                            @if($errors->has('link'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{ $errors->first('link') }}
                                </div>
                            @endif
                        </div>
                    </div><br>


                         <div class="row" style="margin-top: 15px">
                            <div class="col-md-6">
                                <label for="image">Icon</label>
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
                        </div><br>

                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-6">
                                <label for="icon">Image</label>
                                <input type="file" name="icon" class="form-control-file">
                                @if($errors->has('icon'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('icon') }}
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
            </div>
        </form>

    </div><!-- container -->

</div>
@endsection
@section('custom_js')
@component('admin.utils.tinymce')@endcomponent
@endsection

