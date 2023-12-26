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
        <form action="{{ route('insuranceproduct.update', $insuranceproduct->id) }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-body">
                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-3">
                            <label for="insurancecategory_id">Insurance Categories</label>
                            <select name="insurancecategory_id" id="insurancecategory_id" class="form-control">
                                @foreach ($insurancecategory as $insurancecategory)
                                <option @if($insurancecategory->id == $insuranceproduct->insurancecategory_id) selected @endif value="{{ $insurancecategory->id }}">{{ $insurancecategory->title_en }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('insurancecategory_id'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('insurancecategory_id') }}
                            </div>
                            @endif
                        </div>
                    </div><br>

                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-4">
                            <label for="title_uz">Title [Uzbek]</label>
                            <input type="text" id="title_uz" value="{{ $insuranceproduct->title_uz }}" class="form-control" name="title_uz">
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
                            <input type="text" id="title_ru" value="{{ $insuranceproduct->title_ru }}" class="form-control" name="title_ru">
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
                            <input type="text" id="title_en" value="{{ $insuranceproduct->title_en }}" class="form-control" name="title_en">
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

                     <div class="row" style="display: none; margin-top: 15px">
                        <div class="col-md-3">
                            <label for="attribute">Attribute</label>
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
                        <div class="col-md-4">
                            <label for="content_uz">Content Left [Uzbek]</label>
                            <textarea name="content_uz" class="my-editor" id="content_uz" cols="30" rows="10">{{ $insuranceproduct->content_uz }}</textarea>
                            @if($errors->has('content_uz'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('content_uz') }}
                            </div>
                            @endif
                        </div>
                        <div class="col-md-4">
                            <label for="content_ru">Content Left [Russian]</label>
                            <textarea name="content_ru" class="my-editor" id="content_ru" cols="30" rows="10">{{ $insuranceproduct->content_ru }}</textarea>
                            @if($errors->has('content_ru'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('content_ru') }}
                            </div>
                            @endif
                        </div>

                        <div class="col-md-4">
                            <label for="content_en">Content Left [English]</label>
                            <textarea name="content_en" class="my-editor" id="content_en" cols="30" rows="10">{{ $insuranceproduct->content_en }}</textarea>
                            @if($errors->has('content_en'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('content_en') }}
                            </div>
                            @endif
                        </div>
                    </div><br><hr>


                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-4">
                            <label for="content_right_uz">Content Right [Uzbek]</label>
                            <textarea name="content_right_uz" class="my-editor" id="content_right_uz" cols="30" rows="10">{{ $insuranceproduct->content_right_uz }}</textarea>
                            @if($errors->has('content_right_uz'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('content_right_uz') }}
                            </div>
                            @endif
                        </div>
                        <div class="col-md-4">
                            <label for="content_right_ru">Content Right [Russian]</label>
                            <textarea name="content_right_ru" class="my-editor" id="content_right_ru" cols="30" rows="10">{{ $insuranceproduct->content_right_ru }}</textarea>
                            @if($errors->has('content_right_ru'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('content_right_ru') }}
                            </div>
                            @endif
                        </div>

                        <div class="col-md-4">
                            <label for="content_right_en">Content Right [English]</label>
                            <textarea name="content_right_en" class="my-editor" id="content_right_en" cols="30" rows="10">{{ $insuranceproduct->content_right_en }}</textarea>
                            @if($errors->has('content_right_en'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('content_right_en') }}
                            </div>
                            @endif
                        </div>
                    </div><br>



                    <h1>Banner</h1>

                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-6">
                            <label for="icon">Banner Image</label>
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
                        <div class="col-md-6">
                            <img src="{{ asset($insuranceproduct->icon) }}" width="150" height="150" alt="">
                        </div>
                    </div><br>

                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-6">
                            <label for="banner_text_ru">Banner Title RU</label>
                            <textarea name="banner_text_ru" class="form-control" id="banner_text_ru" cols="30" rows="5">{{ $insuranceproduct->banner_text_ru }}</textarea>
                            @if($errors->has('banner_text_ru'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('banner_text_ru') }}
                            </div>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="banner_content_ru">Banner Description RU</label>
                            <textarea name="banner_content_ru" class="form-control" id="banner_content_ru" cols="30" rows="5">{{ $insuranceproduct->banner_content_ru }}</textarea>
                            @if($errors->has('banner_content_ru'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('banner_content_ru') }}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-6">
                            <label for="banner_text_uz">Banner Title UZ</label>
                            <textarea name="banner_text_uz" class="form-control" id="banner_text_uz" cols="30" rows="5">{{ $insuranceproduct->banner_text_uz }}</textarea>
                            @if($errors->has('banner_text_uz'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('banner_text_uz') }}
                            </div>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="banner_content_uz">Banner Description UZ</label>
                            <textarea name="banner_content_uz" class="form-control" id="banner_content_uz" cols="30" rows="5">{{ $insuranceproduct->banner_content_uz }}</textarea>
                            @if($errors->has('banner_content_uz'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('banner_content_uz') }}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-6">
                            <label for="banner_text_en">Banner Title EN</label>
                            <textarea name="banner_text_en" class="form-control" id="banner_text_en" cols="30" rows="5">{{ $insuranceproduct->banner_text_en }}</textarea>
                            @if($errors->has('banner_text_en'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('banner_text_en') }}
                            </div>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="banner_content_en">Banner Description EN</label>
                            <textarea name="banner_content_en" class="form-control" id="banner_content_en" cols="30" rows="5">{{ $insuranceproduct->banner_content_en }}</textarea>
                            @if($errors->has('banner_content_en'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('banner_content_en') }}
                            </div>
                            @endif
                        </div>
                    </div><br>


                    <div class="form-check">
                        <input name="order" class="form-check-input" type="checkbox" value="1" id="flexCheckChecked" >
                        <label class="form-check-label" for="flexCheckChecked">
                         Home page
                        </label>
                      </div><br><br>


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
                            <img src="{{ asset($insuranceproduct->image) }}" width="150" height="150" alt="">
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

    </div><!-- container -->

</div>
@endsection
@section('custom_js')
@component('admin.utils.tinymce')@endcomponent
@endsection

